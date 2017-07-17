<?php
include $_SERVER['DOCUMENT_ROOT'].'/Autoload.php';

use models\Mysql;
use controllers\PostController;

$config = require($_SERVER['DOCUMENT_ROOT'].'/config.php');

(new PostController($config))->request($config);

?>