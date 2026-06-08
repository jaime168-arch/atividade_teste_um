<?php

    // Variáveis de Configuração: Guardam os textos (strings) com as credenciais do banco.
    $host = "localhost"; // Função: Definir o servidor onde o banco está rodando (sua própria máquina).
    $user = "root";      // Função: Definir o nome do usuário administrador do MySQL.
    $pass = "root";      // Função: Definir a senha de acesso desse usuário.
    $db = "sistema_simples_m1"; // Função: Definir o nome exato do banco de dados que será manipulado.

    // Extensão 'new mysqli()': É uma classe nativa do PHP.
    // Função: Constrói uma nova conexão ativa com o banco de dados usando as 4 variáveis acima.
    // O resultado vivo dessa conexão fica guardado dentro do objeto '$conn'.
    $conn = new mysqli($host,$user,$pass,$db);

    // Propriedade 'connect_error': É uma variável interna do objeto '$conn'.
    // Função: Armazena o código/mensagem de erro caso a conexão falhe. Se estiver vazia, a conexão deu certo.
    if($conn->connect_error){
        
        // Função 'die()': É uma função de interrupção do PHP.
        // Função: Para a execução de toda a página imediatamente e exibe a mensagem "Erro na conexão!".
        // É usada para evitar que o sistema tente rodar queries sem ter um banco disponível.
        die("Erro na conexão!");
        
    }else{
        
        // Estrutura 'echo': É um construtor de saída de texto do PHP.
        // Função: Injeta um comando JavaScript (<script>) diretamente no navegador.
        // A função interna 'console.log()' do JS envia a mensagem de sucesso direto para o console do F12.
        echo "<script>console.log('Banco conectado com sucesso!')</script>";
    };

?>