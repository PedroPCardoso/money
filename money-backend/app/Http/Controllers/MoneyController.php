<?php

namespace App\Http\Controllers;



use App\Http\Services\MoneyService;
use App\Http\Requests\API\convertMoneyRequest;
class MoneyController extends BaseController
{
    public function index()
    {

    }
    public function store()
    {

    }
    public function convert(convertMoneyRequest $request)
    {
        if(1000<=$request->valor && $request->valor < 100000){
            $service = new MoneyService();
            $data = $service->conversorDeMoeda($request->moeda, $request->valor,$request->formaDePagamento);
            return $this->sendResponse($data,"Sucesso");
        }
        else{
            return $this->sendResponse("Erro - Valor deve ser entre 1000 e 100000",406);

        }
    
    }
}
