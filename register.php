<?php
include "koneksi.php";

if (isset($_POST['register'])) {
  $username = $_POST['username'];
  $password = $_POST['Password'];
  $email = $_POST['email'];
  $namalengkap = $_POST['namalengkap'];
  $alamat = $_POST['alamat'];

  // echo $username." ".$password." ". $email." ". $namalengkap." ".$alamat;
  $sql=mysqli_query($conn,"insert into user values('','$username','$password','$email','$namalengkap','$alamat')");
  echo "<script>
  alert ('register berhasil, silahkan login');
  location.href='login.php';
</script> ";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web galery foto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>

<body>
<?php 
include "layout/header.html";
?>

<div class="container">
  <div class="row d-flex justify-content-center mb-5">
    <div class="col-sm-4 mt-2">
      <h1 class="text-center" style="color:blue;">Register</h1>
    <form action="register.php" method="POST">
  <div class="mb-3 mt-3">
    <label for="username" class="form-label" style="color:white;">username:</label>
    <input type="text" class="form-control" id="username" placeholder="username" name="username">
  </div>
  <div class="mb-2 mt-2">
    <label for="password" class="form-label" style="color:white;">Password:</label>
    <input type="Password" class="form-control" id="Password" placeholder="Password" name="Password">
  </div>
  <div class="mb-2 mt-2">
    <label for="email" class="form-label" style="color:white;">E-mail:</label>
    <input type="text" class="form-control" id="email" placeholder="E-mail" name="email">
  </div>
  <div class="mb-2">
    <label for="namalengkap" class="form-label" style="color:white;">Nama lengkap:</label>
    <input type="text" class="form-control" id="namalengkap" placeholder="namalengkap" name="namalengkap">
  </div>
  <div class="mb-2">
    <label for="alamat" class="form-label" style="color:white;">alamat:</label>
    <input type="text" class="form-control" id="alamat" placeholder="alamat" name="alamat">
  </div>
  <button type="submit" class="btn btn-primary" name="register">register</button>
  <div class="mb-2">
    <p>sudah punya akun? <a href="login.php">klik disini</a></p>
</form>
    </div>
  </div>
</div>



  <?php 
include "layout/footer.html";
  ?> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>