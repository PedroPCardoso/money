<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Money extends Model
{
    use HasFactory;

    CONST COTACOES = [
        'USD'=>'USD-BRL',
        'EUR'=>'EUR-BRL',
        'GBP'=>'GBP-BRL'];

    public static $rules = [
        'moeda' => 'required',
        'valor' => 'required'
    ];
}
