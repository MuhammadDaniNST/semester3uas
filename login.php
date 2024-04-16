<?php
include './proses/koneksi.php';

if (isset($_POST["login"])) {
    $user = $_POST["username"];
    $pw = $_POST["password"];

    $sql1 = mysqli_query($kon, "SELECT * FROM user WHERE nama='$user'");

    if (mysqli_num_rows($sql1) === 1) {
        $row = mysqli_fetch_assoc($sql1);

        if ($pw == $row["password"]) {
            header("location: index.php");
            exit;
        } else {
            echo '<script>alert("Password salah");</script>';
        }
    } else {
        echo '<script>alert("Tidak ada username");</script>';
    }
}
?>

<!-- USERNAME : dani123 -->
<!-- Password : dani123 -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Management Data Lurah Marpoyan Damai</title>
  <link rel="stylesheet" href="./asset/style/style.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  
</head>
<body>
  <div class="wrapper">
    <form action="" method="post">
      <h1>Login</h1>
      <div class="input-box">
        <input type="text"name="username" placeholder="Username" required>
        <i class='bx bxs-user' ></i>
      </div>
      <div class="input-box">
        <input type="password" name="password" placeholder="Password" required>
        <i class='bx bxs-lock-alt' ></i>            </div>
      <button type="submit" class="btn" name="login">Login</button>
    </form>
  </div>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>
</html>