@extends('layout.alterar_senha _oms')

@section('alterar_senha')

<form class="form-signin" method="post" action="{{('/modificar/senha/empresa')}}">

    <div class="text-center">
        <h2 class="form-signin-heading">ALTERAR SENHA</h2>
        <hr>
        <span>Preencha os campos abaixo para cadastrar uma nova senha</span>
    </div>
    @csrf
    <div class="mb-3">
        <input type="hidden" name="email" value="<?php echo session('empresa') ?>" >
        <label for="formGroupExampleInput" class="form-label">*Nova senha</label>
        <input type="password" class="form-control form-control" name="newsenha" placeholder="Digite sua nova senha" required/>
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">*Confirmar nova senha</label>
        <input type="password" class="form-control form-control" name="confsenha" placeholder="Digite confirme sua senha"  required/>
    </div>
    <div class="d-grid gap-2">
        <input type="submit" class="btn-success btn-lg" name="alterarsenha" value="Alterar Senha">
    </div>

</form>

@endsection