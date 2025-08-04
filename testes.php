<style>
   body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

    .btn {
        width: 100%;
        padding: 20px, 30px;
        border-radius: 8px;
        width: 300px;
    }

    .btn01{
        width: 100%;
            background-color: #28a745;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
    }
</style>
<form name="cadastro" method="post" action="clientesalvar.php">
    nome: <input type="text" name="nome" class="btn" require maxlength="200"><br>
    email: <input type="text" name="email" class="btn"><br>
    <button class="btn01" type="submit">Cadastrar cliente</button>

</form>