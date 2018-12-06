<?php 
  if(isset($_POST['login'])) {
    require_once('../conn.php');
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    $username = $_POST['username'];
    $password = $_POST['password'];
    $error = array();
    // $sqlselect = 'select * from thanhvien where tendangnhap ="'. $username. '"';
    $sqlselect = 'select * from thanhvien where tendangnhap ="'.$username.'"';
    $result = mysqli_query($conn, $sqlselect);
    $rows = mysqli_num_rows($result);
    if(!$rows){
      echo "Tên đăng nhập sai";
    }
    else {
      $user = mysqli_fetch_assoc($result);
      if (password_verify($password, $user['matkhau'])) { 
        header("Location: ../index.php");
      }
      else {
        $error['name'] = "Sai mật khẩu";
      }
    }
   mysqli_close($conn);
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Đăng Nhập</title>
  <link rel="stylesheet" type="text/css" href="dangnhap.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
</head>
<body>
  <form action="dangnhap.php" method="POST">
    <h2>Đăng Nhập</h2>
    
    <div class="form-signin">
      <label for="username"><i class="fas fa-user"></i></label>
      <input type="text" name="username" id="username" placeholder="Nhập tên đăng nhập">
    </div>
    
    <div class="form-signin">
      <label for="password"><i class="fas fa-lock"></i></label>
      <input type="password" name="password" id="password" placeholder="Nhập mật khẩu">
    </div>
    
    <input type="submit" class="btn" name="login" value="Đăng Nhập" />
    <p>Bạn chưa là thành viên? <a href="./dangky.php">Đăng Ký</a></p>
  </form>
</body>
</html>