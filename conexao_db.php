<?php
    // Essa parte conecta o banco de dados, e é usada em todas as páginas que precisam acessar o banco

    // Primeiro, definimos as variáveis de conexão com o banco de dados

    $host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "sistema_simples";

    $conn = new mysqli($host,$user,$pass,$db);

    if($conn->connect_error){
        die("Erro na conexão!");
    }else{
        // echo "<p> Banco: OK! </p>";
        echo "<script> console.log('Banco: OK!') </script>";
    };


?>