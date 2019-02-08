<?php
namespace App\Model;
use Delight\Auth\Auth;


class Registration
{
  protected $db;
  protected $auth;
  protected $email;
  protected $validate;
  public function __construct(Auth $auth, Database $database, Mail $mail, Validate $validate)
  {
      $this->db = $database;
      $this->auth = $auth;
      $this->email = $mail;
      $this->validate = $validate;
  }
  
  
  public function is_userLogin()
  {
      return $this->auth->isLoggedIn();
  }
  public function register()
  {
//   $res = $this->validate->valPostData();
//   if($res){
      try {
      $userId = $this->auth->registerWithUniqueUsername( $_POST['email'], $_POST['password'], $_POST['username'],
        function ($selector,
                  $token) {
          $url = 'http://posts.loc/verify_email?selector=' . \urlencode($selector) . '&token=' . \urlencode($token);
          $this->email->verification_email($_POST['email'], $url);
          flash()->message('Send ' . $selector . ' and ' . $token . ' to the user (e.g. via email)');
        });
    
      flash()->message('Зарегали нового пользователя the ID ' . $userId);
    }
    catch (\Delight\Auth\InvalidEmailException $e) {
      flash()->error(['Левый емэил']);
    }
    catch (\Delight\Auth\DuplicateUsernameException $e) {
      flash()->error(['Пользователь с таким именем уже существует']);
    }
    catch (\Delight\Auth\InvalidPasswordException $e) {
      flash()->error(['Invalid password']);
    }
    catch (\Delight\Auth\UserAlreadyExistsException $e) {
      flash()->error(['Registration already exists']);
    }
    catch (\Delight\Auth\TooManyRequestsException $e) {
      flash()->error(['Too many requests']);
    }

    header('Location: /');
  }
  
  public function email_verification()
  {
    try {
      $this->auth->confirmEmail($_GET['selector'], $_GET['token']);
    
     flash()->message('Email address has been verified');
    }
    catch (\Delight\Auth\InvalidSelectorTokenPairException $e) {
      flash()->error('Invalid token');
    }
    catch (\Delight\Auth\TokenExpiredException $e) {
      flash()->error('Token expired');
    }
    catch (\Delight\Auth\UserAlreadyExistsException $e) {
      flash()->error('Email address already exists');
    }
    catch (\Delight\Auth\TooManyRequestsException $e) {
      flash()->error('Too many requests');
    }
  }
  public function login()
  {
    try {
      $this->auth->login($_POST['email'], $_POST['password']);
      
      flash()->message(['Registration is logged in']);
    }
    catch (\Delight\Auth\InvalidEmailException $e) {
      flash()->error(['Wrong email address']);
    }
    catch (\Delight\Auth\InvalidPasswordException $e) {
      flash()->error(['Wrong password']);
    }
    catch (\Delight\Auth\EmailNotVerifiedException $e) {
      flash()->error(['Email not verified']);
    }
    catch (\Delight\Auth\TooManyRequestsException $e) {
      flash()->error(['Too many requests']);
    }
  }

}