@extends('layout.add_preferencia')

@section('add_preferencia')

<form class="form-signin" action="/insert/preferencia/" method="POST">
    <h2 class="form-signin-heading">Preferencias Profissionais</h2>
    <hr>
    @csrf
    <div class="row g-4">

        <div class="col-md-6">
            <label class="form-check-label" for="flexCheckIndeterminate">Preferencias Profissionais
                <span><strong>*</strong></span> </label>
            <input type="text" class="form-control form-control-sm" name="nome" placeholder="" required>
        </div>

        <div class="col-md-6">
            <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
            <textarea class="form-control" name="descricao" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
    </div>
    <span> Campos Obrigatórios <strong>*</strong></span>
    <div class="text-end">
        <input type="submit" class="btn btn-primary" value="Salvar Registros">
    </div>
</form>


@endsection
