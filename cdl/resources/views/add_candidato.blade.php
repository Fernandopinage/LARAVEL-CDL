@extends('layout.add_candidato')

@section('cadastro')

<form action="empresa" method="POST">

    @csrf
    <div class="form-signin">
        <div class="text-end">
            <label class="switch">
                <input type="checkbox" id="pessoais" checked>
                <span class="slider round"></span>
            </label>
        </div>

        <div class="text">
            <h2 class="form-signin-heading">Dados Pessoais</h2>
            <hr>
        </div>

        <div class="pessoais">

            <div class="row g-3">

                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Primeiro nome </label>
                    <input type="text" class="form-control form-control-sm" name="nome" placeholder="">
                </div>

                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Sobre Nome</label>
                    <input type="text" class="form-control form-control-sm" name="sobrenome" placeholder="">
                </div>

                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Selecione Sua foto</label>
                    <input class="form-control form-control-sm" type="file" name="foto" id="formFile">
                </div>

                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">CPF</label>
                    <input type="text" class="form-control form-control-sm" name="cpf" placeholder="">
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">RG</label>
                    <input type="text" class="form-control form-control-sm" name="rg" placeholder="">
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Data Nascimento </label>
                    <input type="date" class="form-control form-control-sm" name="nascimento" placeholder="">
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Local de Nascimento </label>
                    <input type="text" class="form-control form-control-sm" name="localnascimento" placeholder="">
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Cor</label>
                    <select id="inputState" name="cor" class="form-select form-select-sm">
                        <option selected></option>
                        <option>Branca</option>
                        <option>Preta</option>
                        <option>Parta</option>
                        <option>Amarela</option>
                        <option>Indígena</option>
                    </select>
                </div>
                <div class="col-md-1">
                    <label class="form-check-label" for="flexCheckIndeterminate">Peso</label>
                    <input type="email" class="form-control form-control-sm" placeholder="">
                </div>
                <div class="col-md-1">
                    <label class="form-check-label" for="flexCheckIndeterminate">Altura</label>
                    <input type="email" class="form-control form-control-sm" placeholder="">
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Estado Civil </label>
                    <select id="inputState" name="cor" class="form-select form-select-sm">
                        <option selected></option>
                        <option>Solteiro</option>
                        <option>Casado</option>
                        <option>Viúvo</option>
                        <option>Separado</option>
                    </select>
                </div>
                <div class="col-md-1">
                    <label class="form-check-label" for="flexCheckIndeterminate">Estado Civil </label>
                    <div class="form-check ">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                        <label class="form-check-label" for="gridRadios2">
                            Homem
                        </label>
                    </div>
                    <div class="form-check ">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
                        <label class="form-check-label" for="gridRadios3">
                            Mulher
                        </label>
                    </div>
                    <div class="form-check ">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
                        <label class="form-check-label" for="gridRadios3">
                            Outros
                        </label>
                    </div>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Sexo</label>
                    <select id="inputState" name="cor" class="form-select form-select-sm">
                        <option selected></option>
                        <option>Masculino</option>
                        <option>Feminino</option>
                        <option>Outros</option>

                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="form-signin">
        <div class="text-end">
            <label class="switch">
                <input type="checkbox" checked>
                <span class="slider round"></span>
            </label>
        </div>
        <div class="row g-3">
            <div class="text">
                <h2 class="form-signin-heading">Formação Acadêmica</h2>
                <hr>
            </div>
            <div class="col-md-4">
                <label class="form-check-label" for="flexCheckIndeterminate">Formação
                    <span><strong>*</strong></span></label>
                <select class="form-select form-select-sm" name="formacao" id="formacao"
                    aria-label="Default select example" required>
                    <option selected></option>
                    <option value="Ensino fundamental completo">Ensino fundamental completo</option>
                    <option value="Ensino fundamental incompleto">Ensino fundamental incompleto</option>
                    <option value="Ensino Medio completo">Ensino Médio completo</option>
                    <option value="Ensino Medio cursando">Ensino Médio cursando</option>
                    <option value="Ensino Tecnico cursando">Ensino Técnico cursando</option>
                    <option value="Ensino Técnico completo">Ensino Técnico completo</option>
                    <option value="Superior Cursando">Superior Cursando</option>
                    <option value="Superior Completo">Superior Completo</option>
                    <option value="Pos-Graduacao Cursando">Pós-Graduação Cursando</option>
                    <option value="Pos-Graduacao Completo">Pós-Graduação Completo</option>
                </select>
            </div>
            <div class="col-md-3" id="curso_div">
                <label class="form-check-label" for="flexCheckIndeterminate">Nome do curso </label>
                <input type="text" class="form-control form-control-sm" name="curso" placeholder="">
            </div>
            <div class="col-md-2" id="termino_div">
                <label class="form-check-label" for="flexCheckIndeterminate">Ano de Términio </label>
                <input type="month" class="form-control form-select-sm" name="termino" placeholder="">
            </div>
            <div class="col-md-2" id="semestre_div">
                <label class="form-check-label" for="flexCheckIndeterminate">Semestre em Curso </label>
                <select class="form-select form-select-sm" name="semestre" aria-label="Default select example">
                    <option selected></option>
                    <option value="1">1º Semestre</option>
                    <option value="2">2º Semestre</option>

                </select>
            </div>
            <div class="col-md-3" id="periodo_div">
                <label class="form-check-label" for="flexCheckIndeterminate">Período em Curso </label>
                <select class="form-select form-select-sm" name="periodo" aria-label="Default select example">
                    <option selected></option>
                    <option value="1">1º Período</option>
                    <option value="2">2º Período</option>
                    <option value="3">3º Período</option>
                    <option value="4">4º Período</option>
                    <option value="5">5º Período</option>
                    <option value="6">6º Período</option>
                    <option value="7">7º Período</option>
                    <option value="8">8º Período</option>
                    <option value="9">Ou Mais</option>

                </select>
            </div>
            <div class="col-md-3">
                <label class="form-check-label" for="flexCheckIndeterminate">Experiência
                    <span><strong>*</strong></span></label>
                <select class="form-select form-select-sm" name="experiencia" id="experiencia"
                    aria-label="Default select example" required>
                    <option selected></option>
                    <option value="Sem Experiência">Sem Experiência</option>
                    <option value="Com Experiência">Com Experiência</option>
                    <option value="Primeiro Emprego">Primeiro Emprego</option>
                </select>
            </div>
            <div class="col-md-2" id="tempoexperiencia_div">
                <label class="form-check-label" for="flexCheckIndeterminate">Tempo de Experiência
                    <span><strong>*</strong></span></label>
                <select class="form-select form-select-sm" name="tempoexperiencia" id="tempoexperiencia"
                    aria-label="Default select example" required>
                    <option selected value="0"></option>
                    <option value="1">Não informado</option>
                    <option value="2">3 meses</option>
                    <option value="3">6 meses</option>
                    <option value="4">1 ano</option>
                    <option value="5">3 anos</option>
                    <option value="6">5 anos</option>
                    <option value="7">10 anos</option>
                    <option value="8">20 anos</option>
                    <option value="9">30+ anos</option>
                </select>
            </div>

            <div>
                <hr>
                <h4 class="text-center mt-3" style="color: #284D92;">Curso Extracurriculares</h2>
                    <hr>
            </div>

            <div class="col-md-4">
                <label class="form-check-label" for="flexCheckIndeterminate">Cursos extracurriculares</label>
                <input type="text" class="form-control form-control-sm" name="rg" placeholder="">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Ano termino</label>
                <input type="month" class="form-control form-control-sm" name="rg" placeholder="">
            </div>
            <div class="col-md-2" style="margin-top: 35px;">
                <input type="button" class="btn btn-success" onclick="addCampos()" value="Adicionar">
            </div>

        </div>
        <!-- div responsavel por adicionar outros campo -->
        <div id="lista"> </div>
        <!-- ****************************************** -->

    </div>


    <div class="form-signin">
        <div class="text-end">
            <label class="switch">
                <input type="checkbox" checked>
                <span class="slider round"></span>
            </label>
        </div>
        <div class="row g-3">
            <div class="text">
                <h2 class="form-signin-heading">Informações de contato</h2>
                <hr>
            </div>

            <div class="col-md-4">
                <label class="form-check-label" for="flexCheckIndeterminate">Email </label>
                <input type="text" class="form-control" placeholder="">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Senha </label>
                <input type="text" class="form-control" placeholder="">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Confirmar Senha </label>
                <input type="text" class="form-control" placeholder="">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Telefone</label>
                <input type="text" class="form-control" placeholder="">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Celular </label>
                <input type="text" class="form-control" placeholder="">
            </div>

        </div>

    </div>


    <div class="form-signin">
        <div class="text-end">
            <label class="switch">
                <input type="checkbox" checked>
                <span class="slider round"></span>
            </label>
        </div>

        <div class="text">
            <h2 class="form-signin-heading">Endereço</h2>
            <hr>
        </div>

        <div class="row g-3">
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">CEP</label>
                <input type="text" class="form-control" placeholder="">
            </div>
            <div class="col-md-1">
                <label class="form-check-label" for="flexCheckIndeterminate">UF</label>
                <input type="text" class="form-control" placeholder="">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Cidade</label>
                <input type="text" class="form-control" placeholder="">
            </div>
            <div class="col-md-7">
                <label class="form-check-label" for="flexCheckIndeterminate">Bairro</label>
                <input type="text" class="form-control" placeholder="">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Nº</label>
                <input type="text" class="form-control" placeholder="">
            </div>
            <div class="col-md-10">
                <label class="form-check-label" for="flexCheckIndeterminate">Complemento</label>
                <input type="text" class="form-control" placeholder="">
            </div>
        </div>


    </div>

</form>


@endsection

<script>
    var cont =0;
    function addCampos(){
     
        var div = document.createElement('div');
        div.innerHTML = '<div class="row g-3" id="div'+cont+'"><div class="col-md-4"> <label class="form-check-label" for="flexCheckIndeterminate">Cursos extracurriculares</label><input type="text" class="form-control form-control-sm" name="rg" placeholder=""> </div> <div class="col-md-2">   <label class="form-check-label" for="flexCheckIndeterminate">Ano termino</label> <input type="month" class="form-control form-control-sm" name="rg" placeholder=""></div> <div class="col-md-2" style="margin-top: 35px;"> <input type="button" class="btn btn-danger" onclick="removeCampos('+cont+')" value="Remover"></div></div>';
        document.getElementById('lista').appendChild(div)
        cont++;

    }

    function removeCampos(id){

         document.getElementById('div'+id).remove();   
    }
</script>