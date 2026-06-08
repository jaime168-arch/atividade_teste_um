# Nome do Projeto: [Digite o nome aqui, ex: Sistema de Gestão de Usuários M1]

### Objetivo do Sistema
Sistema web desenvolvido para fins acadêmicos com o objetivo de gerenciar o cadastro de credenciais de usuários, aplicando regras completas de um ecossistema CRUD.

### Tecnologias Utilizadas
* PHP 8.x
* MySQL (SGBD)
* Extensão MySQLi para integração Banco-Aplicação
* HTML5 e CSS3

### Estrutura de Pastas
[Cole aqui a árvore de pastas que mostrei ali em cima]

### Explicação das Funcionalidades
* **Autenticação:** Sistema de login que valida credenciais direto no banco de dados e cria sessões seguras.
* **Cadastro (Create):** Inserção de novos usuários com validação.
* **Listagem (Read):** Exibição de dados com máscaras de segurança na senha.
* **Edição (Update):** Recuperação de dados via GET e atualização via POST.
* **Exclusão (Delete):** Remoção física com dupla confirmação.

### Melhorias Implementadas
1. **Modularização de Código:** Isolamento de Header, Footer e Trava de Sessão na pasta `includes/`.
2. **Confirmação de Exclusão:** Implementada trava preventiva contra cliques acidentais.
3. [Insira aqui a Melhoria 1 que você escolheu]
4. [Insira aqui a Melhoria 2 que você escolheu]
5. [Insira aqui a Melhoria 3 que você escolheu]
6. [Insira aqui a Melhoria 4 que você escolheu]

### Instruções para Execução
1. Clone o repositório.
2. Importe o script SQL no seu MySQL (XAMPP, WAMP ou Docker).
3. Ajuste as credenciais no arquivo `infra/db/connect.php` se necessário.
4. Mova o projeto para a pasta `htdocs` ou `www`.
5. Acesse no navegador através de `http://localhost/meu-projeto/public/index.php`.