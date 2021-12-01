@extends('layout.add_candidato')

@section('cadastro')

<form action="/insert/candidato" method="POST" enctype="multipart/form-data" style="margin-bottom: 300px">

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
                <div class="">
                    <img class="border border-success" id="perfil" src="/img/events/perfil.png" alt="profile Pic">
                </div>
                <div class="m-t-2">

                    <label class="form-check-label" for="flexCheckIndeterminate">Imagem de Perfil </label>
                </div>
            </div>
            <h2 class="form-signin-heading">Dados Pessoais</h2>
            <hr>
        </div>

        <div class="pessoais">

            <div class="row g-3">

                <div class="col-md-6">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nome
                        <span><strong>*</strong></span> </label>
                    <input type="text" class="form-control form-control-sm" name="nome" placeholder="" required>
                </div>

                <div class="col-md-6">
                    <label class="form-check-label" for="flexCheckIndeterminate">Sobrenome
                        <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="sobrenome" placeholder="" required>
                </div>

                <div class="col-md-4" id="selecionarFoto">
                    <label class="form-check-label" for="image">Selecione Sua foto</label>
                    <!--<input class="form-control form-control-sm" type="file" name="foto" id="formFile"> -->
                    <input type="file" name="foto" id="formFile" class="form-control-file">
                </div>

                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">CPF
                        <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="cpf" placeholder=""
                        onfocus="javascript: retirarFormatacao(this);" onblur="javascript: formatarCampo(this);"
                        name="cnpj" id="cnpj" placeholder="99.999.999/9999-99" value="{{old('cnpj')}}" required>
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">RG</label>
                    <input type="text" maxlength="10" class="form-control form-control-sm"
                        onkeyup="somenteNumeros(this);" name="rg" placeholder="">
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Data Nascimento
                        <span><strong>*</strong></span> </label>
                    <input type="date" class="form-control form-control-sm" name="nascimento" placeholder="" required>
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Local de Nascimento
                        <span><strong>*</strong></span> </label>
                    <input type="text" class="form-control form-control-sm" name="localnascimento" placeholder=""
                        required>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Cor/Raça</label>
                    <select id="inputState" name="cor" class="form-select form-select-sm">
                        <option selected></option>
                        <option value="Branca">Branca</option>
                        <option value="Preta">Preta</option>
                        <option value="Parda">Parda </option>
                        <option value="Amarela">Amarela</option>
                        <option value="Indígena">Indígena</option>
                    </select>
                </div>
                <div class="col-md-1">
                    <label class="form-check-label" for="flexCheckIndeterminate">Peso</label>
                    <input type="text" class="form-control form-control-sm" name="peso" placeholder="">
                </div>
                <div class="col-md-1">
                    <label class="form-check-label" for="flexCheckIndeterminate">Altura</label>
                    <input type="text" class="form-control form-control-sm" name="altura" placeholder="">
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Estado Civil </label>
                    <select id="inputState" name="estadocivil" class="form-select form-select-sm">
                        <option selected></option>
                        <option value="Solteiro">Solteiro</option>
                        <option value="Casado">Casado</option>
                        <option value="Viúvo">Viúvo</option>
                        <option value="Separado">Separado</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Possui filhos?</label>
                    <div class="form-check ">
                        <input class="form-check-input" type="radio" name="filiacao" id="gridRadios1" value="sim">
                        <label class="form-check-label" for="gridRadios1">
                            Sim
                        </label>
                    </div>
                    <div class="form-check ">
                        <input class="form-check-input" type="radio" name="filiacao" id="gridRadios2" value="não" checked>
                        <label class="form-check-label" for="gridRadios2">
                            Não
                        </label>
                    </div>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Gênero </label>
                    <select id="inputState" name="genero" class="form-select form-select-sm">
                        <option selected></option>
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                        <option value="Outros">Outros</option>

                    </select>

                </div>

                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Pretensão Salarial </label>
                    <input type="text" class="form-control form-control-sm" name="pretensao_salario" placeholder=""
                        onKeyPress="return(moeda(this,'.',',',event))">
                </div>

                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Ex-militar? </label>
                    <select name="exmilitar" id="exmilitar" class="form-select form-select-sm">
                        <option selected></option>
                        <option value="Sim">Sim</option>
                        <option value="Não">Não</option>

                    </select>

                </div>

                <div class="col-md-2" id="divMilitar">
                    <label class="form-check-label" for="flexCheckIndeterminate">Unidade Militar</label>
                    <input type="text" class="form-control form-control-sm" name="unidademilitar" id="unidademilitar"
                        placeholder="">
                </div>
                <div class="col-md-2" id="divMatricula">
                    <label class="form-check-label" for="flexCheckIndeterminate">Matrícula</label>
                    <input type="text" class="form-control form-control-sm" name="matricula" id="matricula"
                        placeholder="">
                </div>

                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">E-mail <span><strong>*</strong></span>
                    </label>
                    <input type="text" class="form-control form-control-sm" placeholder="" name="email" required>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Senha
                        <span><strong>*</strong></span></label>
                    <input type="password" class="form-control form-control-sm" placeholder="" name="senha" required>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Confirmar Senha
                        <span><strong>*</strong></span> </label>
                    <input type="password" class="form-control form-control-sm" placeholder="" name="confirma" required>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Telefone</label>
                    <input type="text" class="form-control form-control-sm" placeholder="(xx) xxxxx-xxxx"
                        onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" value="{{old('telefone')}}"
                        name="telefone">
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Celular
                        <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" placeholder="(xx) xxxxx-xxxx"
                        onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" value="{{old('telefone')}}"
                        name="celular" required>
                </div>
                <div class="col-md-1">
                    <label class="form-check-label" for="flexCheckIndeterminate">PCD</label>
                    <div class="form-check ">
                        <input class="form-check-input" type="radio" name="pcd" id="pcd1" value="sim">
                        <label class="form-check-label" for="pcd1">
                            Sim
                        </label>
                    </div>
                    <div class="form-check ">
                        <input class="form-check-input" type="radio" name="pcd" id="pcd2" value="não" checked>
                        <label class="form-check-label" for="pcd2">
                            Não
                        </label>
                    </div>
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
                        placeholder="" value="{{old('cep')}}" required>
                </div>
                <div class="col-md-1">
                    <label class="form-check-label" for="flexCheckIndeterminate">UF
                        <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" maxlength="2" name="uf" id="uf"
                        placeholder="" value="{{old('uf')}}" required onkeypress="return lettersOnly(event);">
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Cidade
                        <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="cidade" id="cidade" placeholder=""
                        value="{{old('cidade')}}" required>
                </div>
                <div class="col-md-7">
                    <label class="form-check-label" for="flexCheckIndeterminate">Bairro
                        <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="bairro" id="bairro" placeholder=""
                        value="{{old('bairro')}}" required>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label"
                        for="flexCheckIndeterminate">Nº</label></label><span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="numero" id="numero" placeholder=""
                        value="{{old('numero')}}" required>
                </div>
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Logradouro</label>
                    <input type="text" class="form-control form-control-sm" name="rua" id="rua" placeholder=""
                        value="{{old('rua')}}">
                </div>
                <div class="col-md-6">
                    <label class="form-check-label" for="flexCheckIndeterminate">Complemento</label>
                    <input type="text" class="form-control form-control-sm" name="complemento" id="complemento"
                        placeholder="" value="{{old('complemento')}}">
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
                        <option value="null" selected></option>
                        <option value="Ensino_Fundamental_Completo">Ensino Fundamental completo</option>
                        <option value="Ensino_Fundamental_Incompleto">Ensino Fundamental incompleto</option>
                        <option value="Ensino_Médio_Completo">Ensino Médio completo</option>
                        <option value="Ensino_Médio_Cursando">Ensino Médio cursando</option>
                        <option value="Ensino_Técnico_Cursando">Ensino Técnico cursando</option>
                        <option value="Ensino_Técnico_Completo">Ensino Técnico completo</option>
                        <option value="Superior_Cursando">Superior Cursando</option>
                        <option value="Superior_Completo">Superior Completo</option>
                        <option value="Pós-Graduação_Cursando">Pós-Graduação Cursando</option>
                        <option value="Pós-Graduação_Completo">Pós-Graduação Completo</option>
                    </select>
                </div>
                <div class="col-md-3" id="institucao_div">
                    <label class="form-check-label" for="flexCheckIndeterminate">Instituição de Ensino </label>
                    <input type="text" class="form-control form-control-sm" name="instituicao" placeholder="">
                </div>
                <div class="col-md-3" id="curso_div">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nome do curso </label>
                    <input type="text" class="form-control form-control-sm" name="curso" placeholder="">
                </div>
                <div class="col-md-2" id="termino_div">
                    <label class="form-check-label" for="flexCheckIndeterminate" id="termino_div_label">Ano em
                        Curso</label>
                    <input type="month" class="form-control form-select-sm" name="termino" placeholder="">
                </div>
                <div class="col-md-2" id="semestre_div">
                    <label class="form-check-label" for="flexCheckIndeterminate">Semestre em Curso </label>
                    <select class="form-select form-select-sm" name="semestre" aria-label="Default select example">
                        <option selected></option>
                        <option value="1º Semestre">1º Semestre</option>
                        <option value="2º Semestre">2º Semestre</option>

                    </select>
                </div>
                <div class="col-md-3" id="periodo_div">
                    <label class="form-check-label" for="flexCheckIndeterminate">Período em Curso </label>
                    <select class="form-select form-select-sm" name="periodo" aria-label="Default select example">
                        <option selected></option>
                        <option value="1º Período">1º Período</option>
                        <option value="2º Período">2º Período</option>
                        <option value="3º Período">3º Período</option>
                        <option value="4º Período">4º Período</option>
                        <option value="5º Período">5º Período</option>
                        <option value="6º Período">6º Período</option>
                        <option value="7º Período">7º Período</option>
                        <option value="8º Período">8º Período</option>
                        <option value="Ou Mais">Ou Mais</option>

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
            <div class="row g-3 shadow p-4 mb-5 bg-body rounded" style="margin:0px 20px 0px 20px; padding:20px;">

                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Cursos extracurriculares</label>
                    <input type="text" class="form-control form-control-sm" name="curso_extra[]" placeholder="">
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate" id="utv_carga_label">Carga
                        horária</label>
                    <input type="text" class="form-control form-control-sm" id="curso_carga[]" name="curso_carga[]"
                        placeholder="">
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Data de Emissão de Certificado</label>
                    <input type="month" class="form-control form-control-sm" name="curso_ano_termino[]" placeholder="">
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Aréa de Atuação</label>
                    <input type="text" class="form-control form-control-sm" name="curso_area_atuacao[]"
                        id="areaatuacao">
                </div>
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Instituição de Ensino</label>
                    <input type="text" class="form-control form-control-sm" name="curso_instituicao[]" placeholder="">
                </div>


            </div>

            <!-- div responsavel por adicionar outros campo -->
            <div id="lista" style="padding: 30px 0px 30px 0px"> </div>
            <!-- ****************************************** -->




            <div style="padding-top: 50px">

                <h4 style="position:absolute;margin-top:15px;color: #284D92;">Curso UTV
                </h4>
                <div class="text-end" style="padding-top: 10px">
                    <input type="button" class="btn btn-success btn-sm" onclick="addCamposUtv()"
                        value="Adicionar Curso">
                </div>
                <hr>

            </div>

            <div class="row g-3 shadow p-4 mb-5 bg-body rounded" style="margin:0px 20px 0px 20px; padding:20px;">

                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nome do curso</label>
                    <input type="text" class="form-control form-control-sm" id="utv_titlulo" name="utv_titlulo[]"
                        placeholder="" onblur="utvBlur()">
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate" id="utv_carga_label">Carga
                        horária</label>
                    <input type="text" class="form-control form-control-sm" id="utv_carga" name="utv_carga[]"
                        placeholder="">
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate" id="utv_data_label">Data de Emissão de
                        Certificado</label>
                    <input type="month" class="form-control form-control-sm" id="utv_data" name="utv_data[]"
                        placeholder="">
                </div>
                <div class="col-md-3" id="tempoexperiencia_div">
                    <label class="form-check-label" for="flexCheckIndeterminate" id="utv_area_atuacao_label">Área de
                        Atuação</label>
                    <input type="text" class="form-control form-control-sm" id="utv_area_atuacao"
                        name="utv_area_atuacao[]" placeholder="">
                </div>


            </div>
            <!-- div responsavel por adicionar outros campo -->
            <div id="listaUTv" style="padding: 30px 0px 30px 0px"> </div>
            <!-- ****************************************** -->


        </div>
    </div>

    <div class="form-signin">
        <div class="text-end">
            <label class="switch">
                <input type="checkbox" checked id="idioma">
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

        <div class="idioma">

            <div class="endereco">
                <div class="row g-3 shadow p-3 mb-5 bg-body rounded" style="margin: 20px">

                    <div class="col-md-3">
                        <label class="form-check-label" for="flexCheckIndeterminate">Escolha um idioma
                        </label>
                        <select class="form-select form-select-sm" name="idioma[]" id="idioma"
                            aria-label="Default select example">
                            <option selected></option>
                            <option value="Inglês">Inglês</option>
                            <option value="Francês">Francês</option>
                            <option value="Espanhol">Espanhol</option>
                            <option value="Outros">Outros</option>

                        </select>
                    </div>
                    <div class="col-md-3" id="div_outro">
                        <label class="form-check-label" for="flexCheckIndeterminate">Digite outro idioma</label>
                        <input type="text" name="outro_idioma[]" id="outro_idioma" class="form-control form-control-sm">
                    </div>
                    <div class="col-md-3">
                        <label class="form-check-label" for="flexCheckIndeterminate">Nível de Escrita
                        </label>
                        <select class="form-select form-select-sm" name="idioma_escrita[]" id="idioma_escrita"
                            aria-label="Default select example">
                            <option selected></option>
                            <option value="Básico">Básico</option>
                            <option value="Intermediário">Intermediário</option>
                            <option value="Avançado">Avançado</option>


                        </select>
                    </div>

                    <div class="col-md-3">
                        <label class="form-check-label" for="flexCheckIndeterminate">Nível de Leitura
                        </label>
                        <select class="form-select form-select-sm" name="idioma_leitura[]" id="idioma_leitura"
                            aria-label="Default select example">
                            <option selected></option>
                            <option value="Básico">Básico</option>
                            <option value="Intermediário">Intermediário</option>
                            <option value="Avançado">Avançado</option>


                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-check-label" for="flexCheckIndeterminate">Nível de Conversação
                        </label>
                        <select class="form-select form-select-sm" name="idioma_conversacao[]" id="idioma_conversacao"
                            aria-label="Default select example">
                            <option selected></option>
                            <option value="Básico">Básico</option>
                            <option value="Intermediário">Intermediário</option>
                            <option value="Avançado">Avançado</option>


                        </select>
                    </div>

                </div>

                <!-- div responsavel por adicionar outros campo -->
                <div id="listaIdioma" style="padding: 30px 0px 30px 0px"> </div>
                <!-- ****************************************** -->

            </div>
        </div>
    </div>

    <div class="form-signin">
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
                <input type="button" class="btn btn-success btn-sm" id="newExperiencia" onclick="addExperiencia()"
                    value="Adicionar Experiência">
            </div>
            <hr id="hr">
        </div>

        <div class="profissional">

            <div class="row g-3">
                <div class="col-md-12">
                    <div>

                        <label class="form-check-label" for="flexCheckIndeterminate">Primeiro emprego? </label>
                    </div>


                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="area_profissional" value="sim"
                            id="area_profissional_sim">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Sim
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="area_profissional" value="não"
                            id="area_profissional_nao" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Não
                        </label>
                    </div>

                </div>

                <div class="row g-3 shadow p-3 mb-5 bg-body rounded" id="00" style="margin: 10px">
                    <div class="col-md-6" id="01">
                        <label class="form-check-label" for="flexCheckIndeterminate">Nome da empresa </label>
                        <input type="text" class="form-control form-control-sm" name="nome_empresa[]" placeholder="">
                    </div>

                    <div class="col-md-5" id="02">
                        <label class="form-check-label" for="flexCheckIndeterminate">Cargo </label>
                        <input type="text" class="form-control form-control-sm" name="cargo_empresa[]" placeholder="">
                    </div>

                    <div class="col-md-2" style="margin-top: 40px;" id="03">
                        <label class="form-check-label" for="inlineCheckbox1">Empresa atual?</label>
                        <input class="form-check-input" type="checkbox" onclick="empresaAtual()" id="atual_empresa0" name="atual_empresa[]">

                    </div>
                    <div class="col-md-2" id="04">
                        <label class="form-check-label" for="flexCheckIndeterminate">Data de Admissão </label>
                        <input type="month" class="form-control form-control-sm" placeholder=""
                            name="data_inicio_empresa[]">
                    </div>

                    <div class="col-md-2" id="05">
                        <label class="form-check-label" for="flexCheckIndeterminate">Data de termino </label>
                        <input type="month" id="data_termino" class="form-control form-control-sm" placeholder=""
                            name="data_termino_empresa[]">
                    </div>
                    <div class="col-md-2" id="06">
                        <label class="form-check-label" for="flexCheckIndeterminate">Salário</label>
                        <input type="text" class="form-control form-control-sm" placeholder="" name="salario_empresa[]"
                            onKeyPress="return(moeda(this,'.',',',event))">
                    </div>
                    <div class="mb-3">
                        <label for="atividades" class="form-label">Atividades desenvolvidas</label>
                        <textarea class="form-control" name="atividades[]" id="atividades" rows="3"></textarea>
                    </div>
   
                </div>

            </div>
            <!-- div responsavel por adicionar outros campo -->
            <div id="listaExperiencia" style="padding: 30px 0px 30px 0px"> </div>
            <!-- ****************************************** -->

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
            <h2 class="form-signin-heading">Preferências Profissionais
            </h2>

            <hr>
        </div>

        <div class="preferencia">


            <div class="row g-3 shadow p-3 mb-5 bg-body rounded" id="00" style="margin: 10px">
                <div class="row g-3">
                    <div class="col-md-6" id="tempoexperiencia_div">
                        <label class="form-check-label" for="flexCheckIndeterminate">Selecione Preferências
                            Profissionais</label>
                        <select class="form-select form-select-sm" name="tempoexperiencia[]" id="tempoexperiencia"
                            aria-label="Default select example">
                            <option selected></option>
                            @foreach($Preferencia as $Preferencia)
                            <option value="{{$Preferencia->pre_preferencia}}">{{$Preferencia->pre_preferencia}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2" style="margin-top: 42px;">

                        <input type="button" class="btn btn-success btn-sm" onclick="addPreferencia()"
                            value="Adicionar Prefêrencias">

                    </div>
                </div>

                <!-- div responsavel por adicionar outros campo -->
                <div id="listaPreferencia" style="padding-top: 20px"> </div>
                <!-- ****************************************** -->

            </div>
        </div>
    </div>



    <div class="shadow-lg p-3 mb-5 bg-body rounded" id="00" style="margin: 10px">
        <style>
            .texto {
                max-height: 500px;
                overflow-y: auto;
                justify-content: center;
            }
        </style>

        <div class="texto">
            <p style="text-align: center;margin-top:10px"><b style="font-size: 20px">SISTEMA DE EMPREGABILIDADE CDL
                    MANAUS</b></p>
            <p style="text-align: center"><b style="font-size: 18px">Termo de Política para Uso do Sistema</b></p>
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
                proteção de dados dos usuários do serviço. Esta Política se aplica a todos os serviços e aplicações
                disponibilizados pelo site CDL Manaus, podendo haver termos específicos para determinados
                serviços, o que será informado oportunamente ao Usuário.
            </p>
            <p><b>3. DEFINIÇÕES</b></p>
            <p style="margin-left: 30px">3.1 CANDIDATO: pessoa interessada em cadastrar-se no Sistema com o
                propósito de
                pesquisar
                oportunidade de emprego;</p>
            <p style="margin-left: 30px">3.2 EMPRESA: entidade interessada em pesquisar, selecionar candidatos, ou
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
            <p style="margin-left: 30px">5.1. Utilização do SISTEMA para cadastramento de currículo do CANDIDADO,
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
            <p style="margin-left: 30px">7.1 Quando você nos fornece as suas informações pessoais para completar seu
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
            <p style="margin-left: 30px">8.1 <b>Links Internos e Links Externos</b><br>Quando você nos fornece as
                suas
                informações pessoais para completar seu cadastro,
                automaticamente está concordando com a nossa coleta e uso de informações pessoais apenas
                para esses fins específicos.
            </p>
            <p><b>9. DA IDADE DE CONSENTIMENTO</b></p>
            <p style="margin-left: 30px">9.1. Ao usar esse site e cadastrar suas informações, você confirma que é
                maior
                de idade ou que
                realizou seu cadastro sob a orientação de uma pessoa responsável maior idade, e que se localizava
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
            <p style="margin-left: 30px">10.2. Caso ocorra a fusão de nosso site com outra ferramenta da empresa,
                suas
                informações podem ser
                transferidas para os novos bancos de dados para que possamos continuar acessando e ofertando
                nossos serviços e produtos para você.

            </p>

            <p><b>11. PERGUNTAS E INFORMAÇÕES DE CONTATO </b></p>
            <p style="margin-left: 30px">11.1. Se você gostaria de acessar, corrigir, alterar ou excluir quaisquer
                informações pessoais que temos
                sobre você, registre uma queixa, ou simplesmente peça mais informações de contato conosco
                através do e-mail suporte@cdlmanaus.org.br ou por telefone: (92) 3627-2894.

            </p>


        </div>

        <div class="form-check" style="margin-top: 80px">
            <input class="form-check-input" type="checkbox" name="termo" id="termo" required>
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





</form>


@endsection

<script>

    function empresaAtual(){
        if(document.getElementById('atual_empresa0').checked){
            document.getElementById('data_termino').disabled = true;
        }else{
            document.getElementById('data_termino').disabled = false;
        }   
    }

</script>

<script>
    var cont01 =1;
    function addCampos(){
     
        if(cont01 < 4){

        var div = document.createElement('div');
        div.innerHTML = '<div class="row g-3 shadow p-3 mb-5 bg-body rounded" id="div'+cont01+'" style="margin:0px 20px 0px 20px; padding:20px;">  <div class="text-end"><input type="button" class="btn btn-danger btn-sm" onclick="removeCampos('+cont01+')" value="Remover Curso">    </div><div class="col-md-4"><label class="form-check-label" for="flexCheckIndeterminate">Cursos extracurriculares</label> <input type="text" class="form-control form-control-sm" name="curso_extra[]" placeholder=""> </div><div class="col-md-2"><label class="form-check-label" for="flexCheckIndeterminate" id="utv_carga_label">Carga horária</label><input type="text" class="form-control form-control-sm" id="utv_carga" name="curso_carga[]" placeholder=""> </div><div class="col-md-3"> <label class="form-check-label" for="flexCheckIndeterminate">Data de Emissão de Certificado</label><input type="month" class="form-control form-control-sm" name="curso_ano_termino[]" placeholder="">    </div> <div class="col-md-3"> <label class="form-check-label" for="flexCheckIndeterminate">Aréa de Atuação</label><input type="text" class="form-control form-control-sm" name="curso_area_atuacao[]" id="areaatuacao">  </div><div class="col-md-4"><label class="form-check-label" for="flexCheckIndeterminate">Instituição de Ensino</label><input type="text" class="form-control form-control-sm" name="curso_instituicao[]" placeholder=""> </div>';
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
        div.innerHTML = '<div class="row g-3 shadow p-3 mb-5 bg-body rounded" id="divUTv'+cont02+'" style="margin:0px 20px 0px 20px; padding:20px;"> <div class="text-end"> <input type="button" class="btn btn-danger btn-sm" onclick="removeCamposUTv('+cont02+')" value="Remover Curso"></div> <div class="col-md-4"><label class="form-check-label" for="flexCheckIndeterminate">Nome do curso</label> <input type="text" class="form-control form-control-sm" name="utv_titlulo[]" placeholder=""> </div>  <div class="col-md-2">  <label class="form-check-label" for="flexCheckIndeterminate">Carga horária</label> <input type="text" class="form-control form-control-sm" name="utv_carga[]" placeholder="">  </div> <div class="col-md-3">  <label class="form-check-label" for="flexCheckIndeterminate">Data de Emissão de Certificado</label><input type="month" class="form-control form-control-sm" name="utv_data[]" placeholder=""> </div><div class="col-md-3" id="tempoexperiencia_div"><label class="form-check-label" for="flexCheckIndeterminate">Área de Atuação</label><input type="text" class="form-control form-control-sm" name="utv_area_atuacao[]" placeholder=""> </div>';
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

    if(cont03 < 4){
        
        if(document.getElementById('idioma').value != ''){

           
        var div = document.createElement('div');
        div.innerHTML = '<div class="row g-3 shadow p-3 mb-5 bg-body rounded" id="divIdioma'+cont03+'" style="margin:0px 20px 0px 20px; padding:20px;"> <div class="text-end"> <input type="button" class="btn btn-danger btn-sm" onclick="removeCamposIdioma('+cont03+')" value="Remover Idioma"></div> <div class="col-md-3"><label class="form-check-label" for="flexCheckIndeterminate">Escolha um idioma </label><select class="form-select form-select-sm" name="idioma[]" id="idioma" aria-label="Default select example"> <option selected></option> <option value="Inglês">Inglês</option><option value="Francês">Francês</option>  <option value="Espanhol">Espanhol</option><option value="Outros">Outros</option> </select></div> <div class="col-md-3"><label class="form-check-label" for="flexCheckIndeterminate">Nível de Escrita</label><select class="form-select form-select-sm" name="idioma_escrita[]" id="idioma_escrita" aria-label="Default select example"><option selected></option> <option value="Básico">Básico</option> <option value="Intermediário">Intermediário</option> <option value="Avançado">Avançado</option> </select></div> <div class="col-md-3"><label class="form-check-label" for="flexCheckIndeterminate">Nível de Leitura </label> <select class="form-select form-select-sm" name="idioma_leitura[]" id="idioma_leitura" aria-label="Default select example">  <option selected></option> <option value="Básico">Básico</option>  <option value="Intermediário">Intermediário</option> <option value="Avançado">Avançado</option>   </select></div>  <div class="col-md-3"> <label class="form-check-label" for="flexCheckIndeterminate">Nível de Conversação </label> <select class="form-select form-select-sm" name="idioma_conversacao[]" id="idioma_conversacao" aria-label="Default select example">                <option selected></option> <option value="Básico">Básico</option> <option value="Intermediário">Intermediário</option> <option value="Avançado">Avançado</option></select></div> </div>';
        document.getElementById('listaIdioma').appendChild(div)
         cont03++;

        }
    }
    }

    function removeCamposIdioma(id){

         document.getElementById('divIdioma'+id).remove();   
         cont03--;
    }
</script>




<script>
    var cont04 =1;
    function addExperiencia(){
        if(cont04 <4){

        var div = document.createElement('div');
        div.innerHTML = '<div  class="row g-3 shadow p-3 mb-5 bg-body rounded" id="divExperiencia'+cont04+'" style="margin: 10px"> <div class="text-end"> <input type="button" class="btn btn-danger btn-sm" onclick="removeCamposEx('+cont04+')" value="Remover Experiência"></div> <div class="col-md-6" id="01">  <label class="form-check-label" for="flexCheckIndeterminate">Nome da empresa </label> <input type="text" class="form-control form-control-sm" name="nome_empresa[]" placeholder=""> </div><div class="col-md-5" id="02"> <label class="form-check-label" for="flexCheckIndeterminate">Cargo </label> <input type="text" class="form-control form-control-sm" name="cargo_empresa[]" placeholder=""> </div> <div class="col-md-2" style="margin-top: 40px;" id="03"> <label class="form-check-label" for="inlineCheckbox1">Empresa atual? </label><input class="form-check-input" type="checkbox" onclick="EmpresaAtual('+cont04+')" id="atual_empresa'+cont04+'" name="atual_empresa[]"> </div> <div class="col-md-2" id="04"> <label class="form-check-label" for="flexCheckIndeterminate">Data de Admissão </label>  <input type="month" class="form-control form-control-sm" placeholder="" name="data_inicio_empresa[]"> </div> <div class="col-md-2" id="05"><label class="form-check-label" for="flexCheckIndeterminate">Data de termino </label><input type="month" class="form-control form-control-sm" placeholder="" id="data_termino_empresa'+cont04+'" name="data_termino_empresa[]">  </div> <div class="col-md-2" id="06"><label class="form-check-label" for="flexCheckIndeterminate">Salário</label>  <input type="text" class="form-control form-control-sm" placeholder="" name="salario_empresa[]">  </div>  <div class="mb-3"><label for="atividades" class="form-label">Atividades desenvolvidas</label><textarea class="form-control" name="atividades[]" id="atividades" rows="3"></textarea></div> </div></div>';
                 document.getElementById('listaExperiencia').appendChild(div)
        cont04++;
       
        }
    }

    function removeCamposEx(id){

         document.getElementById('divExperiencia'+id).remove();   
         cont04--;
    }

    function EmpresaAtual(id){

        if($("#atual_empresa"+id).prop('checked') == true){
        $("#data_termino_empresa"+id).prop("disabled", true); 
        }
        if($("#atual_empresa"+id).prop('checked') == false){
            $("#data_termino_empresa"+id).prop("disabled", false); 
        }

    }
</script>


<script>
    var cont05 =1;
    function addPreferencia(){
        if(cont05 <4){
        var preferencia = document.getElementById('tempoexperiencia').value    
        var div = document.createElement('div');
        div.innerHTML = '<div class="row g-3" id="divPreferencia'+cont05+'"><div class="col-md-6" id="tempoexperiencia_div"><label class="form-check-label" for="flexCheckIndeterminate">Selecione Preferências Profissionais</label> <select class="form-select form-select-sm" name="tempoexperiencia[]" id="tempoexperiencia" aria-label="Default select example" disabled> <option>'+preferencia+'<option></select></div><div class="col-md-2" id="tempoexperiencia_div" style="margin-top:42px"><input type="button" class="btn btn-danger btn-sm" onclick="removeCamposPreferencia('+cont05+')" value="Remover Prefêrencias"> </div></div></div>';
                 document.getElementById('listaPreferencia').appendChild(div)
        cont05++;
        var preferencia = document.getElementById('tempoexperiencia').value ='';
        }
    }

    function removeCamposPreferencia(id){

         document.getElementById('divPreferencia'+id).remove();  
         cont05--;
    }
</script>


<script>
    function utvBlur(){
        
        if(document.getElementById('utv_titlulo').value != ''){
           document.getElementById('utv_carga_label').innerHTML= "Carga horária <span><strong>*</strong></span>";
           document.getElementById('utv_data_label').innerHTML= "Data de Emissão <span><strong>*</strong></span>";
           document.getElementById('utv_area_atuacao_label').innerHTML= "Área de Atuação <span><strong>*</strong></span>";

        }else{
            document.getElementById('utv_carga_label').innerHTML= "Carga horária";
            document.getElementById('utv_data_label').innerHTML= "Data de Emissão";
           document.getElementById('utv_area_atuacao_label').innerHTML= "Área de Atuação";
        }
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
    function validaCPF(cpf)
     {
       var numeros, digitos, soma, i, resultado, digitos_iguais;
       digitos_iguais = 1;
       if (cpf.length < 11)
             return false;
       for (i = 0; i < cpf.length - 1; i++)
             if (cpf.charAt(i) != cpf.charAt(i + 1))
                   {
                   digitos_iguais = 0;
                   break;
                   }
       if (!digitos_iguais)
             {
             numeros = cpf.substring(0,9);
             digitos = cpf.substring(9);
             soma = 0;
             for (i = 10; i > 1; i--)
                   soma += numeros.charAt(10 - i) * i;
             resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
             if (resultado != digitos.charAt(0))
                   return false;
             numeros = cpf.substring(0,10);
             soma = 0;
             for (i = 11; i > 1; i--)
                   soma += numeros.charAt(11 - i) * i;
             resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
             if (resultado != digitos.charAt(1))
                   return false;
             return true;
             }
       else
           return false;
     }
</script>