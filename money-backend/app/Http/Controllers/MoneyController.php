<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Services\MoneyService;
class MoneyController extends BaseController
{
    public function index()
    {

    }
    public function store()
    {

    }
    public function convert(Request $request)
    {

        $service = new MoneyService();
        $data = $service->conversorDeMoeda($request->moeda, $request->valor,$request->formaDePagamento);
        return $this->sendResponse($data,"Sucesso");
    
    }
}
