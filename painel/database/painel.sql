-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2020 at 05:06 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `painel`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `logo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `logo`) VALUES
(1, 'BRASIL COMPUTADORES', 'LogoBrasilComputadoresPNG2.png');

-- --------------------------------------------------------

--
-- Table structure for table `manipula_img_user`
--

CREATE TABLE `manipula_img_user` (
  `id` int(11) NOT NULL,
  `imagem` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manipula_img_user`
--

INSERT INTO `manipula_img_user` (`id`, `imagem`) VALUES
(1, '');

-- --------------------------------------------------------

--
-- Table structure for table `mensages`
--

CREATE TABLE `mensages` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `assunto` varchar(150) NOT NULL,
  `mensagem` text NOT NULL,
  `dataenvio` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `permission_groups`
--

CREATE TABLE `permission_groups` (
  `id` int(11) NOT NULL,
  `id_company` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `params` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permission_groups`
--

INSERT INTO `permission_groups` (`id`, `id_company`, `name`, `params`) VALUES
(1, 1, 'Desenvolvedores', '2,6,9,42,43,44,71,72,73'),
(9, 1, 'ADMINISTRADORES', '2,6,9,42,43,44,71,72,73');

-- --------------------------------------------------------

--
-- Table structure for table `permission_params`
--

CREATE TABLE `permission_params` (
  `id` int(11) NOT NULL,
  `id_company` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `name_apresentar` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permission_params`
--

INSERT INTO `permission_params` (`id`, `id_company`, `name`, `name_apresentar`) VALUES
(2, 1, 'permissions_view', 'VER PERMISSÕES'),
(6, 1, 'name_permissions', 'NOME DAS PERMISSÕES'),
(9, 1, 'users_view', 'VER USÚARIOS'),
(42, 1, 'users_add_view', 'ADICIONAR USÚARIOS'),
(43, 1, 'users_edit_view', 'EDITAR USÚARIOS'),
(44, 1, 'users_dell_view', 'DELETAR USÚARIOS'),
(71, 1, 'lista_deemails', 'LISTA DE EMAILS'),
(72, 1, 'editar_site', 'EDITAR SITE'),
(73, 1, 'lista_leads', 'LISTA NEWSLETTER');

-- --------------------------------------------------------

--
-- Table structure for table `pgdepoiments`
--

CREATE TABLE `pgdepoiments` (
  `id` int(11) NOT NULL,
  `images` varchar(50) NOT NULL,
  `images120` varchar(50) NOT NULL,
  `images200` varchar(50) NOT NULL,
  `name` varchar(250) NOT NULL,
  `depoiment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pgdepoiments`
--

INSERT INTO `pgdepoiments` (`id`, `images`, `images120`, `images200`, `name`, `depoiment`) VALUES
(1, 'min_8000ef96246cd7a11acfe98ac3b455fd11.jpg', 'min_80847f66f3a33fae4ee7566e33a63d3cb4.jpg', 'min_2000d79d7f322d470208e23c3a10450bd80.jpg', 'Nome do Cliente', 'Lorem ipsum dolor sit amet et consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Lorem ipsum dolor sit amet et consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.'),
(2, 'min_80b0ddf53a4ccae4b9b66f0ccede63206f.jpg', 'min_808f52c8eca4d9fca6bbc6b2860af0e0db.jpg', 'min_2007db6fae34f0f304182bc882d39a73118.jpg', 'Nome do Cliente', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. '),
(3, 'min_809a092b5d459b0f592617adf2a99d973b.jpg', 'min_80b55616021ea79324da048a69072e4eb8.jpg', 'min_20003ca9613b233347488813e5fd8caa0a2.jpg', 'Nome do Cliente', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. '),
(8, 'min_80d5c8c4355ea89db207325b74be4716a2.jpg', 'min_120908ea7ce4d22cf2d1451fced8d76e7f4.jpg', 'min_200f7a213c05409532f98b7d13e9534f760.jpg', 'Nome do Cliente', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ');

-- --------------------------------------------------------

--
-- Table structure for table `pghome`
--

CREATE TABLE `pghome` (
  `id` int(11) NOT NULL,
  `textorcamento` text NOT NULL,
  `email01` varchar(150) NOT NULL,
  `phone01` varchar(20) NOT NULL,
  `cell01` varchar(20) NOT NULL,
  `endereco` text NOT NULL,
  `linkrede01` text NOT NULL,
  `linkrede02` text NOT NULL,
  `linkrede03` text NOT NULL,
  `horariofuncionamento` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pghome`
--

INSERT INTO `pghome` (`id`, `textorcamento`, `email01`, `phone01`, `cell01`, `endereco`, `linkrede01`, `linkrede02`, `linkrede03`, `horariofuncionamento`) VALUES
(1, 'Há um momento na vida de qualquer trabalhador espera é ter sua construção ou seu negócio. É emocionante pensar em construir tirar seu sonho do papel. Mas para que esse sonho ficar de pé precisamos de uma base, e essa base você encontra aqui, na Itafer. ', 'contato@itafermg.com.br', '(31) 3831-7428', '(31) 3831-7428', 'Rua Prefeito José Eliziario Barbosa, 157 Vila São Joaquim - Itabira/MG', 'https://www.facebook.com/itaferacoforte.itafer', '', 'https://www.instagram.com/explore/locations/860577797398188/itafer-itabira-ferro-e-aco-ltda/', 'De segunda a sexta, das 7h às 18h');

-- --------------------------------------------------------

--
-- Table structure for table `pghome_slide`
--

CREATE TABLE `pghome_slide` (
  `id` int(11) NOT NULL,
  `images` varchar(50) NOT NULL,
  `images80` varchar(50) NOT NULL,
  `images200` varchar(50) NOT NULL,
  `title` varchar(250) NOT NULL,
  `descricion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pghome_slide`
--

INSERT INTO `pghome_slide` (`id`, `images`, `images80`, `images200`, `title`, `descricion`) VALUES
(4, 'min_1920x9008d48d32af61eb04a92c7fc82a9a8f317.jpg', 'min_802fc70d387c1bec2b846d43831c4e1928.jpg', 'min_200ca6c2093262894b0b3c12cc020589146.jpg', 'PRESTAÇÃO DE SERVIÇOS EM SUA OBRA ', 'EQUIPE DE QUALIDADE TOTALMENTE QUALIFICADA PARA MELHOR ATENDER '),
(5, 'min_1920x900c4ec53d12d2b58d06016b5495cadaec7.jpg', 'min_809dcf5bfc404ca85b8bc0ae4f030a7e4e.jpg', 'min_2008d31c057ac5fff145dfce4882acf3f5e.jpg', 'PRESTAÇÃO DE SERVIÇOS EM SUA OBRA ', 'EQUIPE DE QUALIDADE TOTALMENTE QUALIFICADA PARA MELHOR ATENDER '),
(6, 'min_1920x900d7d21d503dd8febc2cd233e51a184b64.jpg', 'min_8095d496215c91ac9370d1d90aaf88066f.jpg', 'min_200ea0d226a5c2840161201a7877c3a68b8.jpg', 'PRESTAÇÃO DE SERVIÇOS EM SUA OBRA ', 'EQUIPE DE QUALIDADE TOTALMENTE QUALIFICADA PARA MELHOR ATENDER ');

-- --------------------------------------------------------

--
-- Table structure for table `pg_about`
--

CREATE TABLE `pg_about` (
  `id` int(11) NOT NULL,
  `sobre_desc` mediumtext CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `images` varchar(50) NOT NULL,
  `sobre_missao` mediumtext NOT NULL,
  `sobre_visao` mediumtext NOT NULL,
  `sobre_valores` mediumtext NOT NULL,
  `image_missao` varchar(50) NOT NULL,
  `image_visao` varchar(50) NOT NULL,
  `image_valores` varchar(50) NOT NULL,
  `imagemtopo` varchar(50) NOT NULL,
  `imgfundo200` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pg_about`
--

INSERT INTO `pg_about` (`id`, `sobre_desc`, `images`, `sobre_missao`, `sobre_visao`, `sobre_valores`, `image_missao`, `image_visao`, `image_valores`, `imagemtopo`, `imgfundo200`) VALUES
(1, ' Subdue whales void god which living don\'t midst lesser yielding over lights whose. Cattle greater brought sixth fly den dry good tree isn\'t seed stars were.\r\n\r\nSubdue whales void god which living don\'t midst lesser yieldi over lights whose. Cattle greater brought sixth fly den dry good tree isn\'t seed stars were the boring. \r\nIf you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.', 'min_800x500689cb23d7f1824bc05724b820e74f6e2.png', '11 Lorem ipsum dolor sit amet, consectur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ut.', '22 Lorem ipsum dolor sit amet, consectur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ut.', '33 Lorem ipsum dolor sit amet, consectur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ut.', 'min_400x40085cd2fe0648d6732805be806c0a4aba7.png', 'min_400x4003715ff37117fe043da9b568764c9629e.png', 'min_400x400871264086e8bb4b1a88c446233fd2797.png', 'min_1920x450ab62f805b3aed7f094f92ef761f318a8.jpg', 'min_2006d38ea4b7377df22dc8812450b179c1a.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `id_company` int(11) NOT NULL,
  `imagem` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `bloc` int(11) NOT NULL,
  `lock_tela` int(11) NOT NULL,
  `user_lock` int(11) NOT NULL,
  `sector` varchar(100) NOT NULL,
  `id_group` int(11) NOT NULL,
  `code_pass` varchar(50) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id_company`, `imagem`, `name`, `email`, `password`, `bloc`, `lock_tela`, `user_lock`, `sector`, `id_group`, `code_pass`, `ip`, `token`) VALUES
(1, 1, '495c171b5ddfa75fb22306d794a4d21c.png', 'Ricardo Alves', 'ricardotecnicoeletronica@gmail.com', 'ffe50d79a886247b7c1668f1496feb50', 0, 0, 0, 'Programador', 1, '', '127.0.0.1', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvd3d3LnZhbGV2ZXJkZS5jb20uYnIiLCJpZCI6IjEiLCJleHAiOiI4NjQwMCJ9._LpX_tj8WDC1lkVrFGhoHk4Ul82NLcKPaeGD1AuRH4Q'),
(7, 1, '', 'Teste', 'teste@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 0, 0, 'Teste', 1, '', '127.0.0.1', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manipula_img_user`
--
ALTER TABLE `manipula_img_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mensages`
--
ALTER TABLE `mensages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_groups`
--
ALTER TABLE `permission_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_params`
--
ALTER TABLE `permission_params`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pgdepoiments`
--
ALTER TABLE `pgdepoiments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pghome`
--
ALTER TABLE `pghome`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pghome_slide`
--
ALTER TABLE `pghome_slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pg_about`
--
ALTER TABLE `pg_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `manipula_img_user`
--
ALTER TABLE `manipula_img_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mensages`
--
ALTER TABLE `mensages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permission_groups`
--
ALTER TABLE `permission_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `permission_params`
--
ALTER TABLE `permission_params`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `pgdepoiments`
--
ALTER TABLE `pgdepoiments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pghome`
--
ALTER TABLE `pghome`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pghome_slide`
--
ALTER TABLE `pghome_slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pg_about`
--
ALTER TABLE `pg_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
