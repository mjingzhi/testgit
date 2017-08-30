<?php
    $redis = new Redis();
    $redis->connect('127.0.0.1', 6379);
    echo "Connection to server successfully";
   echo "Server is running: ".$redis->ping();
    $redis->set('asd',array('a'=>'value','b'=>'bbb'));
    echo $redis->get('asd');
?>
