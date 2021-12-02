
@extends('layout.banner_restrito')

@section('banner')

<form action="/banner/alterar" method="GET"  accept="image/*" >

    <div class="row g-3 shadow p-4 mb-5 bg-body rounded" style="margin-top: 80px">
        <div class="text-center">
            <h2>BANNER PRINCIPAL</h2>
        </div>
        <div class="row  g-3">
            <h5>Tela principal</h5>
            <hr>
            <div class="col-md-4" id="selecionarFoto">
                <label class="form-check-label" for="image">BANNER HOME</label>
                <!--<input class="form-control form-control-sm" type="file" name="foto" id="formFile"> -->
                <input type="file" name="foto_principal" id="file01" onchange="checkPhoto(this)" class="form-control-file">
            </div>
        </div>
        <div class="row g-3">
            <h5>Caixa de Imagem 01</h5>
            <hr>
            <div class="col-md-4" id="selecionarFoto">
                <label class="form-check-label" for="image">ÚLTIMOS PROFISSIONAIS CADASTRADOS</label>
                <!--<input class="form-control form-control-sm" type="file" name="foto" id="formFile"> -->
                <input type="file" name="slide01_principal" id="formFile" class="form-control-file">
            </div>
        </div>

        <div class="row g-3">
            <h5>Caixa de Imagem 02</h5>
            <hr>
            <div class="col-md-4" id="selecionarFoto">
                <label class="form-check-label" for="image">OPORTUNIDADES RECENTES EM DESTAQUE</label>
                <!--<input class="form-control form-control-sm" type="file" name="foto" id="formFile"> -->
                <input type="file" name="slide02_principal" id="formFile" class="form-control-file">
            </div>
        </div>

        <div class="row g-3">
            <h5>Caixa de Imagem 03</h5>
            <hr>
            <div class="col-md-4" id="selecionarFoto">
                <label class="form-check-label" for="image">PROGRAMAS DE CAPACITAÇÃO DISPONÍVEIS</label>
                <!--<input class="form-control form-control-sm" type="file" name="foto" id="formFile"> -->
                <input type="file" name="slide03_principal" id="formFile" class="form-control-file">
            </div>
         </div>


    </div>



    <div class="row g-3 shadow p-4 mb-5 bg-body rounded" style="margin-top: 80px">
        <div class="text-center">
            <h2>CANDIDATO</h2>
        </div>
        <div class="row  g-3">
            <h5>BANNER LOGIN</h5>
            <hr>
            <div class="col-md-4" id="selecionarFoto">
                <label class="form-check-label" for="image">IMAGEM DA TELA DE LOGIN</label>
                <!--<input class="form-control form-control-sm" type="file" name="foto" id="formFile"> -->
                <input type="file" name="foto_candidato" id="formFile" class="form-control-file">
            </div>
        </div>
        <div class="row  g-3">
            <h5>BANNER HOME</h5>
            <hr>
            <div class="col-md-4" id="selecionarFoto">
             
                <!--<input class="form-control form-control-sm" type="file" name="foto" id="formFile"> -->
                <input type="file" name="foto_candidato" id="formFile" class="form-control-file">
            </div>
        </div>
    </div>



    <div class="row g-3 shadow p-4 mb-5 bg-body rounded" style="margin-top: 80px">
        <div class="text-center">
            <h2>EMPRESA</h2>
        </div>
        <div class="row g-3">

            <h5>BANNER LOGIN</h5>
            <hr>
            <div class="col-md-4" id="selecionarFoto">
                <label class="form-check-label" for="image">IMAGEM DA TELA DE LOGIN</label>
                <!--<input class="form-control form-control-sm" type="file" name="foto" id="formFile"> -->
                <input type="file" name="foto_empresa" id="formFile" class="form-control-file">
            </div>

        </div>

        <div class="row g-3">
            <h5>Tela Home</h5>
            <hr>
            <div class="col-md-4" id="selecionarFoto">
                <label class="form-check-label" for="image">IMAGEM PRINCIPAL DA HOME</label>
                <!--<input class="form-control form-control-sm" type="file" name="foto" id="formFile"> -->
                <input type="file" name="foto_empresa_home" id="formFile" class="form-control-file">
            </div>
        </div>

    </div>


    <div class="row g-3 shadow p-4 mb-5 bg-body rounded" style="margin-top: 80px">
        <div class="text-center">
            <h2>ORGANIZAÇÕES MILITARES</h2>
        </div>
        <div class="row g-3">

            <h5>BANNER LOGIN</h5>
            <hr>
            <div class="col-md-4" id="selecionarFoto">
                <label class="form-check-label" for="image">IMAGEM DA TELA DE LOGIN</label>
                <!--<input class="form-control form-control-sm" type="file" name="foto" id="formFile"> -->
                <input type="file" name="foto_oms" id="formFile"class="form-control-file">
            </div>

        </div>

        <div class="row g-3">
            <h5>BANNER SLIDE HOME</h5>
            <hr>
            <div class="col-md-4" id="selecionarFoto">
                <label class="form-check-label" for="image">SLIDE 01</label>
                <!--<input class="form-control form-control-sm" type="file" name="foto" id="formFile"> -->
                <input type="file" name="foto_slide_oms" id="formFile" class="form-control-file">
            </div>
        </div>

        <div class="row g-3">
          
            <hr>
            <div class="col-md-4" id="selecionarFoto">
                <label class="form-check-label" for="image">SLIDE 02</label>
                <!--<input class="form-control form-control-sm" type="file" name="foto" id="formFile"> -->
                <input type="file" name="foto_slide02_oms" id="formFile" class="form-control-file">
            </div>
        </div>

        <div class="row g-3">
         
            <hr>
            <div class="col-md-4" id="selecionarFoto">
                <label class="form-check-label" for="image">SLIDE 03</label>
                <!--<input class="form-control form-control-sm" type="file" name="foto" id="formFile"> -->
                <input type="file" name="foto_slide03_oms" id="formFile" class="form-control-file">
            </div>
        </div>

    </div>

    <div class="row g-3 shadow p-4 mb-5 bg-body rounded" style="margin-top: 80px">
        <div class="text-center">
            <h2>UTV</h2>
        </div>
        <div class="row g-3">
            <h5>BANNER SLIDE HOME</h5>
            <hr>
            <div class="col-md-4" id="selecionarFoto">
                <label class="form-check-label" for="image">SLIDE 01</label>
                <!--<input class="form-control form-control-sm" type="file" name="foto" id="formFile"> -->
                <input type="file" name="foto_slide_oms" id="formFile" class="form-control-file">
            </div>
        </div>

        <div class="row g-3">
          
            <hr>
            <div class="col-md-4" id="selecionarFoto">
                <label class="form-check-label" for="image">SLIDE 02</label>
                <!--<input class="form-control form-control-sm" type="file" name="foto" id="formFile"> -->
                <input type="file" name="foto_slide02_oms" id="formFile" class="form-control-file">
            </div>
        </div>

        <div class="row g-3">
         
            <hr>
            <div class="col-md-4" id="selecionarFoto">
                <label class="form-check-label" for="image">SLIDE 03</label>
                <!--<input class="form-control form-control-sm" type="file" name="foto" id="formFile"> -->
                <input type="file" name="foto_slide03_oms" id="formFile" class="form-control-file">
            </div>
        </div>

    </div>

</form>


@endsection

