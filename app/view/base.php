<?php $this->layout('template', ['title' => 'Registration Posts View']) ?>

<h1 class="text-center mt-5">User Profile</h1>


<div class="wrapper">

    <form action="/reg" method="post">
      <h3>Зарегистрироваться</h3>
      <label for="username">Ваш логин</label>
      <input type="text" name="username" id="username">
      <label for="password">Ваш пароль</label>
      <input type="text" name="password" id="password">
      <label for="email">Ваша почта</label>
      <input type="text" name="email" id="email">
      <button type="sumbmit">Зарегистрироваться</button>
    </form>

  <a href="/roles">Get role</a>

    <form action="/login" method="post">
      <h3>Войти в акк</h3>
      <label for="email">Ваш email</label>
      <input type="text" name="email" id="email">
      <label for="password">Ваш пароль</label>
      <input type="text" name="password" id="password">
      <button type="sumbmit">Войти</button>
    </form>


</div>

<!--Main layout-->
<main class="pt-5">
  <div class="container-fluid mt-5">

    <!-- Section: Blog v.2 -->
    <section class="text-center my-5">

      <!-- Section heading -->
      <h2 class="h1-responsive font-weight-bold my-5">All Posts</h2>
      <!-- Section description -->
      <p class="light-blue-text w-responsive mx-auto mb-5">Здесь вы можете просматривать, добавлять и редактировать посты.</p>

      <!-- Grid row -->
      <div class="row">
        <div class="col-xs-12">
          <?php
          echo flash() ; ?>
        </div>
        <?php foreach($posts as $post) : ?>
          <!-- Grid column -->
          <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
            <div class="card">
              <!-- Featured image -->
              <div class="view overlay rounded z-depth-2 mb-4">
                  <img class="img-fluid" src="/upload/images/<?php echo $post['image'] ?>" alt="Sample image">


                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
    
              <!-- Category -->
              <a href="#!" class="pink-text">
                <h6 class="font-weight-bold mb-3"><i class="fas fa-map pr-2"></i><?php echo $post['author'];  ?></h6>
              </a>
              <!-- Post title -->
              <h4 class="font-weight-bold mb-3"><strong><?php echo $post['title'];  ?></strong></h4>
              <!-- Post data -->
              <p><a class="font-weight-bold">Дата публикации</a>, <?php echo $post['date'];  ?></p>
              <!-- Excerpt -->
              <p class="dark-grey-text"><?php echo $post['text'];  ?></p>
              <!-- Read more button -->
    
              <div class="links-block">
    
                <a href="/single/<?php echo $post['id']; ?>" class="btn btn-primary">Смотреть
                  пост</a>
    
              </div>
            </div>
          </div>
        
        <?php endforeach; ?>

      </div>
      <!-- Grid row -->

    </section>

    <nav aria-label="Page navigation example">
      <ul class="pagination pg-blue">
        <?php if ($paginator->getPrevUrl()): ?>
          <li class="page-item"><a href="<?php echo $paginator->getPrevUrl(); ?>" class="page-link"
            >&laquo; Предыдущая</a></li>
        <?php else : ?>
          <li class="page-item  disabled">
            <a class="page-link">Предыдущая</a>
          </li>
        <?php endif; ?>
        <?php foreach ($paginator->getPages() as $page): ?>
          <?php if ($page['url']): ?>
            <li <?php echo $page['isCurrent'] ? 'class="page-item active"' : ''; ?>>
              <a href="<?php echo $page['url']; ?>" class="page-link"><?php echo $page['num']; ?><span class="sr-only">(current)</span></a>
            </li>
          <?php else: ?>
            <li class="page-item"><span><?php echo $page['num']; ?></span></li>
          <?php endif; ?>
        <?php endforeach; ?>
        <?php if ($paginator->getNextUrl()): ?>
          <li class="page-item"><a href="<?php echo $paginator->getNextUrl(); ?>" class="page-link">Следующая &raquo;</a></li>
        <?php else : ?>
          <li class="page-item  disabled">
            <a class="page-link">Следующая</a>
          </li>
        <?php endif; ?>
      </ul>
    </nav>
   
  </div>
</main>





