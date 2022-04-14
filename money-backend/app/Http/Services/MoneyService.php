<?php
namespace App\Http\Services;
use App\Models\Money;
use App\Http\Integrations\Economia\Requests\CotacoesRequest;
use App\Helpers\Taxacoes;
class MoneyService {

    public function conversorDeMoeda(string $moeda, float $valor,string $meioDePagamento) {

        if(Money::COTACOES[$moeda]){
            $cotacao = $this->getCotacaoDasMoedas($moeda);
            $valorDaTaxaDeConversao = Taxacoes::deConversao($valor);
            if(Money::BOLETO==$meioDePagamento){
                $meio = "Boleto";
                $valorDaTaxaDeMeioDePagamento = Taxacoes::pagamentoViaboleto($valor);
            }
            else if(Money::CARTAO==$meioDePagamento){
                $meio = "Cartão de Crédito";
                $valorDaTaxaDeMeioDePagamento = Taxacoes::pagamentoCartaoDeCredito($valor);
            }
            $valorDescontado= $valor -($valorDaTaxaDeConversao + $valorDaTaxaDeMeioDePagamento); 

            $valorTotalComprado = $valorDescontado / $cotacao;
            return [
                'moedaDeOrigem' => Money::PADRAODECOMPARACAO,
                'moedaDeDestino' => $moeda,
                'valorParaConversao' => $valor,
                'meioDePagamento' => $meio,
                'cotacaoAtualDaMoeda' => $cotacao,
                'valorCompradoDaMoeda' => number_format($valorTotalComprado, 2),
                'valorDaTaxaDeMeioDePagamento' => $valorDaTaxaDeMeioDePagamento,
                'valorDaTaxaDeConversao' => $valorDaTaxaDeConversao,
                'valorDescontado' => $valorDescontado,
            ];
        }
    
    }
    public function getCotacaoDasMoedas($parDeMoedas){
        
        $request = new CotacoesRequest(parDeMoedas: Money::COTACOES[$parDeMoedas]);
        $cotacao= current($request->send()->json())["bid"];
        return $cotacao;
        }
    

}