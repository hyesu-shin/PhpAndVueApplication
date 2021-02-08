<?php
  $request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

  echo "시발ㄹ";
  echo trim($request_uri, '/');
?>