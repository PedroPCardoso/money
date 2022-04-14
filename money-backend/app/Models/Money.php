<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Money extends Model
{
    use HasFactory;
    CONST PADRAODECOMPARACAO = 'BRL';
    CONST COTACOES = [
        'USD'=>'USD-BRL',
        'EUR'=>'EUR-BRL',
        'GBP'=>'GBP-BRL'];
    
    CONST BOLETO = 1;
    CONST CARTAO = 2;

    public static $rules = [
        'moeda' => 'required',
        'valor' => 'required',
        'formaDePagamento' => 'required'
    ];


}
