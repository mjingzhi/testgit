<?
session_start();
if (session_is_registered("tp"))
{
	echo "<script>alert('���Ѿ�Ͷ��Ʊ�ˣ����Ժ�����ͶƱ��');location='Default.php';</script>";
	exit;
}
else
{
	$tp="ok";
	session_register("tp");
}
require_once("sys_conf.inc");
$link_id=mysql_connect($DBHOST,$DBUSER,$DBPWD);
mysql_select_db($DBNAME);
mysql_query("SET NAMES 'GBK'");
$sql="update photo set p=p+1 where id=".$_GET["id"];
mysql_query($sql);
echo "<script>alert('ͶƱ�ɹ�');location='Default.php';</script>";
?>
