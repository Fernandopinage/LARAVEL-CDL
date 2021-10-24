@extends('layout.update_organizacao_militar')
@section('update_militar')

@php
$oms;
@endphp

<form method="post" action="/update/oms/{{$oms->oms_id}}">

    @csrf

    <div class="form-signin">
        <!--
        <div class="text-end">
            <label class="switch">
                <input type="checkbox" id="pessoais" checked>
                <span class="slider round"></span>
            </label>
        </div>
    -->
        <div class="text">
            <h2 class="form-signin-heading">DADOS DA ORGANIZAÇÃO MILITAR</h2>
            <hr>
        </div>

        <div class="pessoais">

            <div class="row g-3">

                <div class="col-md-6">

                    <label class="form-check-label" for="flexCheckIndeterminate">Nome da Unidade
                        <span><strong>*</strong></span></label>
                    <input type="text" name="unidade" class="form-control form-control-sm" placeholder=""
                        value="{{$oms->oms_nome}}" required>
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Celular
                       </label>
                    <input type="tel" class="form-control form-control-sm" onkeypress="mask(this, mphone);"
                        onblur="mask(this, mphone);" name="telefone" placeholder="(99) 99999-9999"
                        onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" value="{{$oms->oms_telefone}}"
                        required>
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Telefone
                        </label>
                    <input type="tel" class="form-control form-control-sm" onkeypress="mask(this, mphone);"
                        onblur="mask(this, mphone);" name="telefone2" placeholder="(99) 99999-9999"
                        onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" value="{{$oms->oms_celular}}">
                </div>
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">E-mail
                        <span><strong>*</strong></span></label>
                    <input type="email" class="form-control form-control-sm" name="email" placeholder=""
                        value="{{$oms->oms_email}}" required>
                </div>

                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Contato Técnico
                        <span><strong>*</strong></span></label>
                    <input type="text" name="tecnico" class="form-control form-control-sm" placeholder=""
                        value="{{$oms->oms_tecnico}}" required>
                </div>
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">E-mail Técnico
                        <span><strong>*</strong></span> </label>
                    <input type="text" name="email_tecnico" class="form-control form-control-sm" placeholder=""
                        value="{{$oms->oms_email_tecnico}}" required>
                </div>
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Função Técnico
                        <span><strong>*</strong></span> </label>
                    <input type="text" name="funcao" class="form-control form-control-sm" placeholder=""
                        value="{{$oms->oms_funcao}}" required>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">CEP
                        <span><strong>*</strong></span></label>
                    <input type="text" maxlength="8" class="form-control form-control-sm" name="cep" id="cep"
                        placeholder="" value="{{$oms->oms_cep}}" required>
                </div>
                <div class="col-md-1">
                    <label class="form-check-label" for="flexCheckIndeterminate">UF
                        <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="uf" id="uf" placeholder=""
                        value="{{$oms->oms_uf}}" required>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Cidade
                        <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="cidade" id="cidade" placeholder=""
                        value="{{$oms->oms_cidade}}" required>
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Bairro
                        <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="bairro" id="bairro" placeholder=""
                        value="{{$oms->oms_bairro}}" required>
                </div>
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Logradouro
                        <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="logradouro" id="rua" placeholder=""
                        value="{{$oms->oms_logradouro}}" required>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nº
                        <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="numero" placeholder=""
                        value="{{$oms->oms_numero}}" required>
                </div>
                <div class="col-md-6">
                    <label class="form-check-label" for="flexCheckIndeterminate">Complemento</label>
                    <input type="text" class="form-control form-control-sm" name="complemento" id="complemento"
                        placeholder="" value="{{$oms->oms_complemento}}">
                </div>
            </div>
        </div>
        <hr>

        <div class="text-end">
            <input type="submit" class="btn btn-success" value="Atualizar Registros">
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