@extends('layout.home_utv')

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





<div class="container shadow-lg p-3 mb-5 bg-body rounded" id="curso">
    <div class="visualizar">

        <h1>Veja os Cursos que a <b> UTV </b> tem para você!</h1>

    </div>

    @php
    $tamanho = count($cursos);

    @endphp

    @foreach($cursos as $cursos)



    <div class=" d-inline-block" style="margin-top: 20px;" data-bs-toggle="modal"
        data-bs-target="#edit{{$cursos->utvcurso_id}}">

        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h1>
                            <span style="color: #157347; margin-right:132px"><img src="/img/curso_de_ingles_imd.png"
                                    height="450px" width="350px" class="img-thumbnail" alt="..."></span><span
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

<!--
<div class="modal fade" id="edit{{$cursos->utvcurso_id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog  modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">EDITAR CURSO</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form method="POST" action="/insert/cursoutv">

                    @csrf

                    <div class="">

                        <div class="text">
                            <h2 class="form-signin-heading">{{$cursos->utvcurso_titulo}}</h2>
                            <hr>
                        </div>


                        <div class="pessoais">

                            <div class="row g-3">

                                <div class="col-md-6">
                                    <label class="form-check-label" for="flexCheckIndeterminate">Imagem do Curso
                                        <span><strong>*</strong></span></label>
                                    <input class="form-control form-control-sm" name="logo" type="file" id="formFile"
                                        value="{{$cursos->utvcurso_folder}}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-check-label" for="flexCheckIndeterminate">Nome do Curso
                                        <span><strong>*</strong></span></label>
                                    <input type="text" name="curso" class="form-control form-control-sm"
                                        value="{{$cursos->utvcurso_titulo}}" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-check-label" for="flexCheckIndeterminate">Detalhe
                                        <span><strong>*</strong></span></label>
                                    <textarea class="form-control" name="detalhe" id="exampleFormControlTextarea1"
                                        rows="3" value="{{$cursos->utvcurso_desc}}"></textarea>
                                </div>
                                <div class="col-md-2">
                                    <label class="form-check-label" for="flexCheckIndeterminate">Horário Início
                                        <span><strong>*</strong></span></label>
                                    <input type="time" name="horario" class="form-control form-control-sm"
                                        placeholder="" value="{{$cursos->utvcurso_hora}}" required>
                                </div>
                                <div class="col-md-2">
                                    <label class="form-check-label" for="flexCheckIndeterminate">Horário Fim
                                        <span><strong>*</strong></span></label>
                                    <input type="time" name="horario_fim" class="form-control form-control-sm"
                                        placeholder="" value="{{$cursos->utvcurso_dias}}" required>
                                </div>
                                <div class="col-md-2">
                                    <label class="form-check-label" for="flexCheckIndeterminate">Data de Início
                                        <span><strong>*</strong></span></label>
                                    <input type="date" name="datainicio" class="form-control form-control-sm"
                                        placeholder="" value="{{$cursos->utvcurso_data_inicio}}" required>
                                </div>
                                <div class="col-md-2">
                                    <label class="form-check-label" for="flexCheckIndeterminate">Data de Fim
                                        <span><strong>*</strong></span></label>
                                    <input type="date" name="datafim" class="form-control form-control-sm"
                                        placeholder="" value="{{$cursos->utvcurso_dias}}" required>
                                </div>
                                <div class="col-md-2">
                                    <label class="form-check-label" for="flexCheckIndeterminate">Investimento
                                        <span><strong>*</strong></span></label>
                                    <input type="text" class="form-control form-control-sm" name="investimento"
                                        onKeyPress="return(moeda(this,'.',',',event))" placeholder=""
                                        value="{{$cursos->utvcurso_valor_geral}}" required>
                                </div>
                                <div class="col-md-2">
                                    <label class="form-check-label" for="flexCheckIndeterminate">Associado e Estudante
                                        <span><strong>*</strong></span></label>
                                    <input type="text" name="estudantes" class="form-control form-control-sm"
                                        onKeyPress="return(moeda(this,'.',',',event))" placeholder=""
                                        value="{{$cursos->utvcurso_valor_estudante}}" required>
                                </div>
                                <div class="col-md-8">
                                    <label class="form-check-label" for="flexCheckIndeterminate">Mais Informações
                                        <span><strong>*</strong></span> </label>
                                    <input type="text" name="informacoes" class="form-control form-control-sm"
                                        placeholder="" value="{{$cursos->utvcurso_informacoes}}" required>
                                </div>

                            </div>
                        </div>
                        <hr>


                        <span> Campos Obrigatórios <strong>*</strong></span>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Cancela</button>
                        <button type="submit" class="btn btn-primary">Alterar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
-->

@endsection 