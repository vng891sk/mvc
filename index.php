<?php
include $_SERVER['DOCUMENT_ROOT'].'/models/Mysql.php';
$config = require($_SERVER['DOCUMENT_ROOT'].'/config.php');

$mysql = new Mysql($config['host'],
				$config['login'],
				$config['password'],
				$config['database']);


$data = $mysql->select("SELECT * FROM news");
print_r($data);
?>