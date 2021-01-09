<?php
	//경고창 띄우기
	function alert ($msg){	
		echo "<script>alert('{$msg}')</script>";
	}

	function move ($url = false){
		echo "<script>";  
		echo $url ? "location.replace('{$url}')" : "history.back();" ;
		echo "</script>";
		exit; 
	}

	function access ($bool, $msg, $url = false){
		if(!$bool){
			alert($msg);
			move($url);
		}
	}

	function print_pre($ele) { 
		echo "<pre>";
		print_r($ele);
		echo "</pre>";
	}

	function println ($ele){
		echo "<p>{$ele}</p>";
	}

	function query ($sql, $arr = []) {
	 $db = new PDO("mysql:host=127.0.0.1;dbname=20201229;charset=utf8", "root", "");
	 $res = null;
	  // $arr에 값이 있을 경우 바인딩 과정을 거친다
	  if (count($arr)) {
	    $res = $db->prepare($sql);  // 쿼리문을 준비하고
	    $res->execute($arr);        // $arr를 쿼리문에 바인딩한다.

	  // $arr에 값이 없을 경우 바로 실행한다.
	  } else {
	    $res = $db->query($sql);
	  }

	  // 쿼리문 실행 후 DB와의 연결을 종료한다.
	  $db = null;

	  if ($res) {
	    // 정상적으로 실행 시, 결과를 반환한다.
	    return $res;
	  } else {
	    // 에러가 있을 시 쿼리문과 에러 출력 후 프로그램 중지
	    println($sql);
	    print_pre($db->errorInfo());
	    exit;
	  }
 }

  function fetch ($sql) {
  	return query($sql) ->fetch(PDO::FETCH_OBJ);
  }

  function fetchAll ($sql) {
  	return query($sql) ->fetchAll(PDO::FETCH_OBJ);
  } 

