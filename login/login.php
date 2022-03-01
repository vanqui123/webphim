<?php 
session_start();
require "../config.php";
require "../model/db.php";
require "../model/user.php";
$user = new User;

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(!$username || !$password){
        echo "<script>alert('Vui lòng điền đầy đủ thông tin..!')</script>";
        echo "<script>window.location = 'index.php'</script>";
        exit;
    }
    if($user->checkLogin($username,$password)){
        $_SESSION['user'] = $username;
        $getroles = $user-> checkRoles($username);
        foreach($getroles as $value){
            $_SESSION['id'] = $value['roles'];
        }
        if($_SESSION['id']==1){
            header('location:../admin');
        }else{
            header('location:../index.php');
        }
    }else
    echo "<script>alert('Tài Khoản hoặc mật khẩu sai..!')</script>";
    echo "<script>window.location = 'index.php'</script>";
}

