@extends('layout.vagas_candidato')

@section('vagas')

<form class="form-signin" method="get" action="" style="margin-top:50px">
    <div class="text-center">
        <h2 class="form-signin-heading">Buscar Vagas</h2>
        <hr>
    </div>
    <div class="row" class="g-3">
        <div class="col-sm-2">
          <input type="text" class="form-control" placeholder="Cidade ou Estado " aria-label="Pesquisar cargo, competência ou empresa">
        </div>
        <div class="col-sm-8">
          <input type="text" class="form-control" placeholder="Pesquisar cargo, competência ou empresa"  aria-label="Last name">
        </div>
        <div class="col-sm-2">
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
    </div>
</form>

@endsection