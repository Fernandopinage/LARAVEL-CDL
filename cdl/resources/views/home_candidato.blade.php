@extends('layout.home_candidato')

@section('home')

@if(!empty($vagas))


@foreach($vagas as $vagas)


<div class="row g-3 shadow p-3 mb-5 bg-body rounded" style="margin-top:10px">

    <div class="row">

        <div class="col-sm-12">
            <form action="" method="GET">
                <div class="card" style="padding: 15px">
                    <p class="card-title"><b
                            style="font-size:36px;color:#006CDE;margin-bottom:10px">{{$vagas->vag_cargo}} -
                            {{$vagas->vag_cidade}} {{$vagas->vag_uf}} </b></p>
                    <hr>
                    @if($vagas->vag_oculta == 'sim')
                    <p class="card-title"><b style="color:#006CDE;">Empresa: </b><b>{{$vagas->vag_nome_empresa}}</b></p>
                    @else
                    <p class="card-title"><b style="color:#006CDE;">Empresa: </b><b>Confidencial</b></p>
                    @endif
                    <p class="card-title"><b style="color:#006CDE;">Endereço: </b><b> {{$vagas->vag_bairro != null ?
                            $vagas->vag_bairro : 'Não divulgado'}}</b></p>
                    <p class="card-title"><b style="color:#006CDE;">Tipo de contratação: </b><b>
                            {{$vagas->vag_tipo}}</b></p>
                    <p class="card-title"><b style="color:#006CDE;">Salário Oferecido:</b><b> {{$vagas->vag_salario !=
                            null? $vagas->vag_salario:''}}</b></p>
                    <p class="card-title"><b style="color:#006CDE;">Vaga Remota:</b><b> {{$vagas->vag_opcao ==
                            'sim'?'SIM':'NÃO'}}</b></p>


                    <p class="card-title"><b style="color:#006CDE;">Vagas para PCD: </b><b> {{$vagas->vag_pcd ==
                            'sim'?'SIM':'NÃO'}}</b></p>


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
                        <p class="card-text" style="text-align: justify ">{{$vagas->vag_descricao}}</p>

                    </div>
                    
                    <div class="text-end">

                        <button class="btn btn-primary btn">Candidate-se
                            para esta vaga
                        </button>

                    </div>


            </form>
        </div>
    </div>
</div>
</div>


@endforeach

@endif


@endsection