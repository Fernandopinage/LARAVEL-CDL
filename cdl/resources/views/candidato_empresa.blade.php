@extends('layout.candidato_empresa')

@section('filtrocandidato')

<form method="get" action="/buscar/candidato/empresa">
    <!-- /add/candidato/empresa -->

    @csrf

    <div class="form-signin">

        <div class="text">
            <h2 class="form-signin-heading"> ENCONTRE CANDIDATO IDEAL </h2>
            <hr>
        </div>

        <div class="pessoais">

            <div class="row g-3">

                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Área de Atuação </label>
                    <input type="text" class="form-control form-select-sm" name="area" id="area">
                </div>
                <div class="col-md-2">
                    <div class="text-left">
                        <label class="form-check-label" for="flexCheckIndeterminate">Experiência</label>
                        <select class="form-select form-select-sm" name="experiencia" id="experiencia"
                            aria-label="Default select example">
                            <option value="Sem Experiência">Sem Experiência</option>
                            <option value="Com Experiência">Com Experiência</option>
                            <option value="Primeiro Emprego">Primeiro Emprego</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2" style="margin-top: 25px">
                    <div class="form-check form-check">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1" name="militar"
                            id="militar">Ex-Militar</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="aluno" id="aluno">
                        <label class="form-check-label" for="inlineCheckbox2">Ex-Aluno UTV</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Formação</label>
                    <select class="form-select form-select-sm" name="formacao" id="formacao"
                        aria-label="Default select example">
                        <option selected></option>
                        <option value="fundamental incompleto">Ensino fundamental incompleto</option>
                        <option value="fundamental completo">Ensino fundamental completo</option>
                        <option value="medio cursando">Ensino Médio cursando</option>
                        <option value="medio completo">Ensino Médio completo</option>
                        <option value="tecnico cursando">Ensino Técnico cursando</option>
                        <option value="tecnico completo">Ensino Técnico completo</option>
                        <option value="superior cursando">Superior Cursando</option>
                        <option value="superior completo">Superior Completo</option>
                        <option value="pos cursando">Pós-Graduação Cursando</option>
                        <option value="pos completo">Pós-Graduação Completo</option>
                    </select>
                </div>
                <!--*************************************** ensino medio ***********************************************-->
                <div class="col-md-2" id="letivo_medio">
                    <label class="form-check-label" for="flexCheckIndeterminate">Ano Letivo</label>
                    <select class="form-select form-select-sm" name="letivo" id="letivo"
                        aria-label="Default select example">
                        <option selected></option>
                        <option value="1">1º Ano</option>
                        <option value="2">2º Ano</option>
                        <option value="3">3º Ano</option>
                    </select>
                </div>

                <div class="col-md-2" id="termino_medeio">
                    <label class="form-check-label" for="flexCheckIndeterminate" id="termino_div_label">Ano de Conclusão
                    </label>
                    <input type="date" class="form-control form-select-sm" name="termino_medio" id="termino_medio"
                        placeholder="">
                </div>

                <!--*************************************** ----------- ***********************************************-->

                <!--*************************************** ensino tecnico ***********************************************-->
                <div class="col-md-3" id="curso_tecnico">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nome do Curso </label>
                    <input type="text" class="form-control form-control-sm" name="curso" id="curso" placeholder="">
                </div>
                <div class="col-md-2" id="semetre">
                    <label class="form-check-label" for="flexCheckIndeterminate">Semestre em Curso </label>
                    <select class="form-select form-select-sm" name="semetre" id="semetre"
                        aria-label="Default select example">
                        <option selected></option>
                        <option value="1">1º Semestre</option>
                        <option value="2">2º Semestre</option>

                    </select>
                </div>
                <!--*************************************** ----------- ***********************************************-->

                <!--*************************************** ensino superior ***********************************************-->
                <div class="col-md-3" id="curso_superior">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nome do Curso </label>
                    <input type="text" class="form-control form-control-sm" name="superior" id="superior"
                        placeholder="">
                </div>
                <div class="col-md-2" id="periodo_superior">
                    <label class="form-check-label" for="flexCheckIndeterminate">Périodo em Curso </label>
                    <select class="form-select form-select-sm" name="periodo_curso" id="periodo_curso"
                        aria-label="Default select example">
                        <option selected></option>
                        <option value="1">1º Périodo</option>
                        <option value="2">2º Périodo</option>
                        <option value="3">3º Périodo</option>
                        <option value="4">4º Périodo</option>
                        <option value="5">5º Périodo</option>
                        <option value="6">6º Périodo</option>
                        <option value="7">7º Périodo</option>
                        <option value="8">8º Périodo</option>
                        <option value="9">Ou Mais</option>

                    </select>
                </div>

                <!--*************************************** ----------- ***********************************************-->

                <!--*************************************** Pós graduação ***********************************************-->
                <div class="col-md-3" id="curso_pos">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nome do Curso </label>
                    <input type="text" class="form-control form-control-sm" name="pos" id="pos" placeholder="">
                </div>
                <div class="col-md-2" id="modulo_pos">
                    <label class="form-check-label" for="flexCheckIndeterminate">Modulo da Pós </label>
                    <select class="form-select form-select-sm" name="periodo_pos" id="periodo_pos"
                        aria-label="Default select example">
                        <option selected></option>
                        <option value="1">1º Modulo</option>
                        <option value="2">2º Modulo</option>
                        <option value="3">3º Modulo</option>
                        <option value="4">4º Modulo</option>
                        <option value="5">5º Modulo</option>
                        <option value="6">6º Modulo</option>
                        <option value="7">7º Modulo</option>
                        <option value="8">8º Modulo</option>
                        <option value="9">Ou Modulo</option>

                    </select>
                </div>
                <!--*************************************** ----------- ***********************************************-->


                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Bairro </label>
                    <input type="text" class="form-control form-select-sm" name="bairro" id="bairro" placeholder="">
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Idioma</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Inglês" id="idioma" name="idioma">
                        <label class="form-check-label" for="flexCheckDefault">
                            Inglês
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Espanhol" id="idioma" name="idioma">
                        <label class="form-check-label" for="flexCheckChecked">
                            Espanhol
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Francês" id="idioma" name="idioma">
                        <label class="form-check-label" for="flexCheckChecked">
                            Francês
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Outros" id="idioma" name="idioma">
                        <label class="form-check-label" for="flexCheckChecked">
                            Outros
                        </label>
                    </div>
                </div>

                <div class="col-md-2" id="leitura_ingles">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nível de Leitura (Inglês)</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="Básico" name="leiruta_ingles"
                            id="leiruta_ingles" value="option1" checked>
                        <label class="form-check-label" for="leitura_ingles">
                            Básico
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="Intermediário" name="leiruta_ingles"
                            id="leiruta_ingles" value="option2">
                        <label class="form-check-label" for="leitura_ingles">
                            Intermediário
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="Avançado" name="leiruta_ingles"
                            id="leiruta_ingles" value="option3">
                        <label class="form-check-label" for="leitura_ingles">
                            Avançado
                        </label>
                    </div>
                </div>

                <div class="col-md-2" id="escrita_ingles">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nivel de Escrita (Inglês)</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="Básico" name="escrita_ingles"
                            id="escrita_ingles" value="option1" checked>
                        <label class="form-check-label" for="escrita_ingles">
                            Básico
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="Intermediário" name="escrita_ingles"
                            id="escrita_ingles" value="option2">
                        <label class="form-check-label" for="escrita">
                            Intermediário
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="Avançado" name="escrita_ingles"
                            id="escrita_ingles" value="option3">
                        <label class="form-check-label" for="escrita_ingles">
                            Avançado
                        </label>
                    </div>
                </div>

                <div class="col-md-2" id="leitura_espanhol">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nível de Leitura (Espanhol)</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="leitura_espanhol" id="leitura_espanhol"
                            value="option1" checked>
                        <label class="form-check-label" for="leitura_espanhol">
                            Básico
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="leitura_espanhol" id="leitura_espanhol"
                            value="option2">
                        <label class="form-check-label" for="leitura_espanhol">
                            Intermediário
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="leitura_espanhol" id="leitura_espanhol"
                            value="option3">
                        <label class="form-check-label" for="leitura_espanhol">
                            Avançado
                        </label>
                    </div>
                </div>

                <div class="col-md-2" id="escrita_espanhol">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nivel de Escrita (Espanhol)</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="escrita_espanhol" id="escrita_espanhol"
                            value="option1" checked>
                        <label class="form-check-label" for="escrita_espanhol">
                            Básico
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="escrita_espanhol" id="escrita_espanhol"
                            value="option2">
                        <label class="form-check-label" for="escrita_espanhol">
                            Intermediário
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="escrita_espanhol" id="escrita_espanhol"
                            value="option3">
                        <label class="form-check-label" for="escrita_espanhol">
                            Avançado
                        </label>
                    </div>
                </div>


                <div class="col-md-2" id="leitura_frances">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nível de Leitura (Francês)</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="leitura_frances" id="leitura_frances"
                            value="option1" checked>
                        <label class="form-check-label" for="leitura_frances">
                            Básico
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="leitura_frances" id="leitura_frances"
                            value="option2">
                        <label class="form-check-label" for="leitura_frances">
                            Intermediário
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="leitura_frances" id="leitura_frances"
                            value="option3">
                        <label class="form-check-label" for="leitura_frances">
                            Avançado
                        </label>
                    </div>
                </div>

                <div class="col-md-2" id="escrita_frances">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nivel de Escrita (Francês)</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="escrita_frances" id="escrita_frances"
                            value="option1" checked>
                        <label class="form-check-label" for="escrita_frances">
                            Básico
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="escrita_frances" id="escrita_frances"
                            value="option2">
                        <label class="form-check-label" for="escrita_frances">
                            Intermediário
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="escrita_frances" id="escrita_frances"
                            value="option3">
                        <label class="form-check-label" for="escrita_frances">
                            Avançado
                        </label>
                    </div>
                </div>



                <div class="col-md-2" id="leitura_outros">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nível de Leitura</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="leitura_outros" id="leitura_outros"
                            value="option1" checked>
                        <label class="form-check-label" for="leitura_outros">
                            Básico
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="leitura_outros" id="leitura_outros"
                            value="option2">
                        <label class="form-check-label" for="leitura_outros">
                            Intermediário
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="leitura_outros" id="leitura_outros"
                            value="option3">
                        <label class="form-check-label" for="leitura_outros">
                            Avançado
                        </label>
                    </div>
                </div>

                <div class="col-md-2" id="escrita_outros">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nivel de Escrita</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="escrita_outros" id="escrita_outros"
                            value="option1" checked>
                        <label class="form-check-label" for="leitura_outros">
                            Básico
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="escrita_outros" id="escrita_outros"
                            value="option2">
                        <label class="form-check-label" for="leitura_outros">
                            Intermediário
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="escrita_outros" id="escrita_outros"
                            value="option3">
                        <label class="form-check-label" for="leitura_outros">
                            Avançado
                        </label>
                    </div>
                </div>



                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">PCD</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pcd" id="exampleRadios2" value="s">
                        <label class="form-check-label" for="exampleRadios2">
                            Sim
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pcd" id="exampleRadios3" value="n">
                        <label class="form-check-label" for="exampleRadios3">
                            Não
                        </label>
                    </div>
                </div>


            </div>
        </div>
        <hr>
        <div class="text-end">
            <a href="" class="btn btn-secondary">Limpar Filtro</a>
            <a href="" class="btn btn-success">Salvar Filtro</a>
            <input type="submit" class="btn btn-primary" value="Buscar Candidatos">
            <!-- onclick="alert('Ainda não possui candidatos cadastrados')"-->
        </div>
    </div>


</form>



@if(!empty($candidato))
<div class="container" id="canditados" style="margin-top: 50px; margin-bottom:50px">
    @foreach ($candidato as $candidato)

    <div class=" d-inline-block" style="padding: 8px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <div class="form-row" style="border: 0px;">
            <div class="form-group col-md-4">
                <div class="card" style="width: 20rem;">
                    <div class="card-body">
                        <span style="color: #284D92"></span>
                        <p>
                        <h1>
                            <span style="color: #157347; margin-left:50px; ">
                                @if($candidato->can_foto != null)

                                <img id="perfil" src="/img/events/{{$candidato->can_foto}}" height="150px" width="150px"
                                    class="img-thumbnail" alt="...">
                                @else
                                <img id="perfil" src="/img/events/perfil.png" height="150px" width="150px"
                                    class="img-thumbnail" alt="...">
                                @endif

                            </span><span style="color: #696969;"></span>

                        </h1>
                        <hr>
                        <br>
                        <span><b style="color: #22427c; margin-right:0px">Nome:</b></span><span style="color: #535151">
                            {{$candidato->can_nome}}</span>
                        <br>
                        <span><b style="color: #22427c; margin-right:0px">E-mail:</b></span><span
                            style="color: #535151">
                            {{$candidato->can_email}}</span>

                        <br>
                        <span><b style="color: #22427c; margin-right:0px">Celular:</b></span>

                        <br>
                        <span><b style="color: #22427c; margin-right:0px">CPF:</b></span>
                        <span style="color: #535151"> {{$candidato->can_cpf}}</span>

                        <br>
                        <span><b style="color: #22427c; margin-right:0px">Curso UTV:</b></span>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Seu candidato ideal" style="color:#fff;">
                </div>
            </div>
        </div>
    </div>
    @endforeach

</div>
@endif


@endsection