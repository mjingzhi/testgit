<html>
    <head>
        <title>用户登录</title>
    </head>
    <body>
        <?php
           function getCookieUsername(){
           if(empty($_COOKIE['username'])){
           return "";
             } else {
               return $_COOKIE['username'];
            }
           }
          ?>
         <form action="admin.php" method="post">
         用户名：<input type="text" name="username" value="<?php echo getCookieUsername(); ?>"><br />
         密码：<input type="password" name="pwd"><br />
         是否保存用户名：<input type="checkbox" name="yes"><br />
         <input type="submit" name="sub" value="登录">
         </form>
      </body>
</html>
