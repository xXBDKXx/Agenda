<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeControl extends Controller
{
    public function Home() {
        return view('paginas.home'); //Retorna para o arquivo login.blade.php
    }//Fim do Metodo
}
