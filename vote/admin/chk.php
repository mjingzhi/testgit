<?
session_start();
if (!session_is_registered("tp"))
{
	echo "<script>alert('��û�е�¼��');location='login.php';</script>";
	exit;
}
?>