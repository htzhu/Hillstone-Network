<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
<title>山石网科首页</title>

<link rel="stylesheet" href="../css/main.css" />
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

   <a href="mechanism.php">
    <li>
     <span>业务部门</span>
    </li>
   </a>

   <a href="outline.php?id=personnel">
    <li>
     <span>培养计划</span>
    </li>
   </a>

   <a href="login.php">
    <li>
     <span>登录</span>
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


  <!--锚点跳转导航-->
  <div class="nav">

   <div class="theme onetheme" id="community">
    <img src="../images/community.png" alt="行业案例" title="行业案例">
    <h3>行业案例</h3>
    <span>查看更多行业成功案例</span>
   </div>

   <div class="theme fourththeme" id="science">
    <img src="../images/science.png" alt="技术研发" title="技术研发">
    <h3>技术研发</h3>
    <span>学习延续辉煌<br>创新改变查看更多行业成功案例未来</span>
   </div>

   <div class="theme secondtheme" id="news">
    <img src="../images/news.png" alt="动漫创作" title="动漫创作">
    <h3>公司新闻</h3>
    <span>网罗公司<br>内外资讯</span>
   </div>

   <div class="theme thirdtheme" id="communication">
    <img src="../images/communication.png" alt="动漫实体 " title="动漫实体">
    <h3>合作共赢</h3>
    <span>战略合作伙伴<br>技术合作伙伴</span>
   </div>

  </div>

  <?php
include 'db.php';
?>

  <!--公司新闻-->
  <div class="news">

   <h1>公司新闻</h1>
   <a href="news.php"><img src="../images/more.png" alt="更多" title="更多" id="more"></a>

   <?php
$sql = "SELECT * FROM `news` limit 0,4";
$result = mysql_query($sql) or die(mysql_error());
while ($row = mysql_fetch_array($result)) {
    ?>


   <div class="news_card" id="<?php echo $row['textsrc']; ?>">
    <img src="../images/news/<?php echo $row['img']; ?>">
    <a href="news_information.php?src=<?php echo $row['textsrc']; ?>"><h3><?php echo $row['name']; ?></h3></a>

    <?php
$file_path = "../information/news/" . $row['textsrc'] . ".txt";
    if (file_exists($file_path)) {
        $fp = fopen($file_path, "r");
        while (!feof($fp)) {
            echo "<p>";
            $str = fread($fp, filesize($file_path)); //指定读取大小，这里把整个文件内容读取出来
            $str = str_replace("\r\n", "</p><p>", $str);
            echo $str;
        }
        fclose($fp);
    }
    ?>
   </div>


   <?php }?>

  </div>

  <!--合作共赢-->
  <div class="communication">

   <div class="communication_body">
    <p><?php echo $row['synopsis']; ?></p>

   </div>

  </div>

  <!--行业案例-->
  <div class="community">

   <h1>行业案例</h1>
   <div class="community_body">

    <a>
    <div class="community_list">
     <img src="../images/community/ipv6.jpg">
     <span>华南地区高校首个IPv6项目上线<br><br>广东第二师范学院采购山石网科应用交付AX系列设备，顺利将系统从IPv4升级到IPv6，提供真正的高稳定、高性能、零打扰的智能网络设备。</span>
    </div>
    </a>

    <a>
    <div class="community_list">
     <img src="../images/community/banner_gydx.jpg">
     <span>全链条式方案为疾控中心保驾护航<br><br>此次网络安全升级改造不仅在传统网络边界上做了安全防护，而且在疾控中心内网、数据、运维审计等方面均做了安全加固，真正做到了威胁可知、安全可控、信息可信。</span>
    </div>
    </a>

    <a>
    <div class="community_list">
     <img src="../images/community/jk-首页.jpg">
     <span>X10800守护河南工业大学<br><br>通过在学校互联网总出口部署山石网科X10800高性能安全防护平台，全面实现防火墙超高的吞吐量、并发连接数量和新建连接速率，全面保障了学校内部网络的安全。</span>
    </div>
    </a>

    <a>
    <div class="community_list">
     <img src="../images/community/new2.jpg">
     <span>杨庆华荣获尖峰训练营“优秀尖锋导师奖”<br><br>2020年9月11日，黄鹤杯网络安全人才与创新峰会网络安全人才培养与需求论坛上，山石网科高级副总裁、首席技术专家 、安全技术研究院院长杨庆华获得优秀尖锋导师奖</span>
    </div>
    </a>

   </div>

  </div>

  <!--技术研发-->
  <div class="science">

   <h1>技术研发</h1>

   <div class="science_body">

    <ul>

     <li id="pen">
      <i>连续六年 实力验证</i>
      <p>
      全球知名咨询机构Gartner发布了最新的2019年全球网络防火墙魔力象限报告。山石网科凭借持续的技术创新以及在国内外市场的优异表现连续第六年再次入选。在此之前，入侵检测与防御产品均连续多年入选IDPS魔力象限和选购指南，山石智·感成为国内唯一入选NTA选购指南的产品。
    </p>
      <img src="../images/science/f1.png" style="right:-15%;top:-8%;">
     </li>

     <li id="maya" hidden>
      <i>网络防火墙客户选择榜单</i>
      <p>全球权威咨询机构Gartner正式发布Peer Insights 2020年网络防火墙客户选择榜单。山石网科凭借多年以来为客户提供的先进可靠的产品、专业真诚的服务，成为中国唯一一家、也是全球仅有的5家入选厂商。在满分5分的客户评分中，山石网科获得了4.8分的高分，在入选厂商中高居第一。</p>
      <img src="../images/science/f2.png" style="right:-20%;">
     </li>

     <li id="game" hidden>
      <i>新世纪研发中心</i>
      <p>新世纪研究中心主要从事游戏开发方面的研究，协助公司完成客户交托的项目，主要负责甲方游戏开发进程中动画设计、视效开发等方面。在完成公司交代的项目之余，公司将投入大量创新资金，助力新技术研究开发。</p>
      <img src="../images/science/f3.png">
     </li>

    </ul>
   </div>

   <div class="science_foot">
    <img src="../images/science/pen.png" id="pen" title="神笔工程">
    <img src="../images/science/maya.png" id="maya" title="Maya动画工作室">
    <img src="../images/science/game.png" id="game" title="新世纪研发中心">
   </div>

  </div>


  <!--底部-->
  <div class="footer">
   <p>
    企业地址：广东省广州市花都区狮岭镇学府路1号网工设计第二组工作室<br>
    邮编：123456&nbsp;&nbsp;咨询电话：666666<br>
    网站制作及维护：网工设计第二组工作室<br>
    2020 © 山石网科有限公司 版权所有 粤222号1246578-9
   </p>
  </div>

  <!--返回顶部-->
  <div class="back" hidden title="返回顶部">
   <img src="../images/back.png">
  </div>

 <script type="text/javascript" src="../js/jquery.min.js"></script>
 <script type="text/javascript" src="../js/slides.js" ></script>
 <script type="text/javascript" src="../js/main.js" ></script>

</body>
</html>