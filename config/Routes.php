<?php
use DI\ContainerBuilder;
use Aura\SqlQuery\QueryFactory;
use App\model\Database;
use League\Plates\Engine;

$containerBuilder = new ContainerBuilder;

$containerBuilder->addDefinitions([
  Engine::class => function() {
      return  new League\Plates\Engine();
  },

  PDO::class => function() {
    $driver = 'mysql';
    $host = 'Localhost';
    $db_name = 'test_bd';
    $user = 'root';
    $user_pass = '';
    $charset = 'utf8';
    return new PDO("$driver:host=$host;dbname=$db_name;charset=$charset", $user, $user_pass);
  },
  
  QueryFactory::class       => function() {
    return new QueryFactory('Mysql', true);
  },
  Database::class           => function($container) {
    return new Database($container->get(PDO::class), $container->get(QueryFactory::class));
  },
  \Delight\Auth\Auth::class => function($container) {
    return new Delight\Auth\Auth($container->get(PDO::class));
  },

]);

$container = $containerBuilder->build();

$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
  $r->addRoute('GET', '/', ['App\Controllers\HomeController', 'homePage']);
  $r->addRoute('GET', '/home', ['App\Controllers\HomeController', 'homePage']);
  $r->addRoute('GET', '/?page={num:\d+}', ['App\Controllers\HomeController', 'pages']);
  $r->addRoute('GET', '/single/{id:\d+}', ['App\Controllers\HomeController', 'single']);
  
  $r->addRoute('POST', '/reg', ['App\Controllers\UserController', 'registerUser']);
  $r->addRoute('POST', '/login', ['App\Controllers\UserController', 'login']);
  $r->addRoute('GET', '/verify_email', ['App\Controllers\HomeController', 'verification_user']);
  $r->addRoute('GET', '/logout', ['App\Controllers\UserController', 'logOut']);
  
  $r->addRoute('GET', '/user/edit/{id:\d+}', ['App\Controllers\HomeController', 'edit']);
  $r->addRoute('GET', '/user/createposts/{num:\d+}', ['App\Controllers\PostsController', 'create3posts']);
    $r->addRoute('GET', '/user/delete/{id:\d+}', ['App\Controllers\HomeController', 'deletePost']);
  $r->addRoute('GET', '/user/create', ['App\Controllers\HomeController', 'create']);
    $r->addRoute('POST', '/user/edit/{id:\d+}', ['App\Controllers\PostsController', 'update']);
    
    $r->addRoute('POST', '/user/createPost/', ['App\Controllers\PostsController', 'createPost']);
  
//  $r->addRoute('POST', '/store', [\App\Controllers\PostsController::class, 'createPost']);

//  $r->addRoute('POST', '/store', [\App\Controllers\UserController::class, 'createPost']);
//  $r->addRoute('GET', '/create20', [\App\Controllers\UserController::class, 'create20']);
//  $r->addRoute('GET', '/delete/{id:\d+}', [\App\Controllers\UserController::class, 'del']);
//  $r->addRoute('GET', '/userLogin', [\App\Controllers\ViewController::class, 'userView']);

//  // {id} must be a number (\d+)
//  $r->addRoute('GET', '/user/{id:\d+}', 'get_user_handler');
//  // The /{title} suffix is optional
//  $r->addRoute('GET', '/articles/{id:\d+}[/{title}]', 'get_article_handler');
});

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
$post = $_POST;




// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
  $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
  case FastRoute\Dispatcher::NOT_FOUND:
    echo '404';
    break;
  
  case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
    $allowedMethods = $routeInfo[1];
    echo 'Метод не разрешен';
    break;
  
  case FastRoute\Dispatcher::FOUND:
    $vars  = $routeInfo[2];
    $container->call($routeInfo[1], [$routeInfo[2]]);
    break;
}



