<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
<title>公司新闻</title>

<link rel="stylesheet" href="../css/main.css" />
<link rel="stylesheet" href="../css/minor.css" />
<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">

</head>

<body>

 
 <!--logo-->
 <div class="logo">
 
  <img src="../images/timg.jpg">
  
  <ul>
   
   <a href="homepage.php">
    <li id="home">
     <i class="fa fa-home" aria-hidden="true"></i>
     <span>首页</span>
    </li>
   </a>
   
   <a href="outline.php?id=school">
    <li>
     <span>企业概览</span>
    </li>
   </a>
   
   <a href="outline.php?id=mechanism">
    <li>
     <span>组织机构</span>
    </li>
   </a>
   
   <a href="outline.php?id=personnel">
    <li>
     <span>企业环境</span>
    </li>
   </a>
   
  </ul>
  
 </div>
 
 
 <!--轮播图-->
 <div class="focus">
   <ul>
     
     <li>
	  <img src="../images/outline1.jpg"/>
     </li>
     
     <li>
	  <img src="../images/outline2.jpg"/>
     </li>
     
     <li>
	  <img src="../images/outline3.jpg"/>
     </li>
     
     <li>
	  <img src="../images/outline4.jpg"/>
     </li>
    
   </ul>
  </div>

  <!--返回顶部-->
  <div class="back" hidden title="返回顶部">
   <img src="../images/back.png">
  </div>
  
  <div class="body">
  
  
  
  
   <div class=" outline_body">
  
    <div class="head">
     <a href="homepage.php" title='首页'><i class='fa fa-home' id="icon"></i></a>
     <i class='fa fa-angle-right'></i>
     <span>公司新闻</span>
     <hr>
    </div>
   
    <div class="newsb">
    
     <?php
	 include'db.php'; 
    $sql="SELECT * FROM `news`";
    $result = mysql_query($sql) or die(mysql_error());
	while($row = mysql_fetch_array($result)){
   ?>
   
   <a href="news_information.php?src=<?php echo $row['textsrc']; ?>">
   <div class="news_card" id="<?php echo $row['textsrc'];?>">
    <img src="../images/news/<?php echo $row['img']; ?>">
    <h3><?php echo $row['name']; ?></h3>
    
    <?php
	  $file_path = "../information/news/".$row['textsrc'].".txt";
      if(file_exists($file_path)){
      $fp = fopen($file_path,"r");
	   while(!feof($fp)) {
        echo "<p>";
        $str = fread($fp,filesize($file_path));//指定读取大小，这里把整个文件内容读取出来
        $str=str_replace("\r\n","</p><p>",$str);
		echo $str;
	  }
	  fclose($fp);
	 }
	?>
   </div>
   </a>
   
   <?php } ?>
    
    </div>
  
   </div>
  
  
  <!--底部-->
  <div class="foot">
   <p>
    企业地址：广东省广州市花都区狮岭镇学府路1号网工设计第二组工作室<br>
    邮编：123456&nbsp;&nbsp;咨询电话：666666<br>
    网站制作及维护：网工设计第二组工作室<br>
    2020 © 山石网科有限公司 版权所有 粤222号1246578-9
   </p>
  </div>
  
  </div>
 
 <script type="text/javascript" src="../js/jquery.min.js"></script>
 <script type="text/javascript" src="../js/slides.js" ></script>
 <script type="text/javascript" src="../js/main.js" ></script>

</body>
</html>