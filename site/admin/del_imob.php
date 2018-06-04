<?php include '../conexao.php';

$id_imob = $_GET['id_imob'];

$db = mysqli_query ($conexao, "DELETE FROM tuto_imob where id_imob = '$id_imob'");

	echo '<script>
	alert ("Seu Produto foi excluido com Sucesso")
	</script> ';// die();
	echo "<script>location.href='index_admin.php'</script>";


?>