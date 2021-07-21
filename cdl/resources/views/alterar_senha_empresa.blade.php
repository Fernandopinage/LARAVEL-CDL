@extends('layout.alterar_senha_empresa')

@section('alterar_senha')

<form class="form-signin" method="POST" action="/validar/empresa">

    @csrf
    <div class="text-center">
        <h2 class="form-signin-heading">Alterar Senha</h2>
        <hr>
    </div>
    <div class="mb-3">
        <input type="mail" class="form-control form-control" name="password" placeholder="Digite senha atual" required="" autofocus="" />
    </div>
    <div class="mb-3">
        <input type="mail" class="form-control form-control" name="password" placeholder="Digite sua nova senha"required="" autofocus="" />
    </div>
    <div class="mb-3">
        <input type="mail" class="form-control form-control" name="password" placeholder="Digite confirme sua senha" required="" autofocus="" />
    </div>
    <div class="d-grid gap-2">
        <input type="submit" class="btn-primary btn-lg" name="loginentrar" value="Entrar">
    </div>

</form>

@endsection