<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理员操作</title>
<link rel="stylesheet" href="../css/admin.css">

</head>

<body>

   <h1>后台管理</h1>

   
   <div class='border'>
<?php
   include'db.php';
	
	
	if(isset($_GET['id'])){
        $id=$_GET['id'];		
	}
	else{
		$id='insert';
	}
?>

   <div class='do'>
       <p><a href='admin.php?id=insert'>insert</p></a><br>
       <p><a href='admin.php?id=delete'>delete</a></p><br>
       <p ><a href='admin.php?id=update'>update</a></p>

   </div>

       <form action="" method='post'>
           <?php
           if($id=='insert'){
           ?>
           <input type="text" name='newid' placeholder='请输入id' required><br>
           <input type="text" name='name' placeholder='请输入标题' required><br>
           <input type="text" name='img' placeholder='请输入图片名' required><br>
           <input type="text" name='textsrc' placeholder='请输入文件名' required><br>
           <input type="submit" name='submit' id='insert'>
           <?php } ?>

           <?php
           if($id=='delete'){
           ?>
           <input type="text" name='newid' placeholder='请输入id' required><br>
           <input type="submit" name='submit'>
           <?php } ?>

           <?php
           if($id=='update'){
           ?>
           <input type="text" name='newid' placeholder='请输入id' required><br>
           <input type="text" name='name' placeholder='请输入标题' required><br>
           <input type="text" name='img' placeholder='请输入图片名' required><br>
           <input type="text" name='textsrc' placeholder='请输入文件名' required><br>
           <input type="submit" name='submit'>
           <?php } ?>

           <?php

           if(isset($_POST['submit'])){//判断提交
         
        if($id=='insert' or $id=='update'){
            $newid=$_POST['newid'];
            $name=$_POST['name'];
            $img=$_POST['img'];
            $textsrc=$_POST['textsrc'];
        }
        else{
            if($id=='delete'){
                $newid=$_POST['newid'];
            }
        }
            
            include'db.php';
            
            if($id=='insert'){
                $sql="INSERT INTO news VALUES ({$newid},'{$name}','{$img}.jpg','{$textsrc}')";
            }

            if($id=='delete'){
                $sql="DELETE FROM news WHERE id={$newid}";
            }

            if($id=='update'){
                $sql="UPDATE news SET name='{$name}',img='{$img}.jpg',textsrc='{$textsrc}' WHERE id={$newid}";
            }
   
            
            if (mysql_query($sql)){
               echo '<script type="text/javascript">alert("成功"); </script>';
            }
            else{
                echo '<script type="text/javascript">alert("失败");</script>';
            }
        }
       ?>

       </form>

   </div>


</body>
</html>
