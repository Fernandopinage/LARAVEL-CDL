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
                <img src="/img/Login_OMS.png" id="id1" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/login_m.jpg" id="id2" class="d-block w-100" alt="...">
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
                                   <!-- <a class="btn btn-success" href="/militar/filtro/{{base64_encode($candidato->can_id)}}" target="_blank">Avaliado</a> -->
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#valiar{{$candidato->can_id}}">
                                        Avaliado
                                    </button>
                                </div>
                                    
                            <?php

                        }else{

                            ?>
                                <div class="d-grid gap-2" style="margin-top: 10px">
                                   <!-- <a class="btn btn-danger" href="/militar/filtro/{{base64_encode($candidato->can_id)}}" target="_blank">Pendente para avaliar</a> -->
                                   <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#valiar{{$candidato->can_id}}">
                                    Pendente para avaliar
                                  </button>
                                  
                                </div>
                            
                            
                            <?php
                            
                        }
                        
                        ?>


                    </div>
                    <div class="modal fade" id="valiar{{$candidato->can_id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Avaliação do candidato</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                        <form action="/avaliar/candidato/oms/" method="get">
                            <div class="modal-body">
                                <div class="row">

                                    <div class="text-center">

                                        <input type="hidden" name="id" value="{{$candidato->can_id}}" >
                    
                                        <span id="str01{{$candidato->can_id}}" style="padding-left: 3px;" onclick="star1({{$candidato->can_id}})"><img src="/img/star.png" width="50"></span>
                                        <span id="str02{{$candidato->can_id}}" style="padding-left: 3px;" onclick="star2({{$candidato->can_id}})"><img src="/img/star.png" width="50"></span>
                                        <span id="str03{{$candidato->can_id}}" style="padding-left: 3px;" onclick="star3({{$candidato->can_id}})"><img src="/img/star.png" width="50"></span>
                                        <span id="str04{{$candidato->can_id}}" style="padding-left: 3px;" onclick="star4({{$candidato->can_id}})"><img src="/img/star.png" width="50"></span>
                                        <span id="str05{{$candidato->can_id}}" style="padding-left: 3px;" onclick="star5({{$candidato->can_id}})"><img src="/img/star.png" width="50"></span>
                                        
                                    </div>
                                    
                                    <div class="text-center" style="margin-top: 20px">
                                        {{$candidato->can_nome}} {{$candidato->can_sobrenome}}
                                    </div>

                    
                                    <div class="form-check form-switch" style="display: none;">
                                        <input class="form-check-input" type="checkbox" role="switch" id="str_01{{$candidato->can_id}}" value="1" name="valor">
                    
                                    </div>
                    
                                    <div class="form-check form-switch" style="display: none;">
                                        <input class="form-check-input" type="checkbox" role="switch" id="str_02{{$candidato->can_id}}" value="2" name="valor">
                    
                                    </div>
                    
                                    <div class="form-check form-switch" style="display: none;">
                                        <input class="form-check-input" type="checkbox" role="switch" id="str_03{{$candidato->can_id}}" value="3" name="valor">
                    
                                    </div>
                                    <div class="form-check form-switch" style="display: none;">
                                        <input class="form-check-input" type="checkbox" role="switch" id="str_04{{$candidato->can_id}}" value="4" name="valor">
                    
                                    </div>
                                    <div class="form-check form-switch" style="display: none;">
                                        <input class="form-check-input" type="checkbox" role="switch" id="str_05{{$candidato->can_id}}" value="5" name="valor">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                             
                              <button type="submit" class="btn btn-primary">Avaliar</button>
                            </div>
                        </form>
                          </div>
                        </div>
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

    <a href="/utv/militar/{{base64_encode($curso->utvcurso_id)}}" style="text-decoration:none"> <!-- target="_blank" -->
    <div class="d-inline-block" style="margin-top: 20px;">

        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h1>
                            <span style="color: #157347; margin-right:132px"><img
                                        src="/img/curso/{{$curso->utvcurso_folder}}" height="800px" width="800px"
                                        class="img-thumbnail" alt="...">
                            </span>
                            <span style="color: #696969;">
                            </span>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="card" style="padding: 15px">
                    <h5 class="card-title"><b style="color:#006CDE;">{{$curso->utvcurso_tipo}}: {{$curso->utvcurso_titulo}}</b></h5>
                    <h6 class="card-title">Descrição:</h6>
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
    </a>

    @endforeach
</div>

@endsection