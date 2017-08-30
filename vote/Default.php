<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>图片投票系统php 1.0 beta</title>
<link href="Style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?
require_once("sys_conf.inc");
include("Top.php");
?>
<table width="765" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="765" border="0" align="left" cellpadding="0" cellspacing="0">

      <tr>
        <td height="180" align="left" valign="middle">
<?
$link_id=mysql_connect($DBHOST,$DBUSER,$DBPWD);
mysql_select_db($DBNAME);
mysql_query("SET NAMES 'GBK'");
$sql="Select * from Photo order by id desc";
$result=mysql_query($sql);
$i=0;
while ($row=mysql_fetch_object($result))
{
$i++;
?>
<table width="150" border="0" align="left" cellpadding="0" cellspacing="0">
          <tr><td height="25"><table width="150" border="0" align="left" cellpadding="0" cellspacing="0">
            <tr><td height="20" colspan="2" align="center" valign="middle"><table width="150" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="6" colspan="3" background="images/border_top.gif"></td>
          </tr>
          <tr>
            <td width="6" rowspan="2" background="images/border_Left.gif">&nbsp;</td>
            <td height="90" align="center" valign="middle"><a href="View.asp?id="></a> <a href="View.php?id=<? echo "$row->id" ?>"><img src="upload_image/<? echo "$row->pic"?>" width="120" height="90" border="0" /></a></td>
            <td width="6" rowspan="2" background="images/border_Right.gif">&nbsp;</td>
          </tr>
          <tr>
            <td height="25"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="20" colspan="2" align="center" valign="middle">&nbsp;<? echo "$row->name"; ?></td>
                </tr>
                <tr>
                  <td width="50%" height="20" align="center" valign="middle"><a href="Vote.php?id=<? echo "$row->id" ?>"><img src="images/1.gif" width="52" height="18" border="0" /></a></td>
                  <td width="50%" align="center" valign="middle"><a href="View.php?id=<? echo "$row->id" ?>"><img src="images/2.gif" width="52" height="18" border="0" /></a></td>
                </tr>
                <tr>
                  <td height="20" colspan="2" align="center" valign="middle">得<? echo "$row->p";?>票</td>
                </tr>
            </table></td>
          </tr>
          <tr>
            <td height="6" colspan="3" background="images/border_bottom.gif"></td>
          </tr>
        </table></td>
                </tr>
        </table></td>
          </tr>
        </table>
<?
if ($i%5==0)
	echo "<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />";
}
?></td>
        </tr>
     
    </table></td>
  </tr>
</table>
<? include("foot.php");?>
</body>
</html>
