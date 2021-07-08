@extends('layout.busca_candidato')

@section('busca')

<form class="form-signin" method="POST">
    @csrf
    <div class="text-center" >
        <h2 class="form-signin-heading">Buscar por Ex-alunos</h2>
        <hr>
    </div>
    <div class="mb-3">
    <input type="text" class="form-control form-control" name="cpf" placeholder="CPF" required="" autofocus="" />
    </div>
    <div class="mb-3">
    <input type="texte" class="form-control form-control" name="nome" placeholder="Nome" required="" />
    </div>
    <div class="mb-3">
        <input type="texte" class="form-control form-control" name="curso" placeholder="Curso" required="" />
        </div>


    <div class="d-grid gap-2">
    <input type="submit" class="btn btn-lg" name="loginentrar" value="Entrar">
    </div>

</form>

<div class="photo">
    <img src="/img/estudante.png">
</div>
@endsection