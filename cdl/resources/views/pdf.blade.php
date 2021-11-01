<!DOCTYPE html>
<html lang="pt-br">

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
            width: 150px;
            height: 150px;
            display: inline-block;
        }

        .div1 {
            margin-top: 18px;
           /* background-color: magenta;*/
            width: 190px;
            height: 200px;
        }

        .div1 img {
            justify-content: center;
        }

        .div2 {
            /*background-color: teal;*/
            height: 200px;
            width: 500px;
            margin-top: 18px;
        }

        .formacao {
            margin-top: 25px;
            padding: 3px;
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
        <p><span style="font-size:12px;margin-right: 5px;"><b style="font-size:16px;margin-left: 10px">NOME:</b>
            </span>{{$dados->can_nome}} {{$dados->can_sobrenome}}</p>
        <p><span style="font-size:12px;margin-right: 5px;"><b style="font-size:16px;margin-left: 10px">E-MAIL:</b>
            </span>{{$dados->can_email}}<span
                style="font-size:12px;margin-right: 10px; margin-left:20px;margin-left:5px;"><b style="font-size:12px;margin-left: 10px"></p>
        <p><span style="font-size:12px;margin-right: 5px;"><b style="font-size:16px;margin-left: 10px">CELULAR:</b>
            </span>{{$dados->can_celular}}<span
                style="font-size:12px;margin-right: 10px; margin-left:20px;margin-left:5px;"><b
                    style="font-size:16px;margin-left: 10px">TELEFONE:</b>{{$dados->can_telefone}}</p>
        <p><span style="font-size:12px;margin-right: 5px;"><b style="font-size:16px;margin-left: 10px">CEP:</b>
            </span>{{$dados->can_cep}}<span style="margin-right: 10px; margin-left:20px;margin-left:5px;"><b
                    style="font-size:16px;margin-left: 10px">CIDADE: </b>{{$dados->can_cidade}}</p>
        
                    <span style="margin-right: 10px; margin-left:20px;margin-left:5px;"><b
                        style="font-size:16px;margin-left: 10px">BAIRRO : </b>{{$dados->can_bairro}}</p>


            <?php 

            if($dados->can_exmilitar === 'Sim'){
                ?>
                
                <p><span style="font-size:16px;margin-right: 5px;"><b style="font-size:16px;margin-left: 10px">UNIDADE MILITAR:</b>
                </span>{{$dados->can_unidademilitar}}</p>
                <p><span style="font-size:16px;margin-right: 5px;"><b style="font-size:16px;margin-left: 10px">MATRICULA:</b>
                </span>{{$dados->can_matricula}}</p>
                
                <?php
            }
            
            
            ?>
    </div>
    <br>
    <p class="formacao">
        <span>FORMAÇÃO ACADEMICA</span>
    </p>

        <?php 
        
        if(!empty($dados->can_formacao)){

           if($dados->can_formacao == 'Pós-Graduação_Completo'){

                echo  "<p style='font-size:20px' ><b> Pós-Graduação Completo </b> ".$dados->can_curso." ".$dados->can_instituicao." ". $data = date('m/Y',strtotime($dados->can_termino))." </p>";


           }

           if($dados->can_formacao == 'Pós-Graduação_Cursando'){

                echo  "<p style='font-size:20px' ><b> Pós-Graduação Cursando </b> ".$dados->can_curso." ".$dados->can_instituicao." ".$dados->can_periodo." </p>";

           }

           if($dados->can_formacao == 'Superior_Completo'){

                echo  "<p style='font-size:20px' ><b> Superior Completo </b> ".$dados->can_curso." ".$dados->can_instituicao." ".$data = date('m/Y',strtotime($dados->can_termino))." </p>";

            }

            
           if($dados->can_formacao == 'Superior_Cursando'){

                echo  "<p style='font-size:20px' ><b> Superior Cursando </b> ".$dados->can_curso." ".$dados->can_instituicao." ".$dados->can_periodo." </p>";

            }

            if($dados->can_formacao == 'Ensino_Técnico_Completo'){

                echo  "<p style='font-size:20px' ><b> Ensino Técnico Completo </b> ".$dados->can_curso." ".$dados->can_instituicao." ".$data = date('m/Y',strtotime($dados->can_termino))." </p>";

            }

            if($dados->can_formacao == 'Ensino_Técnico_Cursando'){

                echo  "<p style='font-size:20px' ><b> Ensino Técnico Cursando </b> ".$dados->can_curso." ".$dados->can_instituicao." ".$dados->can_semestre." </p>";

            }
            if($dados->can_formacao == 'Ensino_Técnico_Cursando'){

                echo  "<p style='font-size:20px' ><b> Ensino Técnico Cursando </b> ".$dados->can_curso." ".$dados->can_instituicao." ".$dados->can_semestre." </p>";

            }       
            
            if($dados->can_formacao == 'Ensino_Médio_Cursando'){

                echo  "<p style='font-size:20px' ><b> Ensino Médio Cursando </b> ".$data = date('m/Y',strtotime($dados->can_termino))." </p>";

            } 

            if($dados->can_formacao == 'Ensino_Médio_Completo'){

                echo  "<p style='font-size:20px' ><b> Ensino Médio Completo </b> ".$dados->can_termino." </p>";

            } 

            if($dados->can_formacao == 'Ensino_Fundamental_Incompleto'){

                echo  "<p style='font-size:20px' ><b> Ensino Fundamental Incompleto </b> </p>";

            } 

            if($dados->can_formacao == 'Ensino_Fundamental_Completo'){

                echo  "<p style='font-size:20px' ><b> Ensino Fundamental Completo </b> </p>";

            } 

        }
        
        
        ?>

        <?php 

            if(!empty($dados->can_curso_extra)){
                ?>
                
                <p class="formacao">
                    <span> CURSO EXTRACURRICULARES </span>
                </p>

                <?php

                $tamanho = count($dados->can_curso_extra);

                for($i=0;$i<$tamanho;$i++){

                    echo "<p style='font-size:16px'><b>".$dados->can_curso_extra[$i]."</b>  ".$data = date('m/Y',strtotime($dados->can_curso_ano_termino[$i]))."  </p>";

                }

            }



            if(!empty($dados->can_utv_titlulo)){
                ?>
                
                <p class="formacao">
                    <span> CURSO UTV </span>
                </p>

                <?php

                $tamanho2 = count($dados->can_utv_titlulo);

                    for($i=0;$i<$tamanho2;$i++){

                    echo "<p style='font-size:16px'><b>".$dados->can_utv_titlulo[$i].", CARGA HORÁRIA:</b> ".$dados->can_utv_carga[$i].", <b>DATA DE EMISSÃO</b> ".$data = date('m/Y',strtotime($dados->can_utv_data[$i]))."  </p>";
                }


            }


            if(!empty($dados->can_idioma)){

                ?>
                
                <p class="formacao">
                    <span> IDIOMAS </span>
                </p>

                <?php
                
                $tamanho3 = count($dados->can_idioma);

                for($i=0;$i<$tamanho3;$i++){

                    echo "<p style='font-size:16px'> <b>Idioma </b>: ".$dados->can_idioma[$i]." <b>, Escrita</b>: ".$dados->can_idioma_escrita[$i]." <b>, Leitura </b>: ".$dados->can_idioma_leitura[$i]."<b>, Conversação </b>:".$dados->can_idioma_conversacao[$i]."<br><br> </p>";

                   
                }

            }

            if(!empty($dados->can_cargo_empresa)){

                ?>
                
                <p class="formacao">
                    <span> EXPERIÊNCIA PROFISSIONAL </span>
                </p>

                <?php

                $tamanho4 = count($dados->can_cargo_empresa);

                for($i=0;$i<$tamanho4;$i++){
 
                    echo "<p style='font-size:16px'><b>Nome da empresa:</b> ".$dados->can_nome_empresa[$i]." - <b>Data de Admissão: </b>".$data = date('m/Y',strtotime($dados->can_data_inicio_empresa[$i]))." </b>  <b>a Data de termino: </b>".$data = date('m/Y',strtotime($dados->can_data_termino_empresa[$i]))." </p>";
                    echo "<p style='font-size:16px'><b>Cargo:</b> ".$dados->can_cargo_empresa[$i]."</p><p> <b>Salário:</b> ".$dados->can_salario_empresa[$i]."</p>";
                    if(!empty($dados->can_software_empresa)){
                    echo "<p style='font-size:16px'><b>Software utilizados: </b>  ".$dados->can_software_empresa[$i]." </p>";    
                    }   
                    echo "<br><br>";

                }


            }


         

        ?>





</body>

</html>