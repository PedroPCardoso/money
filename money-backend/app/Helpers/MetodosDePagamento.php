<?php

namespace App\Helpers;

class MetodosDePagamento
{
    public function pagamentoViaboleto($valor)
    {
        return $valor + ($valor * 0.0145);
    }
    public function pagamentoCartaoDeCredito($valor)
    {
        return $valor + ($valor * 0.0763) ;
    }
    
}