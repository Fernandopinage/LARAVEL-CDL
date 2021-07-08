<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="/css/anucie_empresa.css" rel="stylesheet">
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <title>CDL</title>
</head>
<body>
    
    <ul class="nav justify-content-end navbar-light bg-light">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href=""><img  src="/icons/facebook.png"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><img  src="/icons/instagram.png"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><img  src="/icons/youtube.png"></a>
        </li>

      </ul>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img id="logo" src="/img/cdl_logo.png"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
                    <a class="nav-link" href="/home/empresa">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/anucio/empresa">Anúncio de vaga </a>
            </li>
            <li class="nav-item">
                  <a class="nav-link"  href="/filtra/candidato/empresa">Busca Candidatos</a>
            </li>

            </ul>
          </div>
        </div>
      </nav>
      
      <div id="menu">

      </div>

    <div class="container">

        @yield('anuncio')
        
    </div>
    <div id="footer-cadastro">

    </div>
</body>
<footer>
  @include('sweetalert::alert')
  <nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-dark">
  </nav>
</footer>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<!-- Adicionando Javascript -->
<script>
    $(document).ready(function() {


      $('#descPCD').hide();
      $('#idioma').hide();
      
        $('#idioma_necessario').change(function(){

        if($("#idioma_necessario:checked").val() == undefined){
            $("#idioma_necessario").prop('checked', false);
            $('#idioma').hide(); 
            
        }else{
          $("#idioma_necessario").prop('checked', true);
          $('#idioma').show();  
          $
        }


      });



      $('#pcd').change(function(){

        if($("#pcd:checked").val() == undefined){
            $("#pcd").prop('checked', false);
            $('#descPCD').hide(); 
            
        }else{
          $("#pcd").prop('checked', true);
          $('#descPCD').show();  
          $
        }


      });


    });

</script>

   <!-- jquery -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <!-- ***** -->


<!-- Mensagem de cadastro com sucesso -->
@if(session('mensagem'))
  <script>
  Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Registro cadastrado com sucesso!',
  showConfirmButton: false,
  timer: 1500
})
</script>
@endif

<!-- Mesagem de validação de campos  -->
@if ($errors->any())
<script>
Swal.fire({  position: 'center',  icon: 'warning',  title: 'Preencha os campos obrigatório',  showConfirmButton: false,  timer: 1500  })
</script>
@endif

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="/js/checkbox.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> <!-- jquery CDN  -->
</html>