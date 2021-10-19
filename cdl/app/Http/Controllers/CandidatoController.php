<?php

namespace App\Http\Controllers;

use App\Models\Candidato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CandidatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('candidato');
    }

    public function validarCandidato(Request $request)
    {

        $candidato =  Candidato::where('can_email', $request->email)->first();

        if (!empty($candidato)) {

            if (Hash::check($request->password, $candidato->can_senha)) {
                $id = $candidato['can_id'];
                $request->session()->put('can_id', $id);
                $request->session()->put('candidato', $request->email);
                
                return redirect('home/candidato');                                  // redirecinanmento se estiver tudo certo

            } else {
                return redirect('login/candidato');
            }
        } else {
            return redirect('login/candidato');
        }
    }

    public function formularioCandidato()
    {
        return view('add_candidato');
    }

    public function home()
    {

        return view('home_candidato');
    }

    public function vagas()
    {
        return view('vagas_candidato');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function selectCandidato(Request $Request)
    {

        return view('busca_candidato');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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

        //ddd($request);

          
        if ($request->senha === $request->confirma) {

            $candidato = new Candidato();
            $candidato->can_nome = $request->nome;
            $candidato->can_sobrenome  = $request->sobrenome;
            $candidato->can_foto  = $request->foto;
            $candidato->can_cpf  = $request->cpf;
            $candidato->can_rg  = $request->rg;
            $candidato->can_nascimento  = $request->nascimento;
            $candidato->can_localnascimento  = $request->localnascimento;
            $candidato->can_cor  = $request->cor;
            $candidato->can_peso  = $request->peso;
            $candidato->can_altura  = $request->altura;
            $candidato->can_estadocivil  = $request->estadocivil;
            $candidato->can_filiacao  = $request->filiacao;
           // $candidato->can_filhos  = $request->filhos;
            $candidato->can_genero  = $request->genero;
            $candidato->can_pretensao_salario  = $request->pretensao_salario;
            $candidato->can_exmilitar  = $request->exmilitar;
            $candidato->can_unidademilitar  = $request->unidademilitar;
            $candidato->can_matricula  = $request->matricula;
            $candidato->can_email  = $request->email;
            $candidato->can_senha  = Hash::make($request->senha);
            $candidato->can_telefone  = $request->telefone;
            $candidato->can_celular  = $request->celular;
            $candidato->can_cep  = $request->cep;
            $candidato->can_uf  = $request->uf;
            $candidato->can_cidade = $request->cidade;
            $candidato->can_bairro  = $request->bairro;
            $candidato->can_numero  = $request->numero;
            $candidato->can_rua  = $request->rua;
            $candidato->can_complemento  = $request->complemento;
            $candidato->can_formacao  = $request->formacao;
            $candidato->can_instituicao  = $request->instituicao;
            $candidato->can_curso  = $request->curso;
            $candidato->can_termino  = $request->termino;
            $candidato->can_semestre  = $request->semestre;
            $candidato->can_periodo = $request->periodo;
            $candidato->can_curso_extra    = $request->curso_extra;
            $candidato->can_curso_ano_termino  = $request->curso_ano_termino;
            $candidato->can_curso_area_atuacao  = $request->curso_area_atuacao;
            $candidato->can_utv_titlulo  = $request->utv_titlulo;
            $candidato->can_utv_carga  = $request->utv_carga;
            $candidato->can_utv_data  = $request->utv_data;
            $candidato->can_utv_area_atuacao  = $request->utv_area_atuacao;
            $candidato->can_idioma  = $request->idioma;
            $candidato->can_outro_idioma  = $request->outro_idioma;
            $candidato->can_idioma_escrita  = $request->idioma_escrita;
            $candidato->can_idioma_leitura = $request->idioma_leitura;
            $candidato->can_idioma_conversacao  = $request->idioma_conversacao;
            $candidato->can_area_profissional  = $request->area_profissional;
            $candidato->can_nome_empresa  = $request->nome_empresa;
            $candidato->can_cargo_empresa  = $request->cargo_empresa;
            $candidato->can_atual_empresa  = $request->atual_empresa;
            $candidato->can_data_inicio_empresa  = $request->data_inicio_empresa;
            $candidato->can_data_termino_empresa  = $request->data_termino_empresa;
            $candidato->can_salario_empresa  = $request->salario_empresa;
            $candidato->can_software_empresa  = $request->software_empresa;
            $candidato->can_tempoexperiencia  = $request->tempoexperiencia;
            $candidato->can_termo = $request->termo;
            

            $candidato->save();
            return redirect('login/candidato')->with('mensagem', 'Registro cadastrado com sucesso!'); // redirecionar para tela de anuncio
        }
      
        
    }

    public function editarCandidato($id){

        $candidato = Candidato::find($id);
       // ddd($candidato);
        return view('update_candidato',compact('candidato'));
    }

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

            $candidato = Candidato::find($id);
            $candidato->can_nome = $request->nome;
            $candidato->can_sobrenome  = $request->sobrenome;
            $candidato->can_foto  = $request->foto;
            $candidato->can_cpf  = $request->cpf;
            $candidato->can_rg  = $request->rg;
            $candidato->can_nascimento  = $request->nascimento;
            $candidato->can_localnascimento  = $request->localnascimento;
            $candidato->can_cor  = $request->cor;
            $candidato->can_peso  = $request->peso;
            $candidato->can_altura  = $request->altura;
            $candidato->can_estadocivil  = $request->estadocivil;
            $candidato->can_filiacao  = $request->filiacao;
           // $candidato->can_filhos  = $request->filhos;
            $candidato->can_genero  = $request->genero;
            $candidato->can_pretensao_salario  = $request->pretensao_salario;
            $candidato->can_exmilitar  = $request->exmilitar;
            $candidato->can_unidademilitar  = $request->unidademilitar;
            $candidato->can_matricula  = $request->matricula;
            $candidato->can_email  = $request->email;
            $candidato->can_telefone  = $request->telefone;
            $candidato->can_celular  = $request->celular;
            $candidato->can_cep  = $request->cep;
            $candidato->can_uf  = $request->uf;
            $candidato->can_cidade = $request->cidade;
            $candidato->can_bairro  = $request->bairro;
            $candidato->can_numero  = $request->numero;
            $candidato->can_rua  = $request->rua;
            $candidato->can_complemento  = $request->complemento;
            $candidato->can_formacao  = $request->formacao;
            $candidato->can_instituicao  = $request->instituicao;
            $candidato->can_curso  = $request->curso;
            $candidato->can_termino  = $request->termino;
            $candidato->can_semestre  = $request->semestre;
            $candidato->can_periodo = $request->periodo;
            $candidato->can_curso_extra    = $request->curso_extra;
            $candidato->can_curso_ano_termino  = $request->curso_ano_termino;
            $candidato->can_curso_area_atuacao  = $request->curso_area_atuacao;
            $candidato->can_utv_titlulo  = $request->utv_titlulo;
            $candidato->can_utv_carga  = $request->utv_carga;
            $candidato->can_utv_data  = $request->utv_data;
            $candidato->can_utv_area_atuacao  = $request->utv_area_atuacao;
            $candidato->can_idioma  = $request->idioma;
            $candidato->can_outro_idioma  = $request->outro_idioma;
            $candidato->can_idioma_escrita  = $request->idioma_escrita;
            $candidato->can_idioma_leitura = $request->idioma_leitura;
            $candidato->can_idioma_conversacao  = $request->idioma_conversacao;
            $candidato->can_area_profissional  = $request->area_profissional;
            $candidato->can_cargo_empresa  = $request->cargo_empresa;
            $candidato->can_atual_empresa  = $request->atual_empresa;
            $candidato->can_data_inicio_empresa  = $request->data_inicio_empresa;
            $candidato->can_data_termino_empresa  = $request->data_termino_empresa;
            $candidato->can_salario_empresa  = $request->salario_empresa;
            $candidato->can_software_empresa  = $request->software_empresa;
            $candidato->can_tempoexperiencia  = $request->tempoexperiencia;
            $candidato->can_termo = $request->termo;
            

            $candidato->save();
            return redirect('/home/candidato/')->with('mensagem', 'Registro cadastrado com sucesso!'); // redirecionar para tela de anuncio

           
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
