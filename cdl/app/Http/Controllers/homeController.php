<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;
use App\Models\Vagas;
use App\Models\Candidato;

class homeController extends Controller
{
    public function index(){

        return view('home');
    }

    public function filtro(Request $request)
    {



        $valor = $request->select;

        switch ($valor) {
            case 'vagas':
               
                if(!empty($request->pesquisa)){

                    $vagas = Vagas::where('vag_cargo','like','%'.$request->cargo.'%');
                   //ddd($vagas);

                    return view('home_buscar',compact('vagas'));

                }else{
                    $vagas = Vagas::all();

                    return view('home_buscar',compact('vagas'));
                }


                break;

            case 'candidatos':
                
                $candidato = Candidato::all();
                return view('home_buscar',compact('candidato'));
                break;

            case 'militares';
                
                $candidato = Candidato::select('*')->where('can_exmilitar','Sim')->get();
                return view('home_buscar',compact('candidato'));
                break;
            default:
                # code...
                break;
        }

    }

 
    public function filtroBuscar(){


        return view('home_buscar');
    }

   
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
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
