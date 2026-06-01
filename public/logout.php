<?php

    // Inicia ou retoma a sessão existente para que o PHP saiba qual usuário deseja sair
    session_start();

    // Destrói todas as informações e variáveis gravadas nessa sessão (limpa o login)
    session_destroy();

    // Redireciona o navegador do usuário para o arquivo index.php que está uma pasta acima
    header("Location: ../index.php");

    // Interrompe imediatamente a execução do script para garantir que nada mais rode após o redirecionamento
    exit();

?>