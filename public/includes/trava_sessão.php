<?php
// Inicia a sessão se ela já não tiver sido iniciada automaticamente
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Verifica se o usuário está logado. Se não estiver, expulsa para a tela de login
if(!isset($_SESSION["usuario"])){
    // Volta uma pasta para encontrar o index.php que está na raiz
    header("Location: ../index.php");
    exit();
}
?>