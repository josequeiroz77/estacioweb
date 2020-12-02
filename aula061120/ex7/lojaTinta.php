<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- 
    7.Faça um script para uma loja de tintas. O script deverá pedir o tamanho em metros quadrados da área a ser pintada. Considere que a cobertura da tinta é de 1 litro para cada 6 metros quadrados e que a tinta é vendida em latas de 18 litros, que custam R$ 80,00 ou em galões de 3,6 litros, que custam R$ 25,00. Informe ao usuário as quantidades de tinta a serem compradas e os respectivos preços em 3 situações: 
comprar apenas latas de 18 litros; 
comprar apenas galões de 3,6 litros; 
-->
</body>

<?php

$areaEmMetros=   28 ; //$_GET ["medida"];
$litros = $areaEmMetros / 6;
$lata = 18;
$galao = 3.5;
$valorLata = 80;
$valorGalao = 23;
$valorLitro1 = ($valorLata / $lata);
$valorLitro2 = ($valorGalao / $galao);


if (($areaEmMetros * $valorLitro1) < ($areaEmMetros * $valorLitro2)) {
  
   echo "Compre apenas Latas<br>";

} else {

//if ($areaEmMetros <= 21 && $areaEmMetros>21 ) {
    echo " Compre apenas Galão";

}
//} else {

 echo "O valor por litro é:" .number_format($valorLitro1, 2);
  
 echo "O valor por litro é:" .number_format($valorLitro2, 2);

?>


</html>