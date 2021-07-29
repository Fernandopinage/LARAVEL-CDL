@extends('layout.empresa')

@section('login')

<form class="form-signin" method="POST" action="{{('/validar/empresa')}}"> 

    @csrf
    <div class="text-center" >
        <h2 class="form-signin-heading">Empresa</h2>
        <hr>
    </div>
    <div class="mb-3">
    <input type="mail" class="form-control form-control" name="email" placeholder="E-mail"  autofocus="" />
    </div>
    <div class="mb-3">
    <input type="password" class="form-control form-control" name="password" placeholder="Senha"  />
    </div>
    <div class="d-grid gap-2">
    <input type="submit" class="btn-primary btn-lg" name="loginentrar" value="Entrar">
    </div>
    <div class="row g-3">
        <div class="col">
            <a class="nav-link" id="link1" href="/redefinir/empresa">Esqueci minha senha</a>
        </div>
        <div class="col">
            <a class="nav-link" id="link1" href="/add/empresa">Criar uma conta</a>
        </div>
    </div>


</form>


@endsection