<?php namespace App\Controllers;

use App\Models\UsersModel;

class Dashboard extends BaseController
{
	private $usersModel = null;

	public function __construct()
	{
		$this->usersModel = new UsersModel();
	}

	public function index()
	{
		/*$id = $this->usersModel->insert([
			'name'		=> 'Cesar',
			'username'  => 'devcesar',
			'password'  => '1234',
			'role' 		=> 1,
		]);

		echo "<pre>";
		print_r($id);
		echo "</pre>";*/

		$this->loadViews('index');
	}

	//--------------------------------------------------------------------
    # remotemysql@gmajs.net
}
