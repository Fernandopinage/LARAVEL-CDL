@extends('layout.buscar_candidados_utv')

@section('buscar_candidado_utv')
<form class="form-signin" method="get" action="">
    <div class="text-center">
        <h2 class="form-signin-heading">Buscar Ex-Alunos</h2>
        <hr>
    </div>
    <div class="row g-3">

        <div class="col-md-2">
            <label for="inputEmail4" class="form-label">CPF</label>
            <input type="text" class="form-control form-control-sm" id="inputEmail4">
        </div>
        <div class="col-md-5">
            <label for="inputPassword4" class="form-label">Nome</label>
            <input type="text" class="form-control form-control-sm" id="inputPassword4">
        </div>
        <div class="col-md-5">
            <label for="inputPassword4" class="form-label">Curso</label>
            <input type="text" class="form-control form-control-sm" id="inputPassword4">
        </div>
        <div class="text-end">
            <input type="submit" class="btn btn-primary" onclick="alert('Buscar em desenvolvimento')" value="Pesquisar">
        </div>
    </div>

</form>
@endsection