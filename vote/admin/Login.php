<?
session_start();
require_once("sys_conf.inc");
if (isset($_POST["ok"]))
{
$link_id=mysql_connect($DBHOST,$DBUSER,$DBPWD);
mysql_select_db($DBNAME);
mysql_query("SET NAMES 'GBK'");
$sql="Select * from admin where name='".$_POST["name"]."' and pass='".$_POST["pass"]."'";
$result=mysql_query($sql);
$rows=mysql_num_rows($result);
if ($rows!=0)
{
	$admin=$_POST["name"];
	session_register("admin");
	echo "<script>alert('登录成功!');location='admin_Index.php';</script>";
}
else
{
	echo "<script>alert('用户名或密码错误!');history.back();</script>";
}

}
?>
<html>
<head>
<link href="Images/default.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="100%" height="75%" border="0" cellpadding="0" cellspacing="0">
  <tr valign="middle">
    <td height="17" align="center" valign="middle" background="Images/top_bg.gif">&nbsp;</td>
  </tr>
  <tr valign="middle">
    <td height="24" align="center" valign="middle" class="AddGoods_Left">后台管理系统</td>
  </tr>
  <tr valign="middle">
    <td height="5" align="center" valign="top" background="Images/topnav.gif"></td>
  </tr>
  <tr valign="middle">
    <td height="129" align="center" valign="top"><form id="form1" name="form1" method="post" action="">
      <table width="513" border="0" cellspacing="1" cellpadding="1">
        <tr>
          <td width="128" rowspan="3" align="right" valign="middle"><img src="Images/3.gif" width="135" height="130" />　 </td>
          <td width="92" height="30" align="right" valign="middle"><span class="STYLE3">登录名：</span></td>
          <td width="283" height="30" align="left" valign="middle"><input name="name" type="text" id="name" size="20" maxlength="20" style="width:100px" />
            *</td>
        </tr>
        <tr>
          <td height="30" align="right" valign="middle"><span class="STYLE3">密　码：</span></td>
          <td height="30" align="left" valign="middle"><input name="pass" type="password" id="pass" size="20" maxlength="20"  style="width:100px" />
            *</td>
        </tr>
        
        <tr>
          <td height="30" colspan="2" align="center" valign="middle"><input name="ok" type="submit" id="ok" value="　登　陆　" />
              &nbsp; <input type="reset" name="Submit2" value="　取　消　" onClick="javascript:window.openner='0';window.close();"/></td>
        </tr>
      </table>
    </form>    </td>
  </tr>
  <tr valign="middle">
    <td height="30" align="center" valign="middle" bgcolor="#efefef"><span class="STYLE3"> 版权所有 (C) 2007</span></td>
  </tr>
</table>
</body>
</html>