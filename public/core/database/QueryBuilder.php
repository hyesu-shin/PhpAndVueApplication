<?php
  // POD객체를 외부로부터 받아 생성자 메서드인 __construct의 인자로 할당
  // 모든 데이터를 가지고 오는 selectAll함수

  class QueryBuilder
  {
    protected $pdo;

    public function __construct (PDO $pdo)
    {
      $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
      $statement = $this->pdo->prepare("select * from {$table}");
      $statement->execute();
      return $statement->fetchAll(PDO::FETCH_CLASS);
    }
  }
?>