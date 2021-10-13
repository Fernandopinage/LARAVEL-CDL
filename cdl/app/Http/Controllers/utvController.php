<?php

namespace App\Http\Controllers;

use App\Mail\utvcursoMail;
use App\Models\Candidato;
use Illuminate\Http\Request;
use App\Models\UTV;
use App\Models\UTVCURSOS;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use PDOException;
use Utv as GlobalUtv;

class utvController extends Controller
{

    public function index()
    {
        return view('utv');
    }

    public function home()
    {
        $cursos = DB::table('tbl_utvcurso')->get();
        
        return view('home_utv', compact('cursos'));
    }

    public function create()
    {
    }

    public function formularioUtv()
    {

        return view('add_utv');
    }


    public function insertUTV(Request $request)
    {
        //dd($request);
        $Status = 'S';

        if ($request->senha === $request->confirma) {


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
            $UTV->utv_status = $request->$Status;
            $UTV->save();

            return redirect('/login/utv')->with('utv_cadastro', 'Produto cadastrado com sucesso!');
        }
    }

    public function atualizarCurso()
    {

        return view('update_cursoutv');
    }

    public function addCurso(Request $request)
    {

        $UTV = new UTVCURSOS();
        $UTV->utvcurso_folder  = $request->logo;
        $UTV->utvcurso_titulo = $request->curso;
        $UTV->utvcurso_desc = $request->detalhe;
        $UTV->utvcurso_hora = $request->horario;
        $UTV->utvcurso_dias = $request->dias;
        $UTV->utvcurso_data_inicio = $request->datainicio;
        $UTV->utvcurso_data_final = $request->datafim;
        $UTV->utvcurso_valor_geral = $request->investimento;
        $UTV->utvcurso_valor_estudante = $request->estudantes;
        $UTV->utvcurso_informacoes = $request->informacoes;


        try {

            $UTV->save();

            return redirect('/cursos/utv/')->with('add_cursos', 'Produto cadastrado com sucesso!');
        } catch (PDOException $e) {

            echo $e->getMessage();
        }
    }

    public function redefinirSenha(Request $request)
    {

        $curso = UTV::where('utv_email', $request->email)->first();  // pegando os dados da empresa EMAIL NOME

        if (!empty($curso)) {


            $id = $curso->utv_id;
            $email = $curso->utv_email;
            $nome = $curso->utv_unidade;

            Mail::to($request->email)->send(new utvcursoMail(UTV::where('utv_email', $request->email)->first()));

            return redirect('/redefinir/senha/utv')->with('sucesso', 'Produto cadastrado com sucesso!');
        } else {

            return redirect('/redefinir/senha/utv')->with('mensagem', 'Produto cadastrado com sucesso!');
        }
    }

    public function recuperarSenha(Request $request)
    {


        $UTV = UTV::Where('utv_id', $request->id)->first();
        if (!empty($UTV)) {

            if ($request->newsenha === $request->confsenha) {


                $UTV = UTV::find($request->id);
                $UTV->utv_senha = Hash::make($request->confsenha);
                $UTV->save();

                return redirect('/home/utv')->with('alterar', 'Sua senha foi alterado com sucesso!');
            } else {
                return redirect('/redefinir/password/utv/' . $request->id)->with('erro', 'Sua senha foi alterado com sucesso!');
            }
        } else {

            return redirect('/redefinir/senha/utv')->with('erro', 'Sua senha foi alterado com sucesso!');
        }
    }

    public function atualizarSenha()
    {

        return view('alterar_senha_utv');
    }

    public function updateSenha(Request $request)
    {



        $UTV = UTV::Where('utv_id', $request->id)->first();
        if (!empty($UTV)) {

            if ($request->newsenha === $request->confsenha) {


                $UTV = UTV::find($request->id);
                $UTV->utv_senha = Hash::make($request->confsenha);
                $UTV->save();

                return redirect('/login/utv')->with('alterar', 'Sua senha foi alterado com sucesso!');
            } else {
                return redirect('/alterar/senha/')->with('erro', 'Sua senha foi alterado com sucesso!');
            }
        } else {

            return redirect('/alterar/senha/')->with('erro', 'Sua senha foi alterado com sucesso!');
        }
    }

    public function redefinirUtvCurso()
    {

        return view('redefinir_curso');
    }

    public function ListarCursos(){

        $cursos = DB::table('tbl_utvcurso')->get();
        
        //ddd($cursos);

        return view('lista_curso_utv', compact('cursos'));
    }

    public function validarLogin(Request $request)
    {



        $utv =  UTV::where('utv_email', $request->email)->first();

        if (!empty($utv)) {

            if (Hash::check($request->password, $utv->utv_senha)) {

                $id = $utv['utv_id'];
                $request->session()->put('utv_id', $id);
                $request->session()->put('utv_email', $request->email);
                return redirect('home/utv');
            } else {
                return redirect('login/utv');
            }
        } else {

            return redirect('login/utv');
        }
    }

    public function cursosAdd()
    {

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

    public function buscarCandidato(){

        return view('buscar_candidados_utv');
    }

    public function filtrarCandidato(Request $request){

    
            $candidato = Candidato::Where('can_nome','like',$request->buscar.'%')
            ->orWhere('can_cpf','like', $request->buscar.'%')
            ->get();
    
            if(!empty($cadidato)){
                
               
                return view('buscar_candidados_utv',compact('candidato'));
            }   
                
            
        

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
            return redirect('/home/utv')->with('updade','sucesso');
        } catch (PDOException $e) {

            echo $e->getMessage();
        }
    }


    public function destroy($id)
    {
        return redirect('login/utv');
    }
}
