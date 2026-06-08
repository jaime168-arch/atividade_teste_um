<?php
    // Configurações de acesso ao banco de dados local do projeto.
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "sistema_simples_m1";

    // Cria a conexão MySQLi que será reutilizada nas páginas que acessam o banco.
    $conn = new mysqli($host,$user,$pass,$db);

    // Interrompe a execução caso a conexão não seja estabelecida.
    if($conn->connect_error){
        die("Erro na conexão!");
    }else{
        // Mensagem auxiliar para confirmar a conexão durante a navegação.
        echo "<script>console.log('Banco conectado com sucesso!')</script>";
    };

?>