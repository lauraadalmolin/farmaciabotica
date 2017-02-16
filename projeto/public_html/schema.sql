CREATE TABLE produtos (
id_produto SERIAL PRIMARY KEY,
nome_produto VARCHAR(80), 
id_imagem INTEGER NOT NULL, 
descricao VARCHAR(1000)
); 

CREATE TABLE doencas (
id_doenca SERIAL PRIMARY KEY,
nome_doenca VARCHAR(80),
descricao VARCHAR(1000)
);

CREATE TABLE imagens (
id_imagem SERIAL PRIMARY KEY,
src VARCHAR(1000)
);

CREATE TABLE produto_doenca (
id_produto INTEGER,
id_doenca INTEGER
);

-- inserts

INSERT INTO `produtos`( `nome_produto`, `id_imagem`, `descricao`, `tipo`) VALUES ('Acerola', 1,
	'Possui alto teor de vitamina C, por isso aumenta a imunidade do organismo contra gripes e resfriados, previne o envelhecimento precoce e doenças recorrente da ação dos radicais livres.', 0);