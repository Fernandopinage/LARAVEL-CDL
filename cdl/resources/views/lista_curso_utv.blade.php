@extends('layout.lista_curso_utv')

@section('lista')

<div class="visualizar" style="margin-bottom: 50px">

    <h1>Veja os Cursos que a <b> UTV </b> tem para você!</h1>

</div>

<div class="container shadow-lg p-3 mb-5 bg-body rounded" id="curso">

    @php
    $tamanho = count($cursos);

    @endphp

    @foreach($cursos as $cursos)


    <div class=" d-inline-block" style="margin-top: 18px;" data-bs-toggle="modal"
        data-bs-target="#edit{{$cursos->utvcurso_id}}">

        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h1>
                            <span style="color: #157347; margin-right:132px"><img src="/img/curso_de_ingles_imd.png"
                                    height="300px" width="300px" class="img-thumbnail" alt="..."></span><span
                                style="color: #696969;"></span>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="card" style="padding: 15px">
                    <h5 class="card-title"><b style="color:#006CDE;">Curso: {{$cursos->utvcurso_titulo}}</b></h5>
                    <h6 class="card-title">Sobre Curso:</h6>
                    <p class="card-text">{{$cursos->utvcurso_desc}}</p>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Horário:</th>
                                    <th scope="col">Dias:</th>
                                    <th scope="col">Data de Início:</th>
                                    <th scope="col">Data de Término:</th>
                                    <th scope="col">Investimento:</th>
                                    <th scope="col">Associado e Estudante:</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><b style="color:#006CDE;">{{$cursos->utvcurso_hora}}</b></td>
                                    <td><b style="color:#006CDE;">{{$cursos->utvcurso_dias}}</b></td>
                                    <td><b style="color:#006CDE;">{{$cursos->utvcurso_data_inicio}}</b></td>
                                    <td><b style="color:#006CDE;">{{$cursos->utvcurso_data_final}}</b> </td>
                                    <td><b style="color:#006CDE;">{{$cursos->utvcurso_valor_geral}}</b></td>
                                    <td><b style="color:#006CDE;">{{$cursos->utvcurso_valor_estudante}}</b></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer text-left">
                        <p><b style="color:#006CDE;"> Mais Informações:</b>
                            <span style="color:#006CDE;">{{$cursos->utvcurso_informacoes}} </span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endforeach
</div>

@endsection