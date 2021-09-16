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
                    <input type="email" class="form-control" placeholder="">
                </div>
                <div class="col-md-1">
                    <label class="form-check-label" for="flexCheckIndeterminate">Altura</label>
                    <input type="email" class="form-control" placeholder="">
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
                        <option>feminino</option>
                        <option>outros</option>
                        
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