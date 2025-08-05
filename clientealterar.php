<?php

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];

include  "conexao.php";
$sql = "update teste  set nome = '$nome' , email='$email' where id = $id";
$resultado = mysqli_query($conexao, $sql);


mysqli_close($conexao);


header ("Location:clientelistar.php");




?>