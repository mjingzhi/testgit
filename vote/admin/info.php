<?
include("chk.php");
require_once("sys_conf.inc");
$id=$_GET["id"];

$link_id=mysql_connect($DBHOST,$DBUSER,$DBPWD);
mysql_select_db($DBNAME);
mysql_query("SET NAMES 'GBK'");

if (isset($_POST["subadd"]))
{
$sql="update info set info='".nl2br($_POST["info"])."' where id=".$id;
mysql_query($sql);
echo "<script>alert('修改成功!');location='info.php?id=".$id."';</script>";
}

$sql="select * from info where id=".$id;
$result=mysql_query($sql);
$row=mysql_fetch_object($result);
$name=$row->name;
$info=$row->info;


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title></title>
<link href="../Style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="form1" name="form1" method="post" action="info.php?id=<? echo $id;?>">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td height="30">&nbsp;<? echo $name;?></td>
    </tr>
    <tr>
      <td height="30"><textarea name="info" id="info" cols="60" rows="10"><? echo $info;?></textarea></td>
    </tr>
    <tr>
      <td height="30"><input type="submit" name="subadd" id="subadd" value="修改" /></td>
    </tr>
  </table>
</form>
</body>
</html>
