<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NumeroMes</title>
</head>
<body>

<?php

$mes = ['Janeiro' , 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho' , 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro' ];

$numeroMes = 14;

if ($numeroMes >=1 && $numeroMes <=12){
    echo $mes[$numeroMes - 1];
  }else{
    echo "Mês inválido";
  }

?>

    
</body>
</html>