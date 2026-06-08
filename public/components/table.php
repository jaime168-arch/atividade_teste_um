<h4>Usuários Cadastrados</h4>

<table border="1" cellpadding="3">

    <tr>
        <th>ID</th>
        <th>Usuário</th>
        <th>Senha</th>
        <th>Excluir</th> <th>Editar</th>  </tr>

    <?php
    
    // Variável de instrução SQL
    // Função: Guarda o comando texto que solicita ao banco de dados selecionar (*) todos os registros da tabela 'usuarios'.
    $sqlTodosUsuarios = "SELECT * FROM usuarios";

    // Método '$conn->query()'
    // Função: Executa a query contida na variável acima usando a conexão ativa ($conn) e guarda os dados brutos encontrados em '$resultadoTodosUsuarios'.
    $resultadoTodosUsuarios = $conn->query($sqlTodosUsuarios);

    //  Estrutura de repetição 'while'
    // Função: Cria um laço (loop) que continuará repetindo o bloco de código abaixo enquanto a condição interna for verdadeira (ou seja, enquanto existirem linhas de usuários para ler).
    while($linha = $resultadoTodosUsuarios->fetch_assoc()){

    // Método 'fetch_assoc()'
    // Função: Pega uma linha por vez do resultado do banco de dados e a transforma em um array associativo (onde o nome das chaves são os nomes das colunas: $linha['id'], $linha['usuario'], etc). A cada rodada do loop, ele passa para a próxima linha automaticamente.

        // Comando 'echo'
        // Função: Cospe/imprime o código HTML diretamente na página. Ele usa a concatenação (o ponto '.') para juntar o texto fixo do HTML com os dados dinâmicos trazidos pelo array '$linha'.
        echo "  <tr>
                    <td>". $linha['id'] . "</td>
                    <td>". $linha['usuario'] . "</td>
                    <td>". $linha['senha'] . "</td>
                    
                    <td> <a href='excluir.php?id=". $linha['id'] ."'> Excluir</td>

                    <td> <a href='editar.php?id=". $linha['id'] ."'> Editar</td>
                </tr>
        ";

    }
    
    ?>

    


</table>