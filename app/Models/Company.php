<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'cnpj',
        'name',
        'address',
        'phone',
        'email',
        'responsible_name',
        'responsible_phone',
        'responsible_email'
    ];
}
