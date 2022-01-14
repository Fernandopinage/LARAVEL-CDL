@extends('layout.vagas_disponivel')

@section('vagas_disponiel')

<form class="form-signin " action="empresa" method="POST">


    <div class="text mt-2">
        <h2 class="form-signin-heading">MINHAS VAGAS</h2>
        <hr>
    </div>


    @if(isset($vagas))

    @foreach($vagas as $vagas)

    <div class=" d-inline-block">

        <div {{$vagas->vag_id}}style="border: 0px;">
            <div class="form-group col-md-4">
                <div class="row g-3 shadow p-4 mb-2 bg-body rounded" style="width: 24rem; margin:10px;">
                    <div class="card-body">
                        <p class="card-title text-left">
                            <span style="color: #284D92; font-size:18px">{{$vagas->vag_cargo}}</span>
                        </p>
                        <hr>
                        <div class="row">

                            <div class="col align-self-start">
                                <span style="color: #157347; padding-right:20px;">Data de Inicio</span>
                            </div>

                            <div class="col align-self-end">
                                <span
                                    style="color: #696969;">{{\Carbon\Carbon::parse($vagas->vag_data_inicio)->format('d/m/Y')}}</span>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col align-self-start">

                                <span style="color: #97212d; padding-right:20px">Data do Término</span>

                            </div>

                            <div class="col align-self-end">

                                <span
                                    style="color: #696969">{{\Carbon\Carbon::parse($vagas->vag_data_final)->format('d/m/Y')}}</span>

                            </div>
                        </div>

                        <div class="row">

                            <div class="col align-self-start">
                                <span style="color: #22427c; padding-right:20px">Tipo de Vaga:</span>
                            </div>

                            <div class="col align-self-end">
                                <span style="color: #696969;">{{$vagas->vag_tipo}}</span>
                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>




    @endforeach
    @endif

</form>



@endsection