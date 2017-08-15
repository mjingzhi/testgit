<?
include("chk.php");
require_once("sys_conf.inc");

if (isset($_POST["subadd"]))
{
$name=$_POST["name"];
$pass=$_POST["pass"];
$link_id=mysql_connect($DBHOST,$DBUSER,$DBPWD);
mysql_select_db($DBNAME);
mysql_query("SET NAMES 'GBK'");
$sql="insert into admin(name,pass) values('$name','$pass')";
mysql_query($sql);
echo "<script>alert('添加成功!');location='admin.php';</script>";
}

if (isset($_GET["id"]))
{
$link_id=mysql_connect($DBHOST,$DBUSER,$DBPWD);
mysql_select_db($DBNAME);
mysql_query("SET NAMES 'GBK'");
$sql="delete from admin where id=".$_GET["id"];
mysql_query($sql);
echo "<script>alert('删除成功!');location='admin.php';</script>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title></title>
<style type="text/css">
<!--
.STYLE1 {
	font-size: 30px;
	color: #efefef;
}
-->
</style>
<link href="Images/font.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div align="center">
        <div id=d1 style="display:none">
        <form action="" method="post">
        登录名：<input name="name" type="text" id="name" size="20" maxlength="20" />
        密码 :<input name="name2" type="text" id="name2" size="20" maxlength="20" />
        <input type="submit" name="subadd" id="subadd" value="添加" />
    
        </form>
        </div>
  <table width="100%" border="0" align="left" cellpadding="2" cellspacing="0">
    
    <tr>
      <td width="479" height="25" align="left" valign="middle" bgcolor="#efefef">管理员列表</td>
      <td width="480" align="left" valign="middle" bgcolor="#efefef"><a href="#" onclick="d1.style.display='';">添加管理员</a></td>
    </tr>
    <tr>
      <td height="25" colspan="2" align="left" valign="middle" bgcolor="#efefef"><table width="100%" border="0" cellspacing="1" cellpadding="0">
        <tr>
          <td height="25" align="center" valign="middle">登录名</td>
          <td height="25" align="center" valign="middle">密码</td>
          <td height="25" align="center" valign="middle">操作</td>
        </tr>
<?
$link_id=mysql_connect($DBHOST,$DBUSER,$DBPWD);
mysql_select_db($DBNAME);
mysql_query("SET NAMES 'GBK'");
$sql="Select * from Admin order by id desc";
$result=mysql_query($sql);
while ($row=mysql_fetch_object($result))
{
?>

        <tr>
          <td height="25" align="center" valign="middle" bgcolor="#FFFFFF"><? echo "$row->name"?></td>
          <td height="25" align="center" valign="middle" bgcolor="#FFFFFF"><? echo "$row->pass"?></td>
          <td height="25" align="center" valign="middle" bgcolor="#FFFFFF"><a href="admin.php?id=<? echo "$row->id"; ?>">删除</a></td>
        </tr>
<?
}
?>
      </table></td>
    </tr>
  </table>
</div>
</body>
</html>
