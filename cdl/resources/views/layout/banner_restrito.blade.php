<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="/css/restrito.css" rel="stylesheet">
    <link rel="icon" href="/img/title.png">
    <title>Empregabilidade | CDL Manaus</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #004691">
    <div class="container-fluid">
      <a class="navbar-brand" href="/home/acesso"><img id="logo" src="/img/cdl_logo.png"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:#fff;">
                      Candidatos
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                     <li><a class="dropdown-item" href="/login/candidato">Entrar</a></li>
                    <!--  <li><a class="dropdown-item" href="">Buscar Vagas</a></li> <!-- "/busca/candidato"  remover quando for implementar -->
                      <!--<li><hr class="dropdown-divider"></li>-->
                      
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:#fff;">
                      Empresas
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="/login/empresa" >Entrar</a></li>
                      <li><a class="dropdown-item" href="/restrito/lista/empresa" >Todas Empresas</a></li>
                    </ul>
        
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:#fff;">
                      Organizações Militares
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="/restrito/login/militar">Entrar</a></li>
                      <!--<li><a class="dropdown-item" href="/busca/militar">Buscar por Ex-Militares</a></li>-->
                     <!-- <li><hr class="dropdown-divider"></li> -->
                      
                    </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                      data-bs-toggle="dropdown" aria-expanded="false" style="color:#fff;">
                      UTV
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="/restrito/login/utv">Entrar</a></li>

                  </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false" style="color:#fff;">
                    Configuração
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/restrito/opt/banner">Banner</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false" style="color:#fff;">
                Opções
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/add/restrito/">Novo Administrador</a></li>
               <!-- <li><a class="dropdown-item" href="/redefinir/password/candidato/{{session('can_id')}}">Redefinir Senha</a></li> -->
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="/restrito/area/acesso">Sair</a></li>
              </ul>
            </li>
            </ul>

        </div>

 
  
        
      </div>
      <ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link active" target="_blank" aria-current="page" href="https://www.linkedin.com/company/cdlm/"><img src="/icons/1.png" width="25px"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" target="_blank" aria-current="page" href="https://pt-br.facebook.com/cdlmanausoficial/"><img src="/icons/2.png" width="25px"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" target="_blank" href="https://www.instagram.com/cdlmanaus/?hl=en"><img src="/icons/4.png" width="25px"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" target="_blank" href="https://www.youtube.com/channel/UCyjD5GbQuRrztgyRxlVAZdQ"><img src="/icons/3.png" width="25px"></a>
        </li>

      </ul>
    </div>
    
  </nav>
      

    <div class="container">

        @yield('banner')

    </div>


    <footer style="margin-top: 150px;" >
      <nav class="navbar bottom navbar-expand-sm navbar bg" style="background-color: #d0d0d056; margin-bottom:0px">
      
        <div class="container" id="container" style="color:#black; font-size:14px;">
            <div class="row">
                <div class="col-md-4 p-4">
                    <h6>> CDL MANAUS - DJALMA BATISTA</h6>
                    <span style="color: black">Cond. Amazonas Flat Service, 3000<br>
                        Loja A, Torre Sul<br>
                        Av. Djalma Batista | Chapada | 69.050-010<br>
                        Segunda a Quinta-feira das 08h às 18h<br>
                        Sexta-feira das 08h às 17h</span>
                </div>
                <div class="col-md-3 p-4">
                    <h6>> CDL MANAUS - CENTRO</h6>
                    <span style="color: black">Rua Rui Barbosa, 156<br>
                        Centro  |  69.010-220<br>
                        Segunda a Quinta-feira das 08h às 18h<br>
                        Sexta-feira das 08h às 17h</span>
                </div>
                <div class="col-md-3 p-4">
                    <h6>>
                        UTV - RAIZ</h6>
                    <span style="color: black">Rua Delfim de Souza, 125<br>
                        Raiz  |  69.068-020<br>
                        Segunda a Quinta-feira das 08h às 18h<br>
                        Sexta-feira das 08h às 17h</span>
                </div>
                <div class="col-md-2 p-4">
                    <h6>> ATENDIMENTO</h6>
                    <span style="color: black">Dúvidas<br>
                        + 55 92 3627-2867<br>
                        + 55 92 3627-2868<br>
                        suporte@cdlmanaus.org.br</span>
                </div>
            </div>
      
  
          </div>
        </div>
      </nav>
      <!--
      <nav class="navbar fixed-bottom navbar-expand-sm navbar bg" style="background-color: #284D92">
         <div class="container" style="margin-top: 8px">
              <div class="col-6 input-group-sm">
                  <p class="text-start" style="color:#fff">Progride® é uma marca registrada ©
                      <?php echo date('Y')?>
                  </p>
              </div>
              <div class="col-6 input-group-sm">
                  <p class="text-end" style="color:#fff">Desenvolvido por <img src="/icons/progride.png" width="25">
                      Progride </p>
              </div>
  
          </div>
      </nav>
    -->
  </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
    integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
</script>

</html>

<script>

  function file01(){
    alert('ok')
  }
  
</script>