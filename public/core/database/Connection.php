<?php
  // 데이터 베이스 연결

  class Connection
  {
    public static function make($config)
    {
      try {
        return new PDO(
          $config['connection'].';dbname='.$config['name'],
          $config['username'],
          $config['password'],
          $config['options']
        );
      } catch (PDOException $e) {
        die($e->getMessage());
      }
    }
  }

  // general method
  // $connection = new Connection();
  // $connection->make();

  // static method
  // static method는 인스턴스를 생성하지 않고도 전역으로 접근할 수 있게 함
?>