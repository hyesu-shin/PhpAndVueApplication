<?php
  // POD객체를 외부로부터 받아 생성자 메서드인 __construct의 인자로 할당
  // 모든 데이터를 가지고 오는 selectAll함수

  class QueryBuilder
  {
    protected $pdo;

    public function __construct (PDO $pdo)
    {
      $this->pdo = $pdo;
    }

    // 리스트 출력
    public function selectAll($table)
    {
      $output = array();

      $statement = $this->pdo->prepare("select * from {$table} order by desc");
      $statement->execute();

      $result = $statement->fetchAll(PDO::FETCH_ASSOC);

      foreach ($result as $row)
      {
        $a = array(
          "id" => $row["id"],
          "title" => $row["title"],
          "writer" => $row["writer"],
          "content" => $row["content"],
          "created_at" => $row["created_at"],
          "updated_at" => $row["updated_at"]
        );
        array_push($output, $a);
      }

      $data = json_encode($output);
      echo $data;
    }

    // 디테일 출력 (id)
    public function selectId($table, $id)
    {
      $statement = $this->pdo->prepare("select * from {$table} where id = {$id}");
      $statement->execute();

      $result = $statement->fetch(PDO::FETCH_ASSOC);

      $output = array(
        "id" => $result["id"],
        "title" => $result["title"],
        "writer" => $result["writer"],
        "content" => $result["content"],
        "created_at" => $result["created_at"],
        "updated_at" => $result["updated_at"]
      );

      $data = json_encode($output);
      echo $data;
    }

    // 게시글 작성
    public function create($table)
    {
      $data = json_decode($_POST['data']);

      $result = array(
        "title" => $data->title,
        "writer" => $data->writer,
        "content" => $data->content
      );

      $statement = $this->pdo->prepare("insert into {$table} (title, writer, content, created_at, updated_at) value (:title, :writer, :content, :created_at, :updated_at)");
      $statement->execute([':title'=>$result["title"], ':writer'=>$result["writer"], ':content'=>$result["content"], ':created_at'=>date("Y-m-d h-m-s"), ':updated_at'=>date("Y-m-d h-m-s")]);
    }

    // 게시글 수정
    public function update($table, $id)
    {
      $data = json_decode($_POST['data']);

      $result = array(
        "title" => $data->title,
        "content" => $data->content
      );

      $statement = $this->pdo->prepare("update {$table} set title=:title, content=:content, updated_at=:updated_at where id=:id");
      $statement->execute([':title'=>$result["title"], ':content'=>$result["content"], ':updated_at'=>date("Y-m-d h-m-s"), ':id'=>$id]);

    }

    // 게시글 삭제
    public function delete($table, $id)
    {
      $statement = $this->pdo->prepare("delete from {$table} where id=:id");
      $statement->execute([':id'=>$id]);      
    }
  }
?>