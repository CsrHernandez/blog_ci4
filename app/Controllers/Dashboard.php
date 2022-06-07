<?php namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\PostsModel;
use App\Models\CategoriesModel;
use App\Models\DBAllModel;
use App\Models\NewsletterModel;
use App\Models\CommentsModel;

class Dashboard extends BaseController
{
	private $postsHome = null;
	private $usersModel = null;
	private $postsModel = null;
	private $validation = null;
	private $categories = null;
	private $dbAllModel = null;
	private $categoriesModel = null;
	private $newsletterModel = null;

	public function __construct()
	{
		helper(['url', 'form']);
		$this->usersModel = new UsersModel;
		$this->postsModel = new PostsModel;
		$this->dbAllModel = new dbAllModel;
		$this->categoriesModel = new CategoriesModel;
		$this->newsletterModel = new NewsletterModel;
		$this->validation = \Config\Services::validation();
		$this->categories = $this->categoriesModel->select(['id', 'name'])->findAll();
		$this->postsHome = $this->dbAllModel->getShowPostsHome();
	}

	public function index()
	{
		$data['categories'] = $this->categories;
		$data['postsHome'] = $this->postsHome;
		$this->loadViews('index', $data);
	}

	public function uploadPost()
	{
		$data['categories'] = $this->categories;
		$data['postsHome'] = $this->postsHome;
		$this->validation->setRules(
			['title' => 'required', 'intro' => 'required', 'content' => 'required|min_length[50]', 'category' => 'required', 'tags' => 'required'],
			['title' => ['required' => 'Es necesario tener un titulo'], 'intro' => ['required' => 'Es necesaro un intro'], 'content' => ['required' => 'Es necesario un contenido', 'min_length' => 'El contenido debe ser de minimo 50 caracteres'], 'category' => ['required' => 'Por favor escoga una categoria'], 'tags' => ['required' => 'Es necesario una etiqueta por minimo']]
		);

		if ($_POST)
		{
			if (!$this->validation->withRequest($this->request)->run())
			{
				return print_r($this->validation->getErrors());
			}
			else
			{
				$file = $this->request->getFile('banner');
				$fileName = $file->getRandomName();
				if ($file->isValid())
				{
					//$file->move(WRITEPATH.'uploads', $fileName);
					$file->move(ROOTPATH.'public/images/post', $fileName);
					$this->postsModel->insert([
						'title' => $this->request->getPost('title'),
						'slug' => $this->request->getPost('title') . '-' . date('d-m-Y'),
						'intro' => $this->request->getPost('intro'),
						'content' => $this->request->getPost('content'),
						'category' => $this->request->getPost('category'),
						'tags' => $this->request->getPost('tags'),
						'banner' => $fileName,
					]);
					echo 'Archivo subido con exito';
				}
			}

		}
		$this->loadViews('posts/upload_post', $data);
	}

	public function post($slug = null, $id = null)
	{
		if ($slug && $id)
		{
			$commentsModel = new CommentsModel();
			$data['comments'] = $commentsModel->where('post_id', $id)->findAll();
			if($_POST){
				$this->validation->setRules([
					'cName' => 'required', 'cEmail' => 'required', 'cMessage' => 'required|min_length[15]'
				],[
					'cName' => ['required' => 'El nombre es necesario.'],
					'cEmail' => ['required' => 'El email es necesario.'],
					'cMessage' => ['required'=>'El commentario es necesario.', 'min_length' => 'La longitud minima del comentario debe ser de 15'],
				]);
				if (!$this->validation->withRequest($this->request)->run()) {
					echo 'error';
					$data['error'] = True;
				} else {
					echo 'success';
					$comment_data = [
						'name' => $_POST['cName'],
						'email' => $_POST['cEmail'],
						'comment' => $_POST['cMessage'],
						'post_id' => $id,
					];
					$commentsModel->insert($comment_data);
				}
			}
			$data['categories'] = $this->categories;
			$data['postsHome'] = $this->postsHome;
			$data['post'] = $this->postsModel->select('posts.id, title, banner, content, category, tags, posts.created_at, name')
											 ->where('slug', $slug)
							 			 	 ->where('posts.id', $id)
							 			 	 ->join('users', 'users.id = created_by')
							 			 	 ->first();

			$this->loadViews('posts/single-standard', $data);
		}
		else
		{
			echo $slug;
			echo $id;
		}
	}

	public function addNewsletter()
	{
		$email = $_POST['email'];
		$result = $this->newsletterModel->where('email', $email)->countAllResults();
		if ($result == 0)
		{
			$this->newsletterModel->insert(['email' => $email]);
			echo "suscrito con exito";
		}
		else
		{
			echo "Ya se cuenta con registro de su correro";
		}
	}

	//--------------------------------------------------------------------
    # remotemysql@gmajs.net
}
