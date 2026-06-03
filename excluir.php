<?php
// Proteção de segurança (parecida com a home)
session_start();
if(!isset($_SESSION["usuario"])){
    header("Location: ../index.php");
    exit();
}

// Conexão com o Banco
include("../infra/db/connect.php");

// Verificação de ID passado na URL
if(isset($_GET['id'])) {
    // captura do ID que garante ser um número inteiro por segurança~
    $id_excluir = (int)$_GET['id'];

    // Cria o query SQL para deletar um usuário específico
    $sqlDelete = "DELETE FROM usuarios WHERE id = $id_excluir";

    //Execução do query
}