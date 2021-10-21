@extends('layout.update_candidato')

@section('editar')

@php
$candidato;
@endphp

<form action="/update/candidato/{{$candidato->can_id}}" method="post" enctype="multipart/form-data">

    @csrf
    <div class="form-signin">
        <div class="text-end">
            <label class="switch">
                <input type="checkbox" id="pessoais" checked>
                <span class="slider round"></span>
            </label>
        </div>

        <div class="text">
            <div class="text-center">
                <img id="perfil" src="/img/events/{{$candidato->can_foto}}" alt="profile Pic">
            </div>
            <h2 class="form-signin-heading">Dados Pessoais</h2>
            <hr>
        </div>

        <div class="pessoais">
            <div class="row g-3">


                <div class="col-md-6">
                    <label class="form-check-label" for="flexCheckIndeterminate">Primeiro Nome </label>
                    <input type="text" class="form-control form-control-sm" name="nome" value="{{$candidato->can_nome}}"
                        placeholder="">
                </div>

                <div class="col-md-6">
                    <label class="form-check-label" for="flexCheckIndeterminate">Sobrenome</label>
                    <input type="text" class="form-control form-control-sm" name="sobrenome"
                        value="{{$candidato->can_sobrenome}}" placeholder="">
                </div>

                <div class="col-md-4" style="display: none">
                    <label class="form-check-label" for="flexCheckIndeterminate">Selecione Sua foto</label>
                    <input type="file" name="foto" id="formFile" class="form-control-file">
                       
                </div>

                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">CPF</label>
                    <input type="text" class="form-control form-control-sm" name="cpf" placeholder=""
                        onfocus="javascript: retirarFormatacao(this);" onblur="javascript: formatarCampo(this);"
                        name="cnpj" id="cnpj" placeholder="99.999.999/9999-99" value="{{$candidato->can_cpf}}">
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">RG</label>
                    <input type="text" maxlength="10" class="form-control form-control-sm"
                        onkeyup="somenteNumeros(this);" name="rg" placeholder="" value="{{$candidato->can_rg}}">
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Data Nascimento </label>
                    <input type="date" class="form-control form-control-sm" name="nascimento" placeholder=""
                        value="{{$candidato->can_nascimento}}">
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Local de Nascimento </label>
                    <input type="text" class="form-control form-control-sm" name="localnascimento" placeholder=""
                        value="{{$candidato->can_localnascimento}}">
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Cor</label>
                    <select id="inputState" name="cor" class="form-select form-select-sm"
                        value="{{$candidato->can_cor}}">
                        <option></option>
                        <option {{$candidato->can_cor == 'Branca' ? 'selected' :''}} value="Branca" >Branca</option>
                        <option {{$candidato->can_cor == 'Preta' ? 'selected' :''}} value="Preta" >Preta</option>
                        <option {{$candidato->can_cor == 'Parda' ? 'selected' :''}} value="Parda" >Parda </option>
                        <option {{$candidato->can_cor == 'Amarela' ? 'selected' :''}} value="Amarela" >Amarela</option>
                        <option {{$candidato->can_cor == 'Indígena' ? 'selected' :''}} value="Indígena" >Indígena
                        </option>
                    </select>
                </div>
                <div class="col-md-1">
                    <label class="form-check-label" for="flexCheckIndeterminate">Peso</label>
                    <input type="text" class="form-control form-control-sm" name="peso" placeholder=""
                        value="{{$candidato->can_peso}}">
                </div>
                <div class="col-md-1">
                    <label class="form-check-label" for="flexCheckIndeterminate">Altura</label>
                    <input type="text" class="form-control form-control-sm" name="altura" placeholder=""
                        value="{{$candidato->can_altura}}">
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Estado Civil </label>
                    <select id="inputState" name="estadocivil" class="form-select form-select-sm"
                        value="{{$candidato->can_estadocivil}}">
                        <option></option>
                        <option {{$candidato->can_estadocivil == 'Solteiro' ? 'selected' :''}} value="Solteiro"
                            >Solteiro</option>
                        <option {{$candidato->can_estadocivil == 'Casado' ? 'selected' :''}} value="Casado" >Casado
                        </option>
                        <option {{$candidato->can_estadocivil == 'Viúvo' ? 'selected' :''}} value="Viúvo" >Viúvo
                        </option>
                        <option {{$candidato->can_estadocivil == 'Separado' ? 'selected' :''}} value="Separado"
                            >Separado</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Possui filhos</label>
                    <div class="form-check ">
                        <input class="form-check-input" type="radio" name="filiacao" id="gridRadios1" value="option2"
                            {{$candidato->can_filiacao == 'sim' ? 'checked' :''}}>
                        <label class="form-check-label" for="gridRadios1">
                            Sim
                        </label>
                    </div>
                    <div class="form-check ">
                        <input class="form-check-input" type="radio" name="filiacao" id="gridRadios2" value="option3"
                            {{$candidato->can_filiacao == 'não' ? 'checked' :''}}>
                        <label class="form-check-label" for="gridRadios2">
                            Não
                        </label>
                    </div>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Gênero </label>
                    <select id="inputState" name="genero" class="form-select form-select-sm">
                        <option></option>
                        <option {{$candidato->can_genero == 'Masculino' ? 'selected' :''}} value="Masculino">Masculino
                        </option>
                        <option {{$candidato->can_genero == 'Feminino' ? 'selected' :''}} value="Feminino">Feminino
                        </option>
                        <option {{$candidato->can_genero == 'Outros' ? 'selected' :''}} value="Outros">Outros</option>

                    </select>

                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Pretensão salarial </label>
                    <input type="text" class="form-control form-control-sm" name="pretensao_salario" placeholder=""
                        value="{{$candidato->can_pretensao_salario}}" onKeyPress="return(moeda(this,'.',',',event))">
                </div>

                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Ex-militar? </label>
                    <select name="exmilitar" id="exmilitar" class="form-select form-select-sm">
                        <option selected></option>
                        <option {{$candidato->can_exmilitar == 'Sim' ? 'selected':''}} value="Sim">Sim</option>
                        <option {{$candidato->can_exmilitar == 'Não' ? 'selected':''}} value="Não">Não</option>

                    </select>

                </div>
                <div class="col-md-3" id="divMilitar">
                    <label class="form-check-label" for="flexCheckIndeterminate">Unidade Militar</label>
                    <input type="text" class="form-control form-control-sm" name="unidademilitar" id="unidademilitar"
                        placeholder="" value="{{$candidato->can_unidademilitar}}">
                </div>
                <div class="col-md-3" id="divMatricula">
                    <label class="form-check-label" for="flexCheckIndeterminate">Matrícula</label>
                    <input type="text" class="form-control form-control-sm" name="matricula" id="matricula"
                        placeholder="" value="{{$candidato->can_matricula}}">
                </div>


            </div>
        </div>
    </div>

    <div class="form-signin">
        <div class="text-end">
            <label class="switch">
                <input type="checkbox" id="informacoesContato" checked>
                <span class="slider round"></span>
            </label>
        </div>

        <div class="text">
            <h2 class="form-signin-heading">Informações de Contato</h2>
            <hr>
        </div>

        <div class="informacoesContato">
            <div class="row g-3">

                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">E-mail </label>
                    <input type="text" class="form-control form-control-sm" placeholder="" name="email"
                        value="{{$candidato->can_email}}">
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Telefone</label>
                    <input type="text" class="form-control form-control-sm" placeholder="(xx) xxxxx-xxxx"
                        onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" name="telefone"
                        value="{{$candidato->can_telefone}}">
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Celular </label>
                    <input type="text" class="form-control form-control-sm" placeholder="(xx) xxxxx-xxxx"
                        onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" name="celular"
                        value="{{$candidato->can_celular}}">
                </div>

            </div>
        </div>

    </div>

    <div class="form-signin">
        <div class="text-end">
            <label class="switch">
                <input type="checkbox" checked id="endereco">
                <span class="slider round"></span>
            </label>
        </div>

        <div class="text">
            <h2 class="form-signin-heading">Endereço</h2>
            <hr>
        </div>

        <div class="endereco">
            <div class="row g-3">
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">CEP
                        <span><strong>*</strong></span></label>
                    <input type="text" maxlength="9" class="form-control form-control-sm" name="cep" id="cep"
                        placeholder="" required value="{{$candidato->can_cep}}">
                </div>
                <div class="col-md-1">
                    <label class="form-check-label" for="flexCheckIndeterminate">UF
                        <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" maxlength="2" name="uf" id="uf"
                        placeholder="" required onkeypress="return lettersOnly(event);" value="{{$candidato->can_uf}}">
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Cidade
                        <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="cidade" id="cidade" placeholder=""
                        required value="{{$candidato->can_cidade}}">
                </div>
                <div class="col-md-7">
                    <label class="form-check-label" for="flexCheckIndeterminate">Bairro
                        <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="bairro" id="bairro" placeholder=""
                        required value="{{$candidato->can_bairro}}">
                </div>
                <div class="col-md-2">
                    <label class="form-check-label"
                        for="flexCheckIndeterminate">Nº</label></label><span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="numero" id="numero" placeholder=""
                        required value="{{$candidato->can_numero}}">
                </div>
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Logradouro</label>
                    <input type="text" class="form-control form-control-sm" name="rua" id="rua" placeholder=""
                        value="{{$candidato->can_rua}}">
                </div>
                <div class="col-md-6">
                    <label class="form-check-label" for="flexCheckIndeterminate">Complemento</label>
                    <input type="text" class="form-control form-control-sm" name="complemento" id="complemento"
                        placeholder="" value="{{$candidato->can_complemento}}">
                </div>
            </div>

        </div>
    </div>



    <div class="form-signin">
        <div class="text-end">
            <label class="switch">
                <input type="checkbox" checked id="academica">
                <span class="slider round"></span>
            </label>
        </div>

        <div class="text">
            <h2 class="form-signin-heading">Formação Acadêmica</h2>
            <hr>
        </div>
        <div class="academica">
            <div class="row g-3">
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Formação
                        <span><strong>*</strong></span></label>
                    <select class="form-select form-select-sm" name="formacao" id="formacao"
                        aria-label="Default select example" required>
                        <option value="null"></option>
                        <option {{$candidato->can_formacao == 'Ensino_Fundamental_completo' ? 'selected' :''}}
                            value="Ensino_Fundamental_completo">Ensino Fundamental completo</option>
                        <option {{$candidato->can_formacao == 'Ensino Fundamental_incompleto' ? 'selected'
                            :''}}value="Ensino Fundamental_incompleto">Ensino Fundamental incompleto</option>
                        <option {{$candidato->can_formacao == 'Ensino_Médio_completo' ? 'selected' :''}}
                            value="Ensino_Médio_completo">Ensino Médio completo</option>
                        <option {{$candidato->can_formacao == 'Ensino_Médio_cursando' ? 'selected' :''}}
                            value="Ensino_Médio_cursando">Ensino Médio cursando</option>
                        <option {{$candidato->can_formacao == 'Ensino_Técnico_cursando' ? 'selected' :''}}
                            value="Ensino_Técnico_cursando">Ensino Técnico cursando</option>
                        <option {{$candidato->can_formacao == 'Ensino_Técnico_completo' ? 'selected' :''}}
                            value="Ensino_Técnico_completo">Ensino Técnico completo</option>
                        <option {{$candidato->can_formacao == 'Superior_Cursando' ? 'selected' :''}}
                            value="Superior_Cursando">Superior Cursando</option>
                        <option {{$candidato->can_formacao == 'Superior_Completo' ? 'selected' :''}}
                            value="Superior_Completo">Superior Completo</option>
                        <option {{$candidato->can_formacao == 'Pós-Graduação_Cursando' ? 'selected' :''}}
                            value="Pós-Graduação_Cursando">Pós-Graduação Cursando</option>
                        <option {{$candidato->can_formacao == 'Pós-Graduação_Completo' ? 'selected' :''}}
                            value="Pós-Graduação_Completo">Pós-Graduação Completo</option>

                    </select>
                </div>
                <div class="col-md-3" id="institucao_div">
                    <label class="form-check-label" for="flexCheckIndeterminate">Instituição de Ensino </label>
                    <input type="text" class="form-control form-control-sm" name="instituicao" placeholder=""
                        value="{{$candidato->can_instituicao}}">
                </div>
                <div class="col-md-3" id="curso_div">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nome do curso </label>
                    <input type="text" class="form-control form-control-sm" name="curso" placeholder=""
                        value="{{$candidato->can_curso}}">
                </div>
                <div class="col-md-2" id="termino_div">
                    <label class="form-check-label" for="flexCheckIndeterminate">Ano em Curso</label>
                    <input type="month" class="form-control form-select-sm" name="termino" placeholder=""
                        value="{{$candidato->can_termino}}">
                </div>
                <div class="col-md-2" id="semestre_div">
                    <label class="form-check-label" for="flexCheckIndeterminate">Semestre em Curso </label>
                    <select class="form-select form-select-sm" name="semestre" aria-label="Default select example"
                        value="{{$candidato->can_semestre}}">
                        <option selected></option>
                        <option {{$candidato->can_semestre == '1º Semestre' ? 'selected' :''}} value="1º Semestre">1º
                            Semestre</option>
                        <option {{$candidato->can_semestre == '2º Semestre' ? 'selected' :''}} value="2º Semestre">2º
                            Semestre</option>

                    </select>
                </div>
                <div class="col-md-3" id="periodo_div">
                    <label class="form-check-label" for="flexCheckIndeterminate">Período em Curso</label>
                    <select class="form-select form-select-sm" name="periodo" aria-label="Default select example"
                        value="{{$candidato->can_periodo}}">
                        <option></option>
                        <option {{$candidato->can_periodo == '1º Período' ? 'selected' :''}} value="1º Período">1º
                            Período
                        </option>
                        <option {{$candidato->can_periodo == '2º Período' ? 'selected' :''}} value="2º Período">2º
                            Período
                        </option>
                        <option {{$candidato->can_periodo == '3º Período' ? 'selected' :''}} value="3º Período">3º
                            Período
                        </option>
                        <option {{$candidato->can_periodo == '2º Período' ? 'selected' :''}} value="4º Período">4º
                            Período
                        </option>
                        <option {{$candidato->can_periodo == '2º Período' ? 'selected' :''}} value="5º Período">5º
                            Período
                        </option>
                        <option {{$candidato->can_periodo == '2º Período' ? 'selected' :''}} value="6º Período">6º
                            Período
                        </option>
                        <option {{$candidato->can_periodo == '2º Período' ? 'selected' :''}} value="7º Período">7º
                            Período
                        </option>
                        <option {{$candidato->can_periodo == '2º Período' ? 'selected' :''}} value="8º Período">8º
                            Período
                        </option>
                        <option {{$candidato->can_periodo == 'Ou Mais' ? 'selected' :''}} value="Ou Mais">Ou Mais
                        </option>

                    </select>
                </div>
            </div>


            <div style="padding-top: 50px">

                <h4 style="position:absolute;margin-top:15px;color: #284D92;">Curso Extracurriculares
                </h4>
                <div class="text-end" style="padding-top: 10px">
                    <input type="button" class="btn btn-success btn-sm" onclick="addCampos()" value="Adicionar Curso">
                </div>
                <hr>

            </div>

            @php

            if(!empty($candidato->can_curso_extra)){

            $tamanho = count($candidato->can_curso_extra);
            }else{
            $tamnho = 1;
            }

            @endphp


            @for($i = 0; $i <$tamanho; $i++) <div class="row g-3 shadow p-4 mb-5 bg-body rounded"
                id="div<?php echo $i;?>" style="margin:0px 20px 0px 20px; padding:20px;">
                <div class="text-end">
                    <input type="button" class="btn btn-danger btn-sm" onclick="removeCampos(<?php echo $i;?>)"
                        value="Remover Curso">
                </div>
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Cursos extracurriculares</label>
                    <input type="text" class="form-control form-control-sm" name="curso_extra[]" placeholder=""
                        value="{{$candidato->can_curso_extra[$i]}}">
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Ano termino</label>
                    <input type="month" class="form-control form-control-sm" name="curso_ano_termino[]" placeholder=""
                        value="{{$candidato->can_curso_ano_termino[$i]}}">
                </div>
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Aréa de Atuação</label>
                    <input type="text" class="form-control form-control-sm" name="curso_area_atuacao[]" id="areaatuacao" value="{{$candidato->can_curso_area_atuacao[$i]}}">
                </div>



        </div>

        @endfor

        <!-- div responsavel por adicionar outros campo -->
        <div id="lista" style="padding: 30px 0px 30px 0px"> </div>
        <!-- ****************************************** -->
        <div style="padding-top: 50px">

            <h4 style="position:absolute;margin-top:15px;color: #284D92;">Curso UTV
            </h4>
            <div class="text-end" style="padding-top: 10px">
                <input type="button" class="btn btn-success btn-sm" onclick="addCamposUtv()" value="Adicionar Curso">
            </div>
            <hr>

        </div>

        @php



        if(!empty($candidato->can_utv_titlulo)){

        $tamanho2 = count($candidato->can_utv_titlulo);
        }else{
        $tamanho2 = 1;
        }

        @endphp

        @for($i = 0; $i <$tamanho2; $i++) <div class="row g-3 shadow p-4 mb-5 bg-body rounded"
            id="divUTv<?php echo $i; ?>" style="margin:0px 20px 0px 20px; padding:20px;">
            <div class="text-end">
                <input type="button" class="btn btn-danger btn-sm" onclick="removeCamposUTv(<?php echo $i;?>)"
                    value="Remover Curso">
            </div>

            <div class="col-md-4">
                <label class="form-check-label" for="flexCheckIndeterminate">Título do curso</label>
                <input type="text" class="form-control form-control-sm" name="utv_titlulo[]" placeholder=""
                    value="{{$candidato->can_utv_titlulo[$i]}}">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Carga horária</label>
                <input type="text" class="form-control form-control-sm" name="utv_carga[]" placeholder=""
                    value="{{$candidato->can_utv_carga[$i]}}">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Data de Emissão</label>
                <input type="month" class="form-control form-control-sm" name="utv_data[]" placeholder=""
                    value="{{$candidato->can_utv_data[$i]}}">
            </div>

    </div>
    @endfor


    <!-- div responsavel por adicionar outros campo -->
    <div id="listaUTv" style="padding: 30px 0px 30px 0px"> </div>
    <!-- ****************************************** -->

    </div>
    </div>

    <div class="form-signin">
        <div class="text-end">
            <label class="switch">
                <input type="checkbox" checked id="idioma_check">
                <span class="slider round"></span>
            </label>
        </div>

        <div class="text">
            <h2 class="form-signin-heading" style="padding-top: 50px; position: absolute;">Idiomas
            </h2>
            <div class="text-end" style="padding-top: 50px; position: relative; margin-right:10px">
                <input type="button" class="btn btn-success btn-sm" onclick="addIdioma()" value="Adicionar Idioma">
            </div>
            <hr>
        </div>

        <div class="idioma_check">

            @php
            $tamanho3 = count($candidato->can_idioma);

            if(!empty($candidato->can_idioma)){

            $tamanho3 = count($candidato->can_idioma);
            }else{
            $tamanho3 = 1;
            }


            @endphp

            @for($i = 0; $i <$tamanho3; $i++) <div class="endereco">
                <div class="row g-3 shadow p-3 mb-5 bg-body rounded" id="divIdioma<?php echo $i;?>"
                    style="margin: 20px">
                    <div class="text-end">
                        <input type="button" class="btn btn-danger btn-sm" onclick="removeIdioma(<?php echo $i;?>)"
                            value="Remover Curso">
                    </div>
                    <div class="col-md-3">
                        <label class="form-check-label" for="flexCheckIndeterminate">Escolha um idioma
                            <span><strong>*</strong></span></label>
                        <select class="form-select form-select-sm" name="idioma[]" id="idioma"
                            aria-label="Default select example">
                            <option selected></option>
                            <option {{$candidato->can_idioma[$i] == 'Inglês' ? 'selected' :''}} value="Inglês">Inglês
                            </option>
                            <option {{$candidato->can_idioma[$i] == 'Francês' ? 'selected' :''}} value="Francês">Francês
                            </option>
                            <option {{$candidato->can_idioma[$i] == 'Espanhol' ? 'selected' :''}}
                                value="Espanhol">Espanhol</option>
                            <option {{$candidato->can_idioma[$i] == 'Outros' ? 'selected' :''}} value="Outros">Outros
                            </option>

                        </select>
                    </div>
                    @if(!empty($can_outro_idioma[$i]))

                    <div class="col-md-3" id="div_outro">
                        <label class="form-check-label" for="flexCheckIndeterminate">Digite outro idioma</label>
                        <input type="text" name="outro_idioma[]" id="outro_idioma" class="form-control form-control-sm"
                            value="{{$candidato->$can_outro_idioma[$i]}}">
                    </div>
                    @endif

                    <div class="col-md-3">
                        <label class="form-check-label" for="flexCheckIndeterminate">Nível de Escrita
                            <span><strong>*</strong></span></label>
                        <select class="form-select form-select-sm" name="idioma_escrita[]" id="idioma_escrita"
                            aria-label="Default select example">
                            <option></option>
                            <option {{$candidato->can_idioma_escrita[$i] == 'Básico' ? 'selected' :''}}
                                value="Básico">Básico</option>
                            <option {{$candidato->can_idioma_escrita[$i] == 'Intermediário' ? 'selected' :''}}
                                value="Intermediário">Intermediário</option>
                            <option {{$candidato->can_idioma_escrita[$i] == 'Avançado' ? 'selected' :''}}
                                value="Avançado">Avançado</option>


                        </select>
                    </div>

                    <div class="col-md-3">
                        <label class="form-check-label" for="flexCheckIndeterminate">Nível de Leitura
                            <span><strong>*</strong></span></label>
                        <select class="form-select form-select-sm" name="idioma_leitura[]" id="idioma_leitura"
                            aria-label="Default select example">
                            <option></option>
                            <option {{$candidato->can_idioma_escrita[$i] == 'Básico' ? 'selected' :''}}
                                value="Básico">Básico</option>
                            <option {{$candidato->can_idioma_escrita[$i] == 'Intermediário' ? 'selected' :''}}
                                value="Intermediário">Intermediário</option>
                            <option {{$candidato->can_idioma_escrita[$i] == 'Avançado' ? 'selected' :''}}
                                value="Avançado">Avançado</option>


                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-check-label" for="flexCheckIndeterminate">Nível de Conversação
                            <span><strong>*</strong></span></label>
                        <select class="form-select form-select-sm" name="idioma_conversacao[]" id="idioma_conversacao"
                            aria-label="Default select example">
                            <option></option>
                            <option {{$candidato->can_idioma_escrita[$i] == 'Básico' ? 'selected' :''}}
                                value="Básico">Básico</option>
                            <option {{$candidato->can_idioma_escrita[$i] == 'Intermediário' ? 'selected' :''}}
                                value="Intermediário">Intermediário</option>
                            <option {{$candidato->can_idioma_escrita[$i] == 'Avançado' ? 'selected' :''}}
                                value="Avançado">Avançado</option>


                        </select>
                    </div>

                </div>
        </div>
            @endfor
            <!-- div responsavel por adicionar outros campo -->
            <div id="listaIdioma" style="padding: 30px 0px 30px 0px"> </div>
            <!-- ****************************************** -->
        </div>
    </div>  

    <div class="form-signin" style="margin-bottom: 50px">
        <div class="text-end">
            <label class="switch">
                <input type="checkbox" checked id="profissional">
                <span class="slider round"></span>
            </label>
        </div>

        <div class="text">
            <h2 class="form-signin-heading" style="position:absolute;margin-top:50px;">Experiência Profissional
            </h2>
            <div class="text-end" style="padding-top: 50px; position: relative; margin-right:10px">
                <input type="button" class="btn btn-success btn-sm" onclick="addExperiencia()"
                    value="Adicionar Experiência">
            </div>
            <hr>
        </div>

        <div class="profissional">
        <div class="row g-3">

            <div class="col-md-12">
                <div>

                    <label class="form-check-label" for="flexCheckIndeterminate">Primeiro emprego? </label>
                </div>
                <div class="form-check-inline">
                    <input class="form-check-input" type="radio" name="area_profissional" value="sim"
                        id="area_profissional_sim" onclick="profissional('sim')" {{$candidato->can_area_profissional
                    == 'sim' ? 'checked' :''}}>
                    <label class="form-check-label" for="flexRadioDefault1">
                        Sim
                    </label>
                </div>
                <div class="form-check-inline">
                    <input class="form-check-input" type="radio" name="area_profissional" value="não"
                        id="area_profissional_nao" onclick="profissional('não')" {{$candidato->can_area_profissional
                    == 'não' ? 'checked' :''}}>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Não
                    </label>
                </div>

            </div>

            @php
            $tamanho4 = count($candidato->can_cargo_empresa);

            if(!empty($candidato->can_cargo_empresa)){

            $tamanho4 = count($candidato->can_cargo_empresa);
            }else{
            $tamanho4 = 1;
            }


            @endphp

            @for($i = 0; $i <$tamanho4; $i++) <div class="row g-3 shadow p-3 mb-5 bg-body rounded"
                id="divExperiencia<?php echo $i;?>" style="margin: 10px">
                <div class="text-end"> <input type="button" class="btn btn-danger btn-sm"
                        onclick="removeCamposEx(<?php echo $i;?>)" value="Remover Curso"></div>
                <div class="col-md-6" id="01">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nome da empresa </label>
                    <input type="text" class="form-control form-control-sm" name="nome_empresa[]" placeholder=""
                        value="{{$candidato->can_nome_empresa[$i]}}">
                </div>

                <div class="col-md-4" id="02">
                    <label class="form-check-label" for="flexCheckIndeterminate">Cargo </label>
                    <input type="text" class="form-control form-control-sm" name="cargo_empresa[]" placeholder=""
                        value="{{$candidato->can_cargo_empresa[$i]}}">
                </div>

                <div class="col-md-2" id="04">
                    <label class="form-check-label" for="flexCheckIndeterminate">Data de Admissão </label>
                    <input type="month" class="form-control form-control-sm" placeholder="" name="data_inicio_empresa[]"
                        value="{{$candidato->can_data_inicio_empresa[$i]}}">
                </div>

                <div class="col-md-2" id="05">
                    <label class="form-check-label" for="flexCheckIndeterminate">Data de termino </label>
                    <input type="month" class="form-control form-control-sm" placeholder=""
                        name="data_termino_empresa[]" value="{{$candidato->can_data_termino_empresa[$i]}}">
                </div>
                <div class="col-md-2" id="06">
                    <label class="form-check-label" for="flexCheckIndeterminate">Salário</label>
                    <input type="text" class="form-control form-control-sm" placeholder="" name="salario_empres[]"
                        value="{{$candidato->can_salario_empresa[$i]}}" onKeyPress="return(moeda(this,'.',',',event))">
                </div>
                <div class="col-md-3" id="07">
                    <label class="form-check-label" for="flexCheckIndeterminate">Softwares utilizava</label>
                    <input type="text" class="form-control form-control-sm" placeholder="" name="software_empresa[]"
                        value="{{$candidato->can_software_empresa[$i]}}">
                </div>
        </div>
        @endfor

        <!-- div responsavel por adicionar outros campo -->
        <div id="listaExperiencia" style="padding: 30px 0px 30px 0px"> </div>
        <!-- ****************************************** -->
        </div>
    </div>
</div>

<div class="form-signin" style="margin-bottom: 50px">
    <div class="text-end">
        <label class="switch">
            <input type="checkbox" checked id="preferencia">
            <span class="slider round"></span>
        </label>
    </div>

    <div class="text">
        <h2 class="form-signin-heading">Prefêrencias Profissionais
        </h2>

        <hr>
    </div>

    <div class="preferencia">


        <div class="row g-3 shadow p-3 mb-5 bg-body rounded" id="00" style="margin: 10px">

            @php
            $tamanho5 = count($candidato->can_tempoexperiencia);

            if(!empty($candidato->can_tempoexperiencia)){

            $tamanho5 = count($candidato->can_tempoexperiencia);
            }else{
            $tamanho5 = 1;
            }


            @endphp


            <div class="row g-3">
                <div class="col-md-6" id="tempoexperiencia_div">
                    <label class="form-check-label" for="flexCheckIndeterminate">Selecione Prefêrencias
                        Profissionais</label>
                    <select class="form-select form-select-sm" name="tempoexperiencia[]" id="tempoexperiencia"
                        aria-label="Default select example" required>
                        <option selected></option>
                        <option  value="Financeiro">Financeiro</option>
                        <option  value="Administração">Administração</option>
                        <option  value="Vendas">Vendas</option>
                        <option  value="RH">RH</option>
                        <option  value="Técnologia da informação">Técnologia da informação</option>
                        <option  value="Logística">Logística</option>
                        <option  value="Produção">Produção</option>
                    </select>
                </div>
                <div class="col-md-2" style="margin-top: 42px;">
                
                        <input type="button" class="btn btn-success btn-sm" onclick="addPreferencia()"
                            value="Adicionar Prefêrencias">
                    
                </div>
            </div>

            @for($i = 0; $i <$tamanho5; $i++)
            
            <div class="row g-3" id="divPreferencia<?php echo $i; ?>">
                <div class="col-md-6" id="">
                    <label class="form-check-label" for="flexCheckIndeterminate">Selecione Prefêrencias
                        Profissionais</label>
                    <select class="form-select form-select-sm" name="tempoexperiencia[]" id="tempoexperiencia"
                        aria-label="Default select example" required>
                        <option selected></option>
                        <option {{$candidato->can_tempoexperiencia[$i] == 'Financeiro' ? 'selected' :''}} value="Financeiro">Financeiro</option>
                        <option {{$candidato->can_tempoexperiencia[$i] == 'Administração' ? 'selected' :''}}  value="Administração">Administração</option>
                        <option {{$candidato->can_tempoexperiencia[$i] == 'Vendas' ? 'selected' :''}}  value="Vendas">Vendas</option>
                        <option {{$candidato->can_tempoexperiencia[$i] == 'RH' ? 'selected' :''}}  value="RH">RH</option>
                        <option {{$candidato->can_tempoexperiencia[$i] == 'Técnologia da informação' ? 'selected' :''}}  value="Técnologia da informação">Técnologia da informação</option>
                        <option {{$candidato->can_tempoexperiencia[$i] == 'Logística' ? 'selected' :''}}  value="Logística">Logística</option>
                        <option {{$candidato->can_tempoexperiencia[$i] == 'Produção' ? 'selected' :''}}  value="Produção">Produção</option>
                    </select>
                </div>
                <div class="col-md-2" style="margin-top: 42px;">
                   
                    <input type="button" class="btn btn-danger btn-sm" onclick="removeCamposPreferencia(<?php echo $i;?>)" value="Remover Prefêrencias">
                    
                </div>
            </div>
            @endfor
            <!-- div responsavel por adicionar outros campo -->
            <div id="listaPreferencia" style="padding-top: 20px"> </div>
            <!-- ****************************************** -->

        </div>
    </div>
</div>






    <div class="row g-3 shadow p-3 mb-5 bg-body rounded" id="00" style="margin: 10px">
        <style>
            .texto {
                max-height: 500px;
                overflow-y: auto;
                justify-content: center;
            }
        </style>

        <div class="texto">
            <p style="text-align: center;margin-top:10px"><b style="font-size: 20px">SISTEMA DE EMPREGABILIDADE
                    CDL
                    MANAUS</b></p>
            <p style="text-align: center"><b style="font-size: 18px">Termo de Política para Uso do Sistema</b>
            </p>
            <p><b>1. SERVIÇO</b></p>
            <p style="margin-left: 30px">1.1 <b>Objetivo do Serviço:</b>facilitar pessoas interessadas em buscar
                colocação ou recolocação no
                mercado de trabalho e empresas interessadas em contratar colaboradores ou ofertar vagas de
                emprego.</p>
            <p><b>2. POLÍTICA DE PRIVACIDADE</b></p>
            <p style="margin-left: 30px">2.1 A presente política de privacidade rege o tratamento dos dados das
                pessoas,
                imputados durante
                o acesso e uso dos serviços que o site CDL Manaus oferece aos seus Usuários. Todas as
                informações pessoais relativas a membros, clientes, empresas e visitantes, coletadas por meio do
                Sistema de Empregabilidade CDL Manaus, são em conformidade com a Lei de Proteção de Dados
                Pessoais (Lei nº 13.709/18), garantindo que qualquer informação fornecida pelos usuários é
                tratada com diligência e confidencialidade.</p>
            <p style="margin-left: 30px">2.2 A nossa Política de Privacidade contém informações claras sobre a
                coleta,
                uso, armazenamento e
                proteção de dados dos usuários do serviço. Esta Política se aplica a todos os serviços e
                aplicações
                disponibilizados pelo site CDL Manaus, podendo haver termos específicos para determinados
                serviços, o que será informado oportunamente ao Usuário.
            </p>
            <p><b>3. DEFINIÇÕES</b></p>
            <p style="margin-left: 30px">3.1 CANDIDATO: pessoa interessada em cadastrar-se no Sistema com o
                propósito de
                pesquisar
                oportunidade de emprego;</p>
            <p style="margin-left: 30px">3.2 EMPRESA: entidade interessada em pesquisar, selecionar candidatos,
                ou
                publicar disponibilidade
                de vagas de emprego;</p>
            <p style="margin-left: 30px">3.3 MILITARES: organização governamental interessada em cadastrar-se no
                Sistema
                com o propósito
                de proporcionar aos seus integrantes e ex-integrantes a oportunidade de integração ao mercado
                do trabalho.</p>
            <p style="margin-left: 30px">3.4 CDL MANAUS: mantenedora do Sistema Empregabilidade;</p>
            <p style="margin-left: 30px">3.5 UTV: unidade de treinamento e capacitação da CDL Manaus.</p>
            <p><b>4. OBJETIVO GERAL DA POLÍTICA DE PRIVACIDADE</b></p>
            <p style="margin-left: 30px">4.1. Facilitar o contato entre candidatos que buscam oportunidades de
                trabalho
                e empresas que
                desejam selecionar profissionais qualificados;</p>
            <p style="margin-left: 30px">4.2. Servir de ponto de encontro para o sucesso, no qual as empresas
                encontram
                os talentos para as
                suas vagas, e os candidatos acham as melhores empresas e oportunidades para alcançar o êxito
                profissional.
            </p>
            <p><b>5. OBJETIVOS ESPECIFICOS DA POLÍTICA DE PRIVACIDADE</b></p>
            <p style="margin-left: 30px">5.1. Utilização do SISTEMA para cadastramento de currículo do
                CANDIDADO,
                sendo
                de sua inteira
                responsabilidade a veracidade e todas informações inseridas no CADASTRO, não tendo a CDL
                Manaus qualquer reponsabilidade no conteúdo cadastrado;</p>
            <p style="margin-left: 30px">5.2. Disponibilizar currículos de pessoas habilitadas ou não pela
                Universidade
                de Tecnologia do Varejo
                (UTV), facilitando o acesso ao emprego;</p>
            <p style="margin-left: 30px">5.3. Captar clientes potenciais com os cursos da UTV / CDL Manaus.
            </p>
            <p><b>6. POLÍTICA DE PRIVACIDADE</b></p>
            <p style="margin-left: 30px">6.1.<b> O que fazemos com as suas informações?</b></p>
            <p style="margin-left: 45px"><span style="margin-right: 20px; color:#000;font-size:20px;"><b>a</b></span>.
                Quando
                você realiza seu cadastro em nossa plataforma, coletamos as informações pessoais
                que você nos fornece, tais como seu nome, CPF, RG, e-mail, número de telefone e/ou telefone
                celular, morada, data de nascimento, grau de escolaridade, cursos de aprimoramento,
                informações profissionais e últimas experiências relacionadas a emprego.</p>

            <p style="margin-left: 45px"><span style="margin-right: 20px; color:#000;font-size:20px;"><b>b</b></span>.
                De posse
                dessas informações, partes delas serão distribuídas em nossa página para facilitar a
                ligação entre você e uma empresa e vice-versa, através de um algoritmo criado
                especificamente para essa função. Sendo assim, uma empresa ou uma instituição, seja ela
                pública ou privada terá acesso a seus dados.</p>
            <p style="margin-left: 45px"><span style="margin-right: 20px; color:#000;font-size:20px;"><b>c</b></span>. A
                CDL
                Manaus se compromete a não usar seus dados para outros fins que não sejam única e
                exclusivamente para intermediar contatos de trabalho entre você e uma empresa e/ou
                instituição. No entanto a CDL não tem responsabilidade por qualquer vínculo empregatício
                ou acordo firmado entre as partes.</p>

            <p style="margin-left: 45px"><span style="margin-right: 20px; color:#000;font-size:20px;"><b>d</b></span>. É
                vedado
                o acesso total de empresas não cadastradas aos seus dados.</p>
            <p style="margin-left: 45px"><span style="margin-right: 20px; color:#000;font-size:20px;"><b>e</b></span>.
                Se faz
                necessário ressaltar, que ao aceitar nossa política de privacidade, você nos autoriza a
                informá-lo sobre nossos serviços, produtos e outras atualizações por e-mail, sms ou outro
                meio eletrônico.
            </p>
            <p style="margin-left: 45px"><span style="margin-right: 20px; color:#000;font-size:20px;"><b>f</b></span>.
                Todas as
                informações pessoais relativas a membros, assinantes, clientes ou visitantes que
                usem o portal de empregabilidade serão tratadas em concordância com a Lei da Proteção de
                Dados Pessoais (Lei nº 13.709/18).</p>
            <p style="margin-left: 45px"><span style="margin-right: 20px; color:#000;font-size:20px;"><b>g</b></span>. O
                uso do
                sistema de empregabilidade CDL MANAUS pressupõe a aceitação deste acordo de
                privacidade. A CDL MANAUS reserva-se ao direito de alterar este acordo sem aviso prévio.
                Deste modo, recomendamos que consulte a nossa política de privacidade com regularidade
                de forma a estar sempre atualizado.</p>

            <p><b>6.2. Os anúncios de oferta de vagas e programação de treinamento e capacitação da CDL Manaus.
                </b></p>
            <p style="margin-left: 45px"><span style="margin-right: 20px; color:#000;font-size:20px;"><b>a</b></span>. A
                política de anúncios do sistema de Empregabilidade CDL Manaus, restringe sua publicidade
                de anúncios ao tempo da sua visita e as páginas que visitou dentro do nosso website. </p>
            <p><b>6.3. Cookies</b></p>
            <p style="margin-left: 45px"><span style="margin-right: 20px; color:#000;font-size:20px;"><b>a</b></span>. A
                CDL
                MANAUS, não utiliza cookies muito menos armazena dados de clientes para
                comercializar ou exibir anúncios. </p>
            <p style="margin-left: 45px"><span style="margin-right: 20px; color:#000;font-size:20px;"><b>b</b></span>.
                Os
                cookies rastreáveis são ou pode ser partes referentes as ligações de uso dos sites das redes
                sociais. (Facebook, Instagram, Youtube e outros)</p>

            <p><b>6.4. Ligações a sites de terceiros</b></p>

            <p style="margin-left: 45px"><span style="margin-right: 20px; color:#000;font-size:20px;"><b>a</b></span>. O
                CDL
                MANAUS possui ligações para outros sites, os quais, ao nosso ver, podem conter
                informações / ferramentas úteis para os nossos visitantes. A nossa política de privacidade não
                é aplicada a sites de terceiros, pelo que, caso visite outro site a partir do nosso deverá ler a
                política de privacidade do mesmo. </p>
            <p style="margin-left: 45px"><span style="margin-right: 20px; color:#000;font-size:20px;"><b>b</b></span>. A
                CDL
                MANAUS não se responsabiliza pela política de privacidade ou conteúdo presente nos
                sites de terceiros.</p>

            <p><b>7. DO CONSENTIMENTO DE USO DE SUAS INFORMAÇÕES</b></p>
            <p style="margin-left: 30px">7.1 Quando você nos fornece as suas informações pessoais para completar
                seu
                cadastro,
                automaticamente está concordando com a nossa coleta e uso de informações pessoais apenas
                para esses fins específicos.
            </p>
            <p style="margin-left: 30px">7.2 <b>Como posso retirar os meus dados da lista de marketing?</b> </p>
            <p style="margin-left: 45px"><span style="margin-right: 20px; color:#000;font-size:20px;"><b>a</b></span>.
                Podemos
                divulgar suas informações pessoais se formos obrigados por lei a fazê-lo (para
                autoridades competentes) ou se você violar nossos Termos de Serviço. </p>

            <p><b>8. DA SEGURANÇA DE SEUS DADOS</b></p>
            <p style="margin-left: 30px">8.1 <b>Links Internos e Links Externos</b><br>Quando você nos fornece
                as
                suas
                informações pessoais para completar seu cadastro,
                automaticamente está concordando com a nossa coleta e uso de informações pessoais apenas
                para esses fins específicos.
            </p>
            <p><b>9. DA IDADE DE CONSENTIMENTO</b></p>
            <p style="margin-left: 30px">9.1. Ao usar esse site e cadastrar suas informações, você confirma que
                é
                maior
                de idade ou que
                realizou seu cadastro sob a orientação de uma pessoa responsável maior idade, e que se
                localizava
                em seu estado ou província de residência e que nos deu seu consentimento para armazenar seus
                dados pessoais.
            </p>

            <p><b>10. DAS ALTERAÇÕES NA POLÍTICA DE PRIVACIDADE </b></p>
            <p style="margin-left: 30px">10.1. Reservamos o direito de modificar essa política de privacidade a
                qualquer
                momento. Portanto,
                por favor, leia-a com frequência. As alterações e esclarecimentos surtem efeito imediatamente
                após serem publicadas no site. Caso façamos alterações na política de privacidade, iremos
                notificálo
                sobre a atualização. Assim, você saberá quais informações coletamos, como as usamos, e sob
                que circunstâncias, caso aplicável, as utilizaremos e/ou divulgaremos.

            </p>
            <p style="margin-left: 30px">10.2. Caso ocorra a fusão de nosso site com outra ferramenta da
                empresa,
                suas
                informações podem ser
                transferidas para os novos bancos de dados para que possamos continuar acessando e ofertando
                nossos serviços e produtos para você.

            </p>

            <p><b>11. PERGUNTAS E INFORMAÇÕES DE CONTATO </b></p>
            <p style="margin-left: 30px">11.1. Se você gostaria de acessar, corrigir, alterar ou excluir
                quaisquer
                informações pessoais que temos
                sobre você, registre uma queixa, ou simplesmente peça mais informações de contato conosco
                através do e-mail suporte@cdlmanaus.org.br ou por telefone: (92) 3627-2894.

            </p>


        </div>

        <div class="form-check" style="margin-top: 80px">
            <input class="form-check-input" type="checkbox" name="termo" id="termo" required {{$candidato->can_termo
            == 'on' ? 'checked' :''}}>
            <label class="form-check-label" for="flexCheckChecked" style="color: #0d6efd">
                Li e aceito os Termos da Política de Dados do Site<span><strong>*</strong></span></label>
            </label>
        </div>
        <hr>
        <!--
        <div class="text-end">
            <input type="submit" class="btn btn-primary" value="Salvar Registros">
        </div>

    -->
   
    <span> Campos Obrigatórios <strong>*</strong></span>
    <div class="text-end">
        <input type="submit" class="btn btn-primary" value="Salvar Registros">
    </div>
    </div>



</form>


@endsection


<script>
    var cont01 = 1;

    function addCampos(){

        if(cont01 < 4){
        
            var div = document.createElement('div');
            div.innerHTML = '<div class="row g-3 shadow p-3 mb-5 bg-body rounded" id="div'+cont01+'" style="margin:0px 20px 0px 20px; padding:20px;"> <div class="text-end"> <input type="button" class="btn btn-danger btn-sm" onclick="removeCampos('+cont01+')" value="Remover Curso"></div><div class="col-md-4"> <label class="form-check-label" for="flexCheckIndeterminate">Cursos extracurriculares</label><input type="text" class="form-control form-control-sm" name="curso_extra[]" placeholder=""> </div><div class="col-md-2"> <label class="form-check-label" for="flexCheckIndeterminate">Ano termino</label><input type="month" class="form-control form-control-sm" name="curso_ano_termino[]" placeholder=""></div><div class="col-md-4"> <label class="form-check-label" for="flexCheckIndeterminate">Aréa de Atuação</label> <input type="text" class="form-control form-control-sm" name="curso_area_atuacao[]" id="areaatuacao">  </div>';
                    document.getElementById('lista').appendChild(div)
            cont01++;
            
        }
    }

    function removeCampos(id){

         document.getElementById('div'+id).remove();   
         cont01--;
    }
</script>

<script>
    var cont02 =1;
    function addCamposUtv(){
     
     if(cont02 < 4){

        var div = document.createElement('div');
        div.innerHTML = '<div class="row g-3 shadow p-3 mb-5 bg-body rounded" id="divUTv'+cont02+'" style="margin:0px 20px 0px 20px; padding:20px;"> <div class="text-end"> <input type="button" class="btn btn-danger btn-sm" onclick="removeCamposUTv('+cont02+')" value="Remover Curso"></div> <div class="col-md-4"><label class="form-check-label" for="flexCheckIndeterminate">Título do curso</label> <input type="text" class="form-control form-control-sm" name="utv_titlulo[]" placeholder=""> </div>  <div class="col-md-2">  <label class="form-check-label" for="flexCheckIndeterminate">Carga horária</label> <input type="text" class="form-control form-control-sm" name="utv_carga[]" placeholder="">  </div> <div class="col-md-2">  <label class="form-check-label" for="flexCheckIndeterminate">Data de Emissão</label><input type="month" class="form-control form-control-sm" name="utv_data[]" placeholder=""> </div>';
                 document.getElementById('listaUTv').appendChild(div)
        cont02++;
     }

    }

    function removeCamposUTv(id){

         document.getElementById('divUTv'+id).remove();
         cont02--;   
    }
</script>

<script>
    var cont03 =1;

        function addIdioma(){
            if(document.getElementById('idioma').value != ''){
                if(cont03 < 4){

                    var div = document.createElement('div');
                    div.innerHTML = '<div class="row g-3 shadow p-3 mb-5 bg-body rounded" id="divIdioma'+cont03+'" style="margin:0px 20px 0px 20px; padding:20px;"> <div class="text-end"> <input type="button" class="btn btn-danger btn-sm" onclick="removeCamposIdioma('+cont03+')" value="Remover Curso"></div> <div class="col-md-3"><label class="form-check-label" for="flexCheckIndeterminate">Escolha um idioma <span><strong>*</strong></span></label><select class="form-select form-select-sm" name="idioma[]" id="idioma" aria-label="Default select example"> <option selected></option> <option value="Inglês">Inglês</option><option value="Francês">Francês</option>  <option value="Espanhol">Espanhol</option><option value="Outros">Outros</option> </select></div> <div class="col-md-3"><label class="form-check-label" for="flexCheckIndeterminate">Nível de Escrita<span><strong>*</strong></span></label><select class="form-select form-select-sm" name="idioma_escrita[]" id="idioma_escrita" aria-label="Default select example"><option selected></option> <option value="Básico">Básico</option> <option value="Intermediário">Intermediário</option> <option value="Avançado">Avançado</option> </select></div> <div class="col-md-3"><label class="form-check-label" for="flexCheckIndeterminate">Nível de Leitura <span><strong>*</strong></span></label> <select class="form-select form-select-sm" name="idioma_leitura[]" id="idioma_leitura" aria-label="Default select example">  <option selected></option> <option value="Básico">Básico</option>  <option value="Intermediário">Intermediário</option> <option value="Avançado">Avançado</option>   </select></div>  <div class="col-md-3"> <label class="form-check-label" for="flexCheckIndeterminate">Nível de Conversação <span><strong>*</strong></span></label> <select class="form-select form-select-sm" name="idioma_conversacao[]" id="idioma_conversacao" aria-label="Default select example">                <option selected></option> <option value="Básico">Básico</option> <option value="Intermediário">Intermediário</option> <option value="Avançado">Avançado</option></select></div> </div>';
                            document.getElementById('listaIdioma').appendChild(div)

                    cont03++;
                    console.log(cont03);

                }
            }

        }
    function removeIdioma(id){

         document.getElementById('divIdioma'+id).remove();   
         cont03--;
    }
</script>

<script>
    var cont04 =1;
    function addExperiencia(){
        if(cont04 < 4){

        var div = document.createElement('div');
        div.innerHTML = '<div  class="row g-3 shadow p-3 mb-5 bg-body rounded" id="divExperiencia'+cont04+'" style="margin: 10px"> <div class="text-end"> <input type="button" class="btn btn-danger btn-sm" onclick="removeCamposEx('+cont04+')" value="Remover Curso"></div> <div class="col-md-6" id="01">  <label class="form-check-label" for="flexCheckIndeterminate">Nome da empresa </label> <input type="text" class="form-control form-control-sm" name="nome_empresa[]" placeholder=""> </div><div class="col-md-4" id="02"> <label class="form-check-label" for="flexCheckIndeterminate">Cargo </label> <input type="text" class="form-control form-control-sm" name="cargo_empresa[]" placeholder=""> </div> <div class="col-md-2" style="margin-top: 40px;" id="03"> <label class="form-check-label" for="inlineCheckbox1">Empresa atual?</label><input class="form-check-input" type="checkbox" name="atual_empresa[]"> </div> <div class="col-md-2" id="04"> <label class="form-check-label" for="flexCheckIndeterminate">Data de Admissão </label>  <input type="month" class="form-control form-control-sm" placeholder="" name="data_inicio_empresa[]"> </div> <div class="col-md-2" id="05"><label class="form-check-label" for="flexCheckIndeterminate">Data de termino </label><input type="month" class="form-control form-control-sm" placeholder="" name="data_termino_empresa[]">  </div> <div class="col-md-2" id="06"><label class="form-check-label" for="flexCheckIndeterminate">Salário</label>  <input type="text" class="form-control form-control-sm" placeholder="" name="salario_empresa[]">  </div>  <div class="col-md-3" id="07">   <label class="form-check-label" for="flexCheckIndeterminate">Softwares utilizava</label>  <input type="text" class="form-control form-control-sm" placeholder="" name="software_empresa[]"> </div></div></div>';
                 document.getElementById('listaExperiencia').appendChild(div)
        cont04++;
       
        }
    }

    function removeCamposEx(id){

         document.getElementById('divExperiencia'+id).remove();   
         cont04--;
    }

</script>

<script>
    var cont05 =1;
    function addPreferencia(){
        if(cont05 <4){

        var div = document.createElement('div');
        div.innerHTML = '<div class="row g-3" id="divPreferencia'+cont05+'"><div class="col-md-6" id="tempoexperiencia_div"><label class="form-check-label" for="flexCheckIndeterminate">Selecione Prefêrencias Profissionais</label> <select class="form-select form-select-sm" name="tempoexperiencia[]" id="tempoexperiencia" aria-label="Default select example" required> <option selected></option><option value="Financeiro">Financeiro</option><option value="Administração">Administração</option><option value="Vendas">Vendas</option><option value="RH">RH</option><option value="Técnologia da informação">Técnologia da informação</option><option value="Logística">Logística</option> <option value="Produção">Produção</option></select></div><div class="col-md-2" id="tempoexperiencia_div" style="margin-top:42px"><input type="button" class="btn btn-danger btn-sm" onclick="removeCamposPreferencia('+cont05+')" value="Remover Prefêrencias"> </div></div></div>';
                 document.getElementById('listaPreferencia').appendChild(div)
        cont05++;
       
        }
    }

    function removeCamposPreferencia(id){

         document.getElementById('divPreferencia'+id).remove();  
         cont05--;
    }
</script>

<!-- *************************validando cnpj ************************* -->
<script>
    function formatarCampo(campoTexto) {
        if (campoTexto.value.length <= 11) {
            campoTexto.value = mascaraCpf(campoTexto.value);
        } else {
            campoTexto.value = mascaraCnpj(campoTexto.value);
        }
    }
    function retirarFormatacao(campoTexto) {
        campoTexto.value = campoTexto.value.replace(/(\.|\/|\-)/g,"");
    }
    function mascaraCpf(valor) {
        return valor.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/g,"\$1.\$2.\$3\-\$4");
    }
    function mascaraCnpj(valor) {
        return valor.replace(/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/g,"\$1.\$2.\$3\/\$4\-\$5");
    }

    function somenteNumeros(e) {
        var charCode = e.charCode ? e.charCode : e.keyCode;
        // charCode 8 = backspace   
        // charCode 9 = tab
        if (charCode != 8 && charCode != 9) {
            // charCode 48 equivale a 0   
            // charCode 57 equivale a 9
            if (charCode < 48 || charCode > 57) {
                return false;
            }
        }
    }
</script>
<!-- *************************validando telefone ************** -->

<script>
    function mouseDown() {
  document.getElementById("termo_politica").style.color = "red";
}

function mouseUp() {
  document.getElementById("termo_politica").style.color = "green";
}


</script>


<script type="text/javascript">
    function mask(o, f) {
  setTimeout(function() {
    var v = mphone(o.value);
    if (v != o.value) {
      o.value = v;
    }
  }, 1);
}

function mphone(v) {
    var r = v.replace(/\D/g, "");
    r = r.replace(/^0/, "");
    if (r.length > 10) {
        r = r.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
    } else if (r.length > 5) {
        r = r.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
    } else if (r.length > 2) {
        r = r.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
    } else {
        r = r.replace(/^(\d*)/, "($1");
    }
    return r;
    }
</script>

<!-- ----------------------------------------------------------------- -->
<!-- Adicionando JQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- Adicionando Javascript -->
<script>
    $(document).ready(function() {
  
          function limpa_formulário_cep() {
              // Limpa valores do formulário de cep.
              $("#rua").val("");
              $("#bairro").val("");
              $("#cidade").val("");
              $("#uf").val("");
              $("#ibge").val("");
          }
  
          //Quando o campo cep perde o foco.
          $("#cep").blur(function() {
  
              //Nova variável "cep" somente com dígitos.
              var cep = $(this).val().replace(/\D/g, '');
  
              //Verifica se campo cep possui valor informado.
              if (cep != "") {
  
                  //Expressão regular para validar o CEP.
                  var validacep = /^[0-9]{8}$/;
  
                  //Valida o formato do CEP.
                  if (validacep.test(cep)) {
  
                      //Preenche os campos com "..." enquanto consulta webservice.
                      $("#rua").val("...");
                      $("#bairro").val("...");
                      $("#cidade").val("...");
                      $("#uf").val("...");
                      $("#ibge").val("...");
  
                      //Consulta o webservice viacep.com.br/
                      $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(dados) {
  
                          if (!("erro" in dados)) {
                              //Atualiza os campos com os valores da consulta.
                              $("#rua").val(dados.logradouro);
                              $("#bairro").val(dados.bairro);
                              $("#cidade").val(dados.localidade);
                              $("#uf").val(dados.uf);
                              $("#ibge").val(dados.ibge);
                          } //end if.
                          else {
                              //CEP pesquisado não foi encontrado.
                              limpa_formulário_cep();
                              alert("CEP não encontrado.");
                          }
                      });
                  } //end if.
                  else {
                      //cep é inválido.
                      limpa_formulário_cep();
                      alert("Formato de CEP inválido.");
                  }
              } //end if.
              else {
                  //cep sem valor, limpa formulário.
                  limpa_formulário_cep();
              }
          });
      });
</script>

<!--  Script campo RG onde só aceita numero -->

<script>
    function somenteNumeros(num) {
        var er = /[^0-9.]/;
        er.lastIndex = 0;
        var campo = num;
        if (er.test(campo.value)) {
          campo.value = "";
        }
    }
</script>

<!---------------------------------------------------->


<!-- VALIDANDO DADOS APENAS LETRAS -->
<script>
    function lettersOnly(evt) {
    evt = (evt) ? evt : event;
    var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
        ((evt.which) ? evt.which : 0));
    if (charCode > 31 && (charCode < 65 || charCode > 90) &&
        (charCode < 97 || charCode > 122)) {
        
        return false;
    }
    return true;
}
</script>
<!--------------------------------------------------->

<script>
    function moeda(a, e, r, t) {
        let n = ""
          , h = j = 0
          , u = tamanho2 = 0
          , l = ajd2 = ""
          , o = window.Event ? t.which : t.keyCode;
        if (13 == o || 8 == o)
            return !0;
        if (n = String.fromCharCode(o),
        -1 == "0123456789".indexOf(n))
            return !1;
        for (u = a.value.length,
        h = 0; h < u && ("0" == a.value.charAt(h) || a.value.charAt(h) == r); h++)
            ;
        for (l = ""; h < u; h++)
            -1 != "0123456789".indexOf(a.value.charAt(h)) && (l += a.value.charAt(h));
        if (l += n,
        0 == (u = l.length) && (a.value = ""),
        1 == u && (a.value = "0" + r + "0" + l),
        2 == u && (a.value = "0" + r + l),
        u > 2) {
            for (ajd2 = "",
            j = 0,
            h = u - 3; h >= 0; h--)
                3 == j && (ajd2 += e,
                j = 0),
                ajd2 += l.charAt(h),
                j++;
            for (a.value = "",
            tamanho2 = ajd2.length,
            h = tamanho2 - 1; h >= 0; h--)
                a.value += ajd2.charAt(h);
            a.value += r + l.substr(u - 2, u)
        }
        return !1
    }
    
</script>

<script>

    $('#perfil').click(function(){
     $('#formFile').trigger('click'); 
    });
    
    $('#formFile').change(function(){
    
       const file = $(this)[0].files[0];
       const fileReader = new FileReader()
       fileReader.onloadend = function(){
        $('#perfil').attr('src',fileReader.result)
       }
       fileReader.readAsDataURL(file)
    });
    
    </script>
