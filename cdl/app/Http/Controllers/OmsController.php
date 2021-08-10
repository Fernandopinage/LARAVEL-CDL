<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Oms;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class OmsController extends Controller
{


    public function validarOms(Request $request)
    {

        $this->validate($request, [

            'email' => 'required',
            'password' => 'required'
        ]);

        $oms =  Oms::where('oms_email', $request->email)->first();

        if (!empty($oms)) {                                               //  caso tenha valor dentro da variavel empresa
            /*
             if(Hash::check($request->password, $oms->emp_senha)){

             }
             */
            return redirect('/login/empresa')->with('mensagem', 'Email ou Senha incorretos!');
        } else {

            return redirect('login/militar')->with('mensagem', 'Email ou Senha incorretos!');   // caso não existe o email
        }
    }

    public function store(Request $request)
    {
        $this->validate($request, [

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


        $oms = new Oms();
        $oms->oms_nome = $request->unidade;
        $oms->oms_telefone = $request->telefone;
        $oms->oms_celular = $request->oms_celular;
        $oms->oms_tecnico = $request->tecnico;
        $oms->oms_email = $request->email;
        $oms->oms_funcao = $request->funcao;
        $oms->oms_cep = $request->cep;
        $oms->oms_uf = $request->uf;
        $oms->oms_cidade = $request->cidade;
        $oms->oms_bairro = $request->bairro;
        $oms->oms_logradouro = $request->logradouro;
        $oms->oms_numero = $request->numero;
        $oms->oms_complemento = $request->complemento;
        $oms->oms_status = 'S';

        echo Model::get();
        $oms->save();
        return redirect('login/militar')->with('empresa_cadastro', 'Produto cadastrado com sucesso!');
    }


    public function index()
    {
        return view('militar');
    }


    public function formularioOms()
    {

        return view('add_militar');
    }
}
