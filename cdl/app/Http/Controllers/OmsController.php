<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Oms;

class OmsController extends Controller
{

    public function store(Request $request)
    {
        $this->validate($request,[

            'unidade' => 'required',
            'telefone' => 'required',
            'telefone2' => 'required',
            'tecnico' => 'required',
            'email' => 'required',
            'funcao' => 'required',
            'cep' => 'required',
            'uf' => 'required',
            'cidade' => 'required',
            'bairro' => 'required',
            'numero' => 'required'


        ]);
        /*
        $oms = new Oms();
        $oms->oms_nome = $request->unidade;
        $oms->oms_razao = $request-> '';
        $oms->oms_cnpj = $request-> '';
        $oms->oms_tecnico = $request->tecnico;
        $oms->oms_email = $request->email;
        $oms->oms_telefone = $request->telefone;
        $oms->oms_celular = $request->telefone2;
        $oms->oms_funcao = $request->funcao;
        $oms->oms_cep = $request->cep;
        $oms->oms_cidade = $request->cidade;
        $oms->oms_bairro = $request->bairro;
        $oms->oms_logradouro = $request->'';
        $oms->oms_numero = $request->numero;
        $oms->oms_complemento = $request->'';
        $oms->oms_status = $request->'';
        */
    }


    public function index()
    {
        return view('militar');
    }


    public function formularioOms(){

        return view('add_militar');

    }
}
