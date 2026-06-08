# Nome do Projeto: [Sistema de teste do CRUD TTDSM1 Jaime Rodrigues]

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
3. **Ocultação de Senhas na Listagem (Segurança Visual)**
   * **O que foi feito:** Substituição da exibição das senhas em texto limpo na tabela por caracteres ocultos (`******`). 
   * **Motivação:** Protege a privacidade dos usuários cadastrados contra "olhares curiosos" (ataques de engenharia social conhecidos como *shoulder surfing*) caso alguém esteja olhando para a tela do administrador.

4. **Validação de Usuário Duplicado no Cadastro (Regra de Negócio)**
   * **O que foi feito:** Implementação de uma consulta prévia (`SELECT`) no banco de dados antes de executar o `INSERT`. Se o nome de usuário já existir, o sistema barra o cadastro e gera um alerta.
   * **Motivação:** Garante a integridade dos dados, impedindo que duas pessoas possuam o mesmo nome de usuário no sistema, o que quebraria a lógica do login.

5. **Confirmação de Senha no Cadastro (Experiência do Usuário)**
   * **O que foi feito:** Adicionado um novo campo de texto no formulário de cadastro chamado `Confirmar Senha`. O PHP realiza uma validação lógica comparando ambos os campos antes de enviar os dados ao banco.
   * **Motivação:** Evita que o administrador cadastre um usuário com uma senha digitada incorretamente por erro de digitação, o que trancaria o acesso do novo usuário.

6. **Estilização Completa do Sistema via CSS (Interface)**
   * **O que foi feito:** Criação de uma folha de estilos externa (`style.css`) para substituir o layout padrão e cinza do navegador por uma interface moderna, centralizada e responsiva.
   * **Motivação:** Eleva o nível profissional da aplicação, tornando o uso do sistema mais agradável, intuitivo e organizado visualmente através de tabelas bem espaçadas e botões destacados.

### Instruções para Execução
1. Clone o repositório.
2. Importe o script SQL no seu MySQL (XAMPP, WAMP ou Docker).
3. Ajuste as credenciais no arquivo `infra/db/connect.php` se necessário.
4. Mova o projeto para a pasta `htdocs` ou `www`.
5. Acesse no navegador através de `http://localhost/meu-projeto/public/index.php`.