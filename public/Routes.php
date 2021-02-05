<?php
  $router->define([
    '' => 'controllers/index.php',
    'api/post' => 'controllers/post.php',
    'api/post/delete' => 'controllers/delete.php'
  ]);
?>