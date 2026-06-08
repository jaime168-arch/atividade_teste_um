<?php
// 1. Puxa a trava de segurança que você acabou de criar e comitar
include("includes/trava_sessao.php");

// 2. Conecta ao banco de dados (o caminho mudou porque a home agora está na pasta public)
include("../infra/db/connect.php");

// Lógica de Cadastro (Exatamente igual ao seu código original)
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $novoUsuario = $_POST['usuario'];
    $novaSenha = $_POST['senha'];

    $sql = "INSERT INTO usuarios (usuario,senha) 
    VALUES ('$novoUsuario','$novaSenha')";  

    if($conn->query($sql) === TRUE){
        echo "<script> alert('Usuário cadastrado com sucesso!')</script>";
    }else{
        echo "<script> alert('Erro ao cadastrar')</script>";
    }
};

// 3. Puxa o topo do HTML (tags <head>, <body>, etc.)
include("includes/header.php");
?>

    <h3>Bem-Vindo! <?php echo $_SESSION["usuario"]; ?></h3>
    <a href="logout.php"> Sair</a>

    <hr>
    <h4>Cadastro de Novo Usuário.</h4>
    <form method="POST">
        <label>Usuário:</label>
        <input type="text" name="usuario" required>
        <br>
        <label>Senha:</label>
        <input type="password" name="senha" required>
        <br>
        <br>
        <button type="submit">Cadastrar</button>
    </form>
    <hr>

    <?php
    // Inclui a sua tabela de listagem que já estava na pasta components
    include("components/table.php");

    // 4. Puxa o fechamento das tags HTML e o rodapé da página
    include("includes/footer.php");
    ?>