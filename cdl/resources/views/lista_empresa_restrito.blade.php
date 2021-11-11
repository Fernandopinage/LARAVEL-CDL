
@extends('layout.lista_empresa_restrito')

@section('listaempresa')



    <div class="row g-3 shadow p-4 mb-5 bg-body rounded" style="margin-top: 80px">

        <table class="table">
            <thead>
              <tr>
                <th scope="col-sm">#</th>
                <th scope="col-sm">EMPRESA</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>

              </tr>
            </tbody>
          </table>
    </div>



    

</form>


@endsection