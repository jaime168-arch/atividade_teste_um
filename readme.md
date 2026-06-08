## Funcionalidade de Exclusão de Usuários (CRUD - Delete)

Como parte da evolução do projeto, foi implementada a funcionalidade que permite remover usuários cadastrados diretamente através da interface do sistema.

### Arquivos Alterados / Criados
* `components/table.php` (Alterado): Adicionada a coluna **Ações** e o link dinâmico para a exclusão, passando o ID do usuário via parâmetro `GET`.
* `excluir.php` (Criado): Arquivo backend responsável por validar a sessão do administrador, receber o ID pela URL, executar a query SQL correspondente de remoção e redirecionar o usuário com segurança.

---

### Trechos Importantes do Código

#### 1. Link de Exclusão com Confirmação (`components/table.php`)
Foi adicionada uma trava de segurança em JavaScript (`onclick`) para evitar que um usuário seja deletado por um clique acidental.
```php
<td> 
    <a href='excluir.php?id=". $linha['id'] ."' onclick=\"return confirm('Tem certeza que deseja excluir este usuário?');\">Excluir</a>
</td>