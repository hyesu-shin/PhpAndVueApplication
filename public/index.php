<?php
  // // 라우팅 모듈
  // // 웹이나 앱에서 호출하는 파일, 진입점
  // // header('Access-Control-Allow-Origin: http://localhost:8080');
  // // header('Access-Control-Max-Age: 86400');
  // // header('Access-Control-Allow-Headers: x-requested-with');
  // // header('Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE');

  // include './database.php';   // 데이터베이스 연결 파일 호출

  // $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);    // 호출한 uri를 가져옴
  // // $uri = explode('/', $uri);    // uri를 ('/') 단위로 쪼갬
  // echo $uri;
  // // if ($uri !== 'info') {
  // //   header('HTTP/1.1 404 Not Found');
  // //   exit();
  // // }

  // $requestMethod = $_SERVER["REQUEST_METHOD"];    // 메서드 방식을 가져옴
  
  // if ($uri == '/api/post') {
  //   switch ($requestMethod) {    // switch문으로 메서드 방식 필터링
  //     case 'GET':
  //       require_once 'getList.php';
  //       break;
  //     default:
  //       break;
  //   }
  // }
  
  // // Bootstrap.php를 호출함으로써, router, request클래스 등 router에 필요한 모든 로직 불러옴
  // require 'core/Bootstrap.php';
  
  // // uri list인 routes 불러오기
  // $router = Router::load('Routes.php'); 

  // // request_uri가 어떻게 들어오는지 알아야 함
  // $uri = Request::uri();

  // // Router클래스의 메서드 : routes존재 여부 검사 후 redirect
  // require $router->direct($uri); 
  require $_SERVER["DOCUMENT_ROOT"].'/dist/index.html';
?>