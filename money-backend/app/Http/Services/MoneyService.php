<?php
namespace App\Http\Services;
use App\Models\Money;
use App\Http\Saloon\Requests\GetForgeServerRequest;


class MoneyService {

    public function conversorDeMoeda(int $moeda, float $valor) {
        if(Money::COTACOES[$moeda]){
            $cotacao = $this->getCotacao(Money::COTACOES[$moeda]);
            
            $valorTotal = $valor * $cotacao;
            return [
                'moeda' => $moeda,
                'valorTotal' => $valorTotal,
                'cotacao' => $cotacao
            ];
        }
    
    }
    public function getCotacaoDasMoedas($parDeMoedas){
 
        $saloon = new SaloonConnector();

        return $cotacao;
    }

}