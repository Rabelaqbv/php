<!DOCTYPE html >
<html>
<body>
 
    <link  rel =" folha de estilo " href =" style.css " >
    <title > GIOVANNA </title >
</body >
<body >
    <h1 > Inserir contato </h1 >
    <form  action ="contato.php" method =" POST ">
        <label > Nome: </label > <br >
        <input  type =" text " name =" fnome " >  <br>
        <label > Sobrenome: </label > <br >
        <input  type =" text " name =" fsobrenome " > <br>
        <label > Telefone: </label > <br >
        <input  type =" text " name =" ftelefone " > <br>
        <tipo de entrada  =" enviar " valor =" Gravar ">
</forma>
<a href ="index.php" > Consultar agenda </a >
<?php 
include "conexao.php";
?>
<?php
if ( $_SERVER [" REQUEST_METHOD "]==" POST "){
    //Coleta Dados do formulario
    $nome = $_POST [" fnome "];
    $sobrenome = $_POST [" fsobrenome "];
    $telefone = $_POST [" ftelefone "];
    //inserir dados na tabela
    $sql =" INSERT into agenda(nome, sobrenome, telefone) VALUES(' $ nome ', ' $ sobrenome ', ' $ telefone ') ";
    if ( $conn -> query ( $sql )=== TRUE ){
        echo " Dados inseridos com sucesso "." <br> ";
    } else {
        # code...
    }{
        echo " Erro ao inserir os dados: ". $conn -> erro ;
    }
}
$conn ->close();

?>


</body> >
</html>
