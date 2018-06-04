<?php
// linha para conexão ao banco SQL
$host = "localhost";
$user = "root";
$pass = "";
$banco = "tutorial_imob"; 
$conexao = mysqli_connect($host, $user, $pass) or die(mysqli_error());
mysqli_select_db($conexao, $banco) or die(mysqli_error());
?>
