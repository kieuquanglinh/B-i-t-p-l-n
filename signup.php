<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./signup.css">
	<title>Sign Up</title>
</head>
<body>

	<?php
		error_reporting(E_ERROR | E_WARNING | E_PARSE);
		require_once('check-signup.php');
		//check email
		if(!empty($_POST)) { 
			$error = array();
			$name = $_POST['name'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$telephone = $_POST['telephone'];
			$email = $_POST['email'];

			if(trim($name) == '') {
				$error['name'] = '<p class="error">Bạn chưa nhập họ tên</p>';
			}

			if(trim($username) == '') {
				$error['username'] = '<p class="error">Bạn chưa nhập tên tài khoản</p>';
			} else {
				if(checkSignUp($username, 'username') == false) {
					$error['username'] = '<p class="error"> Tên tài khoản không hợp lệ</p>';
					$username = '';
				}
			}

			if(trim($password) == '') {
				$error['password'] = '<p class="error">Bạn chưa nhập mật khẩu</p>';
			} else {
				if(checkSignUp($password, 'password') == false) {
					$error['password'] = '<p class="error"> Mật khẩu không hợp lệ</p>';
					$password = '';
				}
			}

			if(trim($email) == ''){
				$error['email'] = '<p class="error">Bạn chưa nhập email</p>';
			}else {
				if(checkSignUp($email, 'email') == false) {
					$error['email'] = '<p class="error">Email Không hợp lệ</p>';
					$email = '';
				}
			}

			if(trim($telephone) == '') {
				$error['telephone'] = '<p class="error">Bạn chưa nhập số điện thoại</p>';
			}
		}
	?>

	<div class="container mt-5">
		<form action="form-signup.php" name="sign-up" id="sign-up-member" method="POST">

		  <div class="form-group">
		    <label for="name">Họ Tên</label>
		    <input type="text" class="form-control" name="name" placeholder="Nhập họ tên" value="<?php echo $name ?>">
		     <p><?php echo $error['name'];?></p>
		  </div>

		  <div class="form-group">
		    <label for="username">Tên đăng nhập</label>
		    <input type="text" class="form-control" name="username" placeholder="Nhập tên đăng nhập" value="<?php echo $username ?>">
		     <p><?php echo $error['username'];?></p>
		  </div>

		  <div class="form-group">
		    <label for="password">Mật khẩu</label>
		    <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu" value="<?php echo $password ?>">
		    <p><?php echo $error['password'];?></p>
		  </div>

		  <div class="form-group">
		    <label for="email">Email</label>
		    <input type="text" 
		    		class="form-control" 
		    		id="email" 
		    		name="email" 
		    		placeholder="Nhập email" 
		    		value="<?php echo $email; ?>"/>
			<p><?php echo $error['email'];?></p>
		  </div>

		  <div class="form-group">
		    <label for="telephone">Số Điện Thoại</label>
		    <input type="text" class="form-control" name="telephone" placeholder="Nhập số điện thoại" value="<?php echo $telephone ?>">
		     <p><?php echo $error['telephone'];?></p>
		  </div>

		  <button type="submit" class="btn btn-primary">Đăng Ký</button>
		</form>
	</div>
</body>
</html>