DROP TABLE IF EXISTS imagem CASCADE;
DROP TABLE IF EXISTS utilizador CASCADE;
DROP TABLE IF EXISTS admin CASCADE;
DROP TABLE IF EXISTS utilizadoresbans CASCADE;
DROP TABLE IF EXISTS categoria CASCADE;
DROP TABLE IF EXISTS promocao CASCADE;
DROP TABLE IF EXISTS imagemProduto CASCADE;
DROP TABLE IF EXISTS produto CASCADE;
DROP TABLE IF EXISTS compra CASCADE;
DROP TABLE IF EXISTS comentarioRegistado CASCADE;
DROP TABLE IF EXISTS comentarioAnonimo CASCADE;
DROP TABLE IF EXISTS pontuacao CASCADE;
DROP TABLE IF EXISTS reclamacao CASCADE;
DROP TABLE IF EXISTS wishlist CASCADE;
DROP TABLE IF EXISTS carrinhoCompras CASCADE;
DROP TABLE IF EXISTS produtoCarrinho CASCADE;
DROP TABLE IF EXISTS whishlistProduto CASCADE;

CREATE SCHEMA marknad;
SET SCHEMA 'marknad';


CREATE TABLE imagem (
		idImagem SERIAL PRIMARY KEY,
		caminho TEXT NOT NULL
);

CREATE TABLE utilizador (
        idUtilizador SERIAL PRIMARY KEY,
        nome TEXT NOT NULL,
        morada TEXT NOT NULL,
        email TEXT UNIQUE NOT NULL,
        dataNascimento DATE NOT NULL,
        utilizador TEXT UNIQUE NOT NULL,
        palavrapasse TEXT NOT NULL,
        passSalt TEXT NOT NULL,
        idImagem INTEGER REFERENCES imagem(idImagem)
);

CREATE TABLE admin (
        idAdmin SERIAL PRIMARY KEY,
        nome TEXT NOT NULL,
        administrador TEXT UNIQUE NOT NULL,
        palavrapasse TEXT NOT NULL,
        passSalt TEXT NOT NULL,
        idImagem INTEGER REFERENCES imagem(idImagem)
);

CREATE TABLE utilizadoresbans (
		idUtilizadorbans SERIAL PRIMARY KEY,
		emailbanido TEXT UNIQUE NOT NULL
);

CREATE TABLE categoria (
		idCategoria SERIAL PRIMARY KEY,
		nome TEXT NOT NULL
);

CREATE TABLE promocao (
		idPromocao SERIAL PRIMARY KEY,
		dataInicio TIMESTAMP NOT NULL,
		dataFim TIMESTAMP NOT NULL,
		desconto INTEGER NOT NULL CHECK (desconto > 0 AND desconto <= 100)
);

CREATE TABLE produto (
		idProduto SERIAL PRIMARY KEY,
		nome TEXT NOT NULL,
		preco NUMERIC NOT NULL,
		descricao TEXT NOT NULL,
		pontuacaoMedia NUMERIC CHECK (pontuacaoMedia > 0 AND pontuacaoMedia <= 5),
		idCategoria INTEGER REFERENCES categoria(idCategoria),
		idPromocao INTEGER REFERENCES promocao(idPromocao)			
);

CREATE TABLE imagemProduto(
		idImagem INTEGER REFERENCES imagem(idImagem) ON DELETE CASCADE,
		idProduto INTEGER REFERENCES produto(idProduto) ON DELETE CASCADE
);

CREATE TYPE modo_pgmt AS ENUM ('PayPal', 'Cartão de Crédito', 'Referência Multibanco');
CREATE TABLE compra (
		idCompra SERIAL PRIMARY KEY,
		idUtilizador INTEGER REFERENCES utilizador(idUtilizador),
		valor NUMERIC NOT NULL,
		morada TEXT NOT NULL,
		data_compra DATE NOT NULL DEFAULT CURRENT_DATE,
		modoPagamento modo_pgmt NOT NULL
);

CREATE TABLE comentarioRegistado (
		idComentarioRegistado SERIAL PRIMARY KEY,
		idProduto INTEGER REFERENCES produto(idProduto) ON DELETE CASCADE,
		idUtilizador INTEGER REFERENCES utilizador(idUtilizador),
		comentario TEXT NOT NULL,
		ultima_atualizacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE comentarioAnonimo (
		idComentarioAnonimo SERIAL PRIMARY KEY,
		idProduto INTEGER REFERENCES produto(idProduto) ON DELETE CASCADE,
		nome TEXT NOT NULL,
		comentario TEXT NOT NULL,
		ultima_atualizacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE pontuacao (
		idPontuacao SERIAL PRIMARY KEY,
		idProduto INTEGER REFERENCES produto(idProduto) ON DELETE CASCADE,
		idUtilizador INTEGER REFERENCES utilizador(idUtilizador) ON DELETE CASCADE,		
		valor INTEGER NOT NULL CHECK (valor > 0 AND valor <= 5)
);

CREATE TABLE reclamacao (
		idReclamacao SERIAL PRIMARY KEY,
		username TEXT, 
		texto TEXT NOT NULL,
		email TEXT NOT NULL 
);

CREATE TABLE wishlist (
		idWishlist SERIAL PRIMARY KEY, 
		idUtilizador INTEGER REFERENCES utilizador(idUtilizador) ON DELETE CASCADE
);

CREATE TABLE carrinhoCompras (
		idCarrinhoCompras SERIAL PRIMARY KEY,
		idUtilizador INTEGER REFERENCES utilizador(idUtilizador) ON DELETE CASCADE
);

CREATE TABLE produtoCarrinho (
		idCarrinhoCompras INTEGER REFERENCES carrinhoCompras(idCarrinhoCompras) ON DELETE CASCADE,
		idProduto INTEGER REFERENCES produto(idProduto) ON DELETE CASCADE,
		quantidade INTEGER NOT NULL DEFAULT 0,
		PRIMARY KEY (idCarrinhoCompras, idProduto)
);

CREATE TABLE wishlistProduto (
		idWishlist INTEGER REFERENCES wishlist(idWishlist) ON DELETE CASCADE,
		idProduto INTEGER REFERENCES produto(idProduto) ON DELETE CASCADE,
		PRIMARY KEY (idWishlist, idProduto)
);



/* Index sem cluster na tabela das compras */
CREATE INDEX image_index ON marknad.Imagem USING btree(idImagem ASC NULLS LAST);
/* Index com cluster na tabela dos utilizadores */
CREATE INDEX utilizador_index ON marknad.utilizador USING btree(idUtilizador ASC NULLS LAST, idImagem ASC NULLS LAST);
ALTER TABLE marknad.utilizador CLUSTER ON utilizador_index;
/* Index com cluster na tabela dos admins */
CREATE INDEX admin_index ON marknad.admin USING btree(idAdmin ASC NULLS LAST, idImagem ASC NULLS LAST);
ALTER TABLE marknad.admin CLUSTER ON admin_index;
/* Index sem cluster na tabela dos utilizadores banidos*/
CREATE INDEX utilizadoresbans_index ON marknad.utilizadoresbans USING btree(idUtilizadorbans ASC NULLS LAST);
/* Index sem cluster na tabela das compras */
CREATE INDEX promocao_index ON marknad.promocao USING btree(idPromocao ASC NULLS LAST);
/* Index sem cluster na tabela das categorias */
CREATE INDEX categoria_index ON marknad.categoria USING btree(idCategoria ASC NULLS LAST);
/* Index com cluster na tablea dos produtos */
CREATE INDEX produto_index ON marknad.produto USING btree(idProduto ASC NULLS LAST, idPromocao ASC NULLS LAST);
ALTER TABLE marknad.produto CLUSTER ON produto_index;
/* Index sem cluster na tabela das compras */
CREATE INDEX compra_index ON marknad.compra USING btree(idCompra ASC NULLS LAST);
/* Index com cluster na tabela das compras */
CREATE INDEX comentarioRegistado_index ON marknad.comentarioRegistado USING btree(idComentarioRegistado ASC NULLS LAST);
ALTER TABLE marknad.comentarioRegistado CLUSTER ON comentarioRegistado_index;
/* Index com cluster na tabela das compras */
CREATE INDEX comentarioAnonimo_index ON marknad.comentarioAnonimo USING btree(idComentarioAnonimo ASC NULLS LAST, idProduto ASC NULLS LAST);
ALTER TABLE marknad.comentarioAnonimo CLUSTER ON comentarioAnonimo_index;
/* Index com cluster na tabela das compras */
CREATE INDEX pontuacao_index ON marknad.pontuacao USING btree(idPontuacao ASC NULLS LAST, idUtilizador ASC NULLS LAST, idProduto ASC NULLS LAST);
ALTER TABLE marknad.pontuacao CLUSTER ON pontuacao_index;
/* Index com cluster na tabela das compras */
CREATE INDEX reclamacao_index ON marknad.reclamacao USING btree(idReclamacao ASC NULLS LAST, idUtilizador ASC NULLS LAST);
ALTER TABLE marknad.reclamacao CLUSTER ON reclamacao_index;
/* Index com cluster na tabela das compras */
CREATE INDEX wishlist_index ON marknad.wishlist USING btree(idwishlist ASC NULLS LAST, idUtilizador ASC NULLS LAST);
ALTER TABLE marknad.wishlist CLUSTER ON wishlist_index;
/* Index com cluster na tabela das compras */
CREATE INDEX carrinhoCompras_index ON marknad.carrinhoCompras USING btree(idCarrinhoCompras ASC NULLS LAST, idUtilizador ASC NULLS LAST);
ALTER TABLE marknad.carrinhoCompras CLUSTER ON carrinhoCompras_index;
/* Index com cluster na tabela das compras */
CREATE INDEX produtoCarrinho_index ON marknad.produtoCarrinho USING btree(idCarrinhoCompras ASC NULLS LAST, idProduto ASC NULLS LAST);
ALTER TABLE marknad.produtoCarrinho CLUSTER ON produtoCarrinho_index;
/* Index com cluster na tabela das compras */
CREATE INDEX wishlistProduto_index ON marknad.wishlistProduto USING btree(idWishlist ASC NULLS LAST, idProduto ASC NULLS LAST);
ALTER TABLE marknad.wishlistProduto CLUSTER ON wishlistProduto_index;


-----------------------------
---------- INDEXES ----------
-----------------------------

-- Text Search Indexes --
CREATE INDEX produto_descricao_idx ON "produto" USING gin(to_tsvector(descricao));

CREATE INDEX comentario_registado_idx ON "comentarioRegistado" USING gin(to_tsvector(comentario));

CREATE INDEX comentario_anonimo_idx ON "comentarioAnonimo" USING gin(to_tsvector(comentario));

CREATE INDEX reclamacao_idx ON "reclamacao" USING gin(to_tsvector(texto));
-------------------------

CREATE INDEX utilizador_nome_idx ON "utilizador" (nome);

CREATE UNIQUE INDEX utilizador_idx ON "utilizador" (lower(utilizador));

CREATE INDEX produto_preco_idx ON "produto" (preco);


-- TRIGGER faz update da data dos comentarios aquando de uma edição feita pelo utilizador
CREATE FUNCTION update_data_regCom() RETURNS TRIGGER AS $$
BEGIN
    UPDATE comentarioRegistado SET ultima_atualizacao=current_date WHERE idComentarioRegistado=NEW.idComentarioRegistado;
	RETURN NEW;
END; $$
LANGUAGE plpgsql;

CREATE TRIGGER DATE_COMMENTREGISTADO 
AFTER UPDATE
ON comentarioRegistado
FOR EACH ROW EXECUTE update_data_regCom();

CREATE FUNCTION update_data_anonCom() RETURNS TRIGGER AS $$
BEGIN
    UPDATE comentarioAnonimo SET ultima_atualizacao=current_date WHERE idComentarioAnonimo=NEW.idComentarioAnonimo;
	RETURN NEW;
END; $$
LANGUAGE plpgsql;

CREATE TRIGGER DATE_COMMENTANONIMO 
AFTER UPDATE
ON comentarioAnonimo
FOR EACH ROW EXECUTE update_data_anonCom();

-- TRIGGER atribuição de imagem default a utilizador que nao forneça uma imagem personalizada
/*
CREATE FUNCTION default_img() RETURNS TRIGGER AS $$
BEGIN
    UPDATE imagem SET NEW.caminho='images\avatar.png' WHERE idImagem=NEW.idImagem AND NEW.caminho = 'default';
	RETURN NEW;
END; $$
LANGUAGE plpgsql;

CREATE TRIGGER FIX_USER_IMG
BEFORE INSERT
ON imagem
FOR EACH ROW EXECUTE default_img();
*/

-- TRIGGER quando um utilizador dá rating ao produto, a média do rating é actualizado

CREATE FUNCTION update_rating() RETURNS TRIGGER AS $$
BEGIN
	SELECT AVG(valor) AS ratingAtual FROM pontuacao
		WHERE pontuacao.idProduto = NEW.idProduto;
    UPDATE produto SET produto.pontuacaoMedia = ratingAtual 
	WHERE produto.idProduto = NEW.idProduto;
	RETURN NEW;
END; $$
LANGUAGE plpgsql;

CREATE TRIGGER UPDATE_RATING
AFTER INSERT
ON rating
FOR EACH ROW EXECUTE update_rating();



/* Fazer login */
SELECT idUtilizador, utilizador, palavrapasse FROM utilizador
WHERE utilizador = $username AND palavrapasse = $password;

/* selecionar o email banido */
SELECT bannedemail FROM userbans WHERE userbans.idUsesbans == users.idUser;

/* Contar todos os utilizadores */
SELECT COUNT(*) FROM utilizador;

/*Contar o número de vendas */
SELECT COUNT(*) FROM produtoCarrinho;

/* Número de pontuações a um produto */
SELECT COUNT(*) FROM pontuacao
WHERE idProduto = $idProduto;

/* compras de um utilizador */
SELECT (*) FROM compra
WHERE idUtilizador = $idUtilizador;

/* promoçoes activas */
SELECT * FROM promocao 
WHERE dataInicio > DataActual AND dataFim < DataActual;

/* whishlist de um user */
SELECT produto.nome FROM whishlist, produto, utilizador
WHERE whishlist.idUtilizador = $idUtilizador AND whishlist.idProduto = produto.idProduto;

/* preço de carrinho de compras de um user */
SELECT SUM(preco) FROM carrinhoCompras, produto, utilizador
WHERE carrinhoCompras.idUtilizador = $idUtilizador AND carrinhoCompras.idProduto = produto.idProduto;



