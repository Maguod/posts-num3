<?php
namespace App\Controllers;
use App\Controllers\PostsController;
use App\model\Database;
use League\Plates\Engine;
use App\model\PaginatorLocal;
use App\Controllers\UserController;




class HomeController
{
    protected $database;
    protected $view;
    protected $paginator;
    protected $user;
    protected $posts;
  

  public function __construct(Database $database, Engine $engine, PaginatorLocal $local, UserController $user,
                              PostsController $postsController )
    {
      $this->database = $database;
      $this->view = $engine;
      $this->paginator = $local;
      $this->user = $user;
      $this->posts = $postsController;
    }
  private function getDir() {
      if($this->user->isLogin()) {
        return new Engine('../app/view/user');

      } else {
        return  new Engine('../app/view');
  
      }
  }
  public function homePage()
  {

    $pagination = $this->paginator->SetAndReturnPaginator(9);
        echo $this->getDir()->render(  'base', ['posts' => $pagination['posts'], 'paginator' =>
        $pagination['paginator']]);
  }
  public function single($id)
  {
    $post = $this->database->getOne('posts', $id);
    echo $this->getDir()->render('single', ['post' =>$post]);
  }
  public function edit($id)
  {
    $post = $this->database->getOne('posts', $id);
    echo $this->getDir()->render('edit', ['post' =>$post]);
  }
  
  public function redirect()
  {
    header('Location: /');
  }

  public function verification_user()
  {
    $this->user->verification_user();
    header('Location: /');
  }

  
  public function create()
  {
    $this->user->checkUser();

    echo $this->getDir()->render('create');
  }
  
  public function deletePost($id)
  {
     $this->user->checkUser();
     $this->posts->deletePost($id);
     header('Location: /');
  }
  
  

}