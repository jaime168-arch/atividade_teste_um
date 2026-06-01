<h4>Usuários Cadastrados</h4>

<table border="1" cellpadding="3">

    <tr>
        <th>ID</th>
        <th>Usuário</th>
        <th>Senha</th>
    </tr>

    <?php
    
    // Cria a query SQL para selecionar TODOS os dados e todas as linhas da tabela 'usuarios'
    $sqlTodosUsuarios = "SELECT * FROM usuarios";

    // Executa a query no banco de dados e armazena o conjunto de dados brutos na variável
    $resultadoTodosUsuarios = $conn->query($sqlTodosUsuarios);

    // O loop 'while' vai continuar rodando enquanto houver linhas para ler do banco de dados.
    // A cada repetição, o 'fetch_assoc()' pega a próxima linha e a transforma em um array chamado $linha
    while($linha = $resultadoTodosUsuarios->fetch_assoc()){

    // o fetch assoc

        // Imprime uma nova linha da tabela HTML (<tr>) preenchida dinamicamente com os dados daquela linha do banco
        echo "  <tr>
                    <td>". $linha['id'] . "</td>
                    <td>". $linha['usuario'] . "</td>
                    <td>". $linha['senha'] . "</td>
                </tr>
        ";

    }
    
    ?>

    


</table>