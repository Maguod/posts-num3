<?php
namespace App\Controllers;

use Faker\Factory;
use App\model\ImageModel;
use App\model\Database;
use App\model\Validate;
use App\Controllers\UserController;


class PostsController
{
  protected $db;
  protected $image;
  protected $user;
  protected $faker;
  protected $validate;
  protected $auth;
  
  public function __construct(Database $database, ImageModel $imageManager,  Factory $faker,
                              Validate $validate, UserController $auth)
  {
    $this->db = $database;
    $this->image = $imageManager;
    $this->faker = $faker::create();
    $this->validate = $validate;
    $this->auth = $auth;
  }
  

  public function createPost()
  {
    $mess = $this->validate->valPostsMeta($_POST, true);
    $imgValid =  $this->validate->valImage();

    if ($mess && $imgValid) {
      $imgName = $this->image->imgMake();
      $data = $_POST;
      $data['image'] = $imgName;
      $data['author'] = $this->auth->UserName();
      $data['user_id'] = $this->auth->UserId();
      $this->db->store('posts', $data);
      flash()->message('Все норм');
      
    } else {
      header("Location: " . $_SERVER['HTTP_REFERER']);
    }
    header('Location: /');
  }
  
  public function create3posts()
  {
     $this->createAny(3);

    header('Location: /');
   
  }
  public function createAny($num=5)
  {
    $rows = [];
    for ($i = 0; $i < $num; $i++) {
      $arr = [
        'title'   => $this->faker->words($nb = 3, $asText = true),
        'text'    => $this->faker->text($maxNbChars = 600),
        'image'   => $this->faker->image($dir = 'upload/images', $width = 640, $height = 480, false, false),
        'author' => $this->auth->UserName(),
        'user_id' => $this->auth->UserId(),
      ];
      $rows[] = $arr;
    }
    $this->db->storeRows('posts', $rows);
    
  }
  
  public function deletePost($id)
  {
    $img = $this->db->getOneField('posts', $id, 'image');
    $this->image->deleteImg($img);
    $this->db->delete($id);
  }
  
  public function update( $id)
  {
    $arr = [];
    if(!empty($_POST) && count($_POST) > 0){
      
      foreach ($_POST as $item => $value) {
        if(strlen($value) > 0) {
          $arr [$item]  = $value;
        }
      }
     if(!empty($arr)) {
       
       $res = $this->validate->valPostsMeta($arr, false);
       
       if(false === $res) {
         header("Location: " . $_SERVER['HTTP_REFERER']);
          exit;
       }else {
         $arr = $res;
       }
     }
    }
    if(!empty($_FILES)&& count($_FILES) > 0) {
      $imgValid =  $this->validate->valImage();
      if($imgValid) {
        $img = $this->image->imgUpdate($id);
        $arr['image'] = $img;
      }
    }
     if(!empty($arr)) {
       $this->db->update('posts', $arr, $id);
     }
    header('Location: /');
    
  }
}