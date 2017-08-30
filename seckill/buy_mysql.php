<?php
	

#	$url = 'http://192.168.16.73/Seckill/index.php?app=app&c=seckill&a=addQsec&gid=2&type=mysql';

	$url = 'http://127.0.0.1:8080/seckill/index.php?app=app&c=seckill&a=addQsec&gid=1&type=mysql';
        $result = file_get_contents($url);
	
	var_dump($result);
