<hr>

<!-- Exibe os usuários cadastrados no banco de dados -->

<!-- Título da página -->
<h2>Usuários Cadastrados</h2>

<!-- Tabela de usuários -->
<table border="1" cellpadding="2">

    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Senha</th>
    </tr>

    <?php
        // Consulta para selecionar todos os usuários cadastrados
        $sqlUsuarios = "SELECT * FROM usuario";

        // Executa a consulta SQL
        $resultadoUsuarios = $conn->query($sqlUsuarios);

        // Exibe os dados retornados pela consulta na tabela
        while ($linha = $resultadoUsuarios->fetch_assoc()) {
            echo "
            <tr>
                <td>" . $linha['id'] . "</td>
                <td>" . $linha['usuario'] . "</td>
                <td>" . $linha['senha'] . "</td>
            </tr>
            ";
        }
    ?>

</table>