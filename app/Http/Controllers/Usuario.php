<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Usuario extends Controller
{
    public function cadastro () {
        echo "cadastro" ;
    }
    public function Salvar (Request $request){
        dd($request->all());
    }
    //
}
