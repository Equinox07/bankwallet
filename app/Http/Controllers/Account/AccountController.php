<?php

namespace App\Http\Controllers\Account;

use Carbon\Carbon;
use Keygen\Keygen;
use App\Models\Account;
use App\Models\Customer;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\AccountType;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public $accountType;
    public function __constuct(AccountType $accountType)
    {
        $this->accountType = $accountType;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts = Account::all();

        $activeAccountCount = Customer::count();
        $newCustomersCount = Customer::whereDate('created_at', today())->count();
        return view('pages.customers.index', compact('accounts', 'activeAccountCount', 'newCustomersCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role = Role::findByName('Customer');
        $request['password'] = Hash::make(12345678);
        $request['created_by'] = Auth::user()->id;
        $accountData = $request->only(['account_type_id', 'account_option_id']);
        $customerData = $request->except(['account_type_id', 'account_option_id']);

        $accNumber = $this->generateAccountNumber($request->account_type_id);

        $customer = Customer::create($customerData);

        $customerAcc = Account::create([
            'user_id' => $customer->id,
            'model' => 'Customer',
            'account_number' => $accNumber,
            'account_option_id' => $request->account_option_id,
            'account_type_id' =>  $request->account_type_id,
        ]);

        return redirect()->intended('/account/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function generateAccountNumber($accountType)
    {
        $accGen = AccountType::find($accountType);

        do {
            $accountNumber = Keygen::numeric(11)->prefix($accGen->range)->generate();
        } while (Account::where("account_number", $accountNumber)->count() > 0);

        return $accountNumber;
    }
}
