<?php
    // Inicia a sessão para permitir o controle de autenticação entre as páginas.
    session_start();

    // Carrega a conexão com o banco de dados usada na validação do login.
    include("infra/db/connect.php");

    // Trata o envio do formulário de login.
    if($_SERVER['REQUEST_METHOD'] == "POST"){

        // Recebe os dados digitados pelo usuário no formulário.
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        
        // Consulta o banco para verificar se existe um registro com as credenciais informadas.
        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";

        $resultado = $conn->query($sql);

        // Se encontrar ao menos um registro, o usuário é autenticado e redirecionado para a área interna.
        if ($resultado->num_rows > 0){
            $_SESSION["usuario"] = $usuario;
            header("Location: public/home.php");
            exit();
        }else{
            // Mensagem exibida quando as credenciais não correspondem a nenhum usuário cadastrado.
            $erro = "Usuário ou senha inválidos!";
        }
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>área de Login</title>
</head>
<body>
    <h1>Sistema de Login Simples</h1>

    <!-- Formulário responsável por enviar as credenciais para validação. -->
    <form method="POST">
        <label>Usuário:</label>
        <input type="text" name="usuario">
        <br>
        <label>Senha:</label>
        <input type="password" name="senha">
        <br>
        <?php
            // Exibe a mensagem de erro quando o login falha.
            if(isset($erro)){
                echo $erro;
            };

            // Variável reservada para informar falhas de autenticação ao usuário.
        ?>
        <br>
        <button type="submit">Entrar</button>
    </form>

</body>
</html>