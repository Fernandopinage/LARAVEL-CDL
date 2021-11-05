@extends('layout.exmilitar')


@section('busca')

<form class="form-signin" method="get" action="/busca/militar/filtro">
    <div class="text-center">
        <h2 class="form-signin-heading">Buscar por Ex-Militares</h2>
        <hr>
    </div>
    <div class="input-group g-3">
        <input type="text" class="form-control" name="buscar" placeholder="Pesquise por Nome, cpf ou unidades militar"
            aria-label="Recipient's username">
        <input class="btn btn-dark" type="submit" value="Buscar" id="buscar">
    </div>

</form>

<div class="container">

    @if(!empty($dados))

    <div class="container" id="canditados" style="margin-top: 50px; margin-bottom:50px">
        @foreach($dados as $candidato)

        @if($candidato->can_exmilitar === 'Sim')


       
            <div class=" d-inline-block" style="padding: 8px;" data-bs-toggle="modal" data-bs-target="#exampleModal">

                <div class="form-row" style="border: 0px;">
                    <div class="form-group col-md-4">
                        <div class="card" style="width: 20rem;">
                            <div class="card-body">

                                <span style="color: #284D92"></span>
                                <p>
                                <h1>
                                    <span style="color: #157347; margin-right:132px; margin-left:40px; ">

                                        @if(!empty($candidato->can_foto))
                                        <img src="/img/events/{{$candidato->can_foto}}" id="perfil" height="150px" width="150px"
                                            class="img-thumbnail" alt="">

                                        @endif
                                        @if(empty($candidato->can_foto))
                                        <img src="/img/events/perfil.png" id="perfil" height="150px" width="150px"
                                            class="img-thumbnail"  alt="">

                                        @endif


                                    </span>
                                    <span style="color: #696969;"></span>
                                    <p class="text-center"> 

                                    <?php 

                                    if(empty($candidato->can_nota)){
                                        ?>
                                        <img src="/img/0.png" height="150px" width="150px" class="img-thumbnail" alt="{{$candidato->can_nota}}" style="border:0px;">
                                        <?php
                                    }
                                    
                                    if($candidato->can_nota == '5'){
                                        ?>
                                        <img src="/img/5.png" height="150px" width="150px" class="img-thumbnail" alt="{{$candidato->can_nota}}" style="border:0px;">
                                        <?php
                                    }
                                    if($candidato->can_nota == '4'){
                                        ?>
                                        <img src="/img/4.png" height="150px" width="150px" class="img-thumbnail" alt="{{$candidato->can_nota}}" style="border:0px;">
                                        <?php
                                    }
                                    if($candidato->can_nota == '3'){
                                        ?>
                                        <img src="/img/3.png" height="150px" width="150px" class="img-thumbnail" alt="{{$candidato->can_nota}}" style="border:0px;">
                                        <?php
                                    }   
                                    if($candidato->can_nota == '2'){
                                        ?>
                                        <img src="/img/2.png" height="150px" width="150px" class="img-thumbnail" alt="{{$candidato->can_nota}}" style="border:0px;">
                                        <?php
                                    }
                                    if($candidato->can_nota == '1'){
                                        ?>
                                        <img src="/img/1.png" height="150px" width="150px" class="img-thumbnail" alt="{{$candidato->can_nota}}" style="border:0px;">
                                        <?php
                                    }
                                    ?>
                                    </p>
                                </h1>
                                <hr>
                                <br>
                                <span><b style="color: #22427c; margin-right:0px">Nome:</b></span><span
                                    style="color: #535151"> {{$candidato->can_nome}}</span>
                                    <span
                                    style="color: #535151"> {{$candidato->can_sobrenome}}</span>
                                <br>
                                <span><b style="color: #22427c; margin-right:0px">Telefone:</b></span><span
                                style="color: #535151"> {{$candidato->can_telefone}}</span>
                                <br>
                                <span><b style="color: #22427c; margin-right:0px">E-mail:</b></span><span
                                style="color: #535151"> {{$candidato->can_email}}</span>
                                <br>
                                <span><b style="color: #22427c; margin-right:0px">CPF:</b></span><span
                                    style="color: #535151"> {{$candidato->can_cpf}}</span>

                                <br>
                                <span><b style="color: #22427c; margin-right:0px">Unidade Militar:</b></span>
                                <span style="color: #535151"> {{$candidato->can_unidademilitar}}</span>

                                <?php
                                
                                if(!empty($candidato->can_nota)){

                                    ?>

                                        <div class="d-grid gap-2" style="margin-top: 10px">
                                            <a class="btn btn-success" href="/militar/filtro/{{base64_encode($candidato->can_id)}}" target="_blank">Avaliado</a>
                                        </div>
                                    
                                    <?php

                                }else{

                                    ?>
                                        <div class="d-grid gap-2" style="margin-top: 10px">
                                            <a class="btn btn-danger" href="/militar/filtro/{{base64_encode($candidato->can_id)}}" target="_blank">Pendente para avaliar</a>
                                        </div>
                                    
                                    
                                    <?php
                                    
                                }
                                
                                ?>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        @endif
        @endforeach
    </div>

    @endif

</div>

@endsection