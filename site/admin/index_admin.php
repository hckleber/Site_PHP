<?php session_start();


$login = $_SESSION['login'];

if($login == ""){
	echo "<script>location.href='index.php'</script>";
	
}

?>

<html>
<head>
<!-- header para sanar probelmas com acentuação (charset) -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" href="../css/estilo2.css">

</head>
<body>

<div style="">
<form action="../envia_imovel.php" method="post" enctype="multipart/form-data">

<input type="file" name="foto" /><br/>

<select name="compra_venda" class="sel">
<option>Comprar Alugar</option>
<option>Comprar</option>	
<option>Alugar</option>	
</select></br>
	
<select name="tipo" class="sel">
<option>Tipo</option>
<option>Casa</option>	
<option>Apto</option>	
<option>Terreno</option>	
</select></br>

<select name="quartos" class="sel">
<option>Quartos</option>
<option>1</option>	
<option>2</option>	
<option>3+</option>	
</select></br>

<select name="area" class="sel">
<option>Area M²</option>
<option>5</option>	
<option>10</option>	
<option>100</option>	
<option>200</option>	
</select></br>
	
<select name="preco" class="sel">
<option>Preço</option>	
<option>Ate 100.000</option>
<option>De 100.000 a 150.000</option>	
<option>De 150.000 a 250.000</option>	
</select></br>
	
<select name="localizacao" class="sel">
<option>Localização</option>	
<option>xxxxx</option>
<option>xxxxxxx</option>	
<option>xxxxxx</option>	
</select></br>

<textarea name="descricao" class=""> </textarea></br>


<input type="submit" value="enviar"/>


</form>
<a href="../index.php">Voltar para o site</a>
</div>

<div style="">

<?php include '../conexao.php';

$consulta = mysqli_query ($conexao , "SELECT * FROM tuto_imob");


while ($linha=mysqli_fetch_array($consulta)){
	$id_imob = $linha['id_imob'];
	$foto_imob = $linha['foto_imob'];
	$descricao_imob = $linha['descricao_imob'];
	
?>

<!-- Bloco para inserir imagem em retangulo -->
<a href="new_pg.php?id=<?php echo $id_imob ?>"><div id="cont3">
<div id="foto_im"><img src="../<?php echo $foto_imob ?>" width="160" height="160"/></div>
<div id="text"><?php echo $descricao_imob ?></div>
<a href="del_imob.php?id_imob=<?php echo $id_imob ?>">Excluir</a>

</div></a>

<?php } ?>


</div>


</form>

</body>
</html> 