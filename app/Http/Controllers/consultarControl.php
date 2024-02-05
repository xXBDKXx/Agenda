<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\homeAgendarModel;//Importar a classe que eu quero utilizar

class consultarControl extends Controller
{
    public function consultar() {
        $dados = homeAgendarModel::all();

        return view('paginas.consultar', compact('dados')); //Retorna para o arquivo login.blade.php
    }//Fim do Metodo
}
