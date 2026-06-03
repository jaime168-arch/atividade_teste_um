<?php
// Inicializa a variável de erro vazia para não dar aviso de "variável indefinida"
$erro = "";

// Verifica se o formulário foi enviado via método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados digitados (usando o operador uncoalescing '??' para evitar erros caso estejam vazios)
    $usuario_digitado = $_POST['usuario'] ?? '';
    $senha_digitada = $_POST['senha'] ?? '';

    // Define um usuário e senha fictícios para teste
    $usuario_correto = "admin";
    $senha_correta = "123";

    // Valida se os campos estão vazios ou se os dados estão incorretos
    if (empty($usuario_digitado) || empty($senha_digitada)) {
        $erro = "<span style='color: red;'>Por favor, preencha todos os campos!</span>";
    } elseif ($usuario_digitado === $usuario_correto && $senha_digitada === $senha_correta) {
        // Se acertar, você poderia redirecionar o usuário, mas aqui vamos apenas exibir sucesso
        echo "<script>alert('Login efetuado com sucesso!');</script>";
    } else {
        // Se errar, preenche a variável que você usou no HTML
        $erro = "<span style='color: red;'>Usuário ou senha incorretos!</span>";
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Sitema de Login Simples</h1>

    <form method="POST">
        <label>Usuário:</label>
        <input type="text" name="usuario">
        <br>
        <label>Senha:</label>
        <input type="password" name="senha">
        <br>
        <?php
        
            if(isset($erro)){
                echo $erro;
            };

            // esse erro serve ara alguma coisa
        
        ?>
        <br>
        <button type="submit">Entrar</button>
    </form>

</body>
</html>