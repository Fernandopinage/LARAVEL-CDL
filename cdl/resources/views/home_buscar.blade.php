@extends('layout.home_buscar')
@section('buscar')

<form  method="get" action="/filtro" style="margin-top: 80px;"> <!-- login/militar -->
    
    
    <?php
    
    if(!empty($vagas)){
        ?>
        <div class="row g-3 shadow p-3 mb-5 bg-body rounded" style="">
        
        @foreach($vagas as $vagas)


    <div class="row">

        <div class="col-sm-12">
            <form action="/vaga/candidato" method="GET">
            <div class="card" style="padding: 15px">
                <p class="card-title"><b style="font-size:36px;color:#006CDE;margin-bottom:10px">{{$vagas->vag_cargo}} -
                    {{$vagas->vag_cidade}} {{$vagas->vag_uf}} </b></p>
                <hr>
                @if($vagas->vag_oculta == 'sim')
                <p class="card-title"><b style="color:#006CDE;">Empresa: </b><b>{{$vagas->vag_nome_empresa}}</b></p>
                @else
                <p class="card-title"><b style="color:#006CDE;">Empresa: </b><b>Confidencial</b></p>
                @endif 
                <p class="card-title"><b style="color:#006CDE;">Endereço: </b><b> {{$vagas->vag_bairro != null ? $vagas->vag_bairro : 'Não divulgado'}}</b></p>                          
                <p class="card-title"><b style="color:#006CDE;">Tipo de contratação: </b><b> {{$vagas->vag_tipo}}</b></p>
                <p class="card-title"><b style="color:#006CDE;">Salário Oferecido:</b><b> {{$vagas->vag_salario != null? $vagas->vag_salario:''}}</b></p>
                <p class="card-title"><b style="color:#006CDE;">Vaga Remota:</b><b> {{$vagas->vag_opcao == 'sim'?'SIM':'NÃO'}}</b></p>
               
               
                <p class="card-title"><b style="color:#006CDE;">Vagas para PCD: </b><b> {{$vagas->vag_pcd == 'sim'?'SIM':'NÃO'}}</b></p>
                   

                <div class="card-body">
                    <div style="margin-top: 20px">
                        <p style="font-size: 41px; color:#0362c7;">Requisitos</p>
                        <br>
                        <p><b>Escolaridade mínima: </b>{{$vagas->vag_formacao}} {{$vagas->vag_periodo}}</p>
                    </div>
                      @if($vagas->vag_idioma_necessario != null)
                        <p> <b> - Idioma:</b> {{$vagas->vag_idioma}}</p>
                        <p> <b> - Nível:</b> {{$vagas->vag_idioma_nivel}}</p>
                            
                      @endif  
                      <h6 class="card-title" style="margin-top: 20px">Sobre vaga:</h6>
                      <p class="card-text">{{$vagas->vag_descricao}}</p>

                </div>
                
               
                <a class="btn btn-primary" href="/login/candidato">Canidata-se</a>
            </form>
            </div>
        </div>
    </div>
</div>


@endforeach
</div>
        
        
        
        
        
        <?php
        
    }


    if(!empty($candidato)){
        ?>
        
        <div class="container" id="canditados" style="margin-top: 50px; margin-bottom:50px">
            @foreach ($candidato as $candidato)
        
            <div class=" d-inline-block" style="padding: 8px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <div class="form-row" style="border: 0px;">
                    <div class="form-group col-md-4">
                        <div class="card" style="width: 20rem;">
                            <div class="card-body">
                                <span style="color: #284D92"></span>
                                <p>
                                <h1>
                                    <span style="color: #157347; margin-left:50px; ">
                                        @if($candidato->can_foto != null)
        
                                        <img id="perfil" src="/img/events/{{$candidato->can_foto}}" height="150px" width="150px"
                                            class="img-thumbnail" alt="...">
                                        @else
                                        <img id="perfil" src="/img/events/perfil.png" height="150px" width="150px"
                                            class="img-thumbnail" alt="...">
                                        @endif
        
                                    </span><span style="color: #696969;"></span>
        
                                </h1>
                                <hr>
                                <br>
                                <span><b style="color: #22427c; margin-right:0px">Nome:</b></span><span style="color: #535151">
                                    {{$candidato->can_nome}}</span>
                                <br>
                                <span><b style="color: #22427c; margin-right:0px">E-mail:</b></span><span
                                    style="color: #535151">
                                    {{$candidato->can_email}}</span>
        
                                <br>
                                <span><b style="color: #22427c; margin-right:0px">Celular:</b></span>
        
                                <br>
                                <span><b style="color: #22427c; margin-right:0px">CPF:</b></span>
                                <span style="color: #535151"> {{$candidato->can_cpf}}</span>
        
                                <br>
                                @if(isset($candidato->can_utv_titlulo))
                                <span><b style="color: #22427c; margin-right:0px">Curso UTV:</b></span><span>{{$candidato->can_utv_titlulo[0]}}</span>
                                @endif
                            </div>
                            <a class="btn btn-primary" href="/login/empresa">Seu candidato ideal</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        
        </div>
        
        
        <?php


    }
        
    ?>

</form>
@endsection
