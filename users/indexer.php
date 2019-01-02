<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Book Cookie</title>
</head>
<body>
	<div align="center">
 	 <link href="../assets/css/photo.css" rel="Stylesheet"/>
   	 <img src="../assets/img/BClogo.jpg" class="img1"/>
   	 <img src="../assets/img/shouye1.jpg" class="img2"/>
     <br><br><br><br><br><br><br>
          <a class=in1 href="index.php">首页</a>
          <a class=in2 href="../feedback/index.php">我想说</a>
           <?php 
            session_start();
            $name=$_SESSION["username"];
            ?>
           <a class=in3 href="show.php?name=<?php echo $name ?>"><?php echo $name ?></a>
           <a class=in4 href="../">注销</a>
           <br>
	</div><br><br><br><br><br><br><br><br><br><br> <br><br><br><br>
    <div align="center">
      <div class="container" style="z-index: 999" id="searchDiv">
        <div class="keyword-search">
            <form action="../lookup/index.php" method="post">
            <input  type="text" name="lookup" style="width: 200px;" required="required" placeholder="关键词:书名" />
             <input type="submit" name="submit" value="搜索" />
         </div>
      </div>
    </div><br><br><br>
    <div align="center">
          <a href="../daily_new/index.php">每日新书</a>
          <br>
          <a href="../books/index.php?mark=hot">经典书籍</a>
     </div> <br><br>
    <div align="center">
          <a class=t1 href="../books/index.php?catalog=1">图书</a>
          <a class=t2 href="../books/index.php?catalog=2">论文</a>
          <a class=t3 href="../books/index.php?catalog=3">报纸</a>
          <a class=t4 href="../books/index.php?catalog=4">古籍</a>
     </div>
</body>
</html>
