<?php

    // Definição das credenciais de acesso ao banco de dados
    $host = "localhost"; // Onde o banco está rodando (neste caso, na própria máquina local)
    $user = "root";      // Nome de usuário padrão do MySQL
    $pass = "root";      // Senha do usuário do MySQL (comum em ambientes de desenvolvimento como MAMP ou Docker)
    $db = "sistema_simples_m1"; // O nome do banco de dados que você criou no script SQL

    // Cria uma nova instância da classe 'mysqli', abrindo a conexão com as credenciais fornecidas
    $conn = new mysqli($host,$user,$pass,$db);

    // Verifica se houve alguma falha/erro na tentativa de conexão
    if($conn->connect_error){
        // Se falhar, o 'die()' interrompe a página imediatamente e exibe a mensagem de erro
        die("Erro na conexão!");
    }else{
        // Se der certo, envia uma mensagem silenciosa de sucesso diretamente para o Console do Desenvolvedor no navegador
        echo "<script>console.log('Banco conectado com sucesso!')</script>";
    };

?>