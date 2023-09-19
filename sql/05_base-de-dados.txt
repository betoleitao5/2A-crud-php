/* CARGOS */
CREATE TABLE `cargos` (
  `CargoID` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(45) DEFAULT NULL,
  `TetoSalarial` float NOT NULL DEFAULT 0,
  PRIMARY KEY (`CargoID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

INSERT INTO `cargos` (`CargoID`,`Nome`,`TetoSalarial`) VALUES 
 (1,'Administrador',9000),
 (2,'Agente administrativo',6530),
 (3,'Operador de Máquina',2560.75),
 (4,'Agente de carga',1985.65),
 (5,'Motorista',2000),
 (6,'Programador',4500),
 (7,'Ajudante de produção',2650),
 (8,'Analista de contabilidade',3750.9),
 (9,'Analista de contas',3000),
 (10,'Auxiliar de operação',1785.75);


/* SETOR */
CREATE TABLE `setor` (
  `SetorID` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(45) DEFAULT NULL,
  `Andar` int(11) DEFAULT NULL,
  `Cor` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`SetorID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

INSERT INTO `setor` (`SetorID`,`Nome`,`Andar`,`Cor`) VALUES 
 (1,'Adminitrativo',1,'Roxo'),
 (2,'Refeitorio',2,'Amarelo'),
 (3,'TI',3,'Azul'),
 (4,'Produção 1',4,'Verde'),
 (5,'Produção 4',6,'Vermelho'),
 (6,'Produção 2',5,'Laranja'),
 (7,'Produção 3',6,'Cinza');

/* FUNCIONARIO */
CREATE TABLE `funcionarios` (
  `FuncionarioID` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(100) DEFAULT NULL,
  `DataNascimento` date DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Ramal` varchar(4) DEFAULT NULL,
  `CargoID` int(11) DEFAULT NULL,
  `SetorID` int(11) DEFAULT NULL,
  `Salario` float DEFAULT NULL,
  `Sexo` varchar(1) DEFAULT NULL,
  `Altura` float NOT NULL DEFAULT 0,
  `CPF` varchar(15) NOT NULL DEFAULT '',
  `RG` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`FuncionarioID`),
  KEY `FK_funcionarios_cargo` (`CargoID`),
  KEY `FK_funcionarios_setor` (`SetorID`),
  CONSTRAINT `FK_funcionarios_cargo` FOREIGN KEY (`CargoID`) REFERENCES `cargos` (`CargoID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_funcionarios_setor` FOREIGN KEY (`SetorID`) REFERENCES `setor` (`SetorID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;


INSERT INTO `funcionarios` (`FuncionarioID`,`Nome`,`DataNascimento`,`Email`,`Ramal`,`CargoID`,`SetorID`,`Salario`,`Sexo`,`Altura`,`CPF`,`RG`) VALUES 
 (1,'Antônio Azevedo Gomes','1939-07-14','AntonioAzevedoGomes@teleworm.us','1475',1,1,7500,'M',1.79,'1661898140','97343541'),
 (2,'Kauan Oliveira Lima','1967-04-19','KauanOliveiraLima@dayrep.com','1469',10,1,5000,'M',1.85,'1795178889','47501276'),
 (3,'Larissa Melo Correia','1985-05-12','LarissaMeloCorreia@armyspy.com','1469',2,1,6500,'F',1.65,'0403173419','85027309'),
 (4,'Leonor Oliveira Martins','1996-08-30','LeonorOliveiraMartins@dayrep.com','1500',3,4,2000,'M',1.7,'5645173414','45455416'),
 (5,'João Correia Rodrigues','2000-10-25','JoaoCorreiaRodrigues@dayrep.com','1500',3,4,2100,'M',1.71,'1736530403','65448486'),
 (6,'Joelma Pereira','1982-01-08','JoelmaPereira@dayrep.com','1500',3,5,2200,'F',1.69,'5456515416','15615155'),
 (7,'Bruna Santos Martins','1972-05-01','BrunaSantosMartins@jourrapide.com','1500',3,4,2000,'F',1.52,'5454154151','48541841'),
 (8,'Marcos Ribeiro Oliveira','1952-11-11','MarcosRibeiroOliveira@teleworm.us','1500',3,5,2000,'M',1.93,'3265944515','21541584');
INSERT INTO `funcionarios` (`FuncionarioID`,`Nome`,`DataNascimento`,`Email`,`Ramal`,`CargoID`,`SetorID`,`Salario`,`Sexo`,`Altura`,`CPF`,`RG`) VALUES 
 (9,'Marilha Rodrigues Fernandes','2000-04-30','MarilhaRodriguesFernandes@rhyta.com','1500',3,6,2000,'F',1.85,'6524565426','66646451'),
 (10,'Vitória Pereira Correia','1985-08-25','VitoriaPereiraCorreia@armyspy.com','1468',8,1,3500,'F',1.71,'6526265293','65216512'),
 (11,'Miguel Pinto Pereira','2001-12-28','MiguelPintoPereira@jourrapide.com','1600',6,3,3900,'M',1.75,'2849652652','51515153'),
 (12,'Lara Goncalves Barros','2002-03-10','LaraGoncalvesBarros@armyspy.com','1600',6,3,4100,'F',1.78,'6526541685','62651265'),
 (13,'Giovanna Rodrigues Melo','1987-10-02','GiovannaRodriguesMelo@dayrep.com','1400',5,1,2500,'F',1.81,'2352959599','59988881'),
 (14,'Guilherme Correia Azevedo','1965-02-14','GuilhermeCorreiaAzevedo@dayrep.com','1400',5,1,2000,'M',1.68,'9259595295','26526521'),
 (15,'Vinicius Dias Ribeiro','1972-01-20','ViniciusDiasRibeiro@rhyta.com','1500',3,5,2000,'M',1.5,'5659259595','26526512'),
 (16,'Gabriela Santos Azevedo','1984-10-24','GabrielaSantosAzevedo@dayrep.com','1500',10,5,1700,'F',1.78,'2342134524','525341df5');
INSERT INTO `funcionarios` (`FuncionarioID`,`Nome`,`DataNascimento`,`Email`,`Ramal`,`CargoID`,`SetorID`,`Salario`,`Sexo`,`Altura`,`CPF`,`RG`) VALUES 
 (17,'Vitór Gomes Pereira','1996-08-20','VitorGomesPereira@teleworm.us','1500',10,5,1700,'M',1.8,'2342341565','234253445'),
 (18,'Luiz Rocha Costa','2001-06-17','LuizRochaCosta@dayrep.com','1500',10,5,1700,'M',1.78,'5243542344','542354425'),
 (19,'Nilmar Ribeiro Pereira','1988-02-04','NilmarRibeiroPereira@teleworm.us','1500',10,5,1700,'M',1.79,'2345482388','123545125'),
 (20,'Geanny Oliveira Dias','1995-07-14','GeannyOliveiraDias@tele.us','1500',10,5,1700,'F',1.68,'8234482323','6545d4sdf');

/* CATEGORIA PRODUTO */
CREATE TABLE `categorias` (
  `CategoriaID` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(45) DEFAULT NULL,
  `Descricao` tinytext DEFAULT NULL,
  PRIMARY KEY (`CategoriaID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

INSERT INTO `categorias` (`CategoriaID`,`Nome`,`Descricao`) VALUES 
 (1,'Organizador','Gaveteiros e organizadores de ferramentas'),
 (2,'Chaves Radiais','Chaves arredondada com diversos tamanhos'),
 (3,'Acessórios','Multiplos acessórios, sintos e segurança'),
 (4,'Alicates','Alicates de várias formas e formatos, tamanhos diferentes'),
 (5,'Chaves','Chaves com diversos formatos de ponta'),
 (6,'Ferramentas Pesadas','Martelos, Marretas, Talhadeiras'),
 (7,'Ferramentas Automotivas','Chave estrelas, bocais');

/* PRODUTO */
CREATE TABLE `produtos` (
  `ProdutoID` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(45) DEFAULT NULL,
  `Preco` float DEFAULT NULL,
  `CategoriaID` int(11) DEFAULT NULL,
  `Referencia` varchar(45) DEFAULT NULL,
  `Descricao` longtext DEFAULT NULL,
  `Peso` float DEFAULT NULL,
  PRIMARY KEY (`ProdutoID`),
  KEY `FK_produtos_categoria` (`CategoriaID`),
  CONSTRAINT `FK_produtos_categoria` FOREIGN KEY (`CategoriaID`) REFERENCES `categorias` (`CategoriaID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

INSERT INTO `produtos` (`ProdutoID`,`Nome`,`Preco`,`CategoriaID`,`Referencia`,`Descricao`,`Peso`) VALUES 
 (1,'Bancada com 1 módulo',700,1,'3652','Quisque fermentum risus eu lectus congue, nec pulvinar lorem placerat. Praesent nunc mi, finibus et vulputate vitae, lacinia sit amet justo. Nunc in risus a velit elementum pharetra. Curabitur mattis, libero id imperdiet vestibulum, urna orci ullamcorper metus, vel imperdiet libero turpis at ligula. Vivamus malesuada sit amet sem eu eleifend. Vestibulum feugiat placerat rutrum. Nunc sem mauris, iaculis at congue eget, mattis in leo.',50),
 (2,'Bancada com suporte',500,1,'3688','Vestibulum vel massa consectetur, posuere sapien et, pharetra est. Aenean vulputate gravida neque vitae auctor. Etiam faucibus, nulla id sagittis pretium, purus lorem cursus purus, non varius urna tortor vitae est. Sed interdum sagittis nibh ut finibus. In dignissim ante sit amet mi egestas, non elementum dui eleifend. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras vitae lorem non dolor accumsan elementum. Donec in nisl felis. Mauris volutpat blandit dolor sit amet tincidunt.',20),
 (3,'Chave de compasso',10,2,'55444','Quisque luctus justo vitae urna mollis, malesuada sollicitudin risus iaculis. Cras vehicula elit nec est convallis congue consequat nec lectus. Praesent ut nisl lacinia, scelerisque est vitae, ultrices sapien. Etiam at suscipit dui, in luctus massa. Mauris quis condimentum velit. Sed at posuere ligula. In rhoncus arcu vitae varius aliquet',0.2);
INSERT INTO `produtos` (`ProdutoID`,`Nome`,`Preco`,`CategoriaID`,`Referencia`,`Descricao`,`Peso`) VALUES 
 (4,'Chave estrelar de bater',11,2,'4151','Nam et molestie mi. Aenean lacinia varius neque eget interdum. Cras non sollicitudin nisl, sit amet malesuada nisl. Duis pharetra nulla non commodo pharetra. Quisque convallis egestas mi ut luctus. Pellentesque a libero nec nisl malesuada aliquam eget vitae erat. Sed euismod quam a dapibus lacinia. Phasellus eget magna vel nunc condimentum consequat sed sit amet eros. Curabitur dui odio, tincidunt a ornare ac, mollis quis nunc.',0.2),
 (5,'Chave Fixa',2,2,'13242','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ultrices commodo dictum. Aliquam malesuada diam eget diam interdum, non lobortis nulla ornare. Sed vel est mollis, ultricies erat vel, facilisis nisi. Nullam malesuada nisl at velit tempus, sed mattis neque condimentum. Integer vel augue at ante porttitor eleifend a sit amet mauris. Proin vel urna metus. In congue sapien et massa pharetra lacinia. Proin lobortis, justo pulvinar feugiat rutrum, risus augue porttitor erat, rhoncus varius nunc ex at massa. Nullam in lectus nec justo hendrerit euismod ac ac ex. Pellentesque quis hendrerit ipsum. Pellentesque mi arcu, vestibulum id neque sit amet, euismod ultricies enim.',0.2),
 (6,'Chave Gancho',3,2,'23455','Quisque luctus justo vitae urna mollis, malesuada sollicitudin risus iaculis. Cras vehicula elit nec est convallis congue consequat nec lectus. Praesent ut nisl lacinia, scelerisque est vitae, ultrices sapien. Etiam at suscipit dui, in luctus massa. Mauris quis condimentum velit. Sed at posuere ligula. In rhoncus arcu vitae varius aliquet',0.2);
INSERT INTO `produtos` (`ProdutoID`,`Nome`,`Preco`,`CategoriaID`,`Referencia`,`Descricao`,`Peso`) VALUES 
 (7,'Adaptador de chave',1.5,2,'23423','Fusce ligula tellus, consectetur euismod massa ut, lobortis mollis mauris. Integer nec cursus odio. Pellentesque tempus nisi in interdum ultrices. Fusce vitae nisl vitae ipsum auctor pulvinar. Morbi id blandit nibh. Cras congue tortor ac ornare porta. Maecenas dolor orci, lacinia et mauris vel, dapibus vestibulum ligula. Vivamus lobortis nunc vel dolor suscipit, dapibus blandit leo convallis. Donec at est tempus, maximus mi non, consequat dolor.',0.2),
 (8,'Chave Industrial',6,2,'54583','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ultrices commodo dictum. Aliquam malesuada diam eget diam interdum, non lobortis nulla ornare. Sed vel est mollis, ultricies erat vel, facilisis nisi. Nullam malesuada nisl at velit tempus, sed mattis neque condimentum. Integer vel augue at ante porttitor eleifend a sit amet mauris. Proin vel urna metus. In congue sapien et massa pharetra lacinia. Proin lobortis, justo pulvinar feugiat rutrum, risus augue porttitor erat, rhoncus varius nunc ex at massa. Nullam in lectus nec justo hendrerit euismod ac ac ex. Pellentesque quis hendrerit ipsum. Pellentesque mi arcu, vestibulum id neque sit amet, euismod ultricies enim.',0.2),
 (9,'Chave Pesada',10,2,'234dfs','Integer id lorem nec nibh pulvinar cursus et vel tellus. Fusce maximus placerat neque vitae consectetur. Nunc rutrum nibh est, tincidunt imperdiet odio iaculis eget. Ut elementum et justo et porta. Vestibulum iaculis erat et ipsum congue sodales. Fusce finibus hendrerit luctus. Donec fringilla congue faucibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed scelerisque vulputate dui eget ultrices. ',0.2);
INSERT INTO `produtos` (`ProdutoID`,`Nome`,`Preco`,`CategoriaID`,`Referencia`,`Descricao`,`Peso`) VALUES 
 (10,'Chave fenda',2.9,2,'15155','Integer id lorem nec nibh pulvinar cursus et vel tellus. Fusce maximus placerat neque vitae consectetur. Nunc rutrum nibh est, tincidunt imperdiet odio iaculis eget. Ut elementum et justo et porta. Vestibulum iaculis erat et ipsum congue sodales. Fusce finibus hendrerit luctus. Donec fringilla congue faucibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed scelerisque vulputate dui eget ultrices. ',0.2),
 (11,'Chave Canhão',1.6,2,'15515','Vestibulum vel massa consectetur, posuere sapien et, pharetra est. Aenean vulputate gravida neque vitae auctor. Etiam faucibus, nulla id sagittis pretium, purus lorem cursus purus, non varius urna tortor vitae est. Sed interdum sagittis nibh ut finibus. In dignissim ante sit amet mi egestas, non elementum dui eleifend. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras vitae lorem non dolor accumsan elementum. Donec in nisl felis. Mauris volutpat blandit dolor sit amet tincidunt.',0.2),
 (12,'Caixa Sanfona',150,1,'1353','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ultrices commodo dictum. Aliquam malesuada diam eget diam interdum, non lobortis nulla ornare. Sed vel est mollis, ultricies erat vel, facilisis nisi. Nullam malesuada nisl at velit tempus, sed mattis neque condimentum. Integer vel augue at ante porttitor eleifend a sit amet mauris. Proin vel urna metus. In congue sapien et massa pharetra lacinia. Proin lobortis, justo pulvinar feugiat rutrum, risus augue porttitor erat, rhoncus varius nunc ex at massa. Nullam in lectus nec justo hendrerit euismod ac ac ex. Pellentesque quis hendrerit ipsum. Pellentesque mi arcu, vestibulum id neque sit amet, euismod ultricies enim.',100);
INSERT INTO `produtos` (`ProdutoID`,`Nome`,`Preco`,`CategoriaID`,`Referencia`,`Descricao`,`Peso`) VALUES 
 (13,'Armario expositor',1400.4,1,'1541','Fusce ligula tellus, consectetur euismod massa ut, lobortis mollis mauris. Integer nec cursus odio. Pellentesque tempus nisi in interdum ultrices. Fusce vitae nisl vitae ipsum auctor pulvinar. Morbi id blandit nibh. Cras congue tortor ac ornare porta. Maecenas dolor orci, lacinia et mauris vel, dapibus vestibulum ligula. Vivamus lobortis nunc vel dolor suscipit, dapibus blandit leo convallis. Donec at est tempus, maximus mi non, consequat dolor.',100),
 (14,'Armário para ferramentas',1500,1,'1563','Integer id lorem nec nibh pulvinar cursus et vel tellus. Fusce maximus placerat neque vitae consectetur. Nunc rutrum nibh est, tincidunt imperdiet odio iaculis eget. Ut elementum et justo et porta. Vestibulum iaculis erat et ipsum congue sodales. Fusce finibus hendrerit luctus. Donec fringilla congue faucibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed scelerisque vulputate dui eget ultrices. ',100);


/* CLIENTES */
CREATE TABLE `clientes` (
  `ClienteID` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(45) DEFAULT NULL,
  `Telefone` varchar(15) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Endereco` varchar(150) DEFAULT NULL,
  `CNPJ` varchar(45) DEFAULT NULL,
  `Estado` varchar(2) NOT NULL DEFAULT '',
  `Cidade` varchar(45) NOT NULL DEFAULT '',
  `Empresa` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`ClienteID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO `clientes` (`ClienteID`,`Nome`,`Telefone`,`Email`,`Endereco`,`CNPJ`,`Estado`,`Cidade`,`Empresa`) VALUES 
 (1,'Nicole Sousa Santos','(47) 2412-7626','NicoleSousaSantos@ferragemalberto.com.br','Rua Francisco Pedro Teodoro, 1652','1421492100','SC','Joinville','Ferragem Alberto'),
 (2,'Leonora Silva Correia','(47) 2463-6838','LeonoraSilvaCorreia@mercadodasferramentas.com.br','Praça Suez, 776','3464970443','SC','Joinville','Mercado das Ferramentas'),
 (3,'Bruno Melo Lima','(47) 2641-1438','BrunoMeloLima@toolsmax.com.br','Rua Francisco Sanguedo, 1466','1461152599','SC','Florianópolis','ToolsMax'),
 (4,'Lucas Alves Cardoso','(34) 2416-9794','LucasAlvesCardoso@rhyta.com','Rua Francisco Paulo Mamede, 1847','6423885674','MG','','Loja Rhyta.com');

/* PRODUCAO DE PRODUTOS */
CREATE TABLE `producao` (
  `ProducaoID` int(11) NOT NULL AUTO_INCREMENT,
  `ProdutoID` int(11) DEFAULT NULL,
  `FuncionarioID` int(11) DEFAULT NULL,
  `ClienteID` int(11) DEFAULT NULL,
  `DataProducao` date DEFAULT NULL,
  `DataEntrega` date DEFAULT NULL,
  PRIMARY KEY (`ProducaoID`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

INSERT INTO `producao` (`ProducaoID`,`ProdutoID`,`FuncionarioID`,`ClienteID`,`DataProducao`,`DataEntrega`) VALUES 
 (1,1,5,1,'2020-11-10',NULL),
 (2,1,5,1,'2020-11-10',NULL),
 (3,1,5,1,'2020-11-10',NULL),
 (4,2,5,1,'2020-11-10',NULL),
 (5,2,5,1,'2020-10-20','2020-11-20'),
 (6,3,5,1,'2020-10-20','2020-11-20'),
 (7,3,9,2,'2020-09-17',NULL),
 (8,4,9,2,'2020-11-10','2020-11-20'),
 (9,5,9,2,'2020-09-17',NULL),
 (10,6,5,2,'2020-11-10','2020-11-20'),
 (11,7,9,2,'2020-09-17',NULL),
 (12,8,8,3,'2020-11-10','2020-11-20'),
 (13,5,7,3,'2020-09-17',NULL),
 (14,9,4,4,'2020-06-15','2020-09-17'),
 (15,9,4,4,'2020-11-10',NULL),
 (16,9,5,4,'2020-06-15',NULL),
 (17,10,9,4,'2020-06-15','2020-09-17'),
 (18,10,9,4,'2020-11-10',NULL),
 (19,11,8,4,'2020-11-10',NULL),
 (20,13,9,4,'2020-11-10',NULL),
 (21,12,5,4,'2020-06-15','2020-09-17');