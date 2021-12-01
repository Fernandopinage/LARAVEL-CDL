@extends('layout.restrito')

@section('login_restrito')

<form class="form-signin" method="post" action="/validar/restrito">
    @csrf
    <div class="text-center" >
        <h2 class="form-signin-heading">RESTRITO</h2>
        <hr>
    </div>
    <div class="mb-3">
    <input type="text" class="form-control form-control" name="email" placeholder="E-mail" required="" autofocus="" />
    </div>
    <div class="mb-3">
    <input type="password" class="form-control form-control" name="password" placeholder="Senha" required="" />
    </div>
    <div class="row g-3">
        <div class="col">
           <a class="nav-link" href="/redefinir/restrito">Esqueci minha senha</a> 
        </div>

    </div>

    <div class="d-grid gap-2">
    <input type="submit" class="btn-primary btn-lg" name="loginentrar" value="Entrar">
    </div>

</form>

<div class="photo">
    <!-- <img src="/img/man2-candidato1.png"> -->
</div>
@endsection
