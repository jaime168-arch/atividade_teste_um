<?php

//  Inicia ou retoma a sessão do usuário logado
session_start();

//  Trava de Segurança: Se a variável de sessão "usuario" não existir,
// significa que quem está tentando acessar não está logado, então o PHP o expulsa para a tela inicial.
if(!isset($_SESSION["usuario"])){
    header("Location: ../index.php");
    exit(); // Interrompe a execução do script na hora
}

// Inclui o arquivo que conecta com o banco de dados ($conn)
include("../infra/db/connect.php");

// Captura o ID enviado pela URL (via método GET) quando o usuário clicou em "Editar" na tabela
$id = $_GET["id"];

// Monta a query para buscar os dados atuais APENAS do usuário que possui aquele ID específico
$sql = "SELECT * FROM usuarios WHERE id = $id";

//  Executa a query de busca no banco de dados
$resultado = $conn -> query($sql);

//  Transforma os dados brutos encontrados em um array associativo chamado $usuario
$usuario = $resultado -> fetch_assoc();

// Condicional: Só entra aqui se o formulário abaixo for enviado (usuário clicou em "Salvar")
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Captura os novos dados digitados nos campos
    $novoUsuario = $_POST["usuario"];
    $novaSenha = $_POST["senha"];

    // Monta a instrução SQL de atualização (UPDATE)
    // Função: Altera o usuário e a senha atuais pelos novos dados, limitando a ação pelo 'WHERE id = $id' 
    // para que o sistema não altere todos os usuários do banco por engano.
    $sqlUpdate = " UPDATE usuarios SET usuario = '$novoUsuario', senha = '$novaSenha' WHERE id = $id";

    //  Executa o comando UPDATE no banco e verifica se deu certo
    if($conn -> query($sqlUpdate) === TRUE){
        // Se a atualização for um sucesso, redireciona de volta para a página 'home.php'
        header("Location: home.php");
        exit(); // Garante o fechamento do script após o redirecionability
    }


}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>

<h2>Editar Usuário</h2>
<form method="POST">
        <label>Usuário:</label>
        <input type="text" name="usuario" value =" <?php echo $usuario['usuario'] ?>">
        <br>
        <label>Senha:</label>
        <input type="password" name="senha" value =" <?php echo $usuario['senha'] ?>">
        <br>
        <br>
        <button type="submit">Salvar</button>
    </form>
    
</body>
</html>