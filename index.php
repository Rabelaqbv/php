<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>planetarias</title>
</head>
<body>

 <h1>testephp</h1>  
 <?php
 //thaiany,giovanna,joão,thiago
 
 echo"isso é php";
 echo"php ok"."<br>";
 $servidor="localhost";
 $usuario="gigi";
 $senha="123";
 $nomedb="gigi";

 $conn=new mysqli($servidor,$usuario,$senha,$nomedb);
 //testa conexão
 if ($conn->connect_error){
    die("conexao falhou:".$conn->connect_error);

    # code...
 }
 echo"conectado ao db"."<br>";
 ?> 
</body>
</html>


