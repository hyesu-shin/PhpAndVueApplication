<?php
  // get or post
  $requestMethod = $_SERVER['REQUEST_METHOD'];
  $requestQueryString = $_SERVER['QUERY_STRING'];

  if (!isset($_REQUEST['id'])) 
  {
    switch ($requestMethod) {    // switch문으로 메서드 방식 필터링
      case 'GET':
        // QueryBuilder의 selectAll 함수 호출
        $app['database']->selectAll('posts');
        break;
      case 'POST':
        // QueryBuilder의 create 함수 호출
        $app['database']->create('posts');
      default:
        break;
    }
  }
  else  // query로 id를 가져오는 경우 -> update, detail
  {
    switch ($requestMethod) {
      case 'GET':
        // QueryBuilder의 selectId 함수 호출
        $app['database']->selectId('posts', $_GET['id']);
        break;
      case 'POST' :
        // QueryBuilder의 update 함수 호출
        $app['database']->update('posts', $_POST['id']);
        break;
      default:
        break;
    }
  }
  
?>