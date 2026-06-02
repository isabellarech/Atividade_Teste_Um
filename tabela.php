<hr>
<!-- Essa página serve para exibir os usuários cadastrados no banco de dados -->

<!-- Defini o título da página -->
<h2>Usuários Cadastrados</h2>

<!-- Criei uma tabela para exibir os dados dos usuários -->
<table border=1 cellpadding="2">

    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Senha</th>
    </tr>

    <?php
    
    // Tabela para exibir os usuários cadastrados no banco de dados
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