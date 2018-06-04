<php>

<head>
<title>Site Imobiliaria</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="keywords" content="Imóveis, apartamentos, terrenos" />
<meta name="description" content="Aqui você encontra" />

<!-- Código para inserir menu com padrão da pasta css -->
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<link rel="stylesheet" href="css/menu.css">
<link rel="stylesheet" href="css/estilo.css">



<style type="text/css">

<!-- estrutura para inserir imagem para background da página
body{
background: url(image/bg.jpg) repeat--x;
}

.sel{
background-image:url('image/bgsel.png');
}

-->




</style>

</head>

<body>

<div id="top">

<div id="logo">Logo</div>
<div id="logo_tel">
<p>Entre em contato | endereço</p>
<p>(21) xxxx-xxxx</p>
</div>



<div id="cont">

<div id="menu">

<div id='cssmenu'>
<ul>
   <li class='active'><a href='#'><span>Home</span></a></li>
   <li><a href='#'><span>Products</span></a></li>
   <li><a href='#'><span>Company</span></a></li>
   <li class='last'><a href='#'><span>Contact</span></a></li>
</ul>
</div>
</div>

<div id="banner">
<img src="images/banner.jpg"/>
</div>

<div id="menu_pesquisa">
Pesquisa Avançada</br>
<form id="form1" name="form1" method="get" action="index.php">
</br>

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

</br>

<input type="submit" value="Buscar"/>
	
</form></p>
</div>

<div id="contout">
<div id="cont2">
<div id="titulo_gal">Destaques</div>


<!-- Usar conexao ao banco para popular imagens -->
<?php
include 'conexao.php';

$consulta = mysqli_query ($conexao , "SELECT * FROM tuto_imob");

if (!isset($_GET['compra_venda'])!="Comprar Alugar"){

$sql1 = "";
$sql2 = "";
$sql3 = "";
$sql4 = "";
$sql5 = "";
$sql6 = "";

if (((@$_GET['compra_venda']) <> "Comprar Alugar")){
	@$sql1 = "AND compra_aluga like '".$_GET['compra_venda']."'"; 
}	

if (((@$_GET['tipo']) <> "Tipo")){
	@$sql2 = "AND tipo like '%".$_GET['tipo']."%'"; 
}	

if (((@$_GET['quartos']) <> "Quartos")){
	@$sql3 = "AND quartos like '%".$_GET['quartos']."%'"; 
}	

if (((@$_GET['area']) <> "Area M²")){
	@$sql4 = "AND area like '%".$_GET['area']."%'"; 
}	

if (((@$_GET['preco']) <> "Preço")){
	@$sql5 = "AND preco like '%".$_GET['preco']."%'"; 
}	

if (((@$_GET['localizacao']) <> "Localização")){
	@$sql6 = "AND localizacao like '%".$_GET['localizacao']."%'"; 
}	

$consulta = mysqli_query ($conexao , "SELECT * FROM tuto_imob where 1=1 $sql1 $sql2 $sql3 $sql4 $sql5 $sql6");

}

while ($linha=mysqli_fetch_array($consulta)){
	$id_imob = $linha['id_imob'];
	$foto_imob = $linha['foto_imob'];
	$descricao_imob = $linha['descricao_imob'];
	
?>

<!-- Bloco para inserir imagem em retangulo -->
<a href="new_pg.php?id=<?php echo $id_imob ?>"><div id="cont3">
<div id="foto_im"><img src="<?php echo $foto_imob ?>" width="160" height="160"/></div>
<div id="text"><?php echo $descricao_imob ?></div>
</div></a>

<?php } ?>

</div>
</div>

</div>
</div>

<div id="rodape">
<div id="rodad">
© Copyright 2017 | Site Desenvolvido por Site KH.
</div>
</div>

</body>


</html>