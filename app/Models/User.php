<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'user';
    protected $primaryKey = 'id_user';
    public $incrementing = true;
    public $timestamps = false;

    protected $fillable = [
        'nama',
        'email',
        'password',
        'level',
    ];


    protected $hidden = [
        'password',
    ];
}
