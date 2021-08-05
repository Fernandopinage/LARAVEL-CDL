@extends('layout.vagas_disponivel')

@section('vagas_disponiel')

<form class="form-signin " action="empresa" method="POST">

    <h1>Minhas Vagas</h1>

    @foreach($vagas as $vagas)



    <div class=" d-inline-block" style="padding: 8px;">

        <div class="form-row" {{$vagas->vag_id}}style="border: 0px;">
            <div class="form-group col-md-4">
                <div class="card" style="width: 25rem;">
                    <div class="card-body">
                        <p class="card-title text-left">
                            <span style="color: #284D92">{{$vagas->vag_cargo}}</span>
                            <p>
                                <hr>
                                <h6> 
                                    <span style="color: #157347; margin-right:132px">Data de inicio</span><span  style="color: #696969;">{{\Carbon\Carbon::parse($vagas->vag_data_inicio)->format('d/m/Y')}}</span>
                                    <br>
                                    <span style="color: #97212d; margin-right:110px">Data do Termino</span><span   style="color: #696969">{{\Carbon\Carbon::parse($vagas->vag_data_final)->format('d/m/Y')}}</span>
                                    <br>
                                    <span style="color: #22427c; margin-right:185px">Tipo de vaga:</span> <span   style="color: #696969;">{{$vagas->vag_tipo}}<span>
                                </h6>

                                <div class="text-center" style="margin-top: 20px;">
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#visualizar{{$vagas->vag_id}}">
                                        DESATIVAR
                                    </button>
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#visualizar{{$vagas->vag_id}}">
                                        VISUALIZAR
                                    </button>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    @endforeach


</form>



@endsection