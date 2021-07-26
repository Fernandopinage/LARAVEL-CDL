<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="/css/home.css" rel="stylesheet">
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
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/anucio/empresa">Anúncio de vaga </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/filtra/candidato/empresa">Busca Candidatos</a>
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
              <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <ul class="nav justify-content-end navbar-light bg-light">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><img src="/icons/facebook.png"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><img src="/icons/instagram.png"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><img src="/icons/youtube.png"></a>
        </li>

      </ul>
    </div>
  </nav>

  <div id="menu">

  </div>

  <div class="container-fluid">

    <div class="banner-principal">

    </div>


    <!---- ------>
    <!--/PARA EMPREAS-->
    <section id="col-max" style="background: #f5fafa;">
      <article id="container" class="onflex-r">
        <aside class="text">
          <h1>Para Empresas</h1>
          <h2 style="color:#006cd9;">Anuncie todas as suas vagas: <b>grátis e sem limites!</b></h2>
          <br>
        </aside>
        <aside id="slice-1">
          <aside class="slice-text">
            <h3><span style="text-transform:uppercase; color:#006cd9;">Veja todos os currículos que precisar<br></span>
            </h3>
            <p>Você pode visualizar todos os dados dos currículos que receber em suas vagas.</p>
            <br>
            <h3><span style="text-transform:uppercase; color:#006cd9;">Economize com alta qualidade</span></h3>
            <p>Você não paga nada para anunciar quantas vagas quiser e ter acesso completo ao perfil dos candidatos.</p>
            <br>
            <h3><span style="text-transform:uppercase; color:#006cd9;">O público certo para suas vagas</span></h3>
            <p>Divulgamos suas vagas no site e por e-mail para milhares de candidatos com perfil compatível.</p>
          </aside>
          <!--/slice-text-->
        </aside>
        <!--/slice-->

        <aside id="slice-1">
          <aside class="slice-text">
            <h3><span style="text-transform:uppercase; color:#006cd9;">Pessoas com Deficiência<br></span></h3>
            <p>Pratique a inclusão em sua empresa.</p>
            <br>
            <h3><span style="text-transform:uppercase; color:#006cd9;">Sua empresa tem mais de 100 funcionários?</span>
            </h3>
            <p> Auxiliamos você a manter sua organização em conformidade com as leis de cotas.</p>
            <br>
            <h3><span style="text-transform:uppercase; color:#006cd9;">Combine com todos os outros filtros</span></h3>
            <p>Você pode combinar os filtros PcD com todos os outros critérios de perfil, como formação, experiências,
              objetivos e muito mais!</p>
          </aside>
          <!--/slice-text-->
        </aside>
        <!--/slice-->
      </article>
      <!--/article-->

      <article id="container" class="onflex-r">
        <!--/article/buscador-->
        <a name="busca"></a>
        <aside class="text">
          <h2 style="color:#006cd9;">Encontre a pessoa certa para a sua empresa: <b>Experimente!</b></h2>
        </aside>

        <aside id="slice-1">
          <!--/BUSCADOR-->
          <section id="buscador">
            <article id="container-buscador">
              @yield('home_empresa')
            </article>
            <!--/container-buscador-->
          </section>
          <!--/buscador-->
        </aside>
        <!--/slice-1-->
      </article>
      <!--/article/buscador-->

    </section>
    <!--/col-max-->
    <hr>
    <div class="container" id="container">
      <div class="row">
        <div class="col-sm-3">
          <h6>> CDL MANAUS - DJALMA BATISTA</h6>
          <span>Cond. Amazonas Flat Service, 3000<br>
            Loja A, Torre Sul<br>
            Av. Djalma Batista | Chapada | 69.050-010<br>
            Segunda a Quinta-feira das 08h às 18h<br>
            Sexta-feira das 08h às 17h</span>
        </div>
        <div class="col-sm-3">
          <h6>> CDL MANAUS - CENTRO</h6>
          <span>Rua Rui Barbosa, 156<br>
            Centro | 69.010-220<br>
            Segunda a Quinta-feira das 08h às 18h<br>
            Sexta-feira das 08h às 17h</span>
        </div>
        <div class="col-sm-3">
          <h6>>
            UTV - RAIZ</h6>
          <span>Rua Delfim de Souza, 125<br>
            Raiz | 69.068-020<br>
            Segunda a Quinta-feira das 08h às 18h<br>
            Sexta-feira das 08h às 17h</span>
        </div>
        <div class="col-sm-3">
          <h6>> ATENDIMENTO</h6>
          <span>Dúvidas<br>
            + 55 92 3627-2867<br>
            + 55 92 3627-2868<br>
            suporte@cdlmanaus.org.br</span>
        </div>
      </div>
    </div>
    <hr>
    <!---- ------>

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

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
  integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
  integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
</script>

</html>