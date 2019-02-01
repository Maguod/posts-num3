<nav aria-label="Page navigation example">
  <ul class="pagination pg-blue">
    <?php if($paginator->getPrevUrl()): ?>
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