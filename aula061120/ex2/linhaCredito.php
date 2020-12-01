<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio2</title>
    <style>
        body  {
          
                background: #c79ad9;
                
              }
            
            h1{
                border: 5px double black;
                text-align: center;
                padding: 3px;
                margin: 50px 200px;
              }
         p {
                border: 5px double black;
                text-align: center;
                padding: 3px;
                margin: 50px 200px;
              }     
                         
      </style>
</head>

<body>
    <!--2.A prefeitura de João Pessoa abriu uma linha de crédito para os funcionários municipais. O valor máximo da prestação não poderá ultrapassar 30% do salário bruto. Fazer um script que permita entrar com o salário bruto e o valor da prestação e informar se o empréstimo pode ou não ser concedido. (comando if). -->

    <h1>
        Sistema de Emprestimo Pref. de João Pessoa
    </h1>

    <?php

//$salarioBruto = 1000;
//$parcelaValor= 299.99;

$salarioBruto = $_GET ['salario'];
$parcelaValor= $_GET['parcela'];


if ( ($parcelaValor)>= $salarioBruto * 30/100) {
    echo "<p>Você não pode realizar um emprśtimo</p>";
} else {
    echo "<p>Parabéns por adquirir seu emprestimo</p>";
}

?>

<p><a href="formCredito.html">Voltar</a></p>



</body>
</html>