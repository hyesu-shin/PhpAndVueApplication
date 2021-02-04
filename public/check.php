<?php

  // 테이블의 컬럼수를 요청하는 쿼리문
  $select_query = "SELECT COUNT(*) as title from posts";
  
  // 쿼리를 삽입한 뒤 결과값을 반환해서 변수에 저장
  $result_query = mysqli_query($conn, $select_query);

  // 쿼리를 배열로 받아서 변수에 삽입
  $result_model = $result_query->fetch_array();

  if($result_model != 0) {
    echo json_encode(array('title'=>$result_model['title']));
    return ;
  }

  mysqli_close($conn);
?>