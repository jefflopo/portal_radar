CREATE DATABASE IF NOT EXISTS `db_ipea` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_ipea`;

CREATE TABLE `tb_publicacoes` (
	`id_publ` int(8) NOT NULL Auto_Increment,
    `num_edicao` int NOT NULL,
    `ano_publ` int NOT NULL,
    `mes_publ` int NOT NULL,
    `qtde_artigos` int NOT NULL,
    `qtde_autores` int NOT NULL,
    `thumbnail_publ` tinyblob NOT NULL,
    `titulo_publ` varchar(255) NOT NULL,
    `publicacao_pdf` longblob NOT NULL,
    CONSTRAINT PK_publicacoes PRIMARY KEY(id_publ)
)ENGINE=InnoDB;

CREATE TABLE `tb_artigos`(
	`id_artigo` int NOT NULL Auto_Increment,
    `id_publ` int NOT NULL,
    `titulo_artigo` varchar(255) NOT NULL,
    `tema_artigo` varchar(25) NOT NULL,
    `autores_artigo` varchar(255) NOT NULL,
    `artigo_pdf` longblob NOT NULL,
    CONSTRAINT `PK_artigos` Primary Key(`id_artigo`),
    CONSTRAINT `FK_artigos_publicacoes` FOREIGN KEY(`id_publ`)
		REFERENCES `tb_publicacoes`(`id_publ`)
);

SELECT * FROM tb_publicacoes;
SELECT * FROM tb_artigos;