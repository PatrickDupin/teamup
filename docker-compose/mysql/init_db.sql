DROP TABLE IF EXISTS `tblJogadores`;

CREATE TABLE `tblJogadores` (
    `id` int() NOT NULL AUTO_INCREMENT,
    `nome` varchar(40) NOT NULL,
    `nivel` int() NOT NULL,
    `goleiro` int() NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


