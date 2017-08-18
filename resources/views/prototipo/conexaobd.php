<?php
$host = "localhost";
$user = "root";
$pass = "user";
$db = "hidrologia";

$conexao_id = mysql_connect($host, $user, $pass, $db);

mysql_query("SET CHARACTER SET utf8");

echo "<center><br /><br /><br />";

if (!$conexao_id)
	die("<p>Erro na conexão</p>");

echo "</center>";

 mysql_select_db($db);
