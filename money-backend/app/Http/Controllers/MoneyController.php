<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Sammyjo20\Saloon\Http\SaloonConnector;

class MoneyController extends Controller
{
    public function index()
    {
        return view('money.index');
    }
    public function store()
    {
        $money = new Money();
        $money->name = request('name');
        $money->value = request('value');
        $money->save();
        return redirect('/money');
    }
}
