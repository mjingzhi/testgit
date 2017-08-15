<?php
	

	$url = 'http://127.0.0.1:8080/seckill/index.php?app=app&c=seckill&a=addQsec&gid=1&type=transaction';
	$result = file_get_contents($url);
	
	var_dump($result);
