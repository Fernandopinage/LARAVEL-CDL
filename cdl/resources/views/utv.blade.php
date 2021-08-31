@extends('layout.utv')

@section('login')

<form class="form-signin" method="post" action="/validar/utv">
    @csrf
    <div class="text-center" >
        <h2 class="form-signin-heading">UTV</h2>
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
            <a class="nav-link" href="#">Esqueci minha senha</a>
        </div>
        <div class="col">
            <a class="nav-link" id="link1" href="/add/utv">Criar uma conta</a>
        </div>
    </div>

    <div class="d-grid gap-2">
    <input type="submit" class="btn btn-lg" name="loginentrar" value="Entrar">
    </div>

</form>

<div class="photo">
    <!-- <img src="/img/man2-candidato1.png"> -->
</div>
@endsection