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
            <a class="nav-link" href="/anucio/empresa">Vagas Disponíveis</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/anucio/empresa">Anúncio de Vaga </a>
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
  <div id="menu">

  </div>

    <div class="container">

        @yield('anuncio')
        
    </div>
    <div id="footer-cadastro">

    </div>
</body>
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

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<!-- Adicionando Javascript -->

<script>

 $('#experiencia').change(function(){

    var valor =  document.getElementById('experiencia').value;
    if(valor === 'Sem Experiência'){

      $('#tempoexperiencia_div').hide();
      
    }else{

      $('#tempoexperiencia_div').show();
      
    }

 });


</script>

<script>

$('#formacao').change(function(){
  
  if(document.getElementById('formacao').value === 'Ensino fundamental completo' || document.getElementById('formacao').value === 'Ensino fundamental incompleto'){
   
    $('#curso_div').hide();
    $('#termino_div').hide();
    $('#semestre_div').hide();
    $('#periodo_div').hide();

  }

  if(document.getElementById('formacao').value === 'Ensino Medio completo'){
    $('#curso_div').hide();
    $('#semestre_div').hide();
    $('#periodo_div').hide();
    $('#termino_div').show();
  }

  if(document.getElementById('formacao').value  === 'Ensino Medio cursando'){
    $('#curso_div').hide();
    $('#termino_div').hide();
    $('#semestre_div').hide();
    $('#periodo_div').hide();
  }

  if(document.getElementById('formacao').value  === 'Ensino Tecnico completo'){

    $('#curso_div').hide();
    $('#termino_div').hide();
    $('#semestre_div').hide();
    $('#periodo_div').hide();

  }

  if(document.getElementById('formacao').value  === 'Ensino Tecnico cursando'){

  $('#curso_div').show();
  $('#termino_div').hide();
  $('#semestre_div').hide();
  $('#periodo_div').show();

  }

  if(document.getElementById('formacao').value  === 'Superior Completo'){

  $('#curso_div').show();
  $('#termino_div').hide();
  $('#semestre_div').hide();
  $('#periodo_div').show();

  }


  if(document.getElementById('formacao').value  === 'Superior Cursando'){

  $('#curso_div').show();
  $('#termino_div').hide();
  $('#semestre_div').hide();
  $('#periodo_div').show();

  }

  if(document.getElementById('formacao').value  === 'Pos-Graduacao Completo'){

  $('#curso_div').show();
  $('#termino_div').hide();
  $('#semestre_div').hide();
  $('#periodo_div').hide();

  }

  if(document.getElementById('formacao').value  === 'Pos-Graduacao Cursando'){

    $('#curso_div').show();
    $('#termino_div').hide();
    $('#semestre_div').hide();
    $('#periodo_div').hide();

  }

});

</script>



<script>

function moeda(a, e, r, t) {
    let n = ""
      , h = j = 0
      , u = tamanho2 = 0
      , l = ajd2 = ""
      , o = window.Event ? t.which : t.keyCode;
    if (13 == o || 8 == o)
        return !0;
    if (n = String.fromCharCode(o),
    -1 == "0123456789".indexOf(n))
        return !1;
    for (u = a.value.length,
    h = 0; h < u && ("0" == a.value.charAt(h) || a.value.charAt(h) == r); h++)
        ;
    for (l = ""; h < u; h++)
        -1 != "0123456789".indexOf(a.value.charAt(h)) && (l += a.value.charAt(h));
    if (l += n,
    0 == (u = l.length) && (a.value = ""),
    1 == u && (a.value = "0" + r + "0" + l),
    2 == u && (a.value = "0" + r + l),
    u > 2) {
        for (ajd2 = "",
        j = 0,
        h = u - 3; h >= 0; h--)
            3 == j && (ajd2 += e,
            j = 0),
            ajd2 += l.charAt(h),
            j++;
        for (a.value = "",
        tamanho2 = ajd2.length,
        h = tamanho2 - 1; h >= 0; h--)
            a.value += ajd2.charAt(h);
        a.value += r + l.substr(u - 2, u)
    }
    return !1
}

</script>

<script>
    $(document).ready(function() {

      $('#outro_idioma_div').hide();
      $('#nivel_idioma_div').hide();
      $('#descPCD').hide();
      $('#idioma_div').hide();
      
        $('#idioma_necessario').change(function(){

        if($("#idioma_necessario:checked").val() == undefined){
            $("#idioma_necessario").prop('checked', false);
            $('#idioma_div').hide(); 
            $('#nivel_idioma_div').hide();
           // $('#outro_idioma_div').hide();
            
        }else{
          $("#idioma_necessario").prop('checked', true);
          $('#idioma_div').show();  
          $('#nivel_idioma_div').show(); 
         // $('#outro_idioma_div').show();
          
        }


      });

      $('#idioma').change(function(){

        if(document.getElementById('idioma').value === 'outros'){
          $('#outro_idioma_div').show();
        }else{
          $('#outro_idioma_div').hide();
        }

      });


      $('#pcd').change(function(){

        if($("#pcd:checked").val() == undefined){
            $("#pcd").prop('checked', false);
            $('#descPCD').hide(); 
            
        }else{
          $("#pcd").prop('checked', true);
          $('#descPCD').hide();  
          $
        }


      });


    });

</script>

   <!-- jquery -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <!-- ***** -->



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