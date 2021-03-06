<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    use HasFactory;

    protected $fillable = [

        'cnpj',
        'name',
        'telephone',
        'cep',
        'address',
        'address_number',
        'state',
        'city'

    ];

}
