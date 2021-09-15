<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="/css/add_utv.css" rel="stylesheet">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <link rel="icon" href="/img/title.png">
  <title>  Empregabilidade | CDL Manaus</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/home/utv/"><img id="logo" src="/img/cdl_logo.png"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Candidatos
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="/login/candidato">Buscar Ex-Alunos</a></li>
                      <!--<li><a class="dropdown-item" href="">Buscar Vagas</a></li> <!-- "/busca/candidato"  remover quando for implementar -->
                      <!--<li><hr class="dropdown-divider"></li>-->
                      
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Cursos
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="/cursos/utv/">Cadastro de Cursos</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     Opções
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="/edita/utv/{{session('utv_id')}}">Editar UTV</a></li>
                      <li><a class="dropdown-item" href="/alterar/senha/">Redefinir Senha</a></li>
                      <hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="/login/utv">Sair</a></li>
                     <!-- <li><hr class="dropdown-divider"></li> -->
                      
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

  <!--
  <div id="menu">

  </div>
-->

  <div class="container">

    @yield('curso')

  </div>
  <div id="footer-cadastro">

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

<script src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>



  @if(session('empresa_cadastro_erro'))
  <script>
  Swal.fire({
    position: 'center',
    icon: 'error',
    title: 'O campo senha e campo Confirmar Senha estão diferentes',
    showConfirmButton: false,
    timer: 1500
  })
  </script>
  @endif

  @if(session('duplicado'))
  <script>
  Swal.fire({
    position: 'center',
    icon: 'error',
    title: 'Erro',
    text: 'CNPJ ou E-MAIL já cadastrado',
    showConfirmButton: false,
    timer: 3500
  })
  </script>
  @endif


<!-- Adicionando Javascript -->
<script>
  $(document).ready(function() {

        function limpa_formulário_cep() {
            // Limpa valores do formulário de cep.
            $("#rua").val("");
            $("#bairro").val("");
            $("#cidade").val("");
            $("#uf").val("");
            $("#ibge").val("");
        }

        //Quando o campo cep perde o foco.
        $("#cep").blur(function() {

            //Nova variável "cep" somente com dígitos.
            var cep = $(this).val().replace(/\D/g, '');

            //Verifica se campo cep possui valor informado.
            if (cep != "") {

                //Expressão regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;

                //Valida o formato do CEP.
                if (validacep.test(cep)) {

                    //Preenche os campos com "..." enquanto consulta webservice.
                    $("#rua").val("...");
                    $("#bairro").val("...");
                    $("#cidade").val("...");
                    $("#uf").val("...");
                    $("#ibge").val("...");

                    //Consulta o webservice viacep.com.br/
                    $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(dados) {

                        if (!("erro" in dados)) {
                            //Atualiza os campos com os valores da consulta.
                            $("#rua").val(dados.logradouro);
                            $("#bairro").val(dados.bairro);
                            $("#cidade").val(dados.localidade);
                            $("#uf").val(dados.uf);
                            $("#ibge").val(dados.ibge);
                        } //end if.
                        else {
                            //CEP pesquisado não foi encontrado.
                            limpa_formulário_cep();
                            alert("CEP não encontrado.");
                        }
                    });
                } //end if.
                else {
                    //cep é inválido.
                    limpa_formulário_cep();
                    alert("Formato de CEP inválido.");
                }
            } //end if.
            else {
                //cep sem valor, limpa formulário.
                limpa_formulário_cep();
            }
        });
    });
</script>

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


<script>

  $('#asscdl').ready(function(){
    if($("#asscdl:checked").val() == undefined){
            $("#asscdl").prop('checked', false);
            $('#divcod').hide(); 
            
        }else{
          $("#asscdl").prop('checked', true);
          $('#divcod').show();  
          
        }
  });
  
  $('#asscdl').change(function(){
  if($("#asscdl:checked").val() == undefined){
            $("#asscdl").prop('checked', false);
            $('#divcod').hide(); 
            
        }else{
          $("#asscdl").prop('checked', true);
          $('#divcod').show();  
          
        }
  });

</script>
<script>
  $(document).ready(function() {

    $('#pessoais').change(function(){
      if($("#pessoais:checked").val() == undefined){
        $("#pessoais").prop('checked', false);
        $('.pessoais').hide(); 
      }else{
        $("#pessoais").prop('checked', true);
        $('.pessoais').show(); 
      }

    });

    $('#endereco').change(function(){
      if($("#endereco:checked").val() == undefined){
        $("#endereco").prop('checked', false);
        $('.endereco').hide(); 
      }else{
        $("#endereco").prop('checked', true);
        $('.endereco').show(); 
      }

    });

    $('#adcinais').change(function(){
      if($("#adcinais:checked").val() == undefined){
        $("#adcinais").prop('checked', false);
        $('.adcinais').hide(); 
      }else{
        $("#adcinais").prop('checked', true);
        $('.adcinais').show(); 
      }

    });
    $('#termo').change(function(){
      if($("#termo:checked").val() == undefined){
        $("#termo").prop('checked', false);
        $('.termo').hide(); 
      }else{
        $("#termo").prop('checked', true);
        $('.termo').show(); 
      }

    });

  });
    

</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
  integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
  integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

</html>
