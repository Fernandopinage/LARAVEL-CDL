@extends('layout.home_militar')
@section('home')

<div class="row_full">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/banner-1.jpg" id="id1" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/banner-2.jpg" id="id2" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/banner-3.jpg" id="id3" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<div class="visualizar">

    <h1>ÚLTIMOS <b> EX MILITARES </b> EM DESTAQUE</h1>
    <h5>{{count($candidato)}} profissionais cadastrados na última semana</h5>
</div>

@if(!empty($candidato))


<div class="container" id="canditados">
    @foreach($candidato as $candidato)

    <div class=" d-inline-block" style="padding: 8px;" data-bs-toggle="modal" data-bs-target="#exampleModal">

        <div class="form-row" style="border: 0px;">
            <div class="form-group col-md-4">
                <div class="card" style="width: 20rem;">
                    <div class="card-body">

                        <span style="color: #284D92"></span>
                        <p>
                        <h1>
                            <span style="color: #157347; margin-left: 40px; ">

                                @if(!empty($candidato->can_foto))
                                <img src="/img/events/{{$candidato->can_foto}}" id="perfil"
                                    class="img-thumbnail" style="border-radius: 50%">

                                @else
                                <img src="/img/events/perfil.png" height="150px" width="150px"
                                    class="img-thumbnail" id="perfil" style="border-radius: 50%">

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
    @endforeach
</div>
@endif


<div class="visualizar">

    <h1>Veja os Cursos que a <b> UTV </b> tem para você!</h1>

</div>
<div class="container" id="curso">
    @foreach ($curso as $curso)

    <div class="d-inline-block" style="margin-top: 20px;">

        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h1>
                            <span style="color: #157347; margin-right:132px"><a href="" target="_blank"><img
                                        src="/img/curso/{{$curso->utvcurso_folder}}" height="800px" width="800px"
                                        class="img-thumbnail" alt="..."></a>
                            </span>
                            <span style="color: #696969;">
                            </span>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="card" style="padding: 15px">
                    <h5 class="card-title"><b style="color:#006CDE;">Curso: {{$curso->utvcurso_titulo}}</b></h5>
                    <h6 class="card-title">Sobre Curso:</h6>
                    <p class="card-text">{{$curso->utvcurso_desc}}</p>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Horário:</th>
                                    <th scope="col">Dias:</th>
                                    <th scope="col">Período:</th>
                                    <th scope="col">Investimento:</th>
                                    <th scope="col">Estudante:</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><b style="color:#006CDE;">{{$curso->utvcurso_hora}}</b></td>
                                    <td><b style="color:#006CDE;">{{$curso->utvcurso_dias}}</b></td>
                                    <td><b style="color:#006CDE;">{{$curso->utvcurso_data_inicio}} as
                                            {{$curso->utvcurso_data_final}}</b></td>
                                    <td><b style="color:#006CDE;">{{$curso->utvcurso_valor_geral}}</b></td>
                                    <td><b style="color:#006CDE;">{{$curso->utvcurso_valor_estudante}}</b></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer text-left">
                        <p><b style="color:#006CDE;"> Mais Informações:</b></p>
                        <p style="color:#006CDE;">{{$curso->utvcurso_informacoes}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endforeach
</div>

@endsection