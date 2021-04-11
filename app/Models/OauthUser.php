<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OauthUser extends Model
{
    const FACEBOOK = 'facebook';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'service',
        'service_id',
        'access_token',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
