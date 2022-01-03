@extends('layout.select_cursos')
@section('conteudo')

<div class="container shadow-lg p-3 mb-5 bg-body rounded mt-4" id="curso">

    <div class="text-center mt-2">
        <h2>UNIVERSIDADE DE TECNOLOGIA DO VAREJO</h2>

    </div>

    <div class="container text-center" style="margin-top: 50px">
        <div class="row">
            <div class="col-6 text-start">
                <span style="font-size: 1.35em;color: #006cd9;">ESPECIALIZAÇÃO OU RECICLAGEM, SEJA QUAL FOR O SEU
                    PROPÓSITO, O QUE PRECISA PARA ESTAR ATUALIZADO
                    VOCÊ ENCONTRA AQUI!
                </span>
                <p class="mt-3">Os cursos se destinam tanto a quem quer aprender uma profissão para entrar no mercado de
                    trabalho, como também a quem já está empregado e precisa se qualificar para conseguir melhores
                    oportunidades</p>

            </div>
            <div class="col text-start">
                <span style="font-size: 1.35em;color: #006cd9;">VANTAGENS DOS CURSOS UTV</span><br>
                <p>Entre as vantagens oferecidas pelos Cursos Profissionalizantes estão:</p>

                <p class="mt-3 fs-6">
                    <span class="material-icons">check</span> Preços mais acessíveis<br>
                    <span class="material-icons">check</span> Emissão de certificado de conclusão aceito pelas grandes
                    empresas<br>
                    <span class="material-icons">check</span> Conteúdos direcionados de acordo com o perfil profissional
                    escolhido<br>
                    <span class="material-icons">check</span> Abre portas do mercado de trabalho independente de possuir
                    Graduação<br>
                    <span class="material-icons">check</span> Rápida profissionalização e requalificação, aumentando as
                    chances de contratação<br>
                    <span class="material-icons">check</span> Atualização sobre as novas exigências adotadas nas
                    Empresas e Instituições
                </p>
            </div>
        </div>
    </div>

</div>


@php
$tamanho = count($curso);

@endphp

@if(!empty($tamanho))


<div class="visualizar" style="margin:20px 0px 20px 0px">

    <h1>Veja o que a <b>UTV</b> tem para você!</h1>

</div>

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
                    <h5 class="card-title"><b style="color:#006CDE;">{{$curso->utvcurso_tipo}}:
                            {{$curso->utvcurso_titulo}}</b></h5>
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
                                    <td><b style="color:#006CDE;">{{date('d/m/Y',
                                            strtotime($curso->utvcurso_data_inicio))}} as
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
@endif
<hr style="color: #474e558c;">
<div class="containe mt-4" id="curso">

    <div class="text-center mt-2">
        <h2 style="color: #006cd9;">Entre em Contato</h2>

    </div>

    <div class="container text-center" style="margin-top: 50px">
        <div class="row">
            <div class="col-4 text-start">
                <p><span class="material-icons">
                        location_on
                    </span>Rua Delfim de Souza, 125 - Raiz 69.068-020 
                </p>
                <p>| Manaus | Amazonas
                    Altos Supermercados CO</p>
                <span class="material-icons">
                    map
                </span><a style="text-decoration: none; margin-left:8px;"
                    href="https://www.google.com/maps/place/R.+Delfim+de+Souza,+125+-+Raiz,+Manaus+-+AM,+69068-020/@-3.1256437,-59.9960908,19z/data=!4m5!3m4!1s0x926c05111390a827:0x7eca2209ae36317f!8m2!3d-3.1257013!4d-59.995372?shorturl=1">Ver
                    no Mapa</a>
            </div>
            <div class="col-4 text-start">
                <p>Segunda-feira a Quinta-feira | de 08h às 18h
                </p><p>   Sexta-feira | de 08h às 17h</p>
            </div>
            <div class="col-4 text-start">
                <p>Central de Atendimento 
                </p><p><span class="material-icons">
                    local_phone
                    </span>  + 55 92 • 3627-2890 | 3627-2894 | 99371-1740</p>
                <p style="color: #006cd9;"> <span class="material-icons">
                        email
                    </span> utvcursos@cdlmanaus.org.br</p>
            </div>
        </div>
    </div>
    <hr style="color: #474e5550;">

</div>
@endsection