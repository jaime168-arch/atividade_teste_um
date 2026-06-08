<?php

    // Função 'session_start()'
    // Função: Inicia uma nova sessão ou retoma a sessão existente no servidor.
    // É obrigatório chamar essa função antes de tentar destruir a sessão, para o PHP saber qual "gaveta" ele deve limpar.
    session_start();

    //  Função 'session_destroy()'
    // Função: Apaga/destrói todos os dados salvos na sessão atual (como nome do usuário, ID ou permissões).
    // É o comando que efetivamente faz o "Logoff", deixando o usuário como "visitante anônimo" novamente.
    session_destroy();

    //  Função 'header()' com o parâmetro 'Location'
    // Função: Envia um cabeçalho HTTP para o navegador ordenando um redirecionamento imediato de página.
    // O '../index.php' indica que o navegador deve voltar uma pasta (..) e procurar o arquivo 'index.php' (tela de login).
    header("Location: ../index.php");

    //  Função 'exit()'
    // Função: Interrompe imediatamente a execução de qualquer código PHP abaixo desta linha.
    // É uma medida importante de segurança para garantir que o servidor pare de trabalhar nesta página após mandar o usuário embora.
    exit();

?>