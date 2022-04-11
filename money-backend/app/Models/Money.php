<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Money extends Model
{
    use HasFactory;

    CONST COTACOES = [
        'USD-BRL',
        'EUR-BRL',
        'GBP-BRL'];
    // CONST BRLUSD = 'USD-BRL';
    // CONST BRLEUR = 'EUR-BRL';
    // CONST BRLGBP = 'GBP-BRL';


}
