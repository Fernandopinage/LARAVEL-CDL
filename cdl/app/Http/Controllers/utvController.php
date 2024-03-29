<?php

namespace App\Http\Controllers;

use App\Mail\utvcursoMail;
use App\Models\Candidato;
use Illuminate\Http\Request;
use App\Models\UTV;
use App\Models\UTVCURSOS;
use Candidatos;
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

    public function indexRestrito(){
        return view('restrito_utv');
    }

    public function home()
    {
        $curso = DB::table('tbl_utvcurso')->get();
       
        return view('home_utv', compact('curso'));
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
            $UTV->utv_status = 'N';
            //ddd($request);
            $UTV->save();

            return redirect('restrito/login/utv')->with('utv_cadastro', 'Produto cadastrado com sucesso!');
        }
    }

    public function atualizarCurso()
    {

        return view('update_cursoutv');
    }

    public function addCurso(Request $request)
    {
       
        $UTV = new UTVCURSOS();
        //$UTV->utvcurso_folder  = $request->logo;

        if($request->hasFile('logo') && $request->file('logo')->isValid()){
               
            $requestFoto = $request->logo;          // pegando a imagem 

            $extension = $requestFoto->extension(); // criando pegando extensão do aquivo

            $imagemName = md5($requestFoto->getClientOriginalName().strtotime("now")); // alterando nome do arquivo
            

            $request->logo->move(public_path('img/curso'),$imagemName.".".$extension); // criando pasta dentro do publick img

            $UTV->utvcurso_folder = $imagemName.".".$extension;


        }
        
        $UTV->utvcurso_titulo = $request->curso;
        $UTV->utvcurso_tipo = $request->tipo;
        $UTV->utvcurso_desc = $request->detalhe;
        $UTV->utvcurso_hora = $request->horario;
        $UTV->utvcurso_dias = $request->dias;
        $UTV->utvcurso_data_inicio = $request->datainicio;
        $UTV->utvcurso_data_final = $request->datafim;
        $UTV->utvcurso_valor_geral = $request->investimento;
        $UTV->utvcurso_valor_estudante = $request->estudantes;
        $UTV->utvcurso_informacoes = $request->informacoes;

        $UTV->save();

        return redirect('/cursos/utv/')->with('add_cursos', 'Produto cadastrado com sucesso!');

        try {

        } catch (PDOException $e) {

           //echo $e->getMessage();
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

        $id = base64_decode($request->id); // foi decodificado quando o uruario precisa alterar senha        
        $UTV = UTV::Where('utv_id', $id)->first();
        
        if (!empty($UTV)) {

            if ($request->newsenha === $request->confsenha) {
                            
                $UTV = UTV::find($id);
                $UTV->utv_senha = Hash::make($request->newsenha);
                $UTV->save();

                return redirect('/alterar/senha/')->with('alterar', 'Sua senha foi alterado com sucesso!');
                
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

    public function editCurso(Request $request){

        
        $curso = UTVCURSOS::find($request->id);
        
        return view('update_curso', compact('curso'));

    }


    public function updateCurso(Request $request){


       // ddd($request);

        $UTV =  UTVCURSOS::find($request->id);
        if($request->hasFile('logo') && $request->file('logo')->isValid()){
               
            $requestFoto = $request->logo;          // pegando a imagem 

            $extension = $requestFoto->extension(); // criando pegando extensão do aquivo

            $imagemName = md5($requestFoto->getClientOriginalName().strtotime("now")); // alterando nome do arquivo
            

            $request->logo->move(public_path('img/curso'),$imagemName.".".$extension); // criando pasta dentro do publick img

            $UTV->utvcurso_folder = $imagemName.".".$extension;


        }
        $UTV->utvcurso_tipo = $request->tipo;
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
            return redirect('/editar/cursos/utv/'.$request->id)->with('add_cursos', 'Produto cadastrado com sucesso!');
        } catch (\Throwable $th) {
            return redirect('/editar/cursos/utv/'.$request->id)->with('empresa_cadastro_erro', 'Produto cadastrado com sucesso!');
        }

    }



    public function validarLogin(Request $request)
    {

        $utv =  UTV::where('utv_email', $request->email)->first();

        if (!empty($utv)) {

            if (Hash::check($request->password, $utv->utv_senha) and ($utv->utv_status != 'S')) {

                $id = base64_encode($utv['utv_id']);
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


    public function validarRestritoLogin(Request $request)
    {

        $utv =  UTV::where('utv_email', $request->email)->first();

        if (!empty($utv)) {

            if (Hash::check($request->password, $utv->utv_senha) and ($utv->utv_status != 'S')) {

                $id = base64_encode($utv['utv_id']);
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
        $id = base64_decode($id);

        $utv = UTV::find($id);

    
        return view('update_utv', compact('utv'));
    }

    public function buscarCandidato(){

        return view('buscar_candidados_utv');
    }

    public function filtrarCandidato(Request $request){

        
        
        
            $candidato = Candidato::where('can_utv_titlulo',$request->buscar.'%')
            ->orWhere('can_nome','like',$request->buscar.'%')
            ->orWhere('can_cpf','like', $request->buscar.'%')
            ->orderByDesc('can_validacao')->get();
        
            if(!empty($candidato)){

                //ddd($candidato);
                return view('buscar_candidados_utv',compact('candidato'));
                
            }
            
                   

    }


    public function update(Request $request, $id)
    {

        $id = base64_decode($id);       
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

    public function abaFiltro($id){

        $id = base64_decode($id);

    
        $dados = Candidato::where('can_id', '=', $id)
        //->where('can_exmilitar', '=', 'Sim')
        ->get();
          

        return view('buscar_filtro_utv',compact('dados'));
    }

    public function validarCandidato(Request $request){

        $candidato =  Candidato::find($request->id);
        $candidato->can_validacao = $request->avalicao;

        //ddd($request);
       $candidato->save();

        $id = base64_encode($request->id);
      
        return redirect('/utv/filtro/'.$id)->with('avaliacao', 'Email ou Senha incorretos!');
        
    }

    public function listaTodosCursos(){
     
 
        $curso = DB::table('tbl_utvcurso')->get();
        
        //ddd($cursos);

        return view('select_cursos', compact('curso'));
        

    }

    public function deslog(Request $request){
        $request->session()->flush();
        return redirect('/login/utv');
    }
}
