@extends('layout.buscar_candidados_utv')

@section('buscar_candidado_utv')
<form class="form-signin" method="get" action="/buscar/filtro/candidato/">
    <div class="text-center">
        <h2 class="form-signin-heading">Buscar Ex-Alunos</h2>
        <hr>
    </div>

    <div class="input-group g-3">
        <input type="text" class="form-control" name="buscar" placeholder="Pesquise por Nome, CPF' ou Curso"
            aria-label="Recipient's username">
        <input class="btn btn-primary" type="submit" value="Buscar" id="buscar">
    </div>



</form>



<div class="container">
    @if(!empty($candidato))
    <div class="container" id="canditados" style="margin-top: 50px; margin-bottom:50px">
        @foreach ($candidato as $candidato)

        <div class=" d-inline-block" style="padding: 8px;">

            <div class="form-row" style="border: 0px;">
                <div class="form-group col-md-4">
                    <div class="card" style="width: 20rem;">
                        <div class="card-body">

                            <span style="color: #284D92"></span>
                            <p>
                            <h1>
                                <span style="color: #157347; margin-right:132px; margin-left:50px; ">

                                    @if(!empty($candidato->can_foto))
                                    <img src="/img/events/{{$candidato->can_foto}}" height="150px" width="150px" class="img-thumbnail" alt="..." style="border-radius: 50%">
                                        
                                    @else
                                    <img src="/img/events/perfil.png" height="150px" width="150px" class="img-thumbnail" alt="..." style="border-radius: 50%">
                                        
                                    @endif
                                
                                
                                </span>
                               
                            </h1>
                            <hr>
                            <br>
                            <span><b style="color: #22427c; margin-right:0px">Nome:</b></span><span
                                style="color: #535151"> {{$candidato->can_nome}}</span>
                            <br>
                            <span><b style="color: #22427c; margin-right:0px">E-mail:</b></span><span
                            style="color: #535151"> {{$candidato->can_email}}</span>

                            <br>
                            <span><b style="color: #22427c; margin-right:0px">Celular:</b></span><span
                            style="color: #535151"> {{$candidato->can_celular}}</span>
                            <br>
                            <span><b style="color: #22427c; margin-right:0px">CPF:</b></span>
                            <span
                            style="color: #535151"> {{$candidato->can_cpf}}</span>

                            <br>
                            <span><b style="color: #22427c; margin-right:0px">Curso UTV:</b></span>
                      
                        </div>
                        <button type="button" class="btn btn-primary btn-sm btn-block">Vísualizar perfil</button>
                    </div>
                </div>
            </div>
        </div>

        @endforeach
    </div>
    @endif
</div>
@endsection