<?php
$idexcluir = $_GET['idexcluir'] ;

include "conexao.php";

$sql = "delete from teste where id=$idexcluir";
$resultado = mysqli_query($conexao, $sql);
mysqli_close($conexao);
header("location:clientelistar.php");
?>