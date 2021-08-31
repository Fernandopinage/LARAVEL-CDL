<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UTV;

class utvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('utv');
    }

    public function home()
    {
        return view('home_utv');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    public function formularioUtv(){

        return view('add_utv');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            //dd($request);
            $Status = 'S';
        
            $UTV = new UtV();
            $UTV->utv_unidade = $request->unidade;
           //$UTV->utv_periodo = $request->"";
            $UTV->utv_telefone = $request->telefone;
            $UTV->utv_telefone2 = $request->telefone2;
            $UTV->utv_cep = $request->cep;
            $UTV->utv_cidade = $request->cidade;
            $UTV->utv_bairro = $request->bairro;
            $UTV->utv_logradouro = $request->logradouro;
            $UTV->utv_numero = $request->numero;
            $UTV->utv_complemento = $request->complemento;
            $UTV->utv_contato_tec = $request->tecnico;
            $UTV->utv_email_tec = $request->email_tecnico;
            $UTV->utv_funcao_tec = $request->funcao;
            $UTV->utv_status = $request->$Status;
            $UTV->save();

            return redirect('/login/utv')->with('');
        
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
