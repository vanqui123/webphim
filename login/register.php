<?php session_start();
require "../config.php";
require "../model/db.php";
require "../model/user.php";
$user = new User;

if(isset($_POST['submit'])){
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repasssword = $_POST['repassword'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $repasssword = md5($repasssword);

    $role = 2;
    if($user->checkUsername($username)){
        echo "<script>alert('Username đã tồn tại..!')</script>";

    } elseif($user->checkEmail($email)){
        echo "<script>alert('Email đã tồn tại..!')</script>";
    } elseif(md5($password) == $repasssword){
        $user->register($username,$password,$fullname,$email,$phone,$role);
        echo "<script>alert('Đăng kí thành công!!Trở về trang đăng nhập..!')</script>";
        echo "<script>window.location = 'index.php'</script>";
    } else {
        echo "<script>alert('Mật khẩu không trùng nhau..!')</script>";
    }
    echo "<script>window.location = 'index.php'</script>";


}