-- phpMyAdmin SQL Dump
-- version 3.5.0-alpha1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 14/05/2013 às 12:33:21
-- Versão do Servidor: 5.5.31-0ubuntu0.12.04.1
-- Versão do PHP: 5.3.10-1ubuntu3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `cake_basico`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acos`
--

CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  `path` varchar(200) DEFAULT NULL COMMENT 'Caminha completo: Jorge',
  PRIMARY KEY (`id`),
  KEY `idx_acos_lft_rght` (`lft`,`rght`),
  KEY `idx_acos_alias` (`alias`),
  KEY `idx_acos_model_foreign_key` (`model`,`foreign_key`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Controle de Acesso de Objetos = Controllers e Actions';

--
-- Extraindo dados da tabela `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`, `path`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 102, 'controllers'),
(2, 1, NULL, NULL, 'Pages', 2, 7, 'controllers/Pages'),
(3, 2, NULL, NULL, 'display', 3, 4, 'controllers/Pages/display'),
(4, 2, NULL, NULL, 'admin_index', 5, 6, 'controllers/Pages/admin_index'),
(5, 1, NULL, NULL, 'Users', 8, 33, 'controllers/Users'),
(6, 5, NULL, NULL, 'login', 9, 10, 'controllers/Users/login'),
(7, 5, NULL, NULL, 'logout', 11, 12, 'controllers/Users/logout'),
(8, 5, NULL, NULL, 'my_data', 13, 14, 'controllers/Users/my_data'),
(9, 5, NULL, NULL, 'admin_index', 15, 16, 'controllers/Users/admin_index'),
(10, 5, NULL, NULL, 'admin_view', 17, 18, 'controllers/Users/admin_view'),
(11, 5, NULL, NULL, 'admin_add', 19, 20, 'controllers/Users/admin_add'),
(12, 5, NULL, NULL, 'admin_edit', 21, 22, 'controllers/Users/admin_edit'),
(13, 5, NULL, NULL, 'admin_delete', 23, 24, 'controllers/Users/admin_delete'),
(14, 5, NULL, NULL, 'save', 25, 26, 'controllers/Users/save'),
(15, 5, NULL, NULL, 'activation_code', 27, 28, 'controllers/Users/activation_code'),
(16, 5, NULL, NULL, 'remember_password', 29, 30, 'controllers/Users/remember_password'),
(17, 5, NULL, NULL, 'register', 31, 32, 'controllers/Users/register'),
(18, 1, NULL, NULL, 'Groups', 34, 45, 'controllers/Groups'),
(19, 18, NULL, NULL, 'admin_index', 35, 36, 'controllers/Groups/admin_index'),
(20, 18, NULL, NULL, 'admin_view', 37, 38, 'controllers/Groups/admin_view'),
(21, 18, NULL, NULL, 'admin_add', 39, 40, 'controllers/Groups/admin_add'),
(22, 18, NULL, NULL, 'admin_edit', 41, 42, 'controllers/Groups/admin_edit'),
(23, 18, NULL, NULL, 'admin_delete', 43, 44, 'controllers/Groups/admin_delete'),
(24, 1, NULL, NULL, 'UsersPhones', 46, 47, 'controllers/UsersPhones'),
(33, 1, NULL, NULL, 'UsersDatas', 48, 51, 'controllers/UsersDatas'),
(34, 33, NULL, NULL, 'save', 49, 50, 'controllers/UsersDatas/save'),
(35, 1, NULL, NULL, 'Controllers', 52, 63, 'controllers/Controllers'),
(36, 35, NULL, NULL, 'admin_index', 53, 54, 'controllers/Controllers/admin_index'),
(37, 35, NULL, NULL, 'admin_view', 55, 56, 'controllers/Controllers/admin_view'),
(38, 35, NULL, NULL, 'admin_add', 57, 58, 'controllers/Controllers/admin_add'),
(39, 35, NULL, NULL, 'admin_edit', 59, 60, 'controllers/Controllers/admin_edit'),
(40, 35, NULL, NULL, 'admin_delete', 61, 62, 'controllers/Controllers/admin_delete'),
(41, 1, NULL, NULL, 'Home', 64, 67, 'controllers/Home'),
(42, 41, NULL, NULL, 'index', 65, 66, 'controllers/Home/index'),
(43, 1, NULL, NULL, 'UsersAddresses', 68, 71, 'controllers/UsersAddresses'),
(44, 43, NULL, NULL, 'save', 69, 70, 'controllers/UsersAddresses/save'),
(45, 1, NULL, NULL, 'AclCaching', 72, 81, 'controllers/AclCaching'),
(46, 45, NULL, NULL, 'Acl', 73, 80, 'controllers/AclCaching/Acl'),
(47, 46, NULL, NULL, 'admin_index', 74, 75, 'controllers/AclCaching/Acl/admin_index'),
(48, 46, NULL, NULL, 'admin_allow', 76, 77, 'controllers/AclCaching/Acl/admin_allow'),
(49, 46, NULL, NULL, 'admin_deny', 78, 79, 'controllers/AclCaching/Acl/admin_deny'),
(50, 1, NULL, NULL, 'Jmenu', 82, 99, 'controllers/Jmenu'),
(51, 50, NULL, NULL, 'Menus', 83, 98, 'controllers/Jmenu/Menus'),
(52, 51, NULL, NULL, 'admin_index', 84, 85, 'controllers/Jmenu/Menus/admin_index'),
(53, 51, NULL, NULL, 'admin_view', 86, 87, 'controllers/Jmenu/Menus/admin_view'),
(54, 51, NULL, NULL, 'admin_add', 88, 89, 'controllers/Jmenu/Menus/admin_add'),
(55, 51, NULL, NULL, 'admin_edit', 90, 91, 'controllers/Jmenu/Menus/admin_edit'),
(56, 51, NULL, NULL, 'admin_delete', 92, 93, 'controllers/Jmenu/Menus/admin_delete'),
(57, 51, NULL, NULL, 'admin_movedown', 94, 95, 'controllers/Jmenu/Menus/admin_movedown'),
(58, 51, NULL, NULL, 'admin_moveup', 96, 97, 'controllers/Jmenu/Menus/admin_moveup'),
(59, 1, NULL, NULL, 'AclExtras', 100, 101, 'controllers/AclExtras');

-- --------------------------------------------------------

--
-- Estrutura da tabela `aros`
--

CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_aros_lft_rght` (`lft`,`rght`),
  KEY `idx_aros_alias` (`alias`),
  KEY `idx_aros_model_foreign_key` (`model`,`foreign_key`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Requisição de Acesso a Objetos = Grupos e Usuários';

--
-- Extraindo dados da tabela `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Group', 1, 'Root', 1, 2),
(2, NULL, 'Group', 2, 'Administrador', 3, 4),
(4, NULL, 'Group', 3, 'UsuÃ¡rio', 5, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `aros_acos`
--

CREATE TABLE IF NOT EXISTS `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`),
  UNIQUE KEY `idx_aros_acos_aro_id_aco_id` (`aro_id`,`aco_id`),
  KEY `aco_id` (`aco_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 1, 37, '1', '1', '1', '1'),
(2, 1, 36, '1', '1', '1', '1'),
(3, 1, 39, '1', '1', '1', '1'),
(4, 1, 40, '1', '1', '1', '1'),
(5, 1, 38, '1', '1', '1', '1'),
(6, 1, 20, '1', '1', '1', '1'),
(7, 1, 19, '1', '1', '1', '1'),
(8, 1, 22, '1', '1', '1', '1'),
(9, 1, 23, '1', '1', '1', '1'),
(10, 1, 21, '1', '1', '1', '1'),
(11, 2, 42, '1', '1', '1', '1'),
(12, 1, 42, '1', '1', '1', '1'),
(13, 4, 42, '1', '1', '1', '1'),
(14, 1, 10, '1', '1', '1', '1'),
(15, 1, 9, '1', '1', '1', '1'),
(16, 1, 12, '1', '1', '1', '1'),
(17, 1, 13, '1', '1', '1', '1'),
(18, 1, 11, '1', '1', '1', '1'),
(19, 1, 15, '1', '1', '1', '1'),
(21, 1, 3, '1', '1', '1', '1'),
(22, 1, 4, '1', '1', '1', '1'),
(23, 2, 6, '1', '1', '1', '1'),
(24, 1, 6, '1', '1', '1', '1'),
(25, 4, 6, '1', '1', '1', '1'),
(26, 4, 7, '1', '1', '1', '1'),
(27, 1, 7, '1', '1', '1', '1'),
(28, 2, 7, '1', '1', '1', '1'),
(29, 2, 8, '1', '1', '1', '1'),
(30, 1, 8, '1', '1', '1', '1'),
(31, 4, 8, '1', '1', '1', '1'),
(32, 4, 16, '1', '1', '1', '1'),
(33, 1, 16, '1', '1', '1', '1'),
(34, 2, 16, '1', '1', '1', '1'),
(35, 2, 17, '1', '1', '1', '1'),
(36, 1, 17, '1', '1', '1', '1'),
(37, 4, 17, '1', '1', '1', '1'),
(38, 1, 14, '1', '1', '1', '1'),
(39, 1, 44, '1', '1', '1', '1'),
(40, 1, 34, '1', '1', '1', '1'),
(42, 1, 53, '1', '1', '1', '1'),
(43, 1, 58, '1', '1', '1', '1'),
(44, 1, 57, '1', '1', '1', '1'),
(45, 1, 52, '1', '1', '1', '1'),
(46, 1, 55, '1', '1', '1', '1'),
(47, 1, 56, '1', '1', '1', '1'),
(48, 1, 54, '1', '1', '1', '1'),
(49, 1, 47, '1', '1', '1', '1'),
(50, 1, 49, '1', '1', '1', '1'),
(51, 1, 48, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `reference` varchar(20) NOT NULL,
  `adm` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `reference` (`reference`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `groups`
--

INSERT INTO `groups` (`id`, `name`, `reference`, `adm`, `created`, `modified`) VALUES
(1, 'Root', 'root', 1, '2012-12-05 00:14:03', '2012-12-06 01:05:10'),
(2, 'Administrador', 'administrador', 1, '2012-12-05 20:25:48', '2012-12-06 01:05:36'),
(3, 'UsuÃ¡rio', 'usuario', 0, '2013-05-14 12:10:30', '2013-05-14 12:10:30');

-- --------------------------------------------------------

--
-- Estrutura da tabela `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `model_id` int(10) DEFAULT NULL,
  `action` varchar(255) DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL,
  `change` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `group_id` int(10) unsigned NOT NULL,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `link` varchar(255) NOT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `group_id` (`group_id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `menus`
--

INSERT INTO `menus` (`id`, `group_id`, `parent_id`, `name`, `link`, `lft`, `rght`, `active`) VALUES
(1, 1, NULL, 'InÃ­cio', 'home', 1, 2, 1),
(2, 1, NULL, 'UsuÃ¡rios', 'admin/users', 3, 4, 1),
(3, 1, NULL, 'Root', '#', 5, 12, 1),
(4, 1, 3, 'Menu', 'admin/jmenu/menus', 6, 7, 1),
(5, 1, 3, 'Grupos', 'admin/groups', 8, 9, 1),
(6, 1, 3, 'UsuÃ¡rios', 'admin/users', 10, 11, 1),
(7, 1, NULL, 'Meus Dados', 'users/my_data', 13, 14, 1),
(8, 1, NULL, 'Logout', 'users/logout', 15, 16, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` int(10) unsigned NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `activation_code` varchar(32) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `group_id` (`group_id`),
  KEY `email` (`email`,`password`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `group_id`, `name`, `email`, `password`, `created`, `modified`, `activation_code`, `active`) VALUES
(1, 1, 'Jorge Fernando Jardim', 'jorge@conteudodinamico.com.br', 'Hs@|dDRyNXpqag==', '2013-02-25 18:18:46', '2013-05-14 02:54:04', NULL, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users_addresses`
--

CREATE TABLE IF NOT EXISTS `users_addresses` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `number` varchar(20) NOT NULL,
  `complement` varchar(50) NOT NULL,
  `neighborhood` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zipcode` varchar(9) NOT NULL,
  `status` tinyint(1) DEFAULT '1' COMMENT '0:Desativado - 1:Ativado',
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users_addresses`
--

INSERT INTO `users_addresses` (`id`, `user_id`, `address`, `number`, `complement`, `neighborhood`, `city`, `state`, `zipcode`, `status`, `created`) VALUES
(1, 1, 'Rua Alceu de Almeida Santos', '54', 'SP', 'Vila Romero', 'SÃ£o Paulo', 'SP', '02469-020', 1, '2013-05-14 02:49:28');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users_datas`
--

CREATE TABLE IF NOT EXISTS `users_datas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `rg` varchar(14) DEFAULT NULL,
  `rg_uf` varchar(3) DEFAULT NULL,
  `birth` date DEFAULT NULL,
  `sex` enum('Masculino','Feminino') DEFAULT NULL,
  `civil_status` enum('Solteiro','Casado','Divorciado','Viuvo') CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1' COMMENT '0:Desativado - 1:Ativado',
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`),
  UNIQUE KEY `cpf` (`cpf`),
  UNIQUE KEY `rg` (`rg`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users_datas`
--

INSERT INTO `users_datas` (`id`, `user_id`, `cpf`, `rg`, `rg_uf`, `birth`, `sex`, `civil_status`, `status`, `created`) VALUES
(2, 1, NULL, NULL, NULL, '1980-11-24', 'Masculino', 'Casado', 1, '2013-05-14 02:45:56');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users_phones`
--

CREATE TABLE IF NOT EXISTS `users_phones` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `type` char(1) NOT NULL COMMENT 'R:Residencial - T:Trabalho - C:Celular',
  `number` varchar(14) NOT NULL,
  `status` tinyint(1) DEFAULT '1' COMMENT '0:Desativado - 1:Ativado',
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users_phones`
--

INSERT INTO `users_phones` (`id`, `user_id`, `type`, `number`, `status`, `created`) VALUES
(1, 1, 'R', '(11)5555-5555', 1, '2013-05-14 02:49:28'),
(2, 1, 'C', '(11)9999-99999', 1, '2013-05-14 02:49:28');

--
-- Restrições para as tabelas dumpadas
--

--
-- Restrições para a tabela `aros_acos`
--
ALTER TABLE `aros_acos`
  ADD CONSTRAINT `aros_acos_ibfk_1` FOREIGN KEY (`aro_id`) REFERENCES `aros` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `aros_acos_ibfk_2` FOREIGN KEY (`aco_id`) REFERENCES `acos` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
