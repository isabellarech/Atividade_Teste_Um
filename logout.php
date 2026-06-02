<?php
// Essa página serve para encerrar a sessão do usuário
session_start();
// Encerra a sessão do usuário, removendo todas as variáveis de sessão e destruindo a sessão
session_destroy();
// Redireciona o usuário para a página de login após encerrar a sessão
header("Location:index.php");
// Encerra a execução do script para garantir que o redirecionamento ocorra corretamente
exit();

?>