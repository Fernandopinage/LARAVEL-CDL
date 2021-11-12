<?php

namespace App\Http\Controllers;

use App\Mail\restritoMail;
use App\Models\Empresa;
use Illuminate\Http\Request;
use App\Models\Restrito;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AcessoController extends Controller
{
    public function index(){

        return view('restrito');
    }

    public function validarLogin(Request $request){

        $Restrito = Restrito::where('res_email',$request->email)->first();

        

        
        if (!empty($Restrito)) {
            
            //ddd($request);

       
            if (hash::check($request->password, $Restrito->res_senha)) {

                $id = $Restrito['can_id'];
                $request->session()->put('res_id', $id);
                $request->session()->put('restrito', $request->email);
                
                    return redirect('/home/acesso');                                  // redirecinanmento se estiver tudo certo
                   
            } else {
                return redirect('login/acesso');
               
            }
            
        } else {
            return redirect('/login/acesso');
           
        }
        
    }

    public function home(){

        return view('home_restrito');
    }

    public function viewBanner(){

        return view('banner_restrito');
    }

    public function store(){
        
        return view('add_restrito');
    }
    

    public function insertRestrito(Request $request){

      
        if($request->senha == $request->confirma){

            
            $Restrito = new Restrito();
            $Restrito->res_nome = $request->nome;
            $Restrito->res_email = $request->email;
            $Restrito->res_senha = Hash::make($request->senha);
            $Restrito->res_perfil = $request->perfil;
            $Restrito->save();

            return redirect('/restrito/area/acesso')->with('win','win');
        }else{
            return redirect('/restrito/area/acesso')->with('erro','erro');
        }
        
     
    
    }

    public function listaEmpresa(){

        $empresa =  Empresa::all();

        return view('lista_empresa_restrito',compact('empresa'));
    }



    public function Banner(Request $request){

        ddd($request);

    }

    public function redefinirSenha(){

        return view('redefinir_retrito');

    }

    public function redefinirPassword(Request $request){



        $Restrito = Restrito::where('res_email', $request->email)->first();  // pegando os dados da empresa EMAIL NOME
        
        //ddd($Restrito);
        if(empty($Restrito)){
            return redirect('/redefinir/restrito')->with('mensagem', 'Produto cadastrado com sucesso!');
        }else{
            
            echo $id = $Restrito->res_id;
            
           echo $email = $Restrito->res_email;
           echo $nome = $Restrito->res_nome;


            // dd($empresa->emp_email);
            
           Mail::to($request->email)->send(new restritoMail(Restrito::where('res_email', $request->email)->first()));
            
           return redirect('/redefinir/restrito')->with('sucesso', 'Produto cadastrado com sucesso!');
        }
        /*
        */

    }

    public function passwordRedefinir($id){

        //$id = base64_decode($id);
        $restrito = Restrito::find($id);
     

        //ddd($restrito);
        return view('alterar_senha_restrito', compact('restrito'));
    }

    public function modificar(Request $request){

        if($request->confsenha == $request->newsenha){

            $Restrito =  Restrito::find($request->id);
            $Restrito->res_id  = $request->id;
            $Restrito->res_senha  = md5($request->newsenha);
            $Restrito->save();
            return redirect('/redefinir/password/restrito/'.$request->id)->with('sucesso', 'Produto cadastrado com sucesso!');
        }else{
            return redirect('/redefinir/restrito')->with('mensagem', 'Produto cadastrado com sucesso!');
        }
    }
}
