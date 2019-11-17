<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <a href="home.html">HOME</a></a><br><br><br>
        <?php
     require 'conect.php';
            
        $nome = $_GET['nome'];
        $data= $_GET['datae'];
        $vendedor =$_GET['vendedor'];
        $orcamento= $_GET['orcamento'];
        $query="INSERT INTO cadastro(cliente,Data,vendedor,orcamento) VALUES('$nome','$data','$vendedor','$orcamento')";
        $res=executar($query);
        
          
          if ($res) {
              echo"cadastro realizado com sucesso";
          } else {
              echo"failed";
          }
          
    
        
        
        
        
           
        ?>
    
    </body>
</html>