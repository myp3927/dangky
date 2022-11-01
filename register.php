<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="style.css"/>
</head>
<body>

<form method="post" action="register.php" class="form">

<h2>Sign up</h2>

Email: <input type="email" id="email" name="email" placeholder="Nhập email của bạn" value="" required/></br></br>

Password: <input type="password" id="password" name="password" placeholder="Nhập mật khẩu trên 6 ký tự" value="" required/></br></br>

Phone: <input type="tel" id="phone" name="phone" placeholder="Nhập số điện thoại của bạn" value="" required/></br></br>

Date of birth: <input type="date" id="birthday" name="birthday" value="" required/></br></br>


<input type="submit" name="dangky" value="Register"/></br>
<?php require 'xuly.php';?>
</form>

</body>
</html>
