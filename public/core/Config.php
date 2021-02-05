<?php
  // 보안상의 문제 발생을 막기 위해 데이터들을 관리하는 역할

  return [
    'database' => [
      'name' => 'heroku_552505a6705c415',
      'username' => 'bbbc30981e2c16',
      'password' => '28edd2d9',
      'connection' => 'mysql:host=us-cdbr-east-03.cleardb.com',
      'options' => [
        // 에러 발생시 어떠한 에러가 발생하는지 알기 위한 옵션
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
      ]
    ]
  ];
?>