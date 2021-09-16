@extends('layout.update_utv')
@section('update')
@php
$utv;
@endphp

<form method="POST" action="/update/utv/{{session('utv_id')}}">

    @csrf

    <div class="form-signin">

        <div class="text">
            <h2 class="form-signin-heading">DADOS DO UTV </h2>
            <hr>
        </div>


        <div class="pessoais">

            <div class="row g-3">


                <div class="col-md-12">
                    <div class="form-check">
                        <input class="form-check-input" name="status" type="radio" value="S" id="status" checked>
                        <label class="form-check-label" for="flexCheckDefault">
                            Ativo
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="status" type="radio" value="N" id="status">
                        <label class="form-check-label" for="flexCheckChecked">
                            Inativo
                        </label>
                    </div>
                </div>

                <div class="col-md-6">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nome da Unidade
                        <span><strong>*</strong></span></label>
                    <input type="text" name="unidade" class="form-control form-control-sm" placeholder=""
                        value="{{$utv->utv_unidade}}" required>
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Telefone
                        <span><strong>*</strong></span></label>
                    <input type="tel" class="form-control form-control-sm" onkeypress="mask(this, mphone);"
                        onblur="mask(this, mphone);" name="telefone" placeholder="(99) 99999-9999"
                        onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" value="{{$utv->utv_telefone}}"
                        required>
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Celular
                        <span><strong>*</strong></span></label>
                    <input type="tel" class="form-control form-control-sm" onkeypress="mask(this, mphone);"
                        onblur="mask(this, mphone);" name="telefone2" placeholder="(99) 99999-9999"
                        onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" value="{{$utv->utv_telefone2}}"
                        required>
                </div>
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">E-mail
                        <span><strong>*</strong></span></label>
                    <input type="email" class="form-control form-control-sm" name="email" placeholder=""
                        value="{{$utv->utv_email}}" required>
                </div>
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Contato Técnico
                        <span><strong>*</strong></span></label>
                    <input type="text" name="tecnico" class="form-control form-control-sm" placeholder=""
                        value="{{$utv->utv_contato_tec}}" required>
                </div>
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">E-mail Técnico
                        <span><strong>*</strong></span> </label>
                    <input type="text" name="email_tecnico" class="form-control form-control-sm" placeholder=""
                        value="{{$utv->utv_email_tec}}" required>
                </div>
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Função Técnico
                        <span><strong>*</strong></span> </label>
                    <input type="text" name="funcao" class="form-control form-control-sm" placeholder=""
                        value="{{$utv->utv_funcao_tec}}" required>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">CEP
                        <span><strong>*</strong></span></label>
                    <input type="text" maxlength="9" class="form-control form-control-sm" name="cep" id="cep"
                        placeholder="" value="{{$utv->utv_cep}}" required>
                </div>
                <div class="col-md-1">
                    <label class="form-check-label" for="flexCheckIndeterminate">UF
                        <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="uf" id="uf" placeholder=""
                        value="{{$utv->utv_uf}}" required>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Cidade
                        <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="cidade" id="cidade" placeholder=""
                        value="{{$utv->utv_cidade}}" required>
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Bairro
                        <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="bairro" id="bairro" placeholder=""
                        value="{{$utv->utv_bairro}}" required>
                </div>
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Logradouro
                        <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="logradouro" id="rua" placeholder=""
                        value="{{$utv->utv_logradouro}}" required>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nº
                        <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="numero" placeholder=""
                        value="{{$utv->utv_numero}}" required>
                </div>
                <div class="col-md-10">
                    <label class="form-check-label" for="flexCheckIndeterminate">Complemento</label>
                    <input type="text" class="form-control form-control-sm" name="complemento" id="complemento"
                        placeholder="" value="{{$utv->utv_complemento}}">
                </div>
            </div>
        </div>
        <hr>

        <div class="text-end">
            <input type="submit" class="btn btn-success" value="Alterar Registros">
        </div>
        <span> Campos Obrigatórios <strong>*</strong></span>
    </div>

</form>

@endsection


<script type="text/javascript">
    function mask(o, f) {
  setTimeout(function() {
    var v = mphone(o.value);
    if (v != o.value) {
      o.value = v;
    }
  }, 1);
}

function mphone(v) {
    var r = v.replace(/\D/g, "");
    r = r.replace(/^0/, "");
    if (r.length > 10) {
        r = r.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
    } else if (r.length > 5) {
        r = r.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
    } else if (r.length > 2) {
        r = r.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
    } else {
        r = r.replace(/^(\d*)/, "($1");
    }
    return r;
    }
</script>

<!-- ----------------------------------------------------------------- -->

<!-- *************************validando cnpj ************************* -->
<script>
    function formatarCampo(campoTexto) {
        if (campoTexto.value.length <= 11) {
            campoTexto.value = mascaraCpf(campoTexto.value);
        } else {
            campoTexto.value = mascaraCnpj(campoTexto.value);
        }
    }
    function retirarFormatacao(campoTexto) {
        campoTexto.value = campoTexto.value.replace(/(\.|\/|\-)/g,"");
    }
    function mascaraCpf(valor) {
        return valor.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/g,"\$1.\$2.\$3\-\$4");
    }
    function mascaraCnpj(valor) {
        return valor.replace(/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/g,"\$1.\$2.\$3\/\$4\-\$5");
    }

    function somenteNumeros(e) {
        var charCode = e.charCode ? e.charCode : e.keyCode;
        // charCode 8 = backspace   
        // charCode 9 = tab
        if (charCode != 8 && charCode != 9) {
            // charCode 48 equivale a 0   
            // charCode 57 equivale a 9
            if (charCode < 48 || charCode > 57) {
                return false;
            }
        }
    }
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- Adicionando Javascript -->
<script>
    $(document).ready(function() {
  
          function limpa_formulário_cep() {
              // Limpa valores do formulário de cep.
              $("#rua").val("");
              $("#bairro").val("");
              $("#cidade").val("");
              $("#uf").val("");
              $("#ibge").val("");
          }
  
          //Quando o campo cep perde o foco.
          $("#cep").blur(function() {
  
              //Nova variável "cep" somente com dígitos.
              var cep = $(this).val().replace(/\D/g, '');
  
              //Verifica se campo cep possui valor informado.
              if (cep != "") {
  
                  //Expressão regular para validar o CEP.
                  var validacep = /^[0-9]{8}$/;
  
                  //Valida o formato do CEP.
                  if (validacep.test(cep)) {
  
                      //Preenche os campos com "..." enquanto consulta webservice.
                      $("#rua").val("...");
                      $("#bairro").val("...");
                      $("#cidade").val("...");
                      $("#uf").val("...");
                      $("#ibge").val("...");
  
                      //Consulta o webservice viacep.com.br/
                      $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(dados) {
  
                          if (!("erro" in dados)) {
                              //Atualiza os campos com os valores da consulta.
                              $("#rua").val(dados.logradouro);
                              $("#bairro").val(dados.bairro);
                              $("#cidade").val(dados.localidade);
                              $("#uf").val(dados.uf);
                              $("#ibge").val(dados.ibge);
                          } //end if.
                          else {
                              //CEP pesquisado não foi encontrado.
                              limpa_formulário_cep();
                              alert("CEP não encontrado.");
                          }
                      });
                  } //end if.
                  else {
                      //cep é inválido.
                      limpa_formulário_cep();
                      alert("Formato de CEP inválido.");
                  }
              } //end if.
              else {
                  //cep sem valor, limpa formulário.
                  limpa_formulário_cep();
              }
          });
      });
</script>