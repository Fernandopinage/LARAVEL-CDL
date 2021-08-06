<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    
    
    <div>
        <nav class="navbar navbar " style="background-color: #284D92">
            <div class="container-fluid">
                <img id="logo" src="https://cdl.agenciaprogride.com.br/img/cdl-logo.png" width="150">
            </div>
        </nav>
    </div>
    <div class="body">
        <p class="text-start"><span>Olá</span><span>,{{$inputs->emp_fantasia}}.<span></p>
        <p class="text-start"><span>Recuperar senha</span></p>
        <p>Não lembra sua senha?</p>
        <p>Por Favor, <a href="http://127.0.0.1:8000/redefinir/password/{{$inputs->emp_id}}">Clique aqui</a> é cadastre uma nova senha. </p>
    </div>
</body>
<footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</footer>

</html>