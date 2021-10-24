@extends('layout.vagas_candidato')

@section('vagas')


<form class="form-signin" method="get" action="/lista/vaga/candidato" style="margin-top:50px">

    @csrf



    <div class="text-center">
        <h2 class="form-signin-heading">Buscar Vagas</h2>
        <hr>
    </div>
    <div class="pessoais">

        <div class="row g-3">


            <div class="col-md-4">
                <label class="form-check-label" for="flexCheckIndeterminate">Cargo/Função </label>

                <input type="text" class="form-control form-control-sm" name="cargo" id="cargo">

            </div>
            <div class="col-md-3">
                <label class="form-check-label" for="flexCheckIndeterminate">Tipo de Vaga </label>
                <select class="form-select form-select-sm" name="tipo" aria-label="Default select example">
                    <option selected></option>
                    <option value="CLT">CLT</option>
                    <option value="PJ">PJ</option>
                    <option value="Temporário">Temporário</option>
                    <option value="Menor Aprendiz">Menor Aprendiz</option>
                    <option value="Estágio">Estágio</option>
                    <option value="Trainee">Trainee</option>
                </select>
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Faixa Salarial</label>
                <input type="text" class="form-control form-control-sm" name="salario" placeholder="R$"
                    onKeyPress="return(moeda(this,'.',',',event))">

            </div>

            <div class="col-md-3">
                <label class="form-check-label" for="flexCheckIndeterminate">Formação </label>
                <select class="form-select form-select-sm" name="formacao" id="formacao"
                    aria-label="Default select example">
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
                <label class="form-check-label" for="flexCheckIndeterminate">Nome do Curso </label>
                <input type="text" class="form-control form-control-sm" name="curso" placeholder="">
            </div>

            <div class="col-md-2" id="termino_div">
                <label class="form-check-label" id="label_Anotermino">Ano de Términio </label>
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
            <div class="col-md-2" id="periodo_div">
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
                <label class="form-check-label" for="flexCheckIndeterminate">Bairro</label>
                <input type="text" class="form-control form-control-sm" name="bairro" id="bairro" placeholder="">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate"> Nome da Empresa </span></label>
                <input type="text" class="form-control form-control-sm" name="empresa" id="empresa" placeholder="">
            </div>

            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate"> Vaga remota</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="vaga" id="vaga" value="sim">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Sim
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="vaga" id="vaga" value="não" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Não
                    </label>
                </div>
            </div>

            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">PCD</label>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="pcd" id="pcd1" value="sim">
                    <label class="form-check-label" for="gridRadios1">
                        Sim
                    </label>
                </div>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="pcd" id="pcd2" value="não">
                    <label class="form-check-label" for="gridRadios2">
                        Não
                    </label>
                </div>
            </div>

            <hr>
            <div class="text-end">
                <a href="" class="btn btn-secondary">Limpar Filtro</a>
                <a href="" class="btn btn-success">Salvar Filtro</a>
                <input type="submit" class="btn btn-primary" value="Buscar Vagas">
                <!-- onclick="alert('Ainda não possui candidatos cadastrados')"-->
            </div>
        </div>


</form>

@endsection