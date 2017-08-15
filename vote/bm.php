<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>图片投票系统php 1.0 beta</title>
<link href="Style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?
require_once("sys_conf.inc");
include("Top.php");

if (isset($_POST["ok"]))
{
$name=$_POST["name"];
$info=$_POST["info"];
$pic=$_POST["pic"];
$link_id=mysql_connect($DBHOST,$DBUSER,$DBPWD);
mysql_select_db($DBNAME);
mysql_query("SET NAMES 'GBK'");
$sql="insert into photo(name,info,pic,addtime) values('$name','$info','$pic','".date("Y-m-d H:i:s")."')";
mysql_query($sql);
echo "<script>alert('报名成功!');location='Default.php';</script>";
}
?>
<table width="765" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="765" border="0" align="left" cellpadding="0" cellspacing="0">

      <tr>
        <td height="180" align="left" valign="middle"><form id="form1" name="form1" method="post" action="bm.php">
          <table width="765" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="100" height="30">名称</td>
              <td><input name="name" type="text" id="name" size="20" maxlength="20" /></td>
            </tr>
            <tr>
              <td height="30">说明</td>
              <td><textarea name="info" id="info" cols="45" rows="5"></textarea></td>
            </tr>
            <tr>
              <td height="30">图片</td>
              <td>
              <iframe src="upload_photo.php" scrolling="no" frameborder="0" height="25" width="400"></iframe>
              <input type="hidden" name="pic" id="pic" /></td>
            </tr>
            <tr>
              <td height="30" colspan="2" align="center"><input type="submit" name="ok" id="ok" value="提交" /></td>
            </tr>
          </table>
                </form>
        </td>
        </tr>
     
    </table></td>
  </tr>
</table>
<? include("foot.php");?>
</body>
</html>
