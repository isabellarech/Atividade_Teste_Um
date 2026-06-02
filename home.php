<?php
// Esta é a página principal do sistema, onde o usuário pode cadastrar novos usuários e visualizar os usuários cadastrados

session_start();

// Inclui o arquivo de conexão com o banco de dados
include("conexao_db.php");

// Verifica se existe um usuário logado; caso contrário, redireciona para a página de login
if (!isset($_SESSION["usuario"])) {
    header("Location: index.php");
    exit();
}

// Verifica se o formulário de cadastro foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuarioNovo = $_POST["usuario"];
    $senhaNovo = $_POST["senha"];

    // Insere o novo usuário no banco de dados
    $sql = "INSERT INTO usuario (usuario, senha) VALUES ('$usuarioNovo','$senhaNovo')";

    // Verifica se o cadastro foi realizado com sucesso
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Novo usuário adicionado com sucesso')</script>";
    } else {
        echo "<script>alert('Erro ao cadastrar usuário')</script>";
    }
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>

    <!-- Exibe uma mensagem de boas-vindas com o nome do usuário logado -->
    <h1>Bem-vindo, <?php echo $_SESSION["usuario"] ?></h1>

    <!-- Formulário para cadastro de novos usuários -->
    <form method="POST">

        <!-- Campo para informar o nome do usuário -->
        <label for="usuario">Usuário</label>
        <input type="text" name="usuario">
        <br><br>

        <!-- Campo para informar a senha -->
        <label for="senha">Senha</label>
        <input type="password" name="senha">
        <br><br>

        <!-- Botão que envia os dados para cadastro -->
        <button type="submit">Cadastrar</button>

    </form>

    <br><br>

    <!-- Inclui a tabela com os usuários cadastrados -->
    <?php include("tabela.php"); ?>

    <!-- Link para encerrar a sessão do usuário -->
    <a href="logout.php">Sair</a>

</body>

</html>