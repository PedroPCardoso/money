<?php
namespace App\Http\Services;
use App\Models\Money;
use App\Http\Saloon\Requests\GetForgeServerRequest;
use App\Http\Integrations\Economia\Requests\CotacoesRequest;

class MoneyService {

    public function conversorDeMoeda(string $moeda, float $valor) {
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
 
        // $saloon = new SaloonConnector();
        $request = new CotacoesRequest(parDeMoedas: $parDeMoedas);
        $cotacao= $request->send()->json()->low;

        return $cotacao;
    }

}