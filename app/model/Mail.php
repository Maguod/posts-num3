<?php
namespace App\Model;
use SimpleMail;

class Mail
{
  protected  $mail;
  
  public function __construct(SimpleMail $simpleMail)
  {
    $this->mail = $simpleMail;
  }
  
  public function verification_email($email, $url)
  {
//    var_dump($var1);var_dump($var2); exit;
    $send =  $this->mail->make()
      ->setTo($email, 'Verification')
      ->setFrom('admin@email.com', 'admin')
      ->setSubject('Verification user')
      ->setMessage("<a href=\"$url\" target=\"_blank\">$url</a>" )
      ->setHtml()
      ->send();
    if($send) {
      flash()->message('Ваше сообщение оправленно');
    }
    else {
      flash()->error('Could not send email');
    }
  }
}