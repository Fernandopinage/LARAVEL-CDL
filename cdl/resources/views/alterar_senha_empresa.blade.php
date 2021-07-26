@extends('layout.alterar_senha_empresa')

@section('alterar_senha')

<form class="form-signin" method="POST" action="/update/senha/empresa">

    @csrf
    <div class="text-center">
        <h2 class="form-signin-heading">RECUPERAR SENHA</h2>
        <hr>
        <span>Preencha os campos abaixo para cadastrar uma nova senha</span>
    </div>

    <div class="mb-3">
        <input type="password" class="form-control form-control" name="newsenha" placeholder="Digite sua nova senha" />
    </div>
    <div class="mb-3">
        <input type="password" class="form-control form-control" name="confsenha" placeholder="Digite confirme sua senha"  />
    </div>
    <div class="d-grid gap-2">
        <input type="submit" class="btn-primary btn-lg" name="alterarsenha" value="Entrar">
    </div>

</form>

@endsection