<?php
// Proteção de segurança (parecida com a home)
session_start();
if(!isset($_SESSION["usuario"])){
    header("Location: ../index.php");
    exit();
}