<?php
$servername =" localhost ";
$username=" id20491802_uso ";
$senha =" rabelo1234Isa> ";
$nomedb =" id20491802_mldooo ";
//cria conexão
$conn = new mysqli( $servername , $username , $senha, $nomedb );
//testa conexão
if ( $conn -> connect_error ){
    die(" conexão com db falhou: ". $conn-> connect_error );
}
echo " conectado ao db ";
?>