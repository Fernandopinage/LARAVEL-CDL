@extends('layout.add_restrito')

@section('add_restrito')

<form class="form-signin" action="/insert/restrito" method="POST">

    @csrf

    <div class="text">
   
        <h2 class="form-signin-heading">Dados Pessoais</h2>
        <hr>
    </div>
    <div class="row g-3">

        <div class="col-md-4">
            <label class="form-check-label" for="flexCheckIndeterminate">Nome Completo <span><strong>*</strong></span>
            </label>
            <input type="text" class="form-control form-control-sm" placeholder="" name="nome" required>
        </div>
        <div class="col-md-4">
            <label class="form-check-label" for="flexCheckIndeterminate">E-mail <span><strong>*</strong></span>
            </label>
            <input type="text" class="form-control form-control-sm" placeholder="" name="email" required>
        </div>
        <div class="col-md-2">
            <label class="form-check-label" for="flexCheckIndeterminate">Senha
                <span><strong>*</strong></span></label>
            <input type="password" class="form-control form-control-sm" placeholder="" minlength="6" name="senha" required>
        </div>
        <div class="col-md-2">
            <label class="form-check-label" for="flexCheckIndeterminate">Confirmar Senha
                <span><strong>*</strong></span> </label>
            <input type="password" class="form-control form-control-sm" placeholder="" minlength="6" name="confirma" required>
        </div>
        <div class="col-md-4">
            <label class="form-check-label" for="flexCheckIndeterminate">Perfil
                <span><strong>*</strong></span></label>
            <select class="form-select form-select-sm" name="perfil" id=""
                aria-label="Default select example" required>
                <option value="" selected></option>
                <option value="Administrador" >Administrador</option>
                <option value="colaborador" >Colaborador</option>
            </select>
        </div>
        <br><hr>
        <span> Campos Obrigatórios <strong>*</strong></span>
        <div class="text-end">
            <input type="submit" class="btn btn-primary" value="Salvar Registros">
        </div>
    </div>

</form>


@endsection
