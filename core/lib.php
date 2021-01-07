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

	// 정상작동 X 이유는 아직 모르곘음.. 버전이 달라진건지 업데이트 문제인지.. 넘어감 
	function query ($sql) {
	 $db = new PDO("mysql:host=127.0.0.1;dbname=20201229;charset=utf8", "root", "");
	 $res = $db->query($sql);
    // 에러 감지
    if (!$res) {
   	   println($sql);
      print_pre($db->errorInfo());
    } 
      $db = null; // 연결 종료
      return $res;
  }

  function fetch ($sql) {
  	return query($sql) ->fetch(PDO::FETCH_OBJ);
  }

  function fetchAll ($sql) {
  	return query($sql) ->fetchAll(PDO::FETCH_OBJ);
  }