<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>数据库</title>
</head>

<body>
 <?php
$con = mysql_connect("localhost", "root", "123456"); //连接数据库

if (!$con) {die('Could not connect: ' . mysql_error());}

mysql_select_db("abc", $con) or die('Could not connect: ' . mysql_error()); //选择数据库
mysql_query("SET NAMES UTF8"); //设置字符编码
?>
</body>
</html>