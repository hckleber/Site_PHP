<html>

<head>
<title>Cadastrando...</title>
</head>

<body>
 
<?php
// linha para conexão ao banco SQL
$host = "localhost";
$user = "root";
$pass = "";
$banco = "cadastro"; 
$conexao = mysqli_connect($host, $user, $pass) or die(mysqli_error());
mysqli_select_db($conexao, $banco) or die(mysqli_error());
?>

<?php
// passagem de dados do site para o banco SQL
$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$pais=$_POST['pais'];
$estado=$_POST['estado'];
$cidade=$_POST['cidade'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$sql = mysqli_query($conexao, "INSERT INTO usuarios(nome, sobrenome, pais, estado, cidade, email, senha)
VALUES('$nome', '$sobrenome', '$pais', '$estado', '$cidade', '$email', '$senha')");

echo "<center><h1>Cadastro efetuado com sucesso!</h1></center>  "

?>

</body>

</html>