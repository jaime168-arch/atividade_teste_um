## Funcionalidade de exclusão do Usuário (CRUD - Delete)

Como parte da evolução, foi implementada a funcionalidade que permite usuários cadastrados diretamente pela interface do sistema

### Arquivos Alterados / Criados
* `components/table.php` (Alterado): Adiciona a caluna "Ações" e o link dinâmico para a exclusão passando o ID via parâmetro GET.
* `excluir.php` (Criado): Arquivo responsável por validar a sessão, receber o ID da URL, executar a query SQL correspondente e redirecionar o usuário.

### Trechos importantes do Código

**Link de Exclusão com confirmção (table.php):**