<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		// $db = db_connect();
		$userModel = model('App\Models\memberModel');
		var_dump($userModel->test());
		
		// var_dump($query = $db->listTables());
		
		// var_dump($db->getFieldData('role_distribution'));
		// var_dump($db->getIndexData('role_distribution'));
		// var_dump($db->getForeignKeyData('role_distribution'));

		view('add_members');
	}
}
