-- Cria um novo banco de dados (ou esquema) chamado 'sistema_simples_m1'
CREATE DATABASE sistema_simples_m1;

-- Diz ao sistema gerenciador de banco de dados (SGBD) para usar este banco de dados recém-criado para os próximos comandos
USE sistema_simples_m1;

-- Cria a tabela 'usuarios' dentro do banco de dados selecionado
CREATE TABLE usuarios (
    -- Cria a coluna 'id' como um número inteiro (INT), que se incrementa sozinho a cada novo registro (AUTO_INCREMENT) 
    -- e a define como a Chave Primária (PRIMARY KEY), garantindo que cada usuário tenha um identificador único
    id INT AUTO_INCREMENT PRIMARY KEY,
    
    -- Cria a coluna 'usuario' para armazenar texto de até 87 caracteres. O 'NOT NULL' impede que o campo fique vazio
    usuario VARCHAR(87) NOT NULL,
    
    -- Cria a coluna 'senha' para armazenar texto de até 255 caracteres. Também é obrigatória (NOT NULL)
    senha VARCHAR(255) NOT NULL
);

-- Insere o primeiro registro de teste na tabela 'usuarios', definindo o nome como 'admin' e a senha como '123'
-- Note que não precisamos passar o 'id', pois o banco de dados gera o número 1 automaticamente por conta do AUTO_INCREMENT
INSERT INTO usuarios (usuario, senha) VALUES ('admin','123');