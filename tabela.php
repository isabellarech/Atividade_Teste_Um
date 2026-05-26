<hr>

<h2>Usuários Cadastrados</h2>

<table border=1 cellpadding="2">

    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Senha</th>
    </tr>

    <?php
    
        $sqlUsuarios = "SELECT * FROM usuario";

        $resultadoUsuarios = $conn->query($sqlUsuarios);

        while($linha = $resultadoUsuarios->fetch_assoc()){
            echo "
            
            <tr>
                <td>".$linha["id"]."</td>
                <td>".$linha["usuario"]."</td>
                <td>".$linha["senha"]."</td>
            </tr>
            
            ";
        }
    
    ?>


</table>