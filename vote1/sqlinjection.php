<html>
<head>
<title>Sql注入演示</title>
<meta http-equiv="content-type"content="text/html;charset=utf-8">
</head>
<body>
<form action="validate.php" method="post">
  <fieldset >
      <legend>Sql注入演示</legend>
          <table>
	        <tr>
		   <td>用户名：</td>
	           <td><input type="text" name="username"></td>
	        </tr>
	        <tr>
                  <td>密  码：</td>
                  <td><input type="text" name="password"></td>
                </tr>
	       <tr>
	       <td><input type="submit" value="提交"></td>
	       <td><input type="reset" value="重置"></td>
	       </tr>
	    </table>
   </fieldset>
   </form>
   </body>
  </html>
