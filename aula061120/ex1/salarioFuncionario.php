<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>exercicio1</title>
  <style>
    body {
      
            background: #d9edd9;
        }
        
        h1{
            border: 5px double black;
            text-align: center;
            padding: 3px;
            margin: 50px 200px;

        }
        
        div {
          background: #c7f760;
          padding: 2em;
          
        }
         
  </style>

<body>

<h1>
  Dados do Funcionario
</h1>

<!-- 1.Faça um programa que receba o nome e o valor do salário de um funcionário, o percentual de aumento, enviados através de um formulário, calcule valor do aumento e o novo salário, e ao final exiba o nome do funcionário o valor do aumento e o novo salário que ele obteve.-->
<div>
<?php

$nome = $_GET ['nome'];
$salario= $_GET['salario'];
$reajuste = $_GET['reajuste'];

$novoSalario = $salario + (($reajuste * $salario) /100);

print " Nome do Funcionario: $nome <br>"; 
print " O novo salario é:  $novoSalario <br>";
print " Aumento foi de:"  .(($reajuste * $salario)/100);

?>
<hr>
<a href="formSsalario.html">Voltar</a>
</div>

</body>
</html>