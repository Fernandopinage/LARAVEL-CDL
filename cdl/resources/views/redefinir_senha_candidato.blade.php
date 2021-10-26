@extends('layout.redefinir_senha_candidato')

@section('update_senha')



<form class="form-signin" method="POST" action="/modificar/senha/candidato">

    <div class="text-center">
        <h2 class="form-signin-heading">ALTERAR SENHA</h2>
        <hr>
        <span>Preencha os campos abaixo para cadastrar uma nova senha</span>
    </div>
    @csrf
    <div class="mb-3">
        <input type="hidden" name="id" value="{{$candidato->can_id;}}">
        <label for="formGroupExampleInput" class="form-label">*Nova senha</label>
        <input type="password" class="form-control form-control" name="newsenha" minlength="6" maxlength="12"
            placeholder="Digite sua nova senha" required />
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">*Confirmar nova senha</label>
        <input type="password" class="form-control form-control" name="confsenha" minlength="6" maxlength="12"
            placeholder="Digite confirme sua senha" required />
    </div>
    <div class="d-grid gap-2">
        <input type="submit" class="btn-primary btn-lg" name="alterarsenha" value="Alterar Senha">
    </div>

</form>



@endsection