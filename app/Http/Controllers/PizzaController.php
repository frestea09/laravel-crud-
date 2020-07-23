<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PizzaModel;

class PizzaController extends Controller
{
    public function index(){
        $dataPizza = Pizza::all();
        return view('pizza.index',['listPizza'=>$dataPizza]);
    }
}
