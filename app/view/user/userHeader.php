<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Marlin PostsProject</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="/css/bootstrap.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="/css/mdb.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
<!--  <link href="css/style.min.css" rel="stylesheet">-->
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
  </style>
</head>

<body class="grey lighten-3">

<!--Main Navigation-->
<header>
  
  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container-fluid">
      
      <!-- Brand -->
      <a class="navbar-brand waves-effect" href="/" >
        <strong class="blue-text">Home</strong>
      </a>
      
      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
        <!-- Left -->
        <ul class="navbar-nav mr-auto">
        
        </ul>
        
        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a class="nav-link waves-effect orange" href="/logout"
               >Выйти</a>
          </li>
        </ul>
      
      </div>
    
    </div>
  </nav>
<!--   Navbar -->
  <div class="sidebar-fixed position-fixed">

    <a class="logo-wrapper waves-effect" href="/">
      <img src="https://mdbootstrap.com/img/logo/mdb-email.png" class="img-fluid" alt="">
    </a>

    <div class="list-group list-group-flush">
      <a href="#" class="list-group-item active waves-effect">
        <i class="fas fa-chart-pie mr-3"></i>Dashboard
      </a>
      <a href="#" class="list-group-item list-group-item-action waves-effect ">
        <i class="fas fa-user mr-3"></i>Profile</a>

      <a href="/user/createposts/3" class="list-group-item list-group-item-action waves-effect text-primary">
        <i class="fas fa-map mr-3"></i>Создать 3 поста</a>
      <a href="/user/create" class="list-group-item list-group-item-action waves-effect text-primary">
        <i class="fas fa-money-bill-alt mr-3"></i>Создать один пост</a>
    </div>

  </div>

</header>

<!--Main Navigation-->
