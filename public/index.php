<?php
if( !session_id() )  {
  @session_start();
}
require_once dirname(__DIR__) . '/config/init.php';



