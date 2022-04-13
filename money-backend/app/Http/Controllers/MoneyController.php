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
        $valorConvertido = $service->conversorDeMoeda($request->moeda, $request->valor);
        return sendResponse($valorConvertido);
    
    }
}
