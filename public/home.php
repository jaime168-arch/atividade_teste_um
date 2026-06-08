<?php

//  Inicia ou retoma a sessão ativa do PHP
session_start();

//  Trava de Segurança: Se a variável de sessão "usuario" NÃO estiver definida,
// significa que quem tenta acessar a página não passou pela tela de login. O PHP barra o acesso e o manda para o index.php.
if(!isset($_SESSION["usuario"])){
    header("Location: ../index.php");
    exit(); // Interrompe imediatamente a execução do script
}

// Inclui o arquivo que abre a conexão com o banco de dados (criando a variável $conn)
include("../infra/db/connect.php");

// Condicional de Envio: Só entra aqui se o formulário de cadastro abaixo for enviado (via método POST)
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Captura os dados digitados nos campos de texto 'usuario' e 'senha'
    $novoUsuario = $_POST['usuario'];
    $novaSenha = $_POST['senha'];

    // Monta a instrução SQL de inserção (CREATE)
    // Função: Prepara o comando para salvar o novo usuário e a nova senha na tabela 'usuarios'.
    $sql = "INSERT INTO usuarios (usuario,senha) 
    VALUES ('$novoUsuario','$novaSenha')";  

    // Executa a query de inserção no banco de dados através da conexão $conn
    if($conn->query($sql) === TRUE){
        // Se a gravação no banco der certo, dispara um alerta visual de sucesso via JavaScript
        echo "<script> alert('Usuário cadastrado com sucesso!')</script>";
    }else{
        // Se houver alguma falha técnica no banco, dispara um alerta de erro
        echo "<script> alert('Erro ao cadastrar')</script>";
    }

};

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h3>Bem-Vindo! <?php echo $_SESSION["usuario"]; ?></h3>
    
    <a href="logout.php"> Sair</a>

    <hr>
    <h4>Cadastro de Novo Usuário.</h4>
    
    <form method="POST">
        <label>Usuário:</label>
        <input type="text" name="usuario">
        <br>
        <label>Senha:</label>
        <input type="password" name="senha">
        <br>
        <?php
        
            // Tratamento de Erro Visual: Se a variável $erro existir, exibe a mensagem neste ponto.
            // (Nota: Atualmente esta variável não está sendo alimentada no topo deste arquivo).
            if(isset($erro)){
                echo $erro;
            };
        
        ?>
        <br>
        <button type="submit">Cadastrar</button>
    </form>
    <hr>
    <?php
    
    // Inclusão de Componente Dinâmico (Read / Read + Delete + Update)
    // Função: Junta o arquivo 'table.php' aqui dentro. Esse arquivo vai ler todos os usuários do banco de dados 
    // e desenhar a tabela na tela, junto com os botões de "Editar" e "Excluir" que criamos anteriormente.
    include("components/table.php")

    ?>



</body>
</html>