<?php
  // Bootstrap.php를 호출함으로써, router, request클래스 등 router에 필요한 모든 로직 불러옴
  require 'core/Bootstrap.php';
  
  // uri list인 routes 불러오기
  $router = Router::load('Routes.php'); 

  // request_uri가 어떻게 들어오는지 알아야 함
  $uri = Request::uri();
  $_uri = explode('/', $uri);    // uri를 ('/') 단위로 쪼갬

  if($_url[1] == 'api') {
    // Router클래스의 메서드 : routes존재 여부 검사 후 redirect
    require $router->direct($uri); 
  }
  else {
    echo '111111';
  }
?>