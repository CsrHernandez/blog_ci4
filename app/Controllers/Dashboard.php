<?php namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\PostsModel;

class Dashboard extends BaseController
{
	private $usersModel = null;
	private $postsModel = null;

	public function __construct()
	{
		$this->usersModel = new UsersModel();
		$this->postsModel = new PostsModel();
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

	public function insertPost()
	{
		$id = $this->postsModel->insert([
			'banner'	 => 'img.php',
			'title'		 => 'New Post',
			'intro'	 	 => 'Hello this is me',
			'content'	 => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
			'category'   => 1,
			'tags'		 => 'sports',
			'created_by' => 1
		]);

		echo "<pre>";
		print_r($id);
		echo "</pre>";
	}

	//--------------------------------------------------------------------
    # remotemysql@gmajs.net
}
