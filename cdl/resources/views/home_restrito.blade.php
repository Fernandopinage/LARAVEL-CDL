@extends('layout.home_restrito')

@section('home')

<form action="/banner/alterar" method="GET"  enctype="multipart/form-data" >

    <div class="row g-3 shadow p-4 mb-5 bg-body rounded" style="margin-top: 80px">
        <div class="text-center">
            <h2>BANNER PRINCIPAL</h2>
        </div>
        <div class="row  g-3">
            <h5>Tela principal</h5>
            <hr>
            <div class="col-md-4" id="selecionarFoto">
                <label class="form-check-label" for="image">Foto do banner principal</label>
                <!--<input class="form-control form-control-sm" type="file" name="foto" id="formFile"> -->
                <input type="file" name="foto_principal" id="formFile" class="form-control-file">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Altura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="altura_principal" placeholder="">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Largura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="largura_principal" placeholder="">
            </div>
        </div>
        <div class="row g-3">
            <h5>Slide 01</h5>
            <hr>
            <div class="col-md-4" id="selecionarFoto">
                <label class="form-check-label" for="image">Foto do banner principal</label>
                <!--<input class="form-control form-control-sm" type="file" name="foto" id="formFile"> -->
                <input type="file" name="slide01_principal" id="formFile" class="form-control-file">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Altura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="altura_slide_principal" placeholder="">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Largura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="largura_slide_principal" placeholder="">
            </div>

        </div>

        <div class="row g-3">
            <h5>Slide 02</h5>
            <hr>
            <div class="col-md-4" id="selecionarFoto">
                <label class="form-check-label" for="image">Foto do banner principal</label>
                <!--<input class="form-control form-control-sm" type="file" name="foto" id="formFile"> -->
                <input type="file" name="slide02_principal" id="formFile" class="form-control-file">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Altura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="altura_slide2_principal" placeholder="">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Largura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="largura_slide2_principal" placeholder="">
            </div>
        </div>

        <div class="row g-3">
            <h5>Slide 03</h5>
            <hr>
            <div class="col-md-4" id="selecionarFoto">
                <label class="form-check-label" for="image">Foto do banner principal</label>
                <!--<input class="form-control form-control-sm" type="file" name="foto" id="formFile"> -->
                <input type="file" name="slide03_principal" id="formFile" class="form-control-file">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Altura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="altura_slide3_principal" placeholder="">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Largura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="largura_slide3_principal" placeholder="">
            </div>
         </div>


    </div>



    <div class="row g-3 shadow p-4 mb-5 bg-body rounded" style="margin-top: 80px">
        <div class="text-center">
            <h2>CANDIDADO</h2>
        </div>
        <div class="row  g-3">
            <h5>Tela Login</h5>
            <hr>
            <div class="col-md-4" id="selecionarFoto">
                <label class="form-check-label" for="image">Foto do banner principal</label>
                <!--<input class="form-control form-control-sm" type="file" name="foto" id="formFile"> -->
                <input type="file" name="foto_candidato" id="formFile" class="form-control-file">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Altura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="altura_candidato" placeholder="">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Largura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="largura_candidato" placeholder="">
            </div>
        </div>
    </div>



    <div class="row g-3 shadow p-4 mb-5 bg-body rounded" style="margin-top: 80px">
        <div class="text-center">
            <h2>EMPRESA</h2>
        </div>
        <div class="row g-3">

            <h5>Tela Login</h5>
            <hr>
            <div class="col-md-4" id="selecionarFoto">
                <label class="form-check-label" for="image">Foto do banner principal</label>
                <!--<input class="form-control form-control-sm" type="file" name="foto" id="formFile"> -->
                <input type="file" name="foto_empresa" id="formFile" class="form-control-file">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Altura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="altura_empresa" placeholder="">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Largura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="largura_empresa" placeholder="">
            </div>

        </div>

        <div class="row g-3">
            <h5>Tela Home</h5>
            <hr>
            <div class="col-md-4" id="selecionarFoto">
                <label class="form-check-label" for="image">Foto do banner principal</label>
                <!--<input class="form-control form-control-sm" type="file" name="foto" id="formFile"> -->
                <input type="file" name="foto_empresa_home" id="formFile" class="form-control-file">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Altura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="altura02_empresa" placeholder="">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Largura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="largura02_empresa" placeholder="">
            </div>
        </div>

    </div>


    <div class="row g-3 shadow p-4 mb-5 bg-body rounded" style="margin-top: 80px">
        <div class="text-center">
            <h2>ORGANIZAÇÕES MILITARES</h2>
        </div>
        <div class="row g-3">

            <h5>Tela Login</h5>
            <hr>
            <div class="col-md-4" id="selecionarFoto">
                <label class="form-check-label" for="image">Foto do banner principal</label>
                <!--<input class="form-control form-control-sm" type="file" name="foto" id="formFile"> -->
                <input type="file" name="foto_oms" id="formFile" class="form-control-file">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Altura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="altura_oms" placeholder="">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Largura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="largura_oms" placeholder="">
            </div>

        </div>

        <div class="row g-3">
            <h5>Slide 01</h5>
            <hr>
            <div class="col-md-4" id="selecionarFoto">
                <label class="form-check-label" for="image">Foto do banner principal</label>
                <!--<input class="form-control form-control-sm" type="file" name="foto" id="formFile"> -->
                <input type="file" name="foto_slide_oms" id="formFile" class="form-control-file">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Altura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="altura01_oms" placeholder="" >
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Largura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="largura01_oms" placeholder="" >
            </div>

        </div>

        <div class="row g-3">
            <h5>Slide 02</h5>
            <hr>
            <div class="col-md-4" id="selecionarFoto">
                <label class="form-check-label" for="image">Foto do banner principal</label>
                <!--<input class="form-control form-control-sm" type="file" name="foto" id="formFile"> -->
                <input type="file" name="foto_slide02_oms" id="formFile" class="form-control-file">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Altura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="altura02_oms" placeholder="" >
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Largura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="largura02_oms" placeholder="" >
            </div>
        </div>

        <div class="row g-3">
            <h5>Slide 03</h5>
            <hr>
            <div class="col-md-4" id="selecionarFoto">
                <label class="form-check-label" for="image">Foto do banner principal</label>
                <!--<input class="form-control form-control-sm" type="file" name="foto" id="formFile"> -->
                <input type="file" name="fofoto_slide03_omsto" id="formFile" class="form-control-file">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Altura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="altura03_oms" placeholder="" >
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Largura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="largura03_oms" placeholder="" >
            </div>

        </div>

    </div>

    <div class="row g-3 shadow p-4 mb-5 bg-body rounded" style="margin-top: 80px">
        <div class="text-center">
            <h2>UTV</h2>
        </div>
        <div class="row g-3">

            <h5>Tela Login</h5>
            <hr>
            <div class="col-md-4" id="selecionarFoto">
                <label class="form-check-label" for="image">Foto do banner principal</label>
                <!--<input class="form-control form-control-sm" type="file" name="foto" id="formFile"> -->
                <input type="file" name="foto_utv" id="formFile" class="form-control-file">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Altura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="altura_utv" placeholder="" >
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Largura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="largura_utv" placeholder="" >
            </div>

        </div>

        <div class="row g-3">
            <h5>Slide 01</h5>
            <hr>
            <div class="col-md-4" id="selecionarFoto">
                <label class="form-check-label" for="image">Foto do banner principal</label>
                <!--<input class="form-control form-control-sm" type="file" name="foto" id="formFile"> -->
                <input type="file" name="foto_slide1_utv" id="formFile" class="form-control-file">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Altura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="altura1_sliede_utv" placeholder="" >
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Largura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="largura1_sliede_utv" placeholder="" >
            </div>

        </div>

        <div class="row g-3">
            <h5>Slide 02</h5>
            <hr>
            <div class="col-md-4" id="selecionarFoto">
                <label class="form-check-label" for="image">Foto do banner principal</label>
                <!--<input class="form-control form-control-sm" type="file" name="foto" id="formFile"> -->
                <input type="file" name="foto2_slide_utv" id="formFile" class="form-control-file">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Altura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="altura2_sliede_utv" placeholder="" >
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Largura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="largura2_sliede_utv" placeholder="" >
            </div>
        </div>

        <div class="row g-3">
            <h5>Slide 03</h5>
            <hr>
            <div class="col-md-4" id="selecionarFoto">
                <label class="form-check-label" for="image">Foto do banner principal</label>
                <!--<input class="form-control form-control-sm" type="file" name="foto" id="formFile"> -->
                <input type="file" name="foto3_slide_utv" id="formFile" class="form-control-file">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Altura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="altura3_sliede_utv" placeholder="" >
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Largura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="largura3_sliede_utv" placeholder="" >
            </div>
            <div class="text-end" style="margin-top: 20px">
                <input type="submit" class="btn btn-success" value="Salvar Registros">
            </div>
        </div>

    </div>

</form>


@endsection