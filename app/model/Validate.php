<?php
namespace App\Model;
use Respect\Validation\Exceptions\ValidationException;
use Respect\Validation\Exceptions\NestedValidationException;
use Respect\Validation\Validator as v;

class Validate
{
  
  public function valPostData()
  {
    $validator = v::key('username', v::stringType()->notEmpty())
      ->key('email', v::email())
      ->key('password', v::stringType()->notEmpty()->length(3, 35));
  
    try {
      $validator->assert($_POST);
    
    } catch (ValidationException $exception) {
      
      flash()->error($exception->findMessages($this->errorMessages()));
      return null;
    }
  }
  
  public function valPostsMeta($arr, $flag)
  {
    $validator = v::key('title', v::stringType()->length(10, 150), $flag)
      ->key('text', v::stringType()->length(100), $flag);
  
    try {
  
      $res = $validator->assert($arr);
      if($res) {
        return $arr;
      }
     
    } catch (ValidationException $exception) {
    
      flash()->error($exception->findMessages($this->errorMessages()));
      return false;
    }
    
  }
  public function valImage()
  {
    $img = $_FILES['image']['tmp_name'];
  
    try {
      $res = v::image()->validate($img);
      
      if($res){
        return true;
      }
    
    } catch (ValidationException $exception) {
    
      flash()->error('format png, jpg, gif');
      return false;
    }
  }
  private function errorMessages()
  {
    return [
      'username' => 'Введите имя',
      'email' => 'Неверный формат e-mail',
      'password'  =>  'Введите пароль',
      'title'    => 'Не меньше 10 символов',
      'text'    => 'Не меньше 100 символов',
      'image'   => 'format png, jpg, gif'
    ];
  }
}