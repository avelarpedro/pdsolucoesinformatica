<?php

require_once("connection/conexao.php");

$nome = $_POST['nome'];
$contato = $_POST['contato'];
$info = $_POST['info'];
$servico = $_POST['servico'];

$sql = "INSERT INTO `pessoa` (`nome`, `contato`, `info`, `servico`) VALUES ('$nome', '$contato', '$info', '$servico') ";

if (!$sql) {
	echo ("Ocorreu um erro durante a inserção na tabela!");

} else {
	echo ("Dados inseridos com sucesso!");
}



?>