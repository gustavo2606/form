<?php
$id = $_GET["idalterar"];
$nome = "";
$email = "";

include 'conexao.php';
$sql = "select * from teste where id = $id ";
$resultado = mysqli_query($conexao,$sql);

while($linha = mysqli_fetch_assoc($resultado)){
    $nome = $linha['nome'];
    $email = $linha['email'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Alterar Cliente</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.4.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
  <div class="container my-5" style="max-width: 600px;">
    <h1 class="mb-4">Alterar Cliente</h1>
    <form method="post" action="clientealterar.php">
      <input type="hidden" name="id" value="<?= htmlspecialchars($id) ?>">
      
      <div class="mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" value="<?= htmlspecialchars($nome) ?>" required>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">E-mail:</label>
        <input type="email" class="form-control" id="email" name="email" value="<?= htmlspecialchars($email) ?>" required>
      </div>

      <button type="submit" class="btn btn-success">Salvar Alteração</button>
      <a href="index.php" class="btn btn-secondary ms-2">Cancelar</a>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.4.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
