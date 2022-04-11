<?php

namespace App\Helpers;

class Taxa
{
    public function DeConversao ($valor)
    {
        if($valor <= 3000){
            return $valor + ($valor * 0.02);
        }
        else if(3000 <= $valor){

            return $valor + ($valor * 0.01);
        }
    }
    public function pagamentoCartaoDeCredito($valor)
    {
        return $valor + ($valor * 0.0763) ;
    }
    
}