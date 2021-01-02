<?php
	$db = new PDO("mysql:host=127.0.0.1;dbname=20201229;charset=utf8", "root", "");
	$sql = "
		INSERT INTO `board` (`idx`, `subject`, `writer`, `content`, `reg_date`) 
		VALUES (NULL, '{$_POST['subject']}', '{$_POST['writer']}', '{$_POST['content']}', now());
	";
	if ($db->query($sql)){
		$idx = $db ->lastInsertID();	
		header("location:./view.php?idx={$idx}");
	} else{
		print_r($db->errorInfo());
	}