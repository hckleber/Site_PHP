<?php session_start();

include 'conexao.php';

$login = $_POST['login'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios where nome = '$login' AND senha = '$senha'";

/* Transforma uma variavel em uma consulta sql */
$consulta = mysqli_query($conexao, $sql);

$numero = mysqli_num_rows($consulta);

if($numero > "0"){
	
	$_SESSION['login'] = $login;
	$_SESSION['senha'] = $senha;
	echo "<script>location.href='index_admin.php'</script>"; 

}else{
	echo "<script>location.href='index.php'</script>";

 
}

?>




