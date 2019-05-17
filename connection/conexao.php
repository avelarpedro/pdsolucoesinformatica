<?php

$con = mysqli_connect ("localhost", "root", "");
$db = mysqli_select_db ($con, "trampofacil");

if (!$con) {
	die("Não foi possivel conectar ao banco de dados" . mysql_error());
}



?>