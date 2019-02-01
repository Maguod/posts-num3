<?php

namespace App\model;
use Aura\SqlQuery\QueryFactory;
use \PDO;

class Database {
  private $pdo;
  private $queryFactory;
  
  public function __construct(PDO $pdo, QueryFactory $QueryFactory)
  {
    
    $this->pdo=$pdo;
    $this->queryFactory = $QueryFactory;
  }
  
  public function getAll($table)
  {
    $select = $this->queryFactory->newSelect();
    $select->cols(['*'])
      ->from($table);

    $sth = $this->pdo->prepare($select->getStatement());
    $sth->execute($select->getBindValues());
    return $sth->fetchAll(PDO::FETCH_ASSOC);
    }
  /**
   * find one
   * @return result
   */
  public function getOne($table, $id)
  {
    $select = $this->queryFactory->newSelect();
    
    $select->cols(['*'])
      ->from($table)
      ->where('id = :id')
      ->bindValues($id);
    $sth = $this->pdo->prepare($select->getStatement());
    $sth->execute($select->getBindValues());
  
    return $sth->fetch(PDO::FETCH_ASSOC);
    
  }
  public function getOneField($table, $id, $col)
  {
    $select = $this->queryFactory->newSelect();
    
    $select->cols([$col])
      ->from($table)
      ->where('id = :id')
      ->bindValues($id);
    $sth = $this->pdo->prepare($select->getStatement());

    $sth->execute($select->getBindValues());
  
    return $sth->fetch(PDO::FETCH_ASSOC);

    
  }
  /**
   * store new row in table
   * use table and massive {$data}
   */
  public function store($table, $data)
  {
    $insert = $this->queryFactory->newInsert();
    $insert
      ->into($table)                   // INTO this table
      ->cols($data)
    ->bindValues($data);
    $sth = $this->pdo->prepare($insert->getStatement());

    $sth->execute($insert->getBindValues());
  
//    $name = $insert->getLastInsertIdName('id');
//    $id = $this->pdo->lastInsertId($name);
//    return $id;

  }
  
  /**
   * insert rows in DB
   * use "table and array $rows"
   */
  public function storeRows( $table,  $arr)
  {
    
    $insert = $this->queryFactory->newInsert();
    $insert->into($table);
    foreach($arr as $elem) {
      $insert->cols($elem);
      $insert->addRow();
    }
    $sth = $this->pdo->prepare($insert->getStatement());
    $sth->execute($insert->getBindValues());

   
  }
  
    public function update($table, $data, $id) {
  
      $update = $this->queryFactory->newUpdate();
        if(is_array($id)){
          $id = $id['id'];
        }
      
      $update
        ->table($table)                  // update this table
        ->cols($data)
        ->where('id = :id')           // AND WHERE these conditions
        ->bindValue('id', $id);
  
      // prepare the statement
      $sth = $this->pdo->prepare($update->getStatement());

      // execute with bound values
       $sth->execute($update->getBindValues());
      
  }
  
  
  /**
   * delete from DB
   * use "table and id"
   */
  public function delete($id,  $table = 'posts')
  {
    $delete = $this->queryFactory->newDelete();
//    if(is_array($id) && array_key_exists('id', $id) ){
//      $id = $id['id'];
//    }
    $delete
      ->from($table)
      ->where('id = :id')
      ->bindValues($id);

    $sth = $this->pdo->prepare($delete->getStatement());
    
    // execute with bound values
    return $sth->execute($delete->getBindValues());

  }
  

}