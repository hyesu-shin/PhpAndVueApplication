<?php
  // 서버 내 요청된 URI 를  trim하는 클래스 구현
  // trim함수 : 시작과 끝에서 두번째 인자로 입력한 문자를 찾아서 삭제
  class Request
  {
    public static function uri ()
    {
      return trim($_SERVER['REQUEST_URI'], '/');
    }
  }
?>