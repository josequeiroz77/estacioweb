<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
    <style>
        body  {
          
                background: #ab9ff4;
                
              }
            
            h1{
                border: 10px double black;
                text-align: center;
                padding: 3px;
                margin: 50px 200px;
              }
         p {
                border: 1px solid red;
                text-align: center;
                padding: 3px;
                margin: 50px 200px;
              }     
                         
      </style>

</head>
<body>

<h1>Sistema de Avaliação</h1>

<?php

$nome = $_POST['nome'];
$nota1= $_POST ['nota1'];
$nota2= $_POST ['nota2'];

$media= ($nota1 + $nota2) / 2;

    if ($media <3 ) {

        echo "<p> Sr(a) $nome, sua nota média é: $media Ops! Reprovado </p> ";

    } else if (($media >= 3) && ($media <= 7)) {

        echo "<p> Sr(a) $nome, sua nota média é:  $media Avaliação </p> ";

    } else {
    
        echo "<p> Sr(a) $nome, sua nota média é: $media Aprovado </p>";
        
    }
    ?>
    <p> <a href="sistemaAvaliacao.html">Voltar</a></p>

</body>
</html>