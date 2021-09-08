<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UTV;
use Illuminate\Support\Facades\Hash;
use PDOException;

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
        
            if($request->senha === $request->confirma){

                
                $UTV = new UtV();
                $UTV->utv_unidade = $request->unidade;
                $UTV->utv_email = $request->email;
                $UTV->utv_senha = Hash::make($request->senha);
                $UTV->utv_telefone = $request->telefone;
                $UTV->utv_telefone2 = $request->telefone2;
                $UTV->utv_cep = $request->cep;
                $UTV->utv_uf = $request->uf;
                $UTV->utv_cidade = $request->cidade;
                $UTV->utv_bairro = $request->bairro;
                $UTV->utv_logradouro = $request->logradouro;
                $UTV->utv_numero = $request->numero;
                $UTV->utv_complemento = $request->complemento;
                $UTV->utv_contato_tec = $request->tecnico;
                $UTV->utv_email_tec = $request->email_tecnico;
                $UTV->utv_funcao_tec = $request->funcao;
                $UTV->utv_status = $Status;
                $UTV->save();
                
                return redirect('/login/utv')->with('');
            }
        
        
        
    }

    public function validarLogin(Request $request){

        echo "aqui";
      
        $utv =  UTV::where('utv_email', $request->email)->first();

        if(!empty($utv)){

            if(Hash::check($request->password, $utv->utv_senha)){

                $id = $utv['utv_id'];
                $request->session()->put('utv_id', $id);
                $request->session()->put('utv_email', $request->email);
                return redirect('home/utv');  
            }

        }
        
    }

    public function cursosAdd(){

       return view('add_cursoutv');
    }
  
    public function show($id)
    {
        //
    }

 
    public function edit($id)
    {
            echo $id;
    }

    public function editaUtv($id) //  edita empresa
    {

        $utv = UTV::find($id);
        return view('update_utv', compact('utv'));
    }
    

    public function update(Request $request, $id)
    {

        $UTV = UTV::find($id);
        $UTV->utv_unidade = $request->unidade;
        $UTV->utv_email = $request->email;
        $UTV->utv_telefone = $request->telefone;
        $UTV->utv_telefone2 = $request->telefone2;
        $UTV->utv_cep = $request->cep;
        $UTV->utv_uf = $request->uf;
        $UTV->utv_cidade = $request->cidade;
        $UTV->utv_bairro = $request->bairro;
        $UTV->utv_logradouro = $request->logradouro;
        $UTV->utv_numero = $request->numero;
        $UTV->utv_complemento = $request->complemento;
        $UTV->utv_contato_tec = $request->tecnico;
        $UTV->utv_email_tec = $request->email_tecnico;
        $UTV->utv_funcao_tec = $request->funcao;
        $UTV->utv_status = $request->status;
        
        try {

            $UTV->save();
            return redirect('/home/utv');  

        } catch (PDOException $e) {
            
            echo $e->getMessage();
        }
        
    }

 
    public function destroy($id)
    {
        return redirect('login/utv'); 
    }
}
