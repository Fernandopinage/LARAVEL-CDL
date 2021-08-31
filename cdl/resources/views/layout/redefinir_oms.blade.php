<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link href="/css/redefinir_oms.css" rel="stylesheet">
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <link rel="icon" href="/img/title.png">
  <title>Empregabilidade | CDL Manaus</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="/"><img id="logo" src="/img/cdl-logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Candidatos
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                   <!-- <li><a class="dropdown-item" href="/login/candidato">Entrar</a></li> -->
                   <!--  <li><a class="dropdown-item" href="">Buscar Vagas</a></li> <!-- "/busca/candidato"  remover quando for implementar -->
                    <!--<li><hr class="dropdown-divider"></li>-->
    
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Empresas
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/login/empresa">Entrar</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Organizações Militares
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/login/militar">Entrar</a></li>
                    <li><a class="dropdown-item" href="/busca/militar">Buscar por Ex-Militares</a></li>
                    <!--<li><hr class="dropdown-divider"></li>-->
    
                  </ul>
                </li>
              </ul>
    
            </div>
    
          </div>
        </div>
      </nav>

  <!--
  <div id="menu">

  </div>
-->

  <div class="container">

    @yield('redefinir_oms')

  </div>
  <div id="footer-cadastro">

  </div>
</body>
<footer style="margin-top: 150px">
  <nav class="navbar fixed-bottom navbar-expand-sm navbar bg" style="background-color: #2D2C31">
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



@if(session('mensagem'))
<script>
Swal.fire({
  position: 'center',
 // icon: 'error',
  title: 'E-MAIL INVÁLIDO',
  text: 'Informe um e-mail valido',
  showConfirmButton: false,
  timer: 1500
})
</script>
@endif



@if(session('redefinir'))
<script>
Swal.fire({
  position: 'center',
 // icon: 'error',
  //title: 'E-MAIL INVÁLIDO',
  text: 'O E-mail com as intruções para redefinir a senha foi enviado com sucesso!',
  showConfirmButton: false,
  timer: 5500
})
</script>
@endif

<script src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<!-- Adicionando Javascript -->

<script src="/js/checkbox.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
  integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
  integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> <!-- jquery CDN  -->

</html>