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

$link_id=mysql_connect($DBHOST,$DBUSER,$DBPWD);
mysql_select_db($DBNAME);
mysql_query("SET NAMES 'GBK'");
$sql="Select * from Photo where id=".$_GET["id"];
$result=mysql_query($sql);
$row=mysql_fetch_object($result);
?>
<table width="765" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="765" border="0" align="left" cellpadding="0" cellspacing="0">

      <tr>
        <td height="180" align="left" valign="middle"><table width="765" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td colspan="2"><table width="50" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="22" height="17"><img src="images/t1.gif" width="22" height="17" /></td>
                <td height="17" background="images/ttb.gif"><img src="images/ttb.gif" width="1" height="17" /></td>
                <td width="21" height="17"><img src="images/t2.gif" width="21" height="17" /></td>
              </tr>
              <tr>
                <td width="22" background="images/tlb.gif"><img src="images/tlb.gif" width="22" height="1" /></td>
                <td><img src="upload_image/<? echo "$row->pic"?>" border="0" /></td>
                <td width="21" background="images/trb.gif"><img src="images/trb.gif" width="21" height="1" /></td>
              </tr>
              <tr>
                <td width="22" height="22"><img src="images/t4.gif" width="22" height="22" /></td>
                <td height="22" background="images/tfb.gif"><img src="images/tfb.gif" width="1" height="22" /></td>
                <td width="21" height="22"><img src="images/t3.gif" width="21" height="22" /></td>
              </tr>
            </table></td>
            </tr>
          <tr>
            <td width="100" height="25">名称</td>
            <td height="25">&nbsp;<? echo "$row->name"?></td>
          </tr>
          <tr>
            <td height="25">说明</td>
            <td height="25">&nbsp;<? echo "$row->info"?></td>
          </tr>
          <tr>
            <td height="25">上传时间</td>
            <td height="25">&nbsp;<? echo "$row->addtime"?></td>
          </tr>
          <tr>
            <td height="25" colspan="2" align="center"><a href="Vote.php?id=<? echo "$row->id" ?>"><img src="images/1.gif" width="52" height="18" border="0" /></a></td>
            </tr>
        </table></td>
        </tr>
     
    </table></td>
  </tr>
</table>
<? include("foot.php");?>
</body>
</html>
