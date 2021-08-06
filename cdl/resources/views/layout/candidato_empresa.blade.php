<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="/css/filtra_candidato_empresa.css" rel="stylesheet">
    <title>Empregabilidade | CDL Manaus</title>
</head>
<body>
    
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/home/empresa"><img id="logo" src="/img/cdl_logo.png"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/vagas/disponivel/">Vagas disponíveis</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/anucio/empresa">Anúncio de vaga </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/filtra/candidato/empresa">Buscar Candidatos</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Opções
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/edita/empresa/{{session('empresa_id')}}">Editar Empresa</a></li>
              <li><a class="dropdown-item" href="/alterar/senha/empresa">Redefinir Senha</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="/">Sair</a></li>
            </ul>
          </li>
        </ul>

      </div>
      <ul class="nav justify-content-end">
        <button type="button" class="btn btn position-relative" style="background-color:#F8F9FA; margin-right:10px">
          <img src="/icons/outline_notifications_black_24dp.png"> 
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
            99+
            <span class="visually-hidden">unread messages</span>
          </span>
        </button>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="https://pt-br.facebook.com/cdlmanausoficial/"><img src="/icons/facebook.png"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.instagram.com/cdlmanaus/?hl=en"><img src="/icons/instagram.png"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.youtube.com/channel/UCyjD5GbQuRrztgyRxlVAZdQ"><img src="/icons/youtube.png"></a>
        </li>

      </ul>
    </div>

  </nav>
  
  <div id="menu">

  </div>

    <div class="container">

        @yield('filtrocandidato')

    </div>
    <footer style="margin-top: 150px">
      <nav class="navbar fixed-bottom navbar-expand-sm navbar bg" style="background-color: #284D92">
          <div class="container" style="margin-top: 8px">
              <div class="col-6 input-group-sm">
                  <p class="text-start" style="color:#fff">Progride® é uma marca registrada © <?php echo date('Y')?>
                  </p>
              </div>
              <div class="col-6 input-group-sm">
                  <p class="text-end" style="color:#fff">Desenvolvido por <img src="/icons/progride.png" width="25">
                      Progride </p>
              </div>

          </div>
      </nav>
  </footer>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<!-- Adicionando Javascript -->
<script>
    $(document).ready(function() {

      $('#letivo_medio').hide();
      $('#termino_medeio').hide();
      $('#curso_tecnico').hide();
      $('#semetre').hide();
      $('#curso_superior').hide();
      $('#periodo_superior').hide();
      $('#curso_pos').hide();
      $('modulo_pos').hide();
      $('#leitura_ingles').hide();
      $('#escrita_ingles').hide();
      $('#leitura_espanhol').hide();
      $('#escrita_espanhol').hide();
      $('#leitura_frances').hide();
      $('#escrita_frances').hide();
      $('#leitura_outros').hide();
      $('#escrita_outros').hide();


      $('#ingle').change(function(){

        if($("#ingle:checked").val() == undefined){
            $("#ingle").prop('checked', false);
            $('#leitura_ingles').hide(); 
            $('#escrita_ingles').hide(); 
        }else{
          $("#ingle").prop('checked', true);
          $('#leitura_ingles').show();  
          $('#escrita_ingles').show();
        }


      });

      $('#espanhol').change(function(){

        if($("#espanhol:checked").val() == undefined){
            $("#espanhol").prop('checked', false);
            $('#leitura_espanhol').hide(); 
            $('#escrita_espanhol').hide(); 
        }else{
          $("#espanhol").prop('checked', true);
          $('#leitura_espanhol').show();  
          $('#escrita_espanhol').show();
        }


      });

      $('#frances').change(function(){

        if($("#frances:checked").val() == undefined){
            $("#frances").prop('checked', false);
            $('#leitura_frances').hide(); 
            $('#escrita_frances').hide(); 
        }else{
          $("#frances").prop('checked', true);
          $('#leitura_frances').show();  
          $('#escrita_frances').show();
        }


      });


      $('#formacao').change(function(){

        if(document.getElementById('formacao').value == 'fundamental completo'){

            $('#letivo_medio').hide();
            $('#termino_medeio').hide();
            $('#curso_tecnico').hide();
            $('#semetre').hide();
            $('#curso_superior').hide();
            $('#periodo_superior').hide();
            $('#curso_pos').hide();
            $('#modulo_pos').hide();
            $('#leitura').hide();
            $('#escrita').hide();
            $('#modulo_pos').hide();



        }else if(document.getElementById('formacao').value == 'fundamental incompleto' ){

              $('#letivo_medio').hide();
              $('#termino_medeio').hide();
              $('#curso_tecnico').hide();
              $('#semetre').hide();
              $('#curso_superior').hide();
              $('#periodo_superior').hide();
              $('#curso_pos').hide();
              $('#modulo_pos').hide();


        }else if(document.getElementById('formacao').value == 'medio completo' ){

              $('#letivo_medio').hide();
              $('#termino_medeio').hide();
              $('#curso_tecnico').hide();
              $('#semetre').hide();
              $('#curso_superior').hide();
              $('#periodo_superior').hide();
              $('#curso_pos').hide();
              $('#modulo_pos').hide();


        }else if(document.getElementById('formacao').value == 'medio cursando'){

              $('#letivo_medio').show();
              $('#termino_medeio').hide();
              $('#curso_tecnico').hide();
              $('#semetre').hide();
              $('#curso_superior').hide();
              $('#periodo_superior').hide();
              $('#curso_pos').hide();
              $('#modulo_pos').hide();


        }else if(document.getElementById('formacao').value == 'tecnico cursando'){

              $('#letivo_medio').hide();
              $('#termino_medeio').hide();
              $('#curso_tecnico').show();
              $('#semetre').show();
              $('#curso_superior').hide();
              $('#periodo_superior').hide();
              $('#curso_pos').hide();
              $('#modulo_pos').hide();


        }else if(document.getElementById('formacao').value == 'tecnico completo'){

              $('#letivo_medio').hide();
              $('#termino_medeio').hide();
              $('#curso_tecnico').show();
              $('#semetre').hide();
              $('#curso_superior').hide();
              $('#periodo_superior').hide();
              $('#curso_pos').hide();
              $('#modulo_pos').hide();


        }else if(document.getElementById('formacao').value == 'superior cursando'){

              $('#letivo_medio').hide();
              $('#termino_medeio').hide();
              $('#curso_tecnico').hide();
              $('#semetre').hide();
              $('#curso_superior').show();
              $('#periodo_superior').show();
              $('#curso_pos').hide();
              $('#modulo_pos').hide();


        }else if(document.getElementById('formacao').value == 'superior completo'){

              $('#letivo_medio').hide();
              $('#termino_medeio').hide();
              $('#curso_tecnico').hide();
              $('#semetre').hide();
              $('#curso_superior').show();
              $('#periodo_superior').hide();
              $('#curso_pos').hide();
              $('#modulo_pos').hide();


        }else if(document.getElementById('formacao').value == 'pos cursando'){

              $('#letivo_medio').hide();
              $('#termino_medeio').hide();
              $('#curso_tecnico').hide();
              $('#semetre').hide();
              $('#curso_superior').hide();
              $('#periodo_superior').hide();
              $('#curso_pos').show();
              $('#modulo_pos').show();


        }else if(document.getElementById('formacao').value == 'pos completo'){
              $('#letivo_medio').hide();
              $('#termino_medeio').hide();
              $('#curso_tecnico').hide();
              $('#semetre').hide();
              $('#curso_superior').hide();
              $('#periodo_superior').hide();
              $('#curso_pos').show();
              $('#modulo_pos').hide();

        }else{
            $('#letivo_medio').hide();
            $('#termino_medeio').hide();
            $('#curso_tecnico').hide();
            $('#semetre').hide();
            $('#curso_superior').hide();
            $('#periodo_superior').hide();
            $('#curso_pos').hide();
            $('#modulo_pos').hide();

        }

      });
    });

</script>

   <!-- jquery -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <!-- ***** -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> <!-- jquery CDN  -->
</html>