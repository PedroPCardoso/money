<?php

namespace App\Helpers;

class Taxacoes
{
    public static  function pagamentoViaboleto($valor)
    {
        return ($valor * 0.0145);
    }
    
    public static  function pagamentoCartaoDeCredito($valor)
    {
        return ($valor * 0.0763) ;
    }
    
    public static  function deConversao ($valor)
    {
        if($valor <= 3000){
           return ($valor * 0.02);
        }
        else if(3000 < $valor){

            return($valor * 0.01);
        }
    }
    
}