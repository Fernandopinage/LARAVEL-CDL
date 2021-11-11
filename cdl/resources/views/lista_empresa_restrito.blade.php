
@extends('layout.lista_empresa_restrito')

@section('listaempresa')


       

    <div class="row g-3 shadow p-4 mb-5 bg-body rounded" style="margin-top: 80px">
        <div class="text-end">
          
            <a href="/gerar/pdf/1"><img src="/icons/baseline_print_black_24dp.png"></a>
            
          </div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col-sm">EMPRESAS</th>
                <th scope="col-sm">CNPJ</th>
              </tr>
            </thead>
            <tbody>
              @foreach($empresa as $empresa)
    
              <tr>
                  
                  <td>{{$empresa->emp_razao}}</td>
                  <td>{{$empresa->emp_cnpj}}</td>
                  
             </tr>
                @endforeach  
              
            </tbody>
          </table>
    </div>



    

</form>


@endsection