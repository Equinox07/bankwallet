<?php

namespace App\Models;

use Emadadly\LaravelUuid\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    use Uuids;

    protected $guarded = [];


    /**
     * Get all of the comments for the Customer
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function accountTypes()
    {
        return $this->hasMany(AccountType::class, 'account_type_id');
    }

    /**
     * Get all of the comments for the Customer
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function accountOption()
    {
        return $this->hasMany(AccountOption::class, 'account_option_id');
    }

    /**
     * Get all of the comments for the Customer
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function accounts()
    {
        return $this->hasMany(Account::class, 'account_id');
    }


    /**
     * Get all of the comments for the Customer
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function branch()
    {
        return $this->belongsTo(Branch::class);
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
