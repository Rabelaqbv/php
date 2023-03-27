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
 //thaiany,giovanna,isabelly
 
 echo"isso é php";
 echo"php ok"."<br>";
 $servidor="localhost";
 $usuario="id19705063_escola";
 $senha="rabelo1234Isa*#";
 $nomedb="id20491802_mldooo";

 $conn=new mysqli($servidor,$usuario,$senha,$nomedb);
 //testa conexão
 if ($conn->connect_error){
    die("conexao falhou:".$conn->connect_error);

    # code...
 }
 echo"conectado ao db"."<br>";
 $sql = "SELECT nome, sobrenome, telefone FROM agenda";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    while ($linha = $resultado->fetch_assoc()) {
        echo $linha["nome"] . " " . $linha["sobrenome"] . " - " . $linha["telefone"] . "<br>";
    }
} else {
    echo "Nenhum registro encontrado.";
}

$conn->close();
 ?> 
</body>
</html>


