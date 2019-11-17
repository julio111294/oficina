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
$query="SELECT *FROM cadastro WHERE cliente='$nome'";
$result=executar($query);
if (!mysqli_num_rows($result) ) {
    return false;
} else {
    while ($res=mysqli_fetch_assoc($result)) {
        $data[]=$res;
    }
    

   
}

   foreach($data as $cl){
       echo "id = ".$cl['id']."<br>cliente = ".$cl['cliente']."<br> vendedor = ".$cl['vendedor']."<br> data = ".$cl['data']."<br> orçamento = ".$cl['orcamento'];
   } 

      ?>
    
    </body>
</html>