@extends('layout.vagas_candidato')

@section('vagas')

<div style="margin-bottom: 50px">

    <form class="form-signin" method="get" action="/lista/vaga/candidato/{{session('can_id')}}" style="margin-top:50px; margin-bottom: 50px">

        @csrf

        <div class="text-center">
            <h2 class="form-signin-heading">Buscar Vagas </h2>
            <hr>
        </div>
        <div class="pessoais">

            <div class="row g-3">


                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Cargo/Função </label>

                    <input type="text" class="form-control form-control-sm" name="cargo" id="cargo">

                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Tipo de Vaga </label>
                    <select class="form-select form-select-sm" name="tipo" aria-label="Default select example">
                        <option selected></option>
                        <option value="CLT">CLT</option>
                        <option value="PJ">PJ</option>
                        <option value="Temporário">Temporário</option>
                        <option value="Menor Aprendiz">Menor Aprendiz</option>
                        <option value="Estágio">Estágio</option>
                        <option value="Trainee">Trainee</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Faixa Salarial</label>
                    <input type="text" class="form-control form-control-sm" name="salario" placeholder="R$"
                    onKeyPress="return(moeda(this,'.',',',event))">

                </div>

                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Formação </label>
                    <select class="form-select form-select-sm" name="formacao" id="formacao"
                        aria-label="Default select example">
                        <option selected></option>
                        <option value="Ensino_Fundamental_Completo">Ensino Fundamental completo</option>
                        <option value="Ensino_Fundamental_Incompleto">Ensino Fundamental incompleto</option>
                        <option value="Ensino_Médio_Completo">Ensino Médio completo</option>
                        <option value="Ensino_Médio_Cursando">Ensino Médio cursando</option>
                        <option value="Ensino_Técnico_Cursando">Ensino Técnico cursando</option>
                        <option value="Ensino_Técnico_Completo">Ensino Técnico completo</option>
                        <option value="Superior_Cursando">Superior Cursando</option>
                        <option value="Superior_Completo">Superior Completo</option>
                        <option value="Pós-Graduação_Cursando">Pós-Graduação Cursando</option>
                        <option value="Pós-Graduação_Completo">Pós-Graduação Completo</option>
                    </select>
                </div>
                <div class="col-md-3" id="curso_div">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nome do Curso </label>
                    <input type="text" class="form-control form-control-sm" name="curso" placeholder="">
                </div>

                <div class="col-md-2" id="termino_div">
                    <label class="form-check-label" id="label_Anotermino">Ano de Términio </label>
                    <input type="month" class="form-control form-select-sm" name="termino" placeholder="">
                </div>

                <div class="col-md-2" id="semestre_div">
                    <label class="form-check-label" for="flexCheckIndeterminate">Semestre em Curso </label>
                    <select class="form-select form-select-sm" name="semestre" aria-label="Default select example">
                        <option selected></option>
                        <option value="1">1º Semestre</option>
                        <option value="2">2º Semestre</option>

                    </select>
                </div>
                <div class="col-md-2" id="periodo_div">
                    <label class="form-check-label" for="flexCheckIndeterminate">Período em Curso </label>
                    <select class="form-select form-select-sm" name="periodo" aria-label="Default select example">
                        <option selected></option>
                        <option value="1">1º Período</option>
                        <option value="2">2º Período</option>
                        <option value="3">3º Período</option>
                        <option value="4">4º Período</option>
                        <option value="5">5º Período</option>
                        <option value="6">6º Período</option>
                        <option value="7">7º Período</option>
                        <option value="8">8º Período</option>
                        <option value="9">Ou Mais</option>

                    </select>
                </div>

                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Bairro</label>
                    <input type="text" class="form-control form-control-sm" name="bairro" id="bairro" placeholder="">
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate"> Nome da Empresa </span></label>
                    <input type="text" class="form-control form-control-sm" name="empresa" id="empresa" placeholder="">
                </div>

                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate"> Vaga remota</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="vaga" id="vaga" value="sim">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Sim
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="vaga" id="vaga" value="não" >
                        <label class="form-check-label" for="flexRadioDefault2">
                            Não
                        </label>
                    </div>
                </div>

                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">PCD</label>
                    <div class="form-check ">
                        <input class="form-check-input" type="radio" name="pcd" id="pcd1" value="sim">
                        <label class="form-check-label" for="gridRadios1">
                            Sim
                        </label>
                    </div>
                    <div class="form-check ">
                        <input class="form-check-input" type="radio" name="pcd" id="pcd2" value="não">
                        <label class="form-check-label" for="gridRadios2">
                            Não
                        </label>
                    </div>
                </div>

                <hr>
                <div class="text-end">
                    <a href="" class="btn btn-secondary">Limpar Filtro</a>
                    <a href="" class="btn btn-success">Salvar Filtro</a>
                    <input type="submit" class="btn btn-primary" value="Buscar Vagas">
                    <!-- onclick="alert('Ainda não possui candidatos cadastrados')"-->
                </div>
            </div>


    </form>
</div>


@if(!empty($vagas))

@foreach($vagas as $vagas)

<div class="row g-3 shadow p-3 mb-5 bg-body rounded" style="">

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
                
                <a  class="btn btn-primary"  href="/vaga/candidato/{{$vagas->vag_id}}{{$candidato->can_id}}{{($vagas->vag_id_empresa)}}" style="color:#fff">Candidate-se para esta vaga</a>
                
            </form>
            </div>
        </div>
    </div>
</div>



@endforeach

@endif

@endsection

<script>

     
        
    function Pretendente(id,user){
  
 

const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false
})

swalWithBootstrapButtons.fire({
 title: 'Deseja-se candidatar a vaga?',
 // text: "Deseja-se candidatar a vaga?",
  icon: 'info',
  showCancelButton: true,
  confirmButtonText: 'Sim',

  cancelButtonText: 'Não',
  reverseButtons: true
}).then((result) => {
  if (result.isConfirmed) {

         location.href="/vaga/candidato/"+id,user);
    
  } else if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.cancel
  ) {
    
  }
})
    }


  </script>

<script>
    function moeda(a, e, r, t) {
    let n = ""
      , h = j = 0
      , u = tamanho2 = 0
      , l = ajd2 = ""
      , o = window.Event ? t.which : t.keyCode;
    if (13 == o || 8 == o)
        return !0;
    if (n = String.fromCharCode(o),
    -1 == "0123456789".indexOf(n))
        return !1;
    for (u = a.value.length,
    h = 0; h < u && ("0" == a.value.charAt(h) || a.value.charAt(h) == r); h++)
        ;
    for (l = ""; h < u; h++)
        -1 != "0123456789".indexOf(a.value.charAt(h)) && (l += a.value.charAt(h));
    if (l += n,
    0 == (u = l.length) && (a.value = ""),
    1 == u && (a.value = "0" + r + "0" + l),
    2 == u && (a.value = "0" + r + l),
    u > 2) {
        for (ajd2 = "",
        j = 0,
        h = u - 3; h >= 0; h--)
            3 == j && (ajd2 += e,
            j = 0),
            ajd2 += l.charAt(h),
            j++;
        for (a.value = "",
        tamanho2 = ajd2.length,
        h = tamanho2 - 1; h >= 0; h--)
            a.value += ajd2.charAt(h);
        a.value += r + l.substr(u - 2, u)
    }
    return !1
}

</script>