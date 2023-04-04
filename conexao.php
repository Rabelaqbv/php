<?php
 echo"isso é php";
 echo"php ok"."<br>";
 $servidor="localhost";
 $usuario="id20491802_uso";
 $senha="f2\Na#5}YT_U[LR-";
 $nomedb="id20491802_mldooo";

 $conn=new mysqli($servidor,$usuario,$senha,$nomedb);
 //testa conexão
 if ($conn->connect_error){
    die("conexao falhou:".$conn->connect_error);

?>