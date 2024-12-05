<!-- create.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <h2>Cadastro de Usuário</h2>
    <form action="store.php" method="POST">
        Nome: <input type="text" name="nome" required><br>
        E-mail: <input type="email" name="email" required><br>
        Senha: <input type="password" name="senha" required><br>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>