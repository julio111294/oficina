<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
         <header>
        <a href="home.html"> HOME</a>
    </header>
      <?php
require 'conect.php';
$nome= $_GET["name"];
$query="DELETE FROM cadastro WHERE cliente='$nome'";
$result=executar($query);
echo"excluido com sucesso";


      ?>
    
    </body>
</html>