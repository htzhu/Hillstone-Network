<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登录</title>
<link rel="stylesheet" href="css/main.css" />
<link rel="stylesheet" type="text/css" href="../css/login.css">
<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
</head>

<body oncontextmenu=self.event.returnValue=false onselectstart="return false">


 <div class="wrapper">

  <div class="materialContainer">
   <div class="box">
		<div class="title">登录</div>
		<form action="" method='post'>
		<div class="input">
			<label for="name">用户名</label>
			<input type="text" name="name" id="name">
			<span class="spin"></span>
		</div>
		<div class="input">
			<label for="pass">密码</label>
			<input type="password" name="password" id="pass">
			<span class="spin"></span>
		</div>
		<input type="submit" name='submit' id='submit'>
		</form>
	</div>
    
  </div>

  <?php
	 
	 if(isset($_POST['submit'])){//判断提交
		 
		 $name=trim($_POST['name']);
		 $password= trim($_POST['password']);
		 
		 include'db.php';
		 
		 $result=mysql_query("SELECT * FROM user WHERE name = '$name' and password = '$password' limit 1");
		 
		 if($result = mysql_fetch_row($result)){
			 echo "<script>alert(\"登录成功！\");window.location.href=\"admin.php\"; </script>";  
			} 
			else {  
				echo "<script>alert(\"登录失败！\"); </script>"; 
			}
	 }
	?>
	
  <ul class="bg-bubbles">
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
  </ul>
	
 </div>

 <script type="text/javascript" src="../js/jquery.min.js"></script>
 <script type="text/javascript" src="../js/login.js"> </script>

</body>
</html>