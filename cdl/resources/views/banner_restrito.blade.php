
@extends('layout.banner_restrito')

@section('banner')

<form action="/banner/alterar" method="GET"  accept="image/*" >

    <div class="row g-3 shadow p-4 mb-5 bg-body rounded" style="margin-top: 80px">
        <div class="text-center">
            <h2>PAGINA PRINCIPAL</h2>
        </div>
        <div class="row  g-3">
            <h5>CARROSSEL BANNER</h5>
            <hr>
            <div class="col-md-4" id="selecionarFoto">
                <label class="form-check-label" for="image">PRIMEIRA IMAGEM</label>
                <!--<input class="form-control form-control-sm" type="file" name="foto" id="formFile"> -->
                <input type="file" name="foto_principal" id="carrossel01" onchange="checkPhoto(this)" class="form-control-file">
            </div>
        </div>

        <div class="row g-3">
            <div class="col-md-4" id="selecionarFoto">
                <label class="form-check-label" for="image">SEGUNDA IMAGEM</label>
                <!--<input class="form-control form-control-sm" type="file" name="foto" id="formFile"> -->
                <input type="file" name="slide01_principal" id="carrossel02" class="form-control-file">
            </div>
        </div>

        <div class="row g-3">
            <div class="col-md-4" id="selecionarFoto">
                <label class="form-check-label" for="image">TERCEIRA IMAGEM</label>
                <!--<input class="form-control form-control-sm" type="file" name="foto" id="formFile"> -->
                <input type="file" name="slide02_principal" id="carrossel03" class="form-control-file">
            </div>
        </div>

        
        <div class="row g-3">
            <hr>
            <h5>SLIDE IMAGNES</h5>
            <div class="col-md-2" id="selecionarFoto">
                <label class="form-check-label" for="image">SLIDE 01</label>
                <!--<input class="form-control form-control-sm" type="file" name="foto" id="formFile"> -->
                <input type="file" name="slide03_principal" id="SLIDE 01" class="form-control-file">
            </div>
         </div>

         <div class="row g-3">

            <div class="col-md-2" id="selecionarFoto">
                <label class="form-check-label" for="image">SLIDE 02</label>
                <!--<input class="form-control form-control-sm" type="file" name="foto" id="formFile"> -->
                <input type="file" name="slide03_principal" id="SLIDE 02" class="form-control-file">
            </div>
         </div>

         <div class="row g-3">

            <div class="col-md-2" id="selecionarFoto">
                <label class="form-check-label" for="image">SLIDE 03</label>
                <!--<input class="form-control form-control-sm" type="file" name="foto" id="formFile"> -->
                <input type="file" name="slide03_principal" id="SLIDE 03" class="form-control-file">
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
        <div class="text-end">
            <input type="submit" class="btn btn-success" value="Salvar">
        </div>

    </div>

</form>


@endsection

