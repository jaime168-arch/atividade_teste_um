<?php
    // Encerra a sessão atual para remover os dados do usuário autenticado.
    session_start();
    session_destroy();

    // Redireciona novamente para a tela de login após o logout.
    header("Location: ../index.php");
    exit();

?>