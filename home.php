<?php
session_start();

include("conexao_db.php");

if(!isset($_SESSION["usuario"])){
    header("Location: index.php");
    exit();
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $usuarioNovo = $_POST["usuario"];
    $senhaNovo = $_POST["senha"];

    $sql = "INSERT INTO usuario (usuario, senha) VALUES ('$usuarioNovo','$senhaNovo')";

   if($conn->query($sql) === TRUE){
    echo "<script> alert('Novo usuário no banco adicionado com sucesso')</script>";
   }else{
    echo "<script> alert('Erro ao cadastrar')</script>";

   };



};


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

    <h1>Bem vindo, <?php echo $_SESSION["usuario"] ?> </h1>

    <form method="POST">

    <label for="usuario">Usuario</label>

        <input type="text" name="usuario">
        <br><br>
        <label for="senha">Senha</label>
        <input type="password" name="senha">
        <br><br>
        <button type="submit">Cadastrar</button>

    </form>

    <br>
    <br>

    <?php include("tabela.php"); ?>

    
    
    <a href="logout.php">Sair</a>

    
</body>
</html>