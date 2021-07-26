@extends('layout.redefinir_empresa')

@section('redefinir')

<form class="form-signin" method="POST" action="{{('/redefinir/senha/empresa')}}">

    @csrf
    <div class="text-center">
        <h2 class="form-signin-heading">ESQUECEU SUA SENHA?</h2>
        <hr>
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">E-mail</label>
        <input type="mail" class="form-control form-control" name="email" placeholder="E-mail" required=""
            autofocus="" />
    </div>
    <div class="d-grid gap-2">
        <input type="submit" class="btn-primary btn-lg" name="loginentrar" value="Entrar">
    </div>
    <div class="mensagem">
        
    <span>* Informe o e-mail, utilizado no seu cadastro.<br>
   * As instruções para alterarção da senha serão enviadas para o seu e-mail</span>
    </div>
</form>

@endsection