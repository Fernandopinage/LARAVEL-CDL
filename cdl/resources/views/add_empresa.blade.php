@extends('layout.add_empresa')

@section('cadastro')

<form method="post" action={{('/insert/empresa')}}>

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
                    <input type="text" name="fantasia" class="form-control form-control-sm " placeholder=""
                        value="{{old('fantasia')}}">
                </div>

                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Razão Social
                        <span><strong>*</strong></span></label>
                    <input type="text" name="razao" id="razao" onchange="Razao()"
                        class="form-control form-control-sm is-invalid" placeholder="" value="{{old('razao')}}"
                        required>
                </div>

                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Logo Empresa</label>
                    <input class="form-control form-control-sm" name="logo" type="file" id="formFile"
                        value="{{old('logo')}}">
                </div>

                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">CNPJ
                        <span><strong>*</strong></span> <a style="font-size: 12px;color:red;">Digite sem os caracteres especiais</a></label>
                    <input type="text" maxlength="14" onchange="Cnpj()"
                        class="form-control form-control-sm is-invalid" onkeypress="return somenteNumeros(event)"
                        onfocus="javascript: retirarFormatacao(this);" onblur="javascript: formatarCampo(this);"
                        name="cnpj" id="cnpj" placeholder="99.999.999/9999-99" value="{{old('cnpj')}}" required>
                </div>
                <div class="col-md-5">
                    <label class="form-check-label" for="flexCheckIndeterminate">E-mail da empresa
                        <span><strong>*</strong></span></label>
                    <input type="email" class="form-control form-control-sm is-invalid" name="email" id="email"
                        onchange="Email()" placeholder="" value="{{old('email')}}" required>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Senha
                        <span><strong>*</strong></span></label>
                    <input type="password" class="form-control form-control-sm is-invalid" name="senha" id="senha"
                        onchange="Senha()" placeholder="" value="{{old('senha')}}" required>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Confirmar Senha
                        <span><strong>*</strong></span></label>
                    <input type="password" class="form-control form-control-sm is-invalid" name="confirmar"
                        id="confirmar" onchange="Confirmar()" placeholder="" value="{{old('confirmar')}}" required>
                </div>
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nome do Técnico
                        <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm is-invalid" name="tecnico" id="tecnico"
                        onchange="Tecnico()" placeholder="" value="{{old('tecnico')}}" required>
                </div>
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">E-mail do Técnico
                        <span><strong>*</strong></span></label>
                    <input type="email" class="form-control form-control-sm is-invalid" name="emailtecnico"
                        id="emailtecnico" onchange="EmailTecnico()" placeholder="EXEMPLO@EMAIL.COM"
                        value="{{old('emailtecnico')}}" required>
                </div>
                <div class="col-md-4">
                    <label class="form-check-label"
                        for="flexCheckIndeterminate">Função/Cargo<span><strong>*</strong></span> </label>
                    <input type="text" class="form-control form-control-sm is-invalid" name="funcao" id="funcao"
                        onchange="Funcao()" placeholder="" value="{{old('funcao')}}" required>
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Setor/Departamento
                        <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm is-invalid" name="setor" id="setor"
                        onchange="Setor()" placeholder="" value="{{old('setor')}}" required>
                </div>

                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Ramo de Atividade
                        <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm is-invalid" name="ramo" id="ramo"
                        onchange="Ramo()" placeholder="" value="{{old('ramo')}}" required>
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Telefone</label>
                    <input type="tel" class="form-control form-control-sm" name="telefone" placeholder="(99) 99999-9999"
                        onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" value="{{old('telefone')}}">
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Telefone</label>
                    <input type="tel" class="form-control form-control-sm" name="telefone2"
                        placeholder="(99) 99999-9999" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);"
                        value="{{old('telefone2')}}">
                </div>
            </div>
        </div>
        <br><br>
        <hr>
        <span> Campos Obrigatórios <strong>*</strong></span>
    </div>


    <div class="form-signin">
        <div class="text-end">
            <label class="switch">
                <input type="checkbox" id="endereco" checked>
                <span class="slider round"></span>
            </label>
        </div>

        <div class="text">
            <h2 class="form-signin-heading">ENDEREÇO</h2>
            <hr>
        </div>

        <div class="endereco">
            <div class="row g-3">
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">CEP
                        <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm is-invalid" name="cep" id="cep"
                        onchange="Cep()" placeholder="" value="{{old('cep')}}" required>
                </div>
                <div class="col-md-1">
                    <label class="form-check-label" for="flexCheckIndeterminate">UF
                        <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm is-invalid" name="uf" id="uf" onchange="Uf()"
                        placeholder="" value="{{old('uf')}}" required>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Cidade
                        <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm is-invalid" name="cidade" id="cidade"
                        onchange="Cidade()" placeholder="" value="{{old('cidade')}}" required>
                </div>
                <div class="col-md-7">
                    <label class="form-check-label" for="flexCheckIndeterminate">Bairro
                        <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm is-invalid" name="bairro" id="bairro"
                        onchange="Bairro()" placeholder="" value="{{old('bairro')}}" required>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label"
                        for="flexCheckIndeterminate">Nº</label></label><span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm is-invalid" name="numero" id="numero"
                        onchange="Numero()" placeholder="" value="{{old('numero')}}" required>
                </div>
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Logradouro</label>
                    <input type="text" class="form-control form-control-sm" name="rua" id="rua" placeholder=""
                        value="{{old('rua')}}">
                </div>
                <div class="col-md-6">
                    <label class="form-check-label" for="flexCheckIndeterminate">Complemento</label>
                    <input type="text" class="form-control form-control-sm" name="complemento" id="complemento"
                        placeholder="" value="{{old('complemento')}}">
                </div>
            </div>

        </div>
        <br><br>
        <hr>
        <span> Campos Obrigatórios <strong>*</strong></span>
    </div>


    <div class="form-signin">
        <div class="text-end">
            <label class="switch">
                <input type="checkbox" id="adcinais" checked>
                <span class="slider round"></span>
            </label>
        </div>
        <div class="text">
            <h2 class="form-signin-heading">INFORMAÇÕES ADICIONAIS</h2>
            <hr>
        </div>
        <div class="adcinais">
            <div class="row g-3">
                <div class="col-md-2">
                    <input type="hidden" value="1" name="status"> <!-- campo responsavel por ativar empresa -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="asscdl" value="{{old('razao')}}">
                        <label class="form-check-label" name="associado" id="associado"
                            for="flexCheckIndeterminate">Associado CDL Manaus?</label>
                    </div>
                </div>
                <div class="col-md-4" id="divcod">
                    <label class="form-check-label" for="flexCheckIndeterminate">Preenchar com o código</label>
                    <input type="text" class="form-control form-control-sm" name="cod" id="cod" placeholder=""
                        value="{{old('cod')}}">
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>
        <br><br>
        <hr>
    </div>

    <div class="form-signin">

        <div class="">
            <h2 class="form-signin-heading">TERMO</h2>
            <hr>
        </div>

        <div class="row g-3">
            <div class="col-md-6">
            </div>
            <div class="col-md-12" style="padding-top: 50px ">
                <div class="text-center">
                    <label class="form-check-label" data-bs-toggle="modal" data-bs-target="#exampleModal"
                        onmousedown="mouseDown()" onmouseup="mouseUp()" id="termo_politica">Termo de política
                        <span><strong>*</strong></span></label>
                    <div class="form-check">
                        <input class="form-check-inpu" type="checkbox" value="S" name="termo" id="termo"
                            onchange="Termo()" value="{{old('termo')}}" required>
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



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Termo de política </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                TERMO
            </div>

        </div>
    </div>
</div>
@endsection


<!-- *************************validando telefone ************** -->

<script>
    function mouseDown() {
  document.getElementById("termo_politica").style.color = "red";
}

function mouseUp() {
  document.getElementById("termo_politica").style.color = "green";
}


</script>


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

<!-- -------------------------Validando campos obrigatorios--------------------------- -->


<script>
    function Razao(){

            if(document.getElementById('razao').value != null){
                document.getElementById('razao').classList.remove('is-invalid')
                document.getElementById('razao').classList.add('is-valid')

            }
            if(document.getElementById('razao').value == ''){
                document.getElementById('razao').classList.remove('is-valid')
                document.getElementById('razao').classList.add('is-invalid')
            }

        }

        function Cnpj(){

            if(document.getElementById('cnpj').value != null){
                document.getElementById('cnpj').classList.remove('is-invalid')
                document.getElementById('cnpj').classList.add('is-valid')

            }
            if(document.getElementById('cnpj').value == ''){
                document.getElementById('cnpj').classList.remove('is-valid')
                document.getElementById('cnpj').classList.add('is-invalid')
            }

        }


        function Email(){

            if(document.getElementById('email').value != null){
                document.getElementById('email').classList.remove('is-invalid')
                document.getElementById('email').classList.add('is-valid')

            }
            if(document.getElementById('email').value == ''){
                document.getElementById('email').classList.remove('is-valid')
                document.getElementById('email').classList.add('is-invalid')
            }

        }

        function Senha(){

            if(document.getElementById('senha').value != null){
                document.getElementById('senha').classList.remove('is-invalid')
                document.getElementById('senha').classList.add('is-valid')

            }
            if(document.getElementById('senha').value == ''){
                document.getElementById('senha').classList.remove('is-valid')
                document.getElementById('senha').classList.add('is-invalid')
            }

        }


        function Tecnico(){

            if(document.getElementById('tecnico').value != null){
                document.getElementById('tecnico').classList.remove('is-invalid')
                document.getElementById('tecnico').classList.add('is-valid')

            }
            if(document.getElementById('tecnico').value == ''){
                document.getElementById('tecnico').classList.remove('is-valid')
                document.getElementById('tecnico').classList.add('is-invalid')
        }

        function EmailTecnico(){

            if(document.getElementById('emailtecnico').value != null){
                document.getElementById('emailtecnico').classList.remove('is-invalid')
                document.getElementById('emailtecnico').classList.add('is-valid')

            }
            if(document.getElementById('emailtecnico').value == ''){
                document.getElementById('emailtecnico').classList.remove('is-valid')
                document.getElementById('emailtecnico').classList.add('is-invalid')
            }
        }

        
        function Funcao(){

            if(document.getElementById('funcao').value != null){
                document.getElementById('funcao').classList.remove('is-invalid')
                document.getElementById('funcao').classList.add('is-valid')

            }
            if(document.getElementById('funcao').value == ''){
                document.getElementById('funcao').classList.remove('is-valid')
                document.getElementById('funcao').classList.add('is-invalid')
            }
        }

        function Setor(){

            if(document.getElementById('setor').value != null){
                document.getElementById('setor').classList.remove('is-invalid')
                document.getElementById('setor').classList.add('is-valid')

            }
            if(document.getElementById('setor').value == ''){
                document.getElementById('setor').classList.remove('is-valid')
                document.getElementById('setor').classList.add('is-invalid')
            }
        }

        function Ramo(){

            if(document.getElementById('ramo').value != null){
                document.getElementById('ramo').classList.remove('is-invalid')
                document.getElementById('ramo').classList.add('is-valid')

            }
            if(document.getElementById('ramo').value == ''){
                document.getElementById('ramo').classList.remove('is-valid')
                document.getElementById('ramo').classList.add('is-invalid')
            }
        }

        function Cep(){

            if(document.getElementById('cep').value != null){
                document.getElementById('cep').classList.remove('is-invalid')
                document.getElementById('cep').classList.add('is-valid')

            }
            if(document.getElementById('cep').value == ''){
                document.getElementById('cep').classList.remove('is-valid')
                document.getElementById('cep').classList.add('is-invalid')
            }
        }

        function Uf(){

            if(document.getElementById('uf').value != null){
                document.getElementById('uf').classList.remove('is-invalid')
                document.getElementById('uf').classList.add('is-valid')

            }
            if(document.getElementById('uf').value == ''){
                document.getElementById('uf').classList.remove('is-valid')
                document.getElementById('uf').classList.add('is-invalid')
            }

        }
        
        function Cidade(){

                if(document.getElementById('cidade').value != null){
                    document.getElementById('cidade').classList.remove('is-invalid')
                    document.getElementById('cidade').classList.add('is-valid')

                }
                if(document.getElementById('cidade').value == ''){
                    document.getElementById('cidade').classList.remove('is-valid')
                    document.getElementById('cidade').classList.add('is-invalid')
                }

        }   

        function Bairro(){

            if(document.getElementById('bairro').value != null){
                document.getElementById('bairro').classList.remove('is-invalid')
                document.getElementById('bairro').classList.add('is-valid')

            }
            if(document.getElementById('bairro').value == ''){
                document.getElementById('bairro').classList.remove('is-valid')
                document.getElementById('bairro').classList.add('is-invalid')
            }

        }   

        function Numero(){

            if(document.getElementById('numero').value != null){
                document.getElementById('numero').classList.remove('is-invalid')
                document.getElementById('numero').classList.add('is-valid')

            }
            if(document.getElementById('numero').value == ''){
                document.getElementById('numero').classList.remove('is-valid')
                document.getElementById('numero').classList.add('is-invalid')
            }

        } 


}

</script>