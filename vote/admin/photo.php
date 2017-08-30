<?
include("chk.php");
require_once("sys_conf.inc");

if (isset($_POST["subadd"]))
{
$link_id=mysql_connect($DBHOST,$DBUSER,$DBPWD);
mysql_select_db($DBNAME);
mysql_query("SET NAMES 'GBK'");
$name=$_POST["name"];
$info=$_POST["info"];
$pic=$_POST["pic"];
$sql="insert into photo(name,info,pic,addtime) values('$name','$info','$pic','".date("Y-m-d H:i:s")."')";
mysql_query($sql);
echo "<script>alert('添加成功!');location='photo.php';</script>";
}

if (isset($_GET["id"]))
{
$link_id=mysql_connect($DBHOST,$DBUSER,$DBPWD);
mysql_select_db($DBNAME);
mysql_query("SET NAMES 'GBK'");
$sql="delete from photo where id=".$_GET["id"];
mysql_query($sql);
echo "<script>alert('删除成功!');location='photo.php';</script>";
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
          <form id="form1" name="form1" method="post" action="">
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
                <td><iframe src="../upload_photo.php" scrolling="No" frameborder="0" height="25" width="400"></iframe>
                    <input type="hidden" name="pic" id="pic" /></td>
              </tr>
              <tr>
                <td height="30" colspan="2" align="center"><input type="submit" name="subadd" id="subadd" value="提交" /></td>
              </tr>
            </table>
          </form>
        </div>
  <table width="100%" border="0" align="left" cellpadding="2" cellspacing="0">
    
    <tr>
      <td width="479" height="25" align="left" valign="middle" bgcolor="#efefef">图片列表</td>
      <td width="480" align="left" valign="middle" bgcolor="#efefef"><a href="#" onclick="d1.style.display='';">添加图片</a></td>
    </tr>
    <tr>
      <td height="25" colspan="2" align="left" valign="middle" bgcolor="#efefef"><table width="100%" border="0" cellspacing="1" cellpadding="0">
        <tr>
          <td height="25" align="center" valign="middle">名称</td>
          <td align="center" valign="middle">得票</td>
          <td align="center" valign="middle">操作</td>
          </tr>
<?
$link_id=mysql_connect($DBHOST,$DBUSER,$DBPWD);
mysql_select_db($DBNAME);
mysql_query("SET NAMES 'GBK'");
$sql="Select * from photo order by id desc";
$result=mysql_query($sql);
while ($row=mysql_fetch_object($result))
{
?>

        <tr>
          <td height="25" align="center" valign="middle" bgcolor="#FFFFFF"><a href="../View.php?id=<? echo $row->id; ?>" target="_blank"><? echo "$row->name"?></a></td>
          <td align="center" valign="middle" bgcolor="#FFFFFF"><? echo "$row->p"?></td>
          <td align="center" valign="middle" bgcolor="#FFFFFF"><a href="photo.php?id=<? echo "$row->id"; ?>">删除</a></td>
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
