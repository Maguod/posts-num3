<?php
namespace App\Controllers;
use Delight\Auth\Auth;
use App\Model\Registration;

 class UserController
 {
   protected $status;
   protected $user;
   private $reg;
  
   public function __construct(Auth $auth, Registration $reg)
   {
     $this->user = $auth;
     $this->reg = $reg;
   }
   public function checkUser()
   {
     if( false === $this->user->check() ) {
       flash()->error('Вы не авторизованы, залогиньтесь или зарегестируйтесь');
       header('Location: /');
       exit;
     }
   }
  
   public function isLogin()
   {
     return $this->user->isLoggedIn();
   }
  
   public function registerUser()
   {
     $this->reg->register();

   }
   public function verification_user()
   {
     $this->reg->email_verification();

   }
  
   public function login()
   {
     $this->reg->login();
     header('Location: /');
   }
   public function logOut()
   {
     $this->user->logOut();

     header('Location: /');
   }
  
   public function UserName()
   {
      return $this->user->getUsername();
   }
   public function UserId()
   {
     return $this->user->getUserId();
   }
 }