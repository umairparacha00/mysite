<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdPower extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_account_id',
        'name',
        'expires_at',
        'amount',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_account_id' => 'integer',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'expires_at',
    ];


    public function userAccount()
    {
        return $this->belongsTo(\App\UserAccount::class);
    }
}
