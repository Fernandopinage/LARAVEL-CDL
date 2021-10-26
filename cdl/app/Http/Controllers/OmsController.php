<?php

namespace App\Http\Controllers;

use App\Mail\omsMail;
use App\Models\Candidato;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Oms;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Oms as GlobalOms;
use UtvCursos;
use Illuminate\Support\Facades\DB;
class OmsController extends Controller
{


    public function validarOms(Request $request)
    {
        $oms =  Oms::where('oms_email', $request->email)->first();
        if (!empty($oms)) {                                               //  caso tenha valor dentro da variavel empresa

            if (Hash::check($request->password, $oms->oms_senha) and $oms->oms_status == 'S') {
                $id = base64_encode($oms['oms_id']);
                $request->session()->put('oms_id', $id);
                $request->session()->put('oms_email', $request->email);
                return redirect('login/militar');
            } else {
                return redirect('login/militar')->with('erro', 'Email ou Senha incorretos!');
            }

            return redirect('/login/empresa')->with('erro', 'Email ou Senha incorretos!');
        } else {

            return redirect('login/militar')->with('erro', 'Email ou Senha incorretos!');   // caso não existe o email
        }
       
    }

    public function validarRestritoOms(Request $request)
    {
        $oms =  Oms::where('oms_email', $request->email)->first();
        if (!empty($oms)) {                                               //  caso tenha valor dentro da variavel empresa

            if (Hash::check($request->password, $oms->oms_senha) and $oms->oms_status == 'S') {
                $id = base64_encode($oms['oms_id']);
                $request->session()->put('oms_id', $id);
                $request->session()->put('oms_email', $request->email);
                return redirect('/home/militar');
            } else {
                return redirect('/restrito/login/militar')->with('erro', 'Email ou Senha incorretos!');
            }

            return redirect('/restrito/login/militar')->with('erro', 'Email ou Senha incorretos!');
        } else {

            return redirect('/restrito/login/militar')->with('erro', 'Email ou Senha incorretos!');   // caso não existe o email
        }
       
    }


    public function home()
    {
        $curso = DB::table('tbl_utvcurso')->select('*')->orderBy('utvcurso_id', 'DESC')->limit(9)->get();
        $candidato = Candidato::select('*')->where('can_exmilitar','Sim')->orderBy('can_id', 'DESC')->limit(9)->get();
        
        if(!empty($candidato)){
            
            return view('home_militar',compact('candidato','curso'));
        }else{
            return view('home_militar');
        }

    }

 



    public function exMilitar(){

               
        $candidato = Candidato::select('*')->where('can_exmilitar','on')->get();
        
        return view('home_militar',compact($candidato));
    }

    public function store(Request $request)
    {

        
        if ($request->senha === $request->confirma) {

            $oms = new Oms();
            $oms->oms_nome = $request->unidade;
            $oms->oms_telefone = $request->telefone;
            $oms->oms_celular = $request->telefone2;
            $oms->oms_email = $request->email;
            $oms->oms_senha = Hash::make($request->senha);
            $oms->oms_tecnico = $request->tecnico;
            $oms->oms_email_tecnico = $request->email_tecnico;
            $oms->oms_funcao = $request->funcao;
            $oms->oms_cep = $request->cep;
            $oms->oms_uf = $request->uf;
            $oms->oms_cidade = $request->cidade;
            $oms->oms_bairro = $request->bairro;
            $oms->oms_logradouro = $request->logradouro;
            $oms->oms_numero = $request->numero;
            $oms->oms_complemento = $request->complemento;
            $oms->oms_status = 'S';
            $oms->save();

            //ddd($request);
            return redirect('home/militar')->with('empresa_cadastro', 'Produto cadastrado com sucesso!');
           
        } else {
            return redirect('/add/oms/');
            
        }
    }

    function Update(Request $request, $id)
    {
            //$oms = new Oms();

            $oms =  Oms::find($id);

            $oms->oms_nome = $request->unidade;
            $oms->oms_telefone = $request->telefone;
            $oms->oms_email = $request->email;
            //$oms->oms_senha = Hash::make($request->senha);
            $oms->oms_celular = $request->telefone2;
            $oms->oms_tecnico = $request->tecnico;
            $oms->oms_email_tecnico = $request->email_tecnico;
            $oms->oms_funcao = $request->funcao;
            $oms->oms_cep = $request->cep;
            $oms->oms_uf = $request->uf;
            $oms->oms_cidade = $request->cidade;
            $oms->oms_bairro = $request->bairro;
            $oms->oms_logradouro = $request->logradouro;
            $oms->oms_numero = $request->numero;
            $oms->oms_complemento = $request->complemento;
            $oms->oms_status = 'S';
            $oms->save();

            return redirect('/home/militar')->with('alterar', 'Produto cadastrado com sucesso!');

    }

    public function editaEmpresa($id) //  edita empresa
    {

        $oms = Oms::find($id);
        return view('update_organizacao_militar', compact('oms'));

    }
    public function redefinir()
    {
        return view('redefinir_oms');
    }



    public function redefinirSenha(Request $request)
    {

        $oms = Oms::where('oms_email', $request->email)->first();


        if (empty($oms)) {
            return redirect('/oms/redefinir')->with('mensagem', 'Produto cadastrado com sucesso!');
        } else {

            Mail::to($oms->oms_email)->send(new omsMail(Oms::where('oms_email', $request->email)->first()));

            return redirect('/oms/redefinir')->with('redefinir', 'Produto cadastrado com sucesso!');
        }
    }

    public function alterarSenha(Request $request)
    {
        $oms =  Oms::where('oms_id', $request->id)->first(); // select empresa vindo de uma session hidder input
        if ($request->newsenha === $request->confsenha) {

            $oms = Oms::find($request->id);
            $oms->oms_senha = Hash::make($request->confsenha);
            $oms->save();
            return redirect('/login/militar')->with('alterar', 'Sua senha foi alterado com sucesso!');
        } elseif ($request->newsenha != $request->confsenha) {

            return redirect('/oms/redefinir')->with('diferente', 'Senha incorretas');
        } else {
            return redirect('/oms/redefinir')->with('mensagem', 'Senhas estão erradas');
        }
    }

    public function alterarPassword(){

        return view('alterar_senha _oms');
    }
    public function modificarSenha(request $request)
    {

    
        $oms =  Oms::where('oms_id', $request->id)->first(); // select empresa vindo de uma session hidder input

        $id = $oms['oms_id'];

        if ($request->newsenha === $request->confsenha) {

            $oms = Oms::find($id);
            $oms->oms_senha = Hash::make($request->confsenha);
            $oms->save();
            return redirect('home/militar')->with('alterar', 'Sua senha foi alterado com sucesso!');
        } elseif ($request->newsenha != $request->confsenha) {

            return redirect('/alterar/senha/oms')->with('diferente', 'Senha incorretas');
        } else {
            return redirect('/alterar/senha/oms')->with('mensagem', 'Senhas estão erradas');
        }
    }
    public function deleteConta(request $request){

        //dd($request->id);

        $oms = Oms::find($request->id);
        $oms->oms_status = 'N';
        $oms->save();
        return redirect('login/militar')->with('erro', 'Email ou Senha incorretos!');
    }

    public function login()
    {
        return view('militar');
    }

    public function loginRestrito()
    {
        return view('retrito_militar');
    }


    public function formularioOms()
    {

        return view('add_militar');
    }
}
