<?php

namespace App\Models;

use Emadadly\LaravelUuid\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    use Uuids;

    protected $guarded = [];


    /**
     * Get the accountOption that owns the Account
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function accountOption()
    {
        return $this->belongsTo(AccountOption::class);
    }

    /**
     * Get the accountOption that owns the Account
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function accountType()
    {
        return $this->belongsTo(AccountType::class);
    }


    /**
     * Get the accountOption that owns the Account
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'user_id');
    }


    /**
     * Get the accountOption that owns the Account
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    /**
     * Get the accountOption that owns the Account
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function approved()
    {
        return $this->belongsTo(User::class, 'approved_by');
    }
}
