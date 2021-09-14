@extends('layout.add_cursoutv')
@section('curso')

<form method="POST" action="/insert/cursoutv" >

    @csrf

    <div class="form-signin">

        <div class="text">          
            <h2 class="form-signin-heading">CURSOS</h2>
            <hr>
        </div>
        
        
        <div class="pessoais">

            <div class="row g-3">

                <div class="col-md-6">
                    <label class="form-check-label" for="flexCheckIndeterminate">Imagem do Curso  <span><strong>*</strong></span></label>
                    <input class="form-control form-control-sm" name="logo" type="file" id="formFile" value="{{old('logo')}}">
                </div>
                <div class="col-md-6">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nome do Curso  <span><strong>*</strong></span></label>
                    <input type="text" name="curso" class="form-control form-control-sm"  value="{{old('telefone')}}" required>
                </div>
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Detalhe <span><strong>*</strong></span></label>
                    <textarea class="form-control" name="detalhe" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Horário  <span><strong>*</strong></span></label>
                    <input type="time" name="horario" class="form-control form-control-sm"  placeholder="" value="{{old('senha')}}" required>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Data de Inicio <span><strong>*</strong></span></label>
                    <input type="date" name="datainicio" class="form-control form-control-sm"  placeholder="" value="{{old('senha')}}" required>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Data de Fim <span><strong>*</strong></span></label>
                    <input type="date" name="datafim" class="form-control form-control-sm"  placeholder="" value="{{old('senha')}}" required>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Investimento  <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="investimento" onKeyPress="return(moeda(this,'.',',',event))"  placeholder="" value="{{old('senha')}}" required>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Associado e Estudante  <span><strong>*</strong></span></label>
                    <input type="text" name="estudantes" class="form-control form-control-sm" onKeyPress="return(moeda(this,'.',',',event))" placeholder="" value="{{old('tecnico')}}" required>
                </div>
                <div class="col-md-10">
                    <label class="form-check-label" for="flexCheckIndeterminate">Mais Informações  <span><strong>*</strong></span> </label>
                    <input type="text" name="informacoes" class="form-control form-control-sm" placeholder="" value="{{old('email_tecnico')}}" required>
                </div>
                
            </div>  
        </div> 
        <hr>
        
        <div class="text-end">
            <input type="submit" class="btn btn-success" value="Salvar Registros">
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