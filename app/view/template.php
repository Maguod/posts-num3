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

<?=$this->section('content')?>



<footer class="page-footer text-center font-small primary-color-dark darken-2 mt-4 wow fadeIn">
  
  <!--Call to action-->
  <div class="pt-4">
    <a class="btn btn-outline-white" href="#" target="_blank"
       role="button">Download
      MDB
      <i class="fas fa-download ml-2"></i>
    </a>
    <a class="btn btn-outline-white" href="#" target="_blank" role="button">Start
      free tutorial
      <i class="fas fa-graduation-cap ml-2"></i>
    </a>
  </div>
  <!--/.Call to action-->
  
  <hr class="my-4">
  
  <!-- Social icons -->
  <div class="pb-4">
    <a href="#" target="_blank">
      <i class="fab fa-facebook-f mr-3"></i>
    </a>
    
    <a href="#" target="_blank">
      <i class="fab fa-twitter mr-3"></i>
    </a>
    
    <a href="#" target="_blank">
      <i class="fab fa-youtube mr-3"></i>
    </a>
    
    <a href="#" target="_blank">
      <i class="fab fa-google-plus mr-3"></i>
    </a>
    
   
  </div>
  <!-- Social icons -->
  
  <!--Copyright-->
  <div class="footer-copyright py-3">
    © 2018 Copyright:
    <a href="/"> site posts.loc </a>
  </div>
  <!--/.Copyright-->

</footer>
<!--/.Footer-->

<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="/js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="/js/mdb.min.js"></script>
<!-- Initializations -->
<script type="text/javascript">
    // Animations initialization
    new WOW().init();

</script>
</body>

</html>