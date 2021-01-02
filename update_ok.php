<?php
	$db = new PDO("mysql:host=127.0.0.1;dbname=20201229;charset=utf8", "root", "");
	$sql = "
		UPDATE `board` SET 
		subject = '{$_POST['subject']}',
		writer = '{$_POST['writer']}',
		content = '{$_POST['content']}'
		WHERE idx = '{$_GET['idx']}'
	";
	if ($db->query($sql)){
			header("location:./view.php?idx={$_GET['idx']}");
	} else{
		print_r($db->errorInfo());
	}