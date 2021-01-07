<?php
$sql = "";
$url = "./";
extract($_POST);
	switch ($action){
		case 'insert':
			$sql = "
			INSERT INTO `board` (`idx`, `subject`, `writer`, `content`, `reg_date`) 
			VALUES (NULL, '{$subject}', '{$writer}', '{$content}', now());
		";
		break;
		case 'update' :
			$sql = "
			UPDATE `board` SET 
			subject = '{$subject}',
			writer = '{$writer}',
			content = '{$content}'
			WHERE idx = '{$idx}'
		";
			$url = "./?page=view&idx={$idx}";
		break;

 		 case 'delete' :
    	$sql = "DELETE FROM board WHERE idx = '{$idx}';";
  		break;
		
	}


	query($sql);

	alert('완료되었습니다.');
	move($url);
	
	