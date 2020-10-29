<?php namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\PostsModel;
use App\Models\CategoriesModel;

class Dashboard extends BaseController
{
	private $usersModel = null;
	private $postsModel = null;
	private $validation = null;
	private $categories = null;
	private $categoriesModel = null;

	public function __construct()
	{
		helper(['url', 'form']);
		$this->usersModel = new UsersModel;
		$this->postsModel = new PostsModel;
		$this->categoriesModel = new CategoriesModel;
		$this->validation = \Config\Services::validation();
		$this->categories = $this->categoriesModel->select(['id', 'name'])->findAll();
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

	public function uploadPost()
	{
		$this->validation->setRule('banner', 'Banner', 'required');

		if ($_POST) {
			$file = $this->request->getFile('banner');
			$fileName = $file->getRandomName();
			if ($file->isValid()) {
				$file->move(WRITEPATH.'uploads', $fileName);
				echo 'Archivo subido con exito';
			} else {
				echo 'No vailid';
			}
		}
		echo view('posts/upload_post');
	}

	//--------------------------------------------------------------------
    # remotemysql@gmajs.net
}
