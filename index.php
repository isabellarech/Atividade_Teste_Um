<?php
session_start();

$host = 'localhost';
$user   = 'root';
$password = 'root';
$db = 'sistema_simples';

$conn = new mysqli($host, $user, $password, $db);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login com o Banco</title>
</head>
<body>
    <h2>
        Login com PHP
    </h2>

    <form method="POST">
        <label for="usuario">Usuário:</label>
        <input type="text" id="usuario" name="usuario">

        <br></br>

        <label for="senha" class="senha">Senha:</label>
        <input type="password" id="senha" name="senha">

        <br></br>

        <button type="submit">Entrar</button>
    </form>

</body>
</html>