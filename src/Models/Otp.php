<?php

namespace Mewkhaleel\Laravel-otp-mongodb\Otp\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Otp extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'otps';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'identifier', 'token', 'validity'
    ];
}
