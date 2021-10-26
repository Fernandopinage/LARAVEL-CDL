<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restrito;
use Illuminate\Support\Facades\Hash;

class acessoController extends Controller
{
    public function index(){

        return view('restrito');
    }

    public function validarLogin(Request $request){

        $Restrito =  Restrito::where('res_email', $request->email)->first();

        
        if (!empty($Restrito)) {
            
            //ddd($request);
            if (Hash::check($request->password, $Restrito->res_senha)) {

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

            return redirect('/login/acesso')->with('win','win');
        }else{
            return redirect('/login/acesso')->with('erro','erro');
        }
        
     
    
    }
}
