<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConstellationFate extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date',
        'constellation',
        'avg_percent',
        'avg_comment',
        'love_percent',
        'love_comment',
        'job_percent',
        'job_comment',
        'wealth_percent',
        'wealth_comment',
    ];

    /**
     * @var string[]
     */
    protected $casts = [
        'date' => 'date'
    ];
}
