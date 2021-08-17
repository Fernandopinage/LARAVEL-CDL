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
            <h2 class="form-signin-heading"> DADOS DA OM'S </h2>
            <hr>
        </div>
        
        
        <div class="pessoais">

            <div class="row g-3">

                <div class="col-md-6">
                    
                    <label class="form-check-label" for="flexCheckIndeterminate">Nome da Unidade  <span><strong>*</strong></span></label>
                    <input type="text" name="unidade" class="form-control form-control-sm" placeholder="" value="{{$oms->oms_nome}}" required>
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Telefone  <span><strong>*</strong></span></label>
                    <input type="tel" class="form-control form-control-sm" name="telefone" placeholder="(99) 99999-9999" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" value="{{$oms->oms_telefone}}" required>
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Telefone  <span><strong>*</strong></span></label>
                    <input type="tel" class="form-control form-control-sm" name="telefone2" placeholder="(99) 99999-9999" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" value="{{$oms->oms_celular}}" required>
                </div>
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">E-mail  <span><strong>*</strong></span></label>
                    <input type="email" class="form-control form-control-sm" name="email" placeholder="" value="{{$oms->oms_email}}" required>
                </div>

                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Contato Técnico  <span><strong>*</strong></span></label>
                    <input type="text" name="tecnico" class="form-control form-control-sm" placeholder="" value="{{$oms->oms_tecnico}}" required>
                </div>
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">E-mail Técnico  <span><strong>*</strong></span> </label>
                    <input type="text" name="email_tecnico" class="form-control form-control-sm" placeholder="" value="{{$oms->oms_email_tecnico}}" required>
                </div>
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Função Técnico  <span><strong>*</strong></span> </label>
                    <input type="text" name="funcao" class="form-control form-control-sm" placeholder="" value="{{$oms->oms_funcao}}" required>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">CEP <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="cep" id="cep" placeholder="" value="{{$oms->oms_cep}}" required>
                </div>
                <div class="col-md-1">
                    <label class="form-check-label" for="flexCheckIndeterminate">UF <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="uf" id="uf" placeholder="" value="{{$oms->oms_uf}}" required>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Cidade <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="cidade" id="cidade" placeholder="" value="{{$oms->oms_cidade}}" required>
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Bairro <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="bairro" id="bairro" placeholder="" value="{{$oms->oms_bairro}}" required>
                </div>
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Logradouro <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="logradouro" id="rua" placeholder="" value="{{$oms->oms_logradouro}}" required>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nº <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="numero"  placeholder="" value="{{$oms->oms_numero}}" required>
                </div>
                <div class="col-md-10">
                    <label class="form-check-label" for="flexCheckIndeterminate">Complemento</label>
                    <input type="text" class="form-control form-control-sm" name="complemento" id="complemento" placeholder="" value="{{$oms->oms_complemento}}">
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