@extends('layout.militar')

@section('login')
    
<form class="form-signin" method="POST" action="">
    <div class="text-center">
        <h2 class="form-signin-heading">OM's</h2>
        <hr>
    </div>
    <div class="mb-3">
    <input type="text" class="form-control form-control" name="login" placeholder="E-mail" required="" autofocus="" />
    </div>
    <div class="mb-3">
    <input type="password" class="form-control form-control" name="password" placeholder="Senha" required="" />
    </div>
    <div class="row g-3">
        <div class="col">
            <a class="nav-link" href="#">Esqueci minha senha</a>
        </div>
        <div class="col">
            <a class="nav-link" href="{{('/add/militar/')}}">Criar uma conta</a>
        </div>
    </div>

    <div class="d-grid gap-2">
    <input type="submit" class="btn btn-lg" name="loginentrar" value="Entrar">
    </div>

</form>
<div class="photo">
<img src="/img/busca-militar.png">
</div>

@endsection