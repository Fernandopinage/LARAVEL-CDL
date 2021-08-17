@extends('layout.add_militar')
@section('add_militar')

<form method="post" action="/insert/oms/" >

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
            <h2 class="form-signin-heading"> DADOS DA OM'S </h2>
            <hr>
        </div>
        
        
        <div class="pessoais">

            <div class="row g-3">

                <div class="col-md-6">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nome da Unidade  <span><strong>*</strong></span></label>
                    <input type="text" name="unidade" class="form-control form-control-sm" placeholder="" value="{{old('unidade')}}" required>
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Telefone  <span><strong>*</strong></span></label>
                    <input type="tel" class="form-control form-control-sm" name="telefone" placeholder="(99) 99999-9999" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" value="{{old('telefone')}}" required>
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Telefone  <span><strong>*</strong></span></label>
                    <input type="tel" class="form-control form-control-sm" name="telefone2" placeholder="(99) 99999-9999" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" value="{{old('telefone2')}}" required>
                </div>
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">E-mail  <span><strong>*</strong></span></label>
                    <input type="email" class="form-control form-control-sm" name="email" placeholder="" value="{{old('email')}}" required>
                </div>
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Senha  <span><strong>*</strong></span></label>
                    <input type="password" class="form-control form-control-sm" name="senha" placeholder="" value="{{old('senha')}}" required>
                </div>
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Confirma Senha  <span><strong>*</strong></span></label>
                    <input type="password" class="form-control form-control-sm" name="confirma" placeholder="" value="{{old('senha')}}" required>
                </div>
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Contato Técnico  <span><strong>*</strong></span></label>
                    <input type="text" name="tecnico" class="form-control form-control-sm" placeholder="" value="{{old('tecnico')}}" required>
                </div>
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">E-mail Técnico  <span><strong>*</strong></span> </label>
                    <input type="text" name="email_tecnico" class="form-control form-control-sm" placeholder="" value="{{old('email_tecnico')}}" required>
                </div>
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Função Técnico  <span><strong>*</strong></span> </label>
                    <input type="text" name="funcao" class="form-control form-control-sm" placeholder="" value="{{old('funcao')}}" required>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">CEP <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="cep" id="cep" placeholder="" value="{{old('cep')}}" required>
                </div>
                <div class="col-md-1">
                    <label class="form-check-label" for="flexCheckIndeterminate">UF <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="uf" id="uf" placeholder="" value="{{old('uf')}}" required>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Cidade <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="cidade" id="cidade" placeholder="" value="{{old('cidade')}}" required>
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Bairro <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="bairro" id="bairro" placeholder="" value="{{old('bairro')}}" required>
                </div>
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Logradouro <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="logradouro" id="rua" placeholder="" value="{{old('logradouro')}}"required>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nº <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="numero"  placeholder="" value="{{old('numero')}}"required>
                </div>
                <div class="col-md-10">
                    <label class="form-check-label" for="flexCheckIndeterminate">Complemento</label>
                    <input type="text" class="form-control form-control-sm" name="complemento" id="complemento" placeholder="" value="{{old('complemento')}}">
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