<!--upload_photo.php：上传图片--------------------------------------->
<html> 
<head> 
	<title>上传图片</title> 
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
		echo "<script>alert('格式只能为jpg或gif!');location='upload_photo.php';</script>";
	}
	$upfos -> upload ( $upfos -> newName());
	echo "<script>alert('上传成功!');parent.form1.pic.value='".$upfos -> UpFile() ."';</script>";
	
}
?> 
			<!--注意：这里必须加上‘enctype="multipart/form-data" ’，否则不会产生上传动作-->  
			<form action="upload_photo.php" method="post" enctype="multipart/form-data" name="UL"> 
<table width="100%" border="0" cellspacing="0" cellpadding="0" align="left" BGCOLOR="#F0F0F0"> 
	 
  <tr>  
		<td bgcolor="#FFFFFF">  

			图片源文件：		
          <input type="file" name="photo_dir" size="15" accept="upload_image/x-png,image/gif,image/jpeg">          <input type="Submit" name="upload" value="上传">	</td>
	</tr>
</table> 
	</form>
</body> 
</html>