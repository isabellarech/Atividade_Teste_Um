<?php
session_start();

include("conexao_db.php");

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
</head>
<style>
    #erro{
        color:red;
    }
</style>
<body>
    <h2>
        Login com PHP
    </h2>
    
    <form method="POST">
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario">
        <br><br>
        <label for="senha">Senha</label>
        <input type="password" name="senha">
        <br>
        <?php
        
        if(isset($erro)){
            echo "<p id='erro'>$erro</p>";
        };

        ?>
        
        <br>

        <button type="submit">Entrar</button>
    </form>

</body>
</html>