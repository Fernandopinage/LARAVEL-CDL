@extends('layout.select_cursos')
@section('conteudo')
<div class="visualizar" style="margin:20px 0px 20px 0px">

    <h1>Veja o que a <b>UTV</b> tem para você!</h1>

</div>
@php
    $tamanho = count($curso);

    @endphp

    @foreach($curso as $curso)

    <div class="container shadow-lg p-3 mb-5 bg-body rounded" id="curso">

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
                                    <td><b style="color:#006CDE;">{{date('d/m/Y', strtotime($curso->utvcurso_data_inicio))}} as
                                            {{date('d/m/Y', strtotime($curso->utvcurso_data_final))}}</b></td>
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
</div>
    @endforeach

@endsection