<?php
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	//kết nối database
	$hostname = 'localhost';
	$userhost = 'root';
	$password = '';
	$dbname = 'qlydetai';
	$conn = mysqli_connect($hostname, $userhost, $password, $dbname);
		if(!$conn) {
			die("Connection failed: ". mysqli_connect_error());
		}
	mysqli_set_charset($conn, "UTF8");
	require_once('check-func-sign.php');
	if(!empty($_POST)) { 
		$error = array();
		$check = 1;
		$username = $_POST['username'];
		$password = $_POST['password'];
		$rePassword = $_POST['re-password'];
		// kiểm tra tên đăng nhập
		if(trim($username) == '') {
			$error['username'] = '<p class="error">Bạn chưa nhập tên tài khoản</p>';
		} else {
			if(checkSignUp($username, 'username') == false) {
			$error['username'] = '<p class="error"> Tên tài khoản không hợp lệ</p>';
				$username = '';
			} else $check = 0;
		}
		//kiểm tra mật khẩu
		if(trim($password) == '') {
			$error['password'] = '<p class="error">Bạn chưa nhập mật khẩu</p>';
		} else {
			if(checkSignUp($password, 'password') == false) {
				$error['password'] = '<p class="error"> Mật khẩu không hợp lệ</p>';
				$password = '';
			}  else $check = 0;
		}
		//kiểm tra mật khẩu nhập lại
		if(trim($rePassword) == '') {
			$error['rePassword'] = '<p class="error">Bạn chưa nhập mật khẩu</p>';
		} else {
			if(!($rePassword == $password)) {
				$error['password'] = '<p class="error"> Mật khẩu không khớp</p>';
				$error['rePassword'] = '<p class="error"> Mật khẩu không khớp</p>';
				$rePassword = '';
			}  else $check = 0;
		}
		if( $check == 0){
			$hashAndSalt = password_hash($password, PASSWORD_BCRYPT);
	
			$sqlinsert = 'INSERT INTO thanhvien(tendangnhap, matkhau) VALUES ("'.$username.'", "'. $hashAndSalt.'")';
			$insert = mysqli_query($conn, $sqlinsert);
			if($insert) {
				echo "Thêm thành công";
			}else {
				echo "thêm thất bại";
			}
		}
	}
	mysqli_close($conn);
?>