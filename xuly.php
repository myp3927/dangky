<?php
header('Content-Type: text/html; charset=utf-8');
// Kết nối cơ sở dữ liệu
$conn = mysqli_connect('localhost', 'root', '', 'data') or die ('Lỗi kết nối'); mysqli_set_charset($conn, "utf8");

// Dùng isset để kiểm tra Form
if(isset($_POST['dangky'])){
$email = trim($_POST['email']);
$password = trim($_POST['password']);
$phone = trim($_POST['phone']);
$birthday = trim($_POST['birthday']);

if (empty($email)) {
array_push($errors, "Email is required"); 
}

if (empty($password)) {
array_push($errors, "Two password do not match"); 
}

if (empty($phone)) {
array_push($errors, "Password is required"); 
}

if (empty($birthday)) {
array_push($errors, "Date of birth is required"); 
}


// Kiểm tra email có bị trùng hay không
$sql = "SELECT * FROM member WHERE email = '$email'";

// Thực thi câu truy vấn
$result = mysqli_query($conn, $sql);

// Nếu kết quả trả về lớn hơn 1 thì nghĩa email đã tồn tại trong CSDL
if (mysqli_num_rows($result) > 0)
{
echo '<script language="javascript">alert("Bị trùng tên hoặc chưa nhập tên!"); window.location="register.php";</script>';

// Dừng chương trình
die ();
}
else {
$sql = "INSERT INTO member (email, password, phone, birthday) VALUES ('$email','$password','$phone', '$birthday')";
echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="register.php";</script>';

if (mysqli_query($conn, $sql)){
echo "Email đăng nhập: ".$_POST['email']."</br>";
echo "Mật khẩu: " .$_POST['password']."</br>";
echo "Số điện thoại: ".$_POST['phone']."</br>";
echo "Ngày sinh: ".$_POST['birthday']."</br>";
}
else {
echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="register.php";</script>';
}
}
}
?>