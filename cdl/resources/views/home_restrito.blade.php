@extends('layout.home_restrito')

@section('home')

<form action=""  enctype="multipart/form-data" style="margin-bottom: 300px">

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
                <input type="file" name="foto" id="formFile" class="form-control-file">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Altura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="nome" placeholder="" required>
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Largura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="nome" placeholder="" required>
            </div>
        </div>
        <div class="row g-3">
            <h5>Slide 01</h5>
            <hr>
            <div class="col-md-4" id="selecionarFoto">
                <label class="form-check-label" for="image">Foto do banner principal</label>
                <!--<input class="form-control form-control-sm" type="file" name="foto" id="formFile"> -->
                <input type="file" name="foto" id="formFile" class="form-control-file">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Altura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="nome" placeholder="" required>
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Largura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="nome" placeholder="" required>
            </div>

        </div>

        <div class="row g-3">
            <h5>Slide 02</h5>
            <hr>
            <div class="col-md-4" id="selecionarFoto">
                <label class="form-check-label" for="image">Foto do banner principal</label>
                <!--<input class="form-control form-control-sm" type="file" name="foto" id="formFile"> -->
                <input type="file" name="foto" id="formFile" class="form-control-file">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Altura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="nome" placeholder="" required>
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Largura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="nome" placeholder="" required>
            </div>
        </div>

        <div class="row g-3">
            <h5>Slide 03</h5>
            <hr>
            <div class="col-md-4" id="selecionarFoto">
                <label class="form-check-label" for="image">Foto do banner principal</label>
                <!--<input class="form-control form-control-sm" type="file" name="foto" id="formFile"> -->
                <input type="file" name="foto" id="formFile" class="form-control-file">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Altura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="nome" placeholder="" required>
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Largura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="nome" placeholder="" required>
            </div>
            <div class="text-end" style="margin-top: 20px">
                <input type="submit" class="btn btn-success" value="Salvar Registros">
            </div>
        </div>


    </div>

</form>

<form action=""  enctype="multipart/form-data" style="margin-bottom: 300px">

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
                <input type="file" name="foto" id="formFile" class="form-control-file">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Altura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="nome" placeholder="" required>
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Largura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="nome" placeholder="" required>
            </div>
            <div class="text-end" style="margin-top: 20px">
                <input type="submit" class="btn btn-success" value="Salvar Registros">
            </div>
        </div>
    </div>

</form>

<form action=""  enctype="multipart/form-data" style="margin-bottom: 300px">

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
                <input type="file" name="foto" id="formFile" class="form-control-file">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Altura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="nome" placeholder="" required>
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Largura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="nome" placeholder="" required>
            </div>

        </div>

        <div class="row g-3">
            <h5>Tela Home</h5>
            <hr>
            <div class="col-md-4" id="selecionarFoto">
                <label class="form-check-label" for="image">Foto do banner principal</label>
                <!--<input class="form-control form-control-sm" type="file" name="foto" id="formFile"> -->
                <input type="file" name="foto" id="formFile" class="form-control-file">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Altura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="nome" placeholder="" required>
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Largura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="nome" placeholder="" required>
            </div>
            <div class="text-end" style="margin-top: 20px">
                <input type="submit" class="btn btn-success" value="Salvar Registros">
            </div>
        </div>

    </div>

</form>


<form action=""  enctype="multipart/form-data" style="margin-bottom: 300px">

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
                <input type="file" name="foto" id="formFile" class="form-control-file">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Altura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="nome" placeholder="" required>
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Largura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="nome" placeholder="" required>
            </div>

        </div>

        <div class="row g-3">
            <h5>Slide 01</h5>
            <hr>
            <div class="col-md-4" id="selecionarFoto">
                <label class="form-check-label" for="image">Foto do banner principal</label>
                <!--<input class="form-control form-control-sm" type="file" name="foto" id="formFile"> -->
                <input type="file" name="foto" id="formFile" class="form-control-file">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Altura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="nome" placeholder="" required>
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Largura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="nome" placeholder="" required>
            </div>

        </div>

        <div class="row g-3">
            <h5>Slide 02</h5>
            <hr>
            <div class="col-md-4" id="selecionarFoto">
                <label class="form-check-label" for="image">Foto do banner principal</label>
                <!--<input class="form-control form-control-sm" type="file" name="foto" id="formFile"> -->
                <input type="file" name="foto" id="formFile" class="form-control-file">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Altura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="nome" placeholder="" required>
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Largura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="nome" placeholder="" required>
            </div>
        </div>

        <div class="row g-3">
            <h5>Slide 03</h5>
            <hr>
            <div class="col-md-4" id="selecionarFoto">
                <label class="form-check-label" for="image">Foto do banner principal</label>
                <!--<input class="form-control form-control-sm" type="file" name="foto" id="formFile"> -->
                <input type="file" name="foto" id="formFile" class="form-control-file">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Altura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="nome" placeholder="" required>
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Largura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="nome" placeholder="" required>
            </div>
            <div class="text-end" style="margin-top: 20px">
                <input type="submit" class="btn btn-success" value="Salvar Registros">
            </div>
        </div>

    </div>

</form>

<form action=""  enctype="multipart/form-data" style="margin-bottom: 300px">

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
                <input type="file" name="foto" id="formFile" class="form-control-file">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Altura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="nome" placeholder="" required>
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Largura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="nome" placeholder="" required>
            </div>

        </div>

        <div class="row g-3">
            <h5>Slide 01</h5>
            <hr>
            <div class="col-md-4" id="selecionarFoto">
                <label class="form-check-label" for="image">Foto do banner principal</label>
                <!--<input class="form-control form-control-sm" type="file" name="foto" id="formFile"> -->
                <input type="file" name="foto" id="formFile" class="form-control-file">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Altura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="nome" placeholder="" required>
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Largura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="nome" placeholder="" required>
            </div>

        </div>

        <div class="row g-3">
            <h5>Slide 02</h5>
            <hr>
            <div class="col-md-4" id="selecionarFoto">
                <label class="form-check-label" for="image">Foto do banner principal</label>
                <!--<input class="form-control form-control-sm" type="file" name="foto" id="formFile"> -->
                <input type="file" name="foto" id="formFile" class="form-control-file">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Altura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="nome" placeholder="" required>
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Largura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="nome" placeholder="" required>
            </div>
        </div>

        <div class="row g-3">
            <h5>Slide 03</h5>
            <hr>
            <div class="col-md-4" id="selecionarFoto">
                <label class="form-check-label" for="image">Foto do banner principal</label>
                <!--<input class="form-control form-control-sm" type="file" name="foto" id="formFile"> -->
                <input type="file" name="foto" id="formFile" class="form-control-file">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Altura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="nome" placeholder="" required>
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Largura
                    <span><strong>*</strong></span> </label>
                <input type="number" class="form-control form-control-sm" name="nome" placeholder="" required>
            </div>
            <div class="text-end" style="margin-top: 20px">
                <input type="submit" class="btn btn-success" value="Salvar Registros">
            </div>
        </div>

    </div>

</form>


@endsection