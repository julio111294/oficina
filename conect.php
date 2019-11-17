<?php
define('localhost','localhost');
define('user','root');
define('senha',null);
define('db','oficina');
define('charset','utf8');

function conect(){
    $con=@mysqli_connect(localhost, user,senha, db) or die(mysqli_connect_error());
    mysqli_set_charset($con,charset)or die(mysqli_error($con));
    return $con;
}
function close($con){
    @mysqli_close($con)or die(mysqli_error($con));
}
function protect($dados){
    $con=conect();
    if (!is_array($dados)) {
    $dados=mysqli_real_escape_string($con,$dados);
    } else {
        $arr=$dados;
        foreach ($arr as $f => $value) {
            $f=mysqli_real_escape_string($con,$f);
            $value=mysqli_real_escape_string($con,$value);
            $dados[$f]=$value;

        }
        close($con);
        return $dados;
    }
    

}
function executar($query){
    $con=conect();
    $result = mysqli_query($con, $query)or die(mysqli_error($con));
    close($con);
    return $result;
}




?>