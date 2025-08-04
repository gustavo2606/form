<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h1>Listagem de Clientes </h1>
    <a href="clienteform.php">Adicionar novo cliente </a><br>
 
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-Mail</th>
            <th>Ações</th>
        </tr>
        <?php
        include "conexao.php";
        $sql = "select * from teste";
        $resultado = mysqli_query($conexao, $sql);
 
        while($linha = mysqli_fetch_assoc($resultado)){
            echo "<tr>";
            echo "<td> {$linha['id']}</td>";
            echo "<td> {$linha['nome']}</td>";
            echo "<td> {$linha['email']}</td>";
            echo "<td>";

            echo "<a href='clienteexcluir.php?idexcluir={$linha['id']}'><img src='imagens/exc.png' </a>";
            echo "</td>";
             echo "</tr>";
        }
 
        mysqli_close($conexao)
        ?>
    </table>
 

    
</body>
</html>