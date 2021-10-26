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

        <a href="/militar/filtro/{{base64_encode($candidato->can_id)}}" target="_blank">
            <div class=" d-inline-block" style="padding: 8px;" data-bs-toggle="modal" data-bs-target="#exampleModal">

                <div class="form-row" style="border: 0px;">
                    <div class="form-group col-md-4">
                        <div class="card" style="width: 20rem;">
                            <div class="card-body">

                                <span style="color: #284D92"></span>
                                <p>
                                <h1>
                                    <span style="color: #157347; margin-right:132px; margin-left:50px; ">

                                        @if(!empty($candidato->can_foto))
                                        <img src="/img/events/{{$candidato->can_foto}}" height="150px" width="150px" class="img-thumbnail" alt="...">
                                            
                                        @else
                                        <img src="/img/events/perfil.png" height="150px" width="150px" class="img-thumbnail" alt="...">
                                            
                                        @endif
                                    
                                    
                                    </span>
                                    <span style="color: #696969;"></span>
                                    <p class="text-center"> <img src="/img/star.png" height="150px" width="150px"
                                            class="img-thumbnail" alt="..."></p>
                                </h1>
                                <hr>
                                <br>
                                <span><b style="color: #97212d; margin-right:0px">Nome:</b></span><span
                                    style="color: #535151"> {{$candidato->can_nome}}</span>
                                <br>
                                <span><b style="color: #22427c; margin-right:0px">Formação:</b></span><span
                                    style="color: #535151"> {{$candidato->can_formacao}}</span>

                                <br>
                                <span><b style="color: #22427c; margin-right:0px">Status:</b></span>
                                <span style="color: #535151">

                                    @if ($candidato->can_area_profissional == 'sim')
                                    {{"Empregada"}}
                                    @else
                                    {{"Procurando Emprego"}}
                                    @endif
                                </span>

                                <br>
                                <span><b style="color: #22427c; margin-right:0px">Unidade Militar:</b></span>
                                <span style="color: #535151"> {{$candidato->can_unidademilitar}}</span>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
    </div>

    @endif

</div>

@endsection