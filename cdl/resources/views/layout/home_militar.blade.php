<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link href="/css/home_militar.css" rel="stylesheet">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <title>Empregabilidade | CDL Manaus</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/home/empresa"><img id="logo" src="/img/cdl_logo.png"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/busca/militar">Buscar Candidatos</a>
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
  </nav>
  <!--
    <div id="menu">

    </div>
  -->
  <div class="container-fluid">

    @yield('home')

  </div>
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
    icon: 'error',
    title: 'Email ou senha invalidas',
    showConfirmButton: false,
    timer: 1500
  })
  </script>
  @endif


  <!-- se cadastra ok -->
  @if(session('empresa_cadastro'))
  <script>
    Swal.fire({
    position: 'center',
    icon: 'success',
    title: 'Organização militares',
    text: ' cadastrado com sucesso',
    showConfirmButton: false,
    timer: 2500
  })
  </script>
  @endif


</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
  integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
  integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

</html>