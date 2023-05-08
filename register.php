<?php 

// include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
 $username = $_POST['username'];
 $email = $_POST['email'];
 $password = md5($_POST['password']);
 $cpassword = md5($_POST['cpassword']);

 if ($password == $cpassword) {
  $sql = "SELECT * FROM users WHERE email='$email'";
  $result = mysqli_query($conn, $sql);
  if (!$result->num_rows > 0) {
   $sql = "INSERT INTO users (username, email, password)
     VALUES ('$username', '$email', '$password')";
   $result = mysqli_query($conn, $sql);
   if ($result) {
    echo "<script>alert('Selamat, registrasi berhasil!')</script>";
    $username = "";
    $email = "";
    $_POST['password'] = "";
    $_POST['cpassword'] = "";
   } else {
    echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
   }
  } else {
   echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
  }
  
 } else {
  echo "<script>alert('Password Tidak Sesuai')</script>";
 }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TokoKu-Sign Up</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/css/custom.css">
    <link rel="stylesheet" href="./assets/css/font-awesome.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="./assets/sbadmin/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
 <div class="container">
  <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
   <div class="input-group">
    <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
   </div>
   <div class="input-group">
    <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
   </div>
   <div class="input-group">
    <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
    <input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
   </div>
   <div class="input-group">
    <button name="submit" class="btn">Register</button>
   </div>
   <p class="login-register-text">Anda sudah punya akun? <a href="index.php">Login </a></p>
  </form>
 </div>
</body>
</html>