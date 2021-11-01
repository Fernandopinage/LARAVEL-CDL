@extends('layout.home')
@section('conteudo')

<form class="form-signin" method="get" action="/filtro"> <!-- login/militar -->
    
    <div class="text-center" id="text-pesquisar">
        <p class="h1 text-center">Faça sua busca</p>
    </div>

    <div class="input-group mb-3">
        <select class="fdropdown-menu" name="select">
            <option selected></option>
            <option value="vagas">Vagas</option>
            <option value="candidatos">Candidatos</option>
            <option value="militares">Ex-Militares</option>
        </select>
        <input type="text" name="pesquisa" class="form-control form-control"
            placeholder="Digite um cargo ou uma palavra chave" aria-label="Recipient's username"
            aria-describedby="button-addon2">
        <button class="btn btn-success" type="submit" id="button-addon2">Busca</button>

</form>
@endsection
