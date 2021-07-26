<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;

    protected $fillable = [

        'company_name',
        'cpf',
        'name',
        'telephone',
        'cep',
        'address',
        'address_number',
        'state',
        'city'

    ];

}
