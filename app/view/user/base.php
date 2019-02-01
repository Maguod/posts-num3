<?php $this->layout('userTemplate');

?>
<!--Main layout-->
<main class="pt-5 mx-lg-5">
  <div class="container-fluid mt-5">

    <!-- Section: Blog v.2 -->
      <!-- Section heading -->
      <h2 class="h1-responsive text-center font-weight-bold my-5">All Posts</h2>
      <!-- Section description -->
      <p class="text-primary text-center w-responsive mx-auto mb-5">Здесь вы можете просматривать, добавлять и
        редактировать
        посты.</p>
          <div class="col-12 mb-sm-3 ">
            <div class="alert alert-primary" role="alert">
              <?php echo flash();  ?>
            </div>
          </div>
      <!-- Grid row -->

        <?php foreach($posts as $post) : ?>
          <!-- Grid row -->
          <div class="row mb-5 p-3 z-depth-3 align-items-center">

            <!-- Grid column -->
            <div class="col-lg-5 col-xl-4">

              <!-- Featured image -->
              <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
                  <img class="img-fluid" src="/upload/images/<?php echo $post['image'] ?>" alt="Sample image">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-7 col-xl-8">

              <!-- Post title -->
              <h3 class="font-weight-bold mb-3"><strong><?php echo $post['title']; ?></strong></h3>
              <!-- Excerpt -->
              <p class="dark-grey-text"><?php echo $post['text']; ?></p>
              <!-- Post data -->
              <p>by <a class="font-weight-bold"><?php echo $post['author']; ?></a>, Дата публикации, <?php echo $post['date']; ?></p>
              <!-- Read more button -->
<!--              <a href="#" class="btn btn-pink btn-rounded btn-md">Read more</a>-->
<!--              <div class="edit">-->
                <a href="user/edit/<?php echo $post['id']  ?>" class="btn btn-info btn-rounded btn-md">Править пост</a>
                <a href="user/delete/<?php echo $post['id']; ?>" class="btn btn-danger btn-rounded
              btn-md">Удалить пост</a>

            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->
          </div>
          <hr class="my-5">
        <?php endforeach; ?>
        <!-- Grid column -->

<!-- Section: Blog v.2 -->

<!--Grid row-->

</div>
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

</main>
<!--Main layout-->
