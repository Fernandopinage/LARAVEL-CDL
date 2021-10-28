<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/img/title.png">
    <title>Empregabilidade | CDL Manaus</title>
</head>

<body>

    <style>
        div {
            width: 100px;
            height: 100px;
            display: inline-block;
        }

        .div1 {
            margin-top: 20px;
            /*background-color: magenta;*/
            width: 200px;
            height: 200px;
        }

        .div1 img {
            justify-content: center;
        }

        .div2 {
            /*background-color: teal;*/
            height: 200px;
            width: 490px;
            margin-top: 20px;
        }

        .formacao {
            padding: 2px;
            color: #fff;
            background-color: #3d3d3d;
            text-align: center;
        }

        img {
            border-radius: 15px 50px;
        }

        form {
            width: 490px;
        }
    </style>

    <div class="div1">
        @if(empty($dados->can_foto))

        <img src="/img/events/perfil.png" width="150px">
        @else
        <img src="img/events/{{$dados->can_foto}}" width="180px">

        @endif
    </div>
    <div class="div2">
        <p><span style="margin-right: 5px;"><b style="margin-left: 10px">NOME:</b>
            </span>{{strtoupper($dados->can_nome)}} {{strtoupper($dados->can_sobrenome)}}</p>
        <p><span style="margin-right: 5px;"><b style="margin-left: 10px">E-MAIL:</b>
            </span>{{strtoupper($dados->can_email)}}<span
                style="margin-right: 10px; margin-left:20px;margin-left:5px;"><b style="margin-left: 10px"></p>
        <p><span style="margin-right: 5px;"><b style="margin-left: 10px">CELULAR:</b>
            </span>{{strtoupper($dados->can_celular)}}<span
                style="margin-right: 10px; margin-left:20px;margin-left:5px;"><b
                    style="margin-left: 10px">TELEFONE:</b>{{strtoupper($dados->can_telefone)}}</p>
        <p><span style="margin-right: 5px;"><b style="margin-left: 10px">CEP:</b>
            </span>{{strtoupper($dados->can_cep)}}<span style="margin-right: 10px; margin-left:20px;margin-left:5px;"><b
                    style="margin-left: 10px">CIDADE: </b>{{strtoupper($dados->can_cidade)}}</p>
        <p><span style="margin-right: 5px;"><b style="margin-left: 10px">BAIRRO:</b>
            </span>{{strtoupper($dados->can_bairro)}}</p>
    </div>

    <p class="formacao">
        <span>FORMAÇÃO ACADEMICA</span>
    </p>

            <?php 
        
            if($dados->can_formacao === "Ensino_Fundamental_completo"){
              
            ?>
            <p>ENSINO FUNDAMENTAL COMPLETO</p> 

            <?php
            } else{
                echo "nao ";
            }
            ?>

     <?php 
        if(!empty($dados->curso)){
            ?>
                <p class="formacao">
                    <span>CURSO EXTRACURRICULARES</span>
                </p>

                <p>ENSINO FUNDAMENTAL COMPLETO</p> 

            <?php
        }
     ?>       




</body>

</html>