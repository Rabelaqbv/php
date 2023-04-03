<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planetarias</title>
</head>
<body>
<h1 > Inserir contato </h1 >
    <form  action ="contato.php" method =" POST ">
        <label > Nome: </label > <br >
        <input  type =" text " name =" fnome " >  <br>
        <label > Sobrenome: </label > <br >
        <input  type =" text " name =" fsobrenome " > <br>
        <label > Telefone: </label > <br >
        <input  type =" text " name =" ftelefone " > <br>
        <input type="submit" value="Gravar">
</form>

<?php
include "conexao.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $nome = $_POST["fnome"];
    $sobrenome = $_POST["fsobrenome"];
    $telefone = $_POST["ftelefone"];
  
    // Insere os dados no banco de dados
    $sql = "INSERT INTO agenda (nome, sobrenome, telefone) VALUES ('$nome', '$sobrenome', '$telefone')";
    if ($conn->query($sql) === TRUE) {
      echo "Dados inseridos com sucesso"."<br>";
    } else {
      echo "Erro ao inserir dados: " . $conn->error;
    }
  }
  $conn->close();

?>


<a href ="index.php" > Consultar agenda </a >
</body>
</html>