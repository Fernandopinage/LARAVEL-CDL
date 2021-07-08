@extends('layout.exmilitar')
    
       
        @section('busca')

        <form class="form-signin" method="POST" action="">
            <div class="text-center">
                <h2 class="form-signin-heading">Busca por Ex-Militares</h2>
                <hr>
            </div>
            <div class="mb-4">
            <input type="text" class="form-control form-control" name="" placeholder="CPF" required="" autofocus="" />
            </div>
            <div class="mb-4">
            <input type="password" class="form-control form-control" name="" placeholder="Nome" required="" />
            </div>   
            <div class="mb-4">
                <input type="password" class="form-control form-control" name="" placeholder="Unidade Militar" required="" />
                </div>    
            <div class="d-grid gap-2">
            <input type="submit" class="btn btn-lg" name="loginentrar" value="Buscar">
            </div>
        </form>  

        <div class="photo">
            <img src="/img/busca-militar.png">
        </div>
        @endsection