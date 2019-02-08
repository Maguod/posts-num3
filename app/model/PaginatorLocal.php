<?php
namespace App\Model;
use JasonGrimes\Paginator;
use Aura\SqlQuery\QueryFactory;
use PDO;

class PaginatorLocal
{

  private $database;
  private $query;
  private $pdo;
  
  public function __construct(Database $database, QueryFactory $queryFactory, PDO $pdo)
  {
    $this->database = $database;
    $this->query = $queryFactory;
    $this->pdo = $pdo;
  }
  
  public function SetAndReturnPaginator($setPaging=9, $table = 'posts')
  {
    $tableIn =  $table;
    $result = [];
    $select = $this->query->newSelect();
    $select
      ->cols(["*"])
      ->from($tableIn)
      ->setPaging($setPaging)
      ->page($_GET['page'] ?? 1);
    
    $sth = $this->pdo->prepare($select->getStatement());
    $sth->execute($select->getBindValues());
    $result['posts'] = $sth->fetchAll(PDO::FETCH_ASSOC);
    
    $allPosts = $this->database->getAll($tableIn);
    $totalItems = count($allPosts);
    $itemsPerPage = $setPaging;
    $currentPage = $_GET['page'] ?? 1;
    $urlPattern = '?page=(:num)';
    
    $result['paginator'] = new Paginator($totalItems, $itemsPerPage, $currentPage, $urlPattern);
    return $result;
  }
}
