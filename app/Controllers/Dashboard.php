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
		$data['categories'] = $this->categories;
		$this->validation->setRules(
			['title' => 'required', 'intro' => 'required', 'content' => 'required|min_length[50]', 'category' => 'required', 'tags' => 'required', 'banner' => 'required|is_image',],
			['title' => ['required' => 'Es necesario tener un titulo'],	'intro' => ['required' => 'Es necesaro un intro'], 'content' => ['required' => 'Es necesario un contenido', 'min_length' => 'El contenido debe ser de minimo 50 caracteres'], 'category' => ['required' => 'Por favor escoga una categoria'], 'tags' => ['required' => 'Es necesario una etiqueta por minimo'], 'banner' => ['required' => 'Es necesario una imagen para el post', 'is_image' => 'Debe subir un archivo de imagen para el banner']]
		);

		if ($_POST) {
			if (!$this->validation->withRequest($this->request)->run()) {
				print_r($this->validation->getErrors());
			} else {
				$file = $this->request->getFile('banner');
				$fileName = $file->getRandomName();
				if ($file->isValid()) {
					$file->move(WRITEPATH.'uploads', $fileName);
					echo 'Archivo subido con exito';
				}
			}

		}
		$this->loadViews('posts/upload_post', $data);
	}

	//--------------------------------------------------------------------
    # remotemysql@gmajs.net
}
