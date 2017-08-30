<?
session_start();
if (!session_is_registered("tp"))
{
	echo "<script>alert('ฤ๚รปำะตวยผฃก');location='login.php';</script>";
	exit;
}
?>