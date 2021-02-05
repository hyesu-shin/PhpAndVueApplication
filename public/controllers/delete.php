<?php
  // 삭제 부분 - api/post/delete
  // get or post
  $requestMethod = $_SERVER['REQUEST_METHOD'];
  $requestQueryString = $_SERVER['QUERY_STRING'];

  // QueryBuilder의 delete 함수 호출
  $app['database']->delete('posts', $_POST['id']);

?>