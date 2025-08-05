<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Listagem de Clientes</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.4.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    /* Deixar bordas das células mais evidentes */
    table.table-bordered th,
    table.table-bordered td {
      border: 2px solid #343a40; /* cinza escuro */
    }
  </style>
</head>
<body>
  <div class="container my-5">
    <h1 class="mb-4 fs-2">Listagem de Clientes</h1>

    <a href="clienteform.php" class="btn btn-primary mb-3 fs-5">Adicionar novo cliente</a>

    <table class="table table-bordered table-striped table-hover w-100 fs-5">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>E-Mail</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include "conexao.php";
        $sql = "select * from teste";
        $resultado = mysqli_query($conexao, $sql);

        while($cliente = mysqli_fetch_assoc($resultado)){
          echo "<tr>";
          echo "<td>{$cliente['id']}</td>";
          echo "<td>{$cliente['nome']}</td>";
          echo "<td>{$cliente['email']}</td>";
          echo "<td>";
          echo "<a href='clienteexcluir.php?idexcluir={$cliente['id']}' class='btn btn-sm btn-danger me-3' title='Excluir'>";
          echo "<img src='imagens/lixo.png' alt='Excluir' style='width:24px; height:24px;'>";
          echo "</a>";
          echo "<a href='clienteFormularioAlterar.php?idalterar={$cliente['id']}' class='btn btn-sm btn-warning' title='Editar'>";
          echo "<img src='imagens/lapis.png' alt='Editar' style='width:24px; height:24px;'>";
          echo "</a>";
          echo "</td>";
          echo "</tr>";
        }

        mysqli_close($conexao);
        ?>
      </tbody>
    </table>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.4.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
