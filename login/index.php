<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="../css/loginstyle.css">
    <title>Document</title>
</head>
<body>
<h2></h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="register.php" method="post">
			<h1>Tạo tài khoản</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>hoặc bạn có thể dùng email của mình để đăng ký</span>
			<input type="text" name="fullname" placeholder="FullName" />
			<input type="text" name="username" placeholder="UserName" />
            <input type="password" name="password" placeholder="Password" />
			<input type="password" name="repassword" placeholder="Confirm Password" />
			<input type="email" name="email" placeholder="Email" />
			<input type="phone" name="phone" placeholder="Phone"/>
	
			<button type="submit" name="submit">Đăng Ký</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="login.php" method="post" >
			<h1>Đăng Nhập</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>hoặc sử dụng tài khoản của bạn</span>
           
			<input type="username" name="username" placeholder="Name" />
			<input type="password" name="password" placeholder="Password" />
        
			<a href="#">Quên mật khẩu?</a>
			<button type="submit" name="submit" value="Login">Đăng Nhập</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Chào mừng trở lại</h1>
				<p>Để giữ kết nối với chúng tôi, vui lòng đăng nhập bằng thông tin cá nhân của bạn</p>
				<button class="ghost" id="signIn">Đawg Nhập</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Chào Bạn!</h1>
				<p>Bạn có thể nhập thông tin cá nhân của mình để đăng ký</p>
				<button class="ghost" id="signUp">Đăng Ký</button>
			</div>
		</div>
	</div>
</div>
</body>
<script src="../script/login.js"></script>
</html>