<?php
	ob_start();
	session_start();
	require_once("config.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<title>PHP+mysqlͶƱϵͳ</title>
<style type="text/css">
/*ȫ����ʽ*/
body { font-family: "����"; font-size: 12pt; color: #333333; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px;background-image: url(images/Zlppy_Bg.jpg);} 
table { font-family: "����"; font-size: 9pt; line-height: 20px; color: #333333}
a:link { font-size: 9pt; color: #333333; text-decoration: none} 
a:visited { font-size: 9pt; color: #333333; text-decoration: none} 
a:hover { font-size: 9pt; color: #E7005C; text-decoration: underline} 
a:active { font-size: 9pt; color: #333333; text-decoration: none} 
/*ȫ����ʽ����*/
</style>
<script language="javascript">
	function check()
	{
		node=frm.itm;
		flag=false;
		for(i=0;i<node.length;i++)
		{
			if(node[i].checked)
			{
				flag=true;
			}
		}
		if(!flag)
		{
			alert("��û��ѡ��")
			return false;
		}
		return true;
	}
</script>

<?php

    if($_POST["submit"]){
	
	if($_SESSION["vote"]==session_id())
	{
		?>
		<script language="javascript">
			alert("���Ѿ�ͶƱ��");
			location.href="index.php";
		</script>
		<?php
		exit();
	}
	$id=$_POST["itm"];
	$sql="update vote set count=count+1 where id=$id";
	if(mysql_query($sql))
	{
		$_SESSION["vote"]=session_id();
	?>
	<script language="javascript">alert("ͶƱ�ɹ�,��ȷ���鿴���");location.href="index.php?id=ck";</script>
	<?php
	}
	else
	{
	?>
	<script language="javascript">alert("ͶƱʧ��");location.href="index.php";</script>
	<?php
	}
}
?>

</head>
<body>
<form name="frm" action="" method="post" onsubmit=return(check()) style="margin-bottom:5px;">
<table width="365" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#C2C2C2">
<tr>
	<th bgcolor="#FFFFCC">
	<?php
		$sql="select * from votetitle";
		$rs=mysql_query($sql);
		$row=mysql_fetch_assoc($rs);
		echo $row["votetitle"];
	?>	</th>
</tr>
<?php
	$sql="select * from vote";
	$rs=mysql_query($sql);
	while($rows=mysql_fetch_assoc($rs))
	{
	?>
	<tr>
	  <td bgcolor="#FFFFFF"><input type="radio" name="itm" value="<?php echo $rows["id"]?>" />&nbsp;&nbsp;<?php echo $rows["item"]?></td>
	</tr>
	<?php
	}
?>
<tr>
	<td align="center" bgcolor="#FFFFFF"><input type="submit" name="submit" value="ͶƱ"/>
	<input type="button" value="�鿴���" onClick="location.href='index.php?id=ck'"/>&nbsp;&nbsp;<script type="text/javascript" src="http://www.04ie.com/net/cp.js"></script></td>
</tr>
</table>
</form>
<?php if($_GET["id"]=="ck"){?>

<?php
	$sql="select sum(count) as 'total' from vote";
	$rs=mysql_query($sql);
	$rows=mysql_fetch_assoc($rs);
	$sum=$rows["total"];	 //�ó���Ʊ��
	$sql="select * from vote";
	$rs=mysql_query($sql);
?>
<table width="365" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#C2C2C2">
<tr>
	<th bgcolor="#FFFFFF">��Ŀ</th>
	<th bgcolor="#FFFFFF">Ʊ��</th>
	<th bgcolor="#FFFFFF">�ٷֱ�</th>
</tr>
<?php
	while($rows=mysql_fetch_assoc($rs))
	{
	?>
	<tr>
		<td bgcolor="#FFFFFF"><?php echo $rows["item"]?></td>
		<td bgcolor="#FFFFFF"><?php echo $rows["count"]?></td>
		<td bgcolor="#FFFFFF">
			<?php
				$per=$rows["count"]/$sum;
				$per=number_format($per,4);
			?>
			<img src="100.jpg" height="4" width="<?php echo $per*100?>" />
			<?php echo $per*100?>%		</td>
	</tr>
	<?php
	}
?>
</table>
<div align="center">
<a href="index.php">���ؽ��</a>
</div>
<?php } ?>
</body>
</html>
