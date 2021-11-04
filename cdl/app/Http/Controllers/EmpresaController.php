<?php

namespace App\Http\Controllers;

use App\Mail\empresaMail;
use App\Models\Candidato;
use App\Models\Empresa;
use App\Models\Vagas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use phpDocumentor\Reflection\Types\Void_;
use Session;
use stdClass;

class EmpresaController extends Controller
{



    public function validarLogin(Request $request)
    {


        $request->validate([
            'email' => 'required',     //request de email do formulario 
            'password' => 'required',  //request de senha do formulario 
        ]);

        $empresa =  Empresa::where('emp_email', $request->email)->first();       // selecionando o usuario 

        if (!empty($empresa)) {                                               //  caso tenha valor dentro da variavel empresa

            if (Hash::check($request->password, $empresa->emp_senha) and  ($empresa->emp_desativar != 'S') and ($empresa->emp_desativar != 'on')) {     //  decodificando senha hash 

                $id = base64_encode($empresa['emp_id']);
                $request->session()->put('empresa_id', $id);
                $request->session()->put('empresa_nome', $empresa->emp_razao);
                $request->session()->put('empresa', $request->email);
                return redirect('home/empresa');                                  // redirecinanmento se estiver tudo certo


            } else {
                return redirect('/login/empresa')->with('mensagem', 'Email ou Senha incorretos!'); // redirecinamento caso senha nao seja valida
            }
        } else {

            return redirect('/login/empresa')->with('mensagem', 'Email ou Senha incorretos!');   // caso não existe o email
        }
    }

    public function index()
    {
        return view('empresa');
    }

    public function vagasDisponiveis($id)
    {

        $id = base64_decode($id);
       
        $vagas = Vagas::select('*')
        ->orWhere('vag_id_empresa',$id)
        ->get();
       // ddd($vagas);
        if(!empty($vagas)){

            return view('vagas_disponivel', compact('vagas'));
        }else{
            return view('vagas_disponivel');
        }
        
    }

    public function home()
    {

        return view('home_emp');
    }
    public function formularioEmpresa()
    {

        return view('add_empresa');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {


        $existe = new Empresa();
        $existe =  Empresa::where('emp_cnpj',$request->cnpj)->count();

        if($existe == 0){
        
        try {

            if ($request->senha === $request->confirmar) {

             
                $empresa = new Empresa();
                //$empresa->emp_logo = $request->logo;

                if($request->hasFile('logo') && $request->file('logo')->isValid()){
               
                    $requestFoto = $request->logo;          // pegando a imagem 
    
                    $extension = $requestFoto->extension(); // criando pegando extensão do aquivo
    
                    $imagemName = md5($requestFoto->getClientOriginalName().strtotime("now")); // alterando nome do arquivo
                    
    
                    $request->logo->move(public_path('img/empresas'),$imagemName.".".$extension); // criando pasta dentro do publick img
    
                    $empresa->emp_logo = $imagemName.".".$extension;
    
    
                }
                $empresa->emp_fantasia = $request->fantasia;
                $empresa->emp_email = $request->email;
                $empresa->emp_razao = $request->razao;
                $empresa->emp_cnpj = $request->cnpj;
                $empresa->emp_atividade = $request->ramo;
                $empresa->emp_telefone = $request->telefone;
                $empresa->emp_celular = $request->telefone2;
                $empresa->emp_cep = $request->cep;
                $empresa->emp_logrador = $request->rua;
                $empresa->emp_numero = $request->numero;
                $empresa->emp_bairro = $request->bairro;
                $empresa->emp_cidade = $request->cidade;
                $empresa->emp_uf = $request->uf;
                $empresa->emp_complemento = $request->complemento;
                $empresa->emp_nome_contato = $request->tecnico;
                $empresa->emp_email_contato = $request->emailtecnico;
                $empresa->emp_chack_assoc = $request->associado;
                $empresa->emp_cod_assoc = $request->cod;
                $empresa->emp_senha = Hash::make($request->senha);
                $empresa->emp_termo = $request->termo;
                $empresa->emp_status = $request->status;
                $empresa->emp_funcao = $request->funcao;
                $empresa->emp_setor = $request->setor;
                $empresa->emp_desativar = 'N';
                $empresa->save();
                
                //ddd($request);
                //return View('add_empresa')->with('success','teste');
                return redirect('login/empresa')->with('empresa_cadastro', 'Produto cadastrado com sucesso!');
            } else {
                return redirect('add/empresa')->with('empresa_cadastro_erro', 'Erro');
            }
        } catch (\Throwable $th) {
            
            //return redirect('add/empresa')->with('duplicado','empresa_cadastro_erro');
        }
        
        }else{
            return redirect('/add/empresa')->with('erro', 'erro');
        }
    }


    public function show($id)
    {
    }


    public function edit($id)
    {
    }




    public function update(Request $request, $id)
    {
        
        //ddd($request);
        
        $empresa = Empresa::find($id);


        if(!empty($request->logo)){

            if($request->hasFile('logo') && $request->file('logo')->isValid()){
                echo $request->logo;
               
                $requestFoto = $request->logo;          // pegando a imagem 

                $extension = $requestFoto->extension(); // criando pegando extensão do aquivo

                $imagemName = md5($requestFoto->getClientOriginalName().strtotime("now")); // alterando nome do arquivo
                

                $request->logo->move(public_path('img/empresas'),$imagemName.".".$extension); // criando pasta dentro do publick img

                $empresa->emp_logo = $imagemName.".".$extension;

                
            }

        }
        
        $empresa->emp_fantasia = $request->fantasia;
        $empresa->emp_email = $request->email;
        $empresa->emp_razao = $request->razao;
        $empresa->emp_cnpj = $request->cnpj;
        $empresa->emp_atividade = $request->ramo;
        $empresa->emp_telefone = $request->telefone;
        $empresa->emp_celular = $request->telefone2;
        $empresa->emp_cep = $request->cep;
        $empresa->emp_logrador = $request->rua;
        $empresa->emp_numero = $request->numero;
        $empresa->emp_bairro = $request->bairro;
        $empresa->emp_cidade = $request->cidade;
        $empresa->emp_uf = $request->uf;
        $empresa->emp_complemento = $request->complemento;
        $empresa->emp_nome_contato = $request->tecnico;
        $empresa->emp_email_contato = $request->emailtecnico;
        $empresa->emp_chack_assoc = $request->associado;
        $empresa->emp_cod_assoc = $request->cod;
        //$empresa->emp_senha = Hash::make($request->senha);
        $empresa->emp_termo = $request->termo;
        $empresa->emp_status = $request->status;
        $empresa->emp_funcao = $request->funcao;
        $empresa->emp_setor = $request->setor;
        $empresa->emp_desativar = $request->desativar;
        $empresa->save();

        if($request->desativar == 'S'){

            return redirect('login/empresa')->with('erro', 'erro');

        }else{

            return redirect('home/empresa')->with('alterar', 'Produto cadastrado com sucesso!');
        }
          
       
        
        
    }

    public function editaEmpresa($id) //  edita empresa
    {
        $id = base64_decode($id); 

        $empresa = Empresa::find($id);
        return view('update_empresa', compact('empresa'));
    }

    public function destroy($id)                                // "deletar" registro ou ocultar
    {
        //
    }

    public function anuciarVagas()
    {                             //  chamndo tela de anucio

        return view('anucie_empresa');
    }

    public function redefinirSenha()
    {                           //  redefinir senha da empresa

        return view('redefinir_empresa');
    }

    public function redefinir(Request $Request)
    {

        $this->validate($Request, [
            'email' => 'required'
        ]);

        $empresa = Empresa::where('emp_email', $Request->email)->first();  // pegando os dados da empresa EMAIL NOME


        if(empty($empresa)){
            return redirect('/redefinir/empresa')->with('mensagem', 'Produto cadastrado com sucesso!');
        }else{
            
            $id = $empresa->emp_id;
            
            $email = $empresa->emp_email;
            $nome = $empresa->emp_fantasia;
            // dd($empresa->emp_email);
            
            Mail::to($Request->email)->send(new empresaMail(Empresa::where('emp_email', $Request->email)->first()));

            return redirect('/redefinir/empresa')->with('sucesso', 'Produto cadastrado com sucesso!');
        }
        
    }

    public function alterarSenha()
    {                             //  view alterar Senha

        return view('alterar_senha_empresa');
    }

    public function modificarSenha(request $request)
    {

        $this->validate($request, [

            'newsenha' => 'required',
            'confsenha' => 'required'
        ]);
        $empresa =  Empresa::where('emp_email', $request->email)->first(); // select empresa vindo de uma session hidder input

        $id = $empresa['emp_id'];

        if ($request->newsenha === $request->confsenha) {

            $empresa = Empresa::find($id);
            $empresa->emp_senha = Hash::make($request->confsenha);
            $empresa->save();
            return redirect('home/empresa')->with('alterar', 'Sua senha foi alterado com sucesso!');
        } elseif ($request->newsenha != $request->confsenha) {

            return redirect('/alterar/senha/empresa')->with('diferente', 'Senha incorretas');
        } else {
            return redirect('/alterar/senha/empresa')->with('mensagem', 'Senhas estão erradas');
        }
    }

    public function updateSenha(Request $request)
    {              //  Update Senha 

        $this->validate($request, [

            'password' => 'required',
            'newsenha' => 'required',
            'confsenha' => 'required',

        ]);

        $empresa =  Empresa::where('emp_email', $request->empresa)->first(); // select empresa vindo de uma session hidder input
        $id =  Empresa::where('emp_email', $request->empresa)->value('emp_id'); // ID 


        if (!empty($empresa)) {

            $empresa = Empresa::find($id);

            $empresa->emp_senha = Hash::make($request->newsenha);
            $empresa->save();
            return redirect('home/empresa');
        }
    }

    public function filtroEmpresa() // chamando tela de filtro candidato
    {
        return view('candidato_empresa');
    }

    public function filtrarCandidato(Request $request)
    {

           // ddd($request);
  
            $candidato = Candidato::where(function($query) use ($request){

            if($request->area){
                              
                
                $query->where('can_utv_area_atuacao','like','%'.$request->area.'%');
            }
            /*
            if($request->experiencia){
                $query->where('can_tempoexperiencia','like','%'.$request->experiencia.'%');
            }
            */
            if($request->formacao){
                $query->where('can_formacao', $request->formacao);
            }
            if($request->letivo){
                $query->where('can_periodo','like', '%'.$request->letivo.'%');
            }
            /*
            if($request->termino_medio){
                $query->where('can_curso_ano_termino','like','%'.$request->termino_medio.'%');
            }
            */
            if($request->curso){
                $query->where('can_curso','like', '%'.$request->curso.'%');
            }
            if($request->semetre){
                $query->where('can_semestre','like', '%'.$request->semetre.'%');
            }
            if($request->superior){
                $query->where('curso_instituicao','like', '%'.$request->superior.'%');
            }
            /*
            if($request->pos){
                $query->where('can_periodo','like','%'.$request->pos.'%');
            }
            */
            if($request->bairro){
                $query->where('can_bairro','like', '%'.$request->bairro.'%');
            }
            if($request->idioma){
                $query->where('can_idioma','like', '%'.$request->idioma.'%');
            }
            if($request->leitura){
                $query->where('can_idioma_leitura','like', '%'.$request->leitura.'%');
            }
            if($request->escrita){
                $query->where('can_idioma_escrita','like','%'.$request->escrita.'%');
            }
            if($request->pcd){
                $query->where('can_pcd',$request->pcd);
            }
            
        })->get();

        //ddd($candidato);

        
        
        if(!empty($candidato)){

            return view('candidato_empresa',compact('candidato'));
        }
       
       
    }

    public function recuperarSenha(Request $request)
    {

        $this->validate($request, [

            'id' => 'required',
            'newsenha' => 'required',
            'confsenha' => 'required',

        ]);

        if ($request->newsenha === $request->confsenha) {

            $empresa = Empresa::find($request->id);
            $empresa->emp_senha = Hash::make($request->newsenha);
            $empresa->save();
            return redirect('/redefinir/password/' . $request->id)->with('mensagem', 'Sua senha foi alterado com sucesso!');
        } else {
            echo "off";
        }
    }

    public function logout(Request $request)
    {

        $request->session()->pull('empresa');
        return redirect('login/empresa');
    }
}
