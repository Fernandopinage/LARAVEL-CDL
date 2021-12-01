<?php

namespace App\Http\Controllers;

use App\Models\Preferencia;
use Illuminate\Http\Request;

class PreferenciaController extends Controller
{
    
    public function index(){
        
        return view('add_preferencia');
    }

    public function insertPreferencias(Request $Request){

        $preferencia = new Preferencia();
        $preferencia->pre_preferencia  = $Request->nome;
        $preferencia->pre_descricao  = $Request->descricao;
        $preferencia->save();

        return redirect('/add/preferencia/')->with('mensagem', 'Registro cadastrado com sucesso!'); // redirecionar para tela de anuncio
    }



}
