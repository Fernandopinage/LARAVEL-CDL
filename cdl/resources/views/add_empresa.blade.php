@extends('layout.add_empresa')

@section('cadastro')

<form method="post" action={{('/insert/empresa')}} >

    @csrf

    <div class="form-signin">
        <div class="text-end">
            <label class="switch">
                <input type="checkbox" id="pessoais" checked>
                <span class="slider round"></span>
            </label>
        </div>
        
        <div class="text">          
            <h2 class="form-signin-heading"> DADOS DA EMPRESA </h2>
            <hr>
        </div>
        
        
        <div class="pessoais">

            <div class="row g-3">

                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nome Fantasia </label>
                    <input type="text" name="fantasia" class="form-control form-control-sm" placeholder="">
                </div>

                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Razão Social <span><strong>*</strong></span></label>
                    <input type="text" name="razao" class="form-control form-control-sm" placeholder="">
                </div>

                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Logo Empresa</label>
                    <input class="form-control form-control-sm" name="logo" type="file" id="formFile">
                </div>  

                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">CNPJ <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" onfocus="javascript: retirarFormatacao(this);" onblur="javascript: formatarCampo(this);" name="cnpj" id="cnpj" placeholder="99.999.999/9999-99">
                </div>
                <div class="col-md-5">
                    <label class="form-check-label" for="flexCheckIndeterminate">Email da empresa <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="email" placeholder="">
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Senha <span><strong>*</strong></span></label>
                    <input type="password" class="form-control form-control-sm" name="senha" placeholder="">
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Confirmar Senha <span><strong>*</strong></span></label>
                    <input type="password" class="form-control form-control-sm" name="confirmar" placeholder="">
                </div>
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nome do Técnico </label>
                    <input type="text" class="form-control form-control-sm" name="tecnico" placeholder="">
                </div>
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Email do Técnico <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="emailtecnico" placeholder="EXEMPLO@EMAIL.COM">
                </div>
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Função/Cargo<span><strong>*</strong></span> </label>
                    <input type="text" class="form-control form-control-sm" name="funcao" placeholder="">
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Setor/Departamento <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="setor" placeholder="">
                </div>

                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Ramo de Atividade <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="ramo" placeholder="">
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Telefone</label>
                    <input type="tel" class="form-control form-control-sm" name="telefone" placeholder="(99) 99999-9999" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" />
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Telefone</label>
                    <input type="tel" class="form-control form-control-sm" name="telefone2" placeholder="(99) 99999-9999" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" />
                </div>
            </div>  
        </div> 
        <br><br>
        <hr>
        <span>  Campos Obrigatórios <strong>*</strong></span>
    </div>


    <div class="form-signin">
        <div class="text-end">
            <label class="switch">
                <input type="checkbox" id="endereco" checked>
                <span class="slider round"></span>
            </label>
        </div>
    
        <div class="text" >
            <h2 class="form-signin-heading">ENDEREÇO</h2>
            <hr>
        </div>
         
        <div class="endereco"> 
        <div class="row g-3">
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">CEP <span><strong>*</strong></span></label>
                <input type="text" class="form-control form-control-sm" name="cep" id="cep" placeholder="">
            </div>
            <div class="col-md-1">
                <label class="form-check-label" for="flexCheckIndeterminate">UF <span><strong>*</strong></span></label>
                <input type="text" class="form-control form-control-sm" name="uf" id="uf" placeholder="">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Cidade <span><strong>*</strong></span></label>
                <input type="text" class="form-control form-control-sm" name="cidade" id="cidade" placeholder="">
            </div>
            <div class="col-md-7">
                <label class="form-check-label" for="flexCheckIndeterminate">Bairro <span><strong>*</strong></span></label>
                <input type="text" class="form-control form-control-sm" name="bairro" id="bairro" placeholder="">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Nº</label>
                <input type="text" class="form-control form-control-sm" name="numero" id="numero" placeholder="">
            </div>
            <div class="col-md-10">
                <label class="form-check-label" for="flexCheckIndeterminate">Complemento</label>
                <input type="text" class="form-control form-control-sm" name="rua" id="rua" placeholder="">
            </div>
        </div>
        
    </div>
        <br><br>
        <hr>
        <span>  Campos Obrigatórios <strong>*</strong></span>
    </div>


    <div class="form-signin">
        <div class="text-end">
            <label class="switch">
                <input type="checkbox" id="adcinais" checked>
                <span class="slider round"></span>
            </label>
        </div>
        <div class="text" >
            <h2 class="form-signin-heading">INFORMAÇÕES ADICIONAIS</h2>
            <hr>
        </div>
        <div class="adcinais"> 
        <div class="row g-3">
            <div class="col-md-2">
                <input type="hidden" value="1" name="status"> <!-- campo responsavel por ativar empresa -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="asscdl">
                    <label class="form-check-label" name="associado" id="associado"  for="flexCheckIndeterminate">Associado CDL manaus?</label>
                </div>
            </div>
            <div class="col-md-4" id="divcod">
                <label class="form-check-label" for="flexCheckIndeterminate">Preenchar com o códiogo</label>
                <input type="text" class="form-control form-control-sm" name="cod" id="cod" placeholder="">
            </div>
            <div class="col-md-6">
            </div>
        </div>
    </div>
    <br><br>
    <hr>
    </div>

    <div class="form-signin">
    
        <div class="" >
            <h2 class="form-signin-heading">TERMO</h2>
            <hr>
        </div>
            
        <div class="row g-3">
            <div class="col-md-6">
            </div>
            <div class="col-md-12" style="padding-top: 50px ">
                <div class="text-center">
                    <label class="form-check-label" for="flexCheckIndeterminate">Termo de política <span><strong>*</strong></span></label>
                    <div class="form-check">
                        <input class="form-check-inpu" type="checkbox" value="S" name="termo" id="">
                    </div>
                </div>
            </div> 
        </div>
        <hr>
        <div class="text-end">
            <input type="submit" class="btn btn-primary" value="Salvar Registros">
        </div>
        <span> Campos Obrigatórios <strong>*</strong></span>
    </div>

</form>
@endsection


<!-- *************************validando telefone ************** -->
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
</script>

    <!-- ----------------------------------------------------------------- -->

   