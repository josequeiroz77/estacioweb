<!--

        4.Uma pousada estipulou o preço da diária em R$ 40,00 e mais uma taxa de serviços diários de:
R$ 15,00, se o número de dias for menor que 10;
R$ 8,00, se o número de dias for maior ou igual a 10.

Criar um programa em PHP que informe o nome, o valor da conta de um cliente e
ao final exiba o total arrecadado pela pousada e também o nome e os gastos de cada cliente. 
    -->


<?php

$quantiDia = 10;
$valorDiaria1 = 40 + 8;
$valorDiaria2 = 40 + 15;
$valorPago1 = ($quantiDia * $valorDiaria1);
$valorPago2 = ($quantiDia * $valorDiaria2);

if ($quantiDia <10) {
   
    echo " O valor a ser pago: $valorPago2";
   
   
} else {
    echo " O valor a ser pago: $valorPago1";
}
 


?>



</body>
</html>