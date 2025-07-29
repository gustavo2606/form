<?php
$nome = $_POST['nome'];
$email = $_POST['email'];

$sql = "insert into teste(nome, email) values ('$nome','$email	')";

include 'conexao.php';

$resultado = mysqli_query($conexao,$sql);

mysqli_close($conexao);