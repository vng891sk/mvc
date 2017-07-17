<?php
include $_SERVER['DOCUMENT_ROOT'].'/Autoload.php';
$config = require($_SERVER['DOCUMENT_ROOT'].'/config.php');
use models\Mysql;
$mysql = new Mysql($config['host'],
				$config['login'],
				$config['password'],
				$config['database']);


$data = $mysql->select("SELECT * FROM news");
print_r($data);
?>