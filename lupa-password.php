<?php
include 'assets/koneksi/koneksi.php';
if (isset($_POST['btngantipassword'])) {
	$passwordbaru=htmlspecialchars($_POST['passwordbaru']);
	$konfirmpasswordbaru=htmlspecialchars($_POST['konfirmpasswordbaru']);
	if ($konfirmpasswordbaru !== $passwordbaru) {
		echo "<script>
		alert('Konfirmasi password yang anda ketikkan harus sama!');
		history.go(-1);
		</script>";
	}else {
		echo "<script>
		alert('OK');
		history.go(-1);
		</script>";
	}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TokoKu - Halaman Lupa Password</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/dist/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary p-0">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-5">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">TokoKu | Ganti Password</h1>
                                    </div>
                                    <form class="user" method="post" autocomplete="off">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="username" aria-describedby="emailHelp" placeholder="Username" name="username" required autofocus>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="passwordlama" placeholder="Password Lama (Opsional)" name="passwordlama" autofocus>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="passwordbaru" placeholder="Password Baru" name="passwordbaru" autofocus required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="konfirmpasswordbaru" placeholder="Konfirmasi Password" name="konfirmpasswordbaru" autofocus required>
                                        </div>
                                        <button class="btn btn-primary btn-user btn-block" name="btn-login" type="submit">
                                            Ganti Password
                                        </button>
                                        <a href="index.php" class="btn btn-secondary btn-user btn-block" type="button">
                                            Kembali ke halaman login
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    </div>
    <p class="mt-0 text-center text-white">
      Copyright &copy; <?php echo date('Y') ?> by <a href="" class="text-white">TokoKu</a>.All rights reserved.
    </p>

  </div>
    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/dist/js/sb-admin-2.min.js"></script>

</body>

</html>