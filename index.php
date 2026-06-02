<?php
// Essa página serve para fazer o login do usuário, verificando se as credenciais estão corretas no banco de dados, e caso estejam, ele redireciona para a página home.php
session_start();
//conexão com o banco de dados, para poder verificar as credenciais do usuário
include("conexao_db.php");
// Verifica se o formulário de login foi enviado 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM usuario WHERE usuario = '$usuario' AND senha = '$senha' ";

    $resultado = $conn->query($sql);

   if($resultado -> num_rows > 0){

    $_SESSION["usuario"] = $usuario;
    header("Location: home.php");
    exit();

   }else{
    $erro = "Usuário ou senha inválido.";
   }

};

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login com o Banco</title>
    <!-- Adicionei o título da página -->
</head>

<!-- Adicionei a tag style para exibir a mensagem de erro em vermelho -->
<style>
    #erro{
        color:red;
    }
</style>

<body>
    <!-- Título da página -->
    <h2>
        Login com PHP
    </h2>
    
    <!-- Formulário de login, onde o usuário pode inserir suas informações para acessar o sistema -->
    <form method="POST">

        <!-- Campo para o usuário inserir o nome de usuário -->
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario">
        <br><br>

        <!-- Campo para o usuário inserir a senha -->
        <label for="senha">Senha</label>
        <input type="password" name="senha">
        <br>
        
        <?php
        // Verifica se a variável de erro foi definida, e caso tenha sido, ele exibe a mensagem de erro na tela
        if(isset($erro)){
            echo "<p id='erro'>$erro</p>";
        };

        ?>
        
        <br>
        <!-- Botão para enviar o formulário de login -->
        <button type="submit">Entrar</button>
    </form>

</body>
</html>