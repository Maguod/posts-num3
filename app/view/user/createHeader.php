<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?=$this->e($title)?></title>
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
  
  <link href="/css/bootstrap.css" rel="stylesheet">
  
  <link href="/css/mdb.css" rel="stylesheet">
  
  <link href="/css/style.css" rel="stylesheet">
  <style>
    
    .map-container{
      overflow:hidden;
      padding-bottom:56.25%;
      position:relative;
      height:0;
    }
    .map-container iframe{
      left:0;
      top:0;
      height:100%;
      width:100%;
      position:absolute;
    }
    
    .wrapper {
      display: flex;
      justify-content: space-around;
      padding: 30px 0;
    }
    form {
      display: flex;
      flex-direction: column;
    }
    button {
      max-width: 200px;
      width: 100%;
      margin-top: auto;
      padding: 5px 15px;
      text-align: center;
      align-self: center;
    }
  </style>
</head>
<body class="noUser">

<header class="header">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Homepage</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <!--        <li class="nav-item">-->
        <!--          <a class="nav-link" href="/">Домой</a>-->
        <!--        </li>-->
      </ul>
    
    </div>
  </nav>
</header>