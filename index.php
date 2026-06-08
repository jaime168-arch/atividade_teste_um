<?php
    // Inicia o sistema de sessões do PHP para este usuário
    // Função: Permite que o servidor guarde dados dele (como o nome) e lembre quem ele é nas outras páginas.
    session_start();

    // Inclui o arquivo de conexão com o banco de dados ($conn)
    include("infra/db/connect.php");

    // Condicional de envio do formulário
    // Função: Garante que este bloco de código só rode quando o usuário clicar no botão "Entrar" (enviando via POST).
    if($_SERVER['REQUEST_METHOD'] == "POST"){

        // Captura os dados digitados nos campos do formulário HTML
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        
        // Monta a query SQL de verificação
        // Função: Busca na tabela 'usuarios' uma linha onde a coluna 'usuario' seja igual ao digitado E a 'senha' bata com a digitada.
        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";

        // Executa a busca no banco de dados através da conexão $conn
        $resultado = $conn->query($sql);

        // Propriedade 'num_rows'
        // Função: Conta quantas linhas foram encontradas com aquela combinação. 
        // Se for maior que 0, significa que o usuário digitou os dados corretos que estavam salvos no banco.
        if ($resultado->num_rows > 0){
            
            //  Criação da Variável de Sessão
            // Função: Guarda o nome do usuário dentro da "sacola" da sessão. 
            // É essa variável que as páginas 'home.php', 'editar.php' e 'excluir.php' usam para verificar se o usuário está logado!
            $_SESSION["usuario"] = $usuario;
            
            // Redirecionamento de Sucesso
            // Função: Manda o usuário autenticado diretamente para dentro do painel do sistema ('public/home.php').
            header("Location: public/home.php");
            exit(); // Interrompe o script de login após redirecionar
            
        }else{
            //  Alimentação da Variável de Erro
            // Função: Se o banco não achar nenhuma combinação correspondente, guarda a frase de alerta.
            $erro = "Usuário ou senha inválidos!";
        }
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        
            // Exibição do Erro
            // Função: Se a senha ou o usuário estiverem incorretos, o bloco 'else' lá de cima vai criar a variável $erro.
            // O 'isset($erro)' percebe que ela existe e o 'echo' joga o texto na tela para avisar o usuário do erro.
            if(isset($erro)){
                echo $erro;
            };

            // esse erro serve ara alguma coisa (Sim! Serve exatamente para exibir o aviso visual de login inválido)
        
        ?>
        <br>
        <button type="submit">Entrar</button>
    </form>

</body>
</html>