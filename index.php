<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>login | BC </title>
</head>
<body>
  <div align="center">
    <link href="assets/css/photo.css" rel="Stylesheet"/>
     <img src="assets/img/BClogo.jpg" class="img1"/><br><br><br><br><br><br>
     <h1>登陆</h1>
  <form action="login/login.php" method="post">  
    账号：<input type="text" name="username" />  
    <br><br>
    密码：<input type="password" name="password" />
    <br><br>
  	<img src="login/image_captcha.php"  onclick="this.src='login/image_captcha.php?'+new Date().getTime();" width="250" height="100"><br>点击二维码重新获取<br/><br>  
    <input type="text" name="captcha" placeholder="请输入图片中的验证码"><br><br>
    <input  type="radio" required="required"  name="submit"  value="用户登陆" />用户登陆 
    <input  type="radio" required="required"  name="submit" value="管理员登陆" /> 管理员登陆 <br><br><br>
    <input type="submit"  value="        登 陆     	" /> 
    <br><br><br><br>
    没有账号？快来<a href="login/register.php"> 注册  </a>吧!
   <div>
</form>
</body>
</html>
