<?php
namespace App\Model;
use Intervention\Image\ImageManager;

class ImageModel
{
  protected $img;
  protected  $db;
  public function __construct(Database $database, ImageManager $imageManager)
  {
    $this->db = $database;
    $this->img = $imageManager;
  }
  /*
   * $_FILES;
   *  @return image name;
   * */
  public function imgMake()
  {
    $path = $_FILES['image']['name'];
    $extension  = pathinfo($path, PATHINFO_EXTENSION);
    $ext = array_key_exists( $extension,
      [
        'jpg' => 'image/jpeg',
        'png' => 'image/png',
        'gif' => 'image/gif',
         'svg' => 'image/svg+xml',
      ]);
    if(!$path || false === $ext) {
      flash()->message('картинку пж выберите');
      return null;
    }
    $extension  = pathinfo($path, PATHINFO_EXTENSION);
    $name = uniqid('' , true);
    $filename = $name . '.' .$extension ;
    $this->img->make($_FILES['image']['tmp_name'])->fit(640, 400)->save('upload/images/'.$filename, 80 );
    return $filename;
  }
  public function imgUpdate($id) {
    $res = $this->db->getOneField('posts', $id, 'image');

        $img =  $this->imgMake();
        if($img) {
          $this->deleteImg($res);
          return $img;
        }
        
    }

  
  public function deleteImg($img)
  {
    if(is_array($img)) {
      $imgName = $img['image'];
    }elseif((string) $img) {
      $imgName = $img;
    }

    if(is_file('upload/images/' . $imgName)) {
      $res = unlink('upload/images/' . $imgName);
      if($res){
        flash()->message('картинка удалена');
      }
    }
  }
}