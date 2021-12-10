@extends('layout.update_curso')
@section('edit_curso')

<form method="POST" action="/update/cursos/utv/{{$curso->utvcurso_id}}" enctype="multipart/form-data">

    @csrf

    <div class="form-signin">

        <div class="text">          
            <h2 class="form-signin-heading">EVENTOS</h2>
            <hr>
        </div>
        
        
        <div class="pessoais">
            <input class="form-control form-control-sm" name="id" type="hidden" id="id" value="{{$curso->utvcurso_id}}">
            <div class="col-md-6">
                <img id="perfil" src="/img/curso/{{$curso->utvcurso_folder}}" alt="profile Pic">
            </div>
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-check-label" for="flexCheckIndeterminate">Imagem do Curso  <span><strong>*</strong></span></label>
                    <input class="form-control form-control-sm" name="logo" type="file" id="formFile" value="{{$curso->utvcurso_folder}}">
                </div>
                <div class="col-md-6">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nome do Curso  <span><strong>*</strong></span></label>
                    <input type="text" name="curso" class="form-control form-control-sm"  value="{{$curso->utvcurso_titulo}}" required>
                </div>
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Sobre o Curso <span><strong>*</strong></span></label>
                    <textarea class="form-control" name="detalhe" value="{{$curso->utvcurso_desc}}" id="exampleFormControlTextarea1" rows="3">{{$curso->utvcurso_desc}}</textarea>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Horário<span><strong>*</strong></span></label>
                    <input type="text" name="horario" class="form-control form-control-sm"  placeholder="" value="{{$curso->utvcurso_hora}}" required>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Dias<span><strong>*</strong></span></label>
                    <input type="text" name="dias" class="form-control form-control-sm"  placeholder="" value="{{$curso->utvcurso_dias}}" required>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Data de inicio <span><strong>*</strong></span></label>
                    <input type="date" name="datainicio" class="form-control form-control-sm"  placeholder="" value="{{$curso->utvcurso_data_inicio}}" required>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Data fim <span><strong>*</strong></span></label>
                    <input type="date" name="datafim" class="form-control form-control-sm"  placeholder="" value="{{$curso->utvcurso_data_final}}" required>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Investimento  <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="investimento" onKeyPress="return(moeda(this,'.',',',event))"  placeholder="" value="{{$curso->utvcurso_valor_geral}}" required>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Associado e Estudante  <span><strong>*</strong></span></label>
                    <input type="text" name="estudantes" class="form-control form-control-sm" onKeyPress="return(moeda(this,'.',',',event))" placeholder="" value="{{$curso->utvcurso_valor_estudante}}" required>
                </div>
                <div class="col-md-8">
                    <label class="form-check-label" for="flexCheckIndeterminate">Mais Informações  <span><strong>*</strong></span> </label>
                    <input type="text" name="informacoes" class="form-control form-control-sm" placeholder="" value="{{$curso->utvcurso_informacoes}}" required>
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
