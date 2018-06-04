<?php include 'conexao.php';

// fazer upload de arquivo MAXIMO 2Mb
$caminhoservidor = 'images'; // nome da pasta onde irá salvar o arquivo
$caminhotemporario = $_FILES ["foto"] ["tmp_name"];
//$nomeimagem = $_FILES ['foto'] ['name'];
//$caminhofinal = $caminhoservidor.'/'.$nomeimagem; // salva o arquivo na pasta com omesmonome que foi enviado
@$caminhofinal = $caminhoservidor.'/'.date("dmyhis").'.'.jpg;
move_uploaded_file($caminhotemporario, $caminhofinal);


$compra_venda = $_POST['compra_venda'];
$tipo = $_POST['tipo'];
$quartos = $_POST['quartos'];
$area = $_POST['area'];
$preco = $_POST['preco'];
$localizacao = $_POST['localizacao'];
$descricao = $_POST['descricao'];

if($compra_venda == "Comprar Alugar"){
	echo '<script>
	alert("Escolha Comprar ou Alugar")
	</script>';
	echo "<script>location.href='admin/index_admin.php'</script>";
	die();
}


/*
// teste das variaveis
echo $caminhofinal;
echo "</br>";
echo $compra_venda;
echo "</br>";
echo $tipo;
echo "</br>";
echo $quartos;
echo "</br>";
echo $area;
echo "</br>";
echo $preco;
echo "</br>";
echo $localizacao;
echo "</br>";
echo $descricao;
*/


$sql = "INSERT INTO tuto_imob (foto_imob, descricao_imob, compra_aluga, tipo, quartos, area, preco, localizacao) VALUES ('".$caminhofinal."','".$descricao."','".$compra_venda."','".$tipo."','".$quartos."','".$area."','".$preco."','".$localizacao."')";
$res = mysqli_query ($conexao, $sql);
if ($res){
	echo '<script>
	alert ("Seu Produto foi publicado com Sucesso")
	</script> ';// die();
	echo "<script>location.href='admin/index_admin.php'</script>";
}
else{
	echo 'Ocorreu um erro, tente de novo, se o erro persistir, limpe o cache do seu navegadore tente novamente, se o erro 	persistir, verifique sua conexao com a internet, se o erro persistir envie email para xxxx@xxxx.com';
}

	

?>