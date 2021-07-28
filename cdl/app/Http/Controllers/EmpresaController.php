<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use phpDocumentor\Reflection\Types\Void_;
use Session;

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

            if (Hash::check($request->password, $empresa->emp_senha)) {     //  decodificando senha hash 

                $id = $empresa['emp_id'];
                $request->session()->put('empresa_id', $id);
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


        // validando campos obrigatorios caso um dos campos esteja em banco nao inserir no banco de dados 
        $this->validate($request, [

            'razao' => 'required',              //tabel  //campo
            'cnpj' => ['required', 'unique:tbl_empresas,emp_cnpj'],
            'ramo' => 'required',
            'email' => 'required',
            'tecnico' => 'required',
            'cep' => 'required',
            'termo' => 'required',
            'funcao' => 'required',
            'setor' => 'required'
        ]);

        $vowels = array("(", ")", "-", " ");


        // Verificando se os campos de senhas são iguais     
        if ($request->senha === $request->confirmar) {

            $empresa = new Empresa();
            $empresa->emp_logo = $request->logo;
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

            //return View('add_empresa')->with('success','teste');
            return redirect('/login/empresa')->with('mensagem', 'Produto cadastrado com sucesso!');
        } else {
            return redirect('add/empresa');
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


        $this->validate($request, [

            'razao' => 'required',
            'cnpj' => ['required', 'unique:tbl_empresas,emp_cnpj'],
            'ramo' => 'required',
            'email' => 'required',
            'tecnico' => 'required',
            'cep' => 'required',
            'termo' => 'required',
            'funcao' => 'required',
            'setor' => 'required'
        ]);

        $empresa = Empresa::find($id);    
        $empresa->emp_logo = $request->logo;
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
        $empresa->emp_nome_contato = $request->tecnico;
        $empresa->emp_email_contato = $request->emailtecnico;
        $empresa->emp_chack_assoc = $request->associado;
        $empresa->emp_cod_assoc = $request->cod;
        $empresa->emp_senha = Hash::make($request->senha);
        $empresa->emp_termo = $request->termo;
        $empresa->emp_status = $request->status;
        $empresa->emp_funcao = $request->funcao;
        $empresa->emp_setor = $request->setor;
        $empresa->emp_desativar = $request->desativar;
        $empresa->save();


        return redirect('home/empresa')->with('mensagem', 'Produto cadastrado com sucesso!');
        
    }

    public function editaEmpresa($id) //  edita empresa
    {

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

            echo $Request->email; // email enviado pelo formulario 

            
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
            return redirect('home/empresa')->with('mensagem', 'Sua senha foi alterado com sucesso!');
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

    public function filtroEmpresa()
    {                            // chamando tela de filtro candidato

        return view('candidato_empresa');
    }

    public function filtrarCandidato(Request $request)
    {         //  filtrando candidato na base de dados


    }

    public function logout(Request $request){

        $request->session()->pull('empresa');
        return redirect('login/empresa');
    }
}
