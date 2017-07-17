<?php
namespace controllers;

use models\Mysql;
use controllers\BaseController;

class PostController extends BaseController
{
	public function request()
	{
		$data = $this->mysql->select("SELECT * FROM posts");
		print_r($data);
	}
}