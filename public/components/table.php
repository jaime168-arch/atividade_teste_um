<h4>Usuários Cadastrados</h4>

<table border="1" cellpadding="3">

    <tr>
        <th>ID</th>
        <th>Usuário</th>
        <th>Senha</th>
    </tr>

    <?php
    // Consulta todos os registros da tabela para exibição na interface.
    $sqlTodosUsuarios = "SELECT * FROM usuarios";

    // Executa a consulta usando a conexão recebida da página principal.
    $resultadoTodosUsuarios = $conn->query($sqlTodosUsuarios);

    // Percorre cada linha retornada e monta uma linha da tabela HTML.
    while($linha = $resultadoTodosUsuarios->fetch_assoc()){

    // O fetch_assoc transforma o resultado em um array associativo.

        echo "  <tr>
                    <td>". $linha['id'] . "</td>
                    <td>". $linha['usuario'] . "</td>
                    <td>". $linha['senha'] . "</td>
                </tr>
        ";

    }
    
    ?>

    


</table>