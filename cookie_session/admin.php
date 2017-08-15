<?php
    if(!empty($_POST['sub']) && $_POST['username']=="meng")
   // if(!empty($_POST['sub']) )
    {
      echo "欢迎".$_POST['username']." 登录成功";
      if (!empty($_POST['yes'])) {
         setCookie("username",$_POST['username'],time()+3600*24*30);
	 setCookie("password",$_POST['password'],time()+3600*24*30);
       } else {
          setCookie("username","",time()-10);
       }
     } else {
	 echo "你的账号错误，请重新输入<br />";
	 }
	 echo "<a href='login.php'>返回登录页面</a>";
 ?>
