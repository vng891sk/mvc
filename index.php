<?php
include $_SERVER['DOCUMENT_ROOT'].'/Autoload.php';

use models\Mysql;
use controllers\PostController;



$config = require($_SERVER['DOCUMENT_ROOT'].'/config.php');

(new \base\App())->run($config);

//(new PostController($config))->actionList($config);

?>