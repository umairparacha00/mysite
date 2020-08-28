<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'account_id',
        'username',
        'full_name',
        'email',
        'email_verified_at',
        'last_activity',
        'status',
        'password',
        'cnic',
        'date_of_birth',
        'phone',
        'gender',
        'address',
        'city',
        'state',
        'country',
        'profile_pic',
        'cnic_pic',
        'bank_pic',
        'cnic_file_status',
        'bank_file_status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'account_id' => 'integer',
        'status' => 'boolean',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'email_verified_at',
        'last_activity',
    ];


    public function account()
    {
        return $this->belongsTo(\App\Account::class);
    }
}
