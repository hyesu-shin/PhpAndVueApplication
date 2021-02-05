<?php
  // Connection.php와 QueryBuilder.php를 연결시키는 로직

  $app = [];
  $app['config'] = require_once 'Config.php';

  require 'database/Connection.php';
  require 'database/QueryBuilder.php';
  require 'Router.php';
  require 'Request.php';

  // $pdo = Connection::make($config['database']);
  // $query = new QueryBuilder($pdo);

  $app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
  );

?>