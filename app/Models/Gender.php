<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gender extends Model
{
    use HasFactory;
    protected $primarykey = 'gender_id';
    protected $fillable = [
        'gender_desc'
    ];
}
