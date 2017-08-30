<?php
	$conn=@mysql_connect("127.0.0.1","root","root");
	if($conn==null)
		die("数据库连接失败");
	mysql_query("set names 'gb2312'");
	if(!mysql_select_db("vote1"))
	{
		die("数据库连接失败");
	}
?>
