<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="dangky.css">
	<title>Đăng ký</title>
</head>
<body>

<?php
	require_once('check-signup.php');
?>

	<div class="container">
		<form action="dangky.php" name="sign-up" id="sign-up-member" method="POST">

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
		  	<label for="re-password">Xác nhận lại mật khẩu</label>
		  	<input type="password" class="form-control" name="re-password" placeholder="Nhập lại mật khẩu" value="<?php echo $rePassword ?>">
		  	<p><?php echo $error['rePassword'];?></p>
		  </div>
		  <button type="submit" class="btn btn-primary" name="login">Đăng Ký</button>
		</form>
	</div>
</body>
</html>