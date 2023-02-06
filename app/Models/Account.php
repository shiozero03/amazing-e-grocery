<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $primarykey = 'account_id';
    protected $fillable = [
        'role_id',
        'gender_id',
        'first_name',
        'last_name',
        'email',
        'display_picture_link',
        'password',
        'created_at',
        'updated_at'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
