<!--upload_photo.php���ϴ�ͼƬ--------------------------------------->
<html> 
<head> 
	<title>�ϴ�ͼƬ</title> 
    <link href="Style.css" rel="stylesheet" type="text/css">
</head> 
<body>
<?php 
include("upload.php");
if (isset($_POST["upload"]))
{
	$upfos = new ieb_upload('photo_dir','upload_image'); 
	if ($upfos -> getExt() !="jpg" && $upfos -> getExt() !="gif")
	{
		echo "<script>alert('��ʽֻ��Ϊjpg��gif!');location='upload_photo.php';</script>";
	}
	$upfos -> upload ( $upfos -> newName());
	echo "<script>alert('�ϴ��ɹ�!');parent.form1.pic.value='".$upfos -> UpFile() ."';</script>";
	
}
?> 
			<!--ע�⣺���������ϡ�enctype="multipart/form-data" �������򲻻�����ϴ�����-->  
			<form action="upload_photo.php" method="post" enctype="multipart/form-data" name="UL"> 
<table width="100%" border="0" cellspacing="0" cellpadding="0" align="left" BGCOLOR="#F0F0F0"> 
	 
  <tr>  
		<td bgcolor="#FFFFFF">  

			ͼƬԴ�ļ���		
          <input type="file" name="photo_dir" size="15" accept="upload_image/x-png,image/gif,image/jpeg">          <input type="Submit" name="upload" value="�ϴ�">	</td>
	</tr>
</table> 
	</form>
</body> 
</html>