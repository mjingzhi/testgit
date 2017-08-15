<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>ͼƬͶƱϵͳphp 1.0 beta</title>
<link href="Style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?
require_once("sys_conf.inc");
include("Top.php");

$link_id=mysql_connect($DBHOST,$DBUSER,$DBPWD);
mysql_select_db($DBNAME);
mysql_query("SET NAMES 'GBK'");
$sql="Select * from info where id=".$_GET["id"];
$result=mysql_query($sql);
$row=mysql_fetch_object($result);
?>
<table width="765" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="765" border="0" align="left" cellpadding="0" cellspacing="0">

      <tr>
        <td height="180" align="left" valign="middle"><table width="765" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="30" align="center" valign="middle"><strong><? echo "$row->name"?></strong></td>
          </tr>
          <tr>
            <td height="150" align="left" valign="top"><? echo "$row->info"?></td>
          </tr>
        </table></td>
        </tr>
     
    </table></td>
  </tr>
</table>
<? include("foot.php");?>
</body>
</html>
