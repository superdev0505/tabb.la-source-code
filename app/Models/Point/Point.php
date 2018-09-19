<?php

namespace App\Models\Point;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'points';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['point', 'user_token'];

}