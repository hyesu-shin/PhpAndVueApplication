<?php
  
  class Router
  {
    protected $routes = [];
    
    public static function load ($file)  // $file : routes.php
    {
      // static method는 인스턴스를 생성하지 않는 global method
      // 인스턴스 생성을 위해서는 new static (or new self)
      $router = new static;

      require $file;

      return $router;
    }

    // routes 설정하는 부분
    public function define ($routes)
    {
      $this->routes = $routes;
    }

    public function direct($uri)
    {
      // api/post
      // 들어온 uri와 매칭되는 key값이 있는지를 routes.php에서 검색
      if (array_key_exists($uri, $this->routes)) {
        return $this->routes[$uri];
      }

      // 존재하지 않을 경우 Throw
      throw new Exception('No route defined for this uri');
    }
  }
?>