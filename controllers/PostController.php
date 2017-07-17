<?php
namespace controllers;

use models\Mysql;
use controllers\BaseController;

class PostController extends BaseController
{
	public function actionList()
	{
		$data = $this->mysql->select("SELECT * FROM news");
		echo $this->render('index',[
			'data'=>$data
		]);

	
	}
	public function actionShow($id)
	{
		$data = $this->mysql->select("SELECT * FROM news WHERE id = $id");
		$data = $data[0];
		echo $this->render('show',[
			'data'=>$data
		]);
	}
}