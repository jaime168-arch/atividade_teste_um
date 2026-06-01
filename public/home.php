<?php
// Inicia ou retoma a sessão do usuário (essencial para páginas restritas)
session_start();

// Proteção da página: se a variável de sessão "usuario" NÃO estiver definida,
// significa que o usuário não fez login, então ele é expulso para o index.php
if(!isset($_SESSION["usuario"])){
    header("Location: ../index.php");
    exit(); // Interrompe a execução do script imediatamente
}

// Inclui o arquivo que faz a conexão com o banco de dados ($conn)
include("../infra/db/connect.php");

// Verifica se o formulário abaixo foi enviado através do método POST
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Captura os dados digitados nos campos de texto
    $novoUsuario = $_POST['usuario'];
    $novaSenha = $_POST['senha'];

    // Cria a query SQL para inserir o novo usuário e senha na tabela 'usuarios'
    $sql = "INSERT INTO usuarios (usuario,senha) 
    VALUES ('$novoUsuario','$novaSenha')";  

    // Executa a query no banco de dados através da variável de conexão $conn
    if($conn->query($sql) === TRUE){
        // Se der certo, exibe um alerta de sucesso na tela usando JavaScript
        echo "<script> alert('Usuário cadastrado com sucesso!')</script>";
    }else{
        // Se der errado (erro de sintaxe, banco fora do ar, etc), exibe alerta de erro
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
        
            // Trecho que exibe a variável $erro se ela existir (atualmente ela não é alimentada neste script)
            if(isset($erro)){
                echo $erro;
            };
        
        ?>
        <br>
        <button type="submit">Cadastrar</button>
    </form>
    <hr>
    <?php
    
    // Inclui e renderiza um componente de tabela (provavelmente para listar os usuários cadastrados)
    include("components/table.php")

    ?>

</body>
</html>