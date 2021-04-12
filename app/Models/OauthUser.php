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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  mixed  $serviceId
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeFindFacebookUser($query, $serviceId)
    {
        return $query->where('service','=',self::FACEBOOK)
            ->where('service_id','=', $serviceId);
    }
}
