<html>
<head>
<title>登录验证</title>
<meta http-equiv="content-type"content="text/html;charset=utf-8">
</head>
<body>
<?php
    /* $conn=mysql_connect("127.0.0.1","root","root")
     if($conn==null){
     die("数据库连接失败！");
     }
     if(!mysql_select_db("vote1"))
      {
          die("数据库连接失败");
      }*/
      $conn=@mysql_connect("127.0.0.1","root","root")or die("数据库连接失败！");;
    // mysql_select_db("injection",$conn) or die("您要选择的数据库不存在");
    $re= mysql_select_db("vote1",$conn) or die("您要选择的数据库不存在");
     if(!$re==null){
      echo "数据库连接成功";
     }
     $name=$_POST["username"];
     $pwd=md5($_POST["password"]);
     echo "<br>";
    echo "$name".":"."$pwd";
     $sql="select * from users where  username='$name' and password='$pwd'";
     $query=mysql_query($sql);
   //  $arr=mysql_fetch_array($query);
       $arr=null;
      while($row=mysql_fetch_array($query)){
      echo "<br>";
      echo $row['username'].":".$row['password'];
      echo "<br>";
      $arr=$row;
      }
     /* if(is_array($row)){
      echo "dengluchenggong";
      }
   */
    // $arr=mysql_fetch_array($query);
     if(is_array($arr)){
    
       //	     header("Location:manager.php");
       echo "登陆成功";

     }else{
     //echo "您的用户名或密码输入有误，<a href="Login.php">请重新登录！</a>";
     echo "<br>";
     echo "您的用户名或密码有误";
     }
  ?>
 </body>
 </html>

