<?php
namespace App\Controllers;
use League\Plates\Engine;
use Delight\Auth\Auth;
/*Не реализован*/
class ViewsController
{
  protected $user;
  protected $engine;
  protected $template;
  
  public function __construct(Auth $user, Engine $engine)
  {
     $this->user = $user;
     $this->engine = $engine;
     
   }
  
  public function getTemplate()
  {
    if($this->user->isLoggedIn()) {
      $template = new Engine('../app/view/user');
      return $template;
    }
    $template = new Engine('../app/view');
    return  $template;
  }
  
 }