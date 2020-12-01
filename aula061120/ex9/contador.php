<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 9</title>
    <style>
    body {
      
            background: #e7c667;
        }
    </style>
</head>
<body>
    <!--
        9.Entrar com o número de vezes que se deseja imprimir a palavra SOL e imprimir
     -->
    <?php
    
    $numero = $_GET ['numero'];
    
    $cont= 1;

    do {
        print "<p> SOL </p>";
        $cont++;

    } while ($cont < $numero + 1);
    
    
    ?>
    <a href="contador.html">Voltar</a>
</body>
</html>