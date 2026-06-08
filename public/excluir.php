<?php

// Inicia ou retoma a sessão ativa do PHP
session_start();

//  Trava de Segurança: Se a variável de sessão "usuario" não estiver definida,
// significa que quem tentou acessar a página não está logado. O PHP barra o acesso e o manda para o index.php.
if(!isset($_SESSION["usuario"])){
    header("Location: ../index.php");
    exit(); // Interrompe imediatamente a execução do script
}

//  Inclui o arquivo que abre a conexão com o banco de dados ($conn)
include("../infra/db/connect.php");

// Captura o ID do usuário enviado pela URL (via método GET) quando o botão "Excluir" foi clicado na tabela
$id = $_GET["id"];

// Monta a instrução SQL de exclusão
// Função: Deleta da tabela 'usuarios' o registro onde o ID seja igual ao ID recebido pela URL.
$sql = " DELETE FROM usuarios WHERE id = $id ";

//  Executa a query de exclusão no banco de dados e verifica se a operação retornou VERDADEIRO (sucesso)
if($conn->query($sql) === TRUE){
    // Se o usuário foi deletado com sucesso, redireciona o administrador de volta para a 'home.php'
    header("Location: home.php");
    exit(); // Garante o encerramento do script após o redirecionamento
}

?>