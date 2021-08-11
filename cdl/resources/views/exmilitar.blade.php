@extends('layout.exmilitar')


@section('busca')

<form class="form-signin" method="get" action="/busca/militar/filtro">
    <div class="text-center">
        <h2 class="form-signin-heading">Buscar por Ex-Militares</h2>
        <hr>
    </div>
    <div class="input-group mb-3">
        <input type="text" class="form-control" name="buscar" placeholder="Pesquise por Nomes, CPF' ou Unidades Militar" aria-label="Recipient's username"
            aria-describedby="button-addon2">
        <input class="btn btn-dark" type="submit" value="Buscar" id="buscar">
    </div>

</form>
<!--
        <div class="photo">
            <img src="/img/busca-militar.png">
        </div>
    -->
@endsection