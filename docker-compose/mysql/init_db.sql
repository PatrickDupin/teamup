DROP TABLE IF EXISTS `tblJogadores`;

CREATE TABLE `tblJogadores` (
    `id` int(8) NOT NULL AUTO_INCREMENT,
    `nome` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
    `nivel` int(1) NOT NULL DEFAULT 1,
    `goleiro` int(1) NOT NULL DEFAULT 0,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `tblJogadores` (nome,nivel,goleiro) 
    VALUES 
    ('Agnelo', 5, 0),
    ('André', 4, 0),
    ('Araújo', 3, 0),
    ('Bruno', 2, 0),
    ('Carlos', 3, 0),
    ('Danilo', 5, 0),
    ('Didu', 4, 0),
    ('Diego', 5, 1),
    ('Everton', 2, 0),
    ('Fabrício', 3, 0),
    ('Gugu', 5, 0),
    ('Heitor', 5, 0),
    ('Igor', 2, 0),
    ('Juliano', 1, 0),
    ('Leonardo', 5, 0),
    ('Luis', 3, 0),
    ('Marquim', 3, 0),
    ('Matheus', 3, 1),
    ('Maurinho', 2, 0),
    ('Osvaldo', 4, 0),
    ('Paulo', 5, 1),
    ('Pedro', 4, 0),
    ('Rafão', 2, 1),
    ('Rogério', 2, 0),
    ('William', 3, 0);