<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 5</title>
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
                text-align: justify;
                padding: 3px;
                margin: 50px 200px;
              }     
                         
      </style>
</head>
<body>

<!--5.A biblioteca de uma universidade d eseja fazer um algoritmo que leia o nome do livro que será emprestado, o tipo de usuário (professor ou aluno) e possa imprimir um recibo conforme mostrado a seguir. Considerar que o professor tem 10 dias para devolver o livro o aluno somente 3 dias. -->

$livro = $_GET ['livro'];
$usuario = $_GET ['usuario'];

if ($usuario == 'professor') {
    echo "<p> Você tem 10 dia para devolver os livros"
} else {
    echo "<p> Você tem 10 dia para devolver os livros </p>"
};

</body>
</html>