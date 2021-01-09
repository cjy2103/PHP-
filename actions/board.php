<?php
$sql = "";
$url = "/";
extract($_POST);
	switch ($action){
		case 'insert':
	      $sql = "
	        INSERT INTO board SET
	        subject = ?,      # 제목
	        writer = ?,       # 작성자
	        content = ?,      # 내용
	        reg_date = now(); # 작성일
	      ";
	      $execArr = [$subject, $writer, $content];
		break;
		case 'update' :
			$sql = "
			UPDATE `board` SET 
			subject = ?,
			writer = ?,
			content = ?
			WHERE idx = '{$idx}'
		";
			$url = "/view/{$idx}";
			$execArr = [$subject, $writer, $content];
		break;

 		 case 'delete' :
    	$sql = "DELETE FROM board WHERE idx = '{$idx}';";
    	$execArr = [$idx];
  		break;
		
	}

	query($sql, $execArr);

	alert('완료되었습니다.');
	move($url);
	
	