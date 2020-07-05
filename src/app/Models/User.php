<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * @var string
     */
    protected $table = 'users';

    /**
     * @var array
     */
    protected $fillable = ['no','name', 'nickname', 'password', 'email','member_type','gender','phone'];

    /**
     * @var array
     */
    protected $hidden = ['password'];

    /**
     * @var array
     */
    protected $dates = ['updated_at', 'created_at'];
}
