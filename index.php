<?php
include './proses/read.php';

if (isset($_POST['btntambah'])) {
  include './proses/create.php';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
  <link rel="stylesheet" href="./asset/style/styleindex.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <div class="kontainer">
    <div class="leftbar">
      <div class="wrapper1">
        <div class="itemlist">
          <a href="index.php">
            <img src="./asset/icon/clinic.svg" alt="" class="ikon logo">
            <span class="deskripsi-wrapper1">Super Clinic</span>
          </a>
        </div>

        <div class="gambar-utama">
          <img src="./asset/icon/clinic.png" alt="">
        </div>
      </div>

      <div class="mainn">
        <a href="index.php">
          <div class="itemlist">
            <img src="" alt="" class="icon">
            <span class="deskripsi">Home</span>
          </div>
        </a>
        <a href="obat.php">
          <div class="itemlist">
            <img src="" alt="" class="icon">
            <span class="deskripsi">Obat</span>
          </div>
        </a>
        <a href="alat.php">
          <div class="itemlist">
            <img src="" alt="" class="icon">
            <span class="deskripsi">Alat</span>
          </div>
        </a>
        <a href="login.php">
          <div class="itemlist">
            <img src="" alt="" class="icon">
            <span class="deskripsi">Keluar</span>
          </div>
        </a>

      </div>
    </div>

  </div>

  <div class="main-content">
    <h1><strong>Managemen Stok Super Klinik</strong></h1>
    <div class="card">
      <div class="card-header" style="height:300px">
        <h3 style="font-size:150px;margin-top:50px">Total Pendapatan</h3>
      </div>
      <div class="card-body d-flex justify-content-evenly" style="height:500px;">
        <div class="card mb-3" style="max-width: 650px;display:flex;justify-content:center">
          <div class="row g-0">
            <div class="col-md-4 dati">
              <img src="./asset/img/11015655Capture-800x487.png" class="img-fluid rounded-start dati" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Obat</h5>
                <p>Total Pendapatan Obat</p>
                <p class="card-text">
                  <?= 'Rp. ' . number_format($pemasukanobt, 0, ',', '.'); ?>
                </p>
                <button type="button" onclick="window.location.href='./obat.php'" class="btn btn-info">Info</button>
              </div>
            </div>
          </div>
        </div>
        <div class="card mb-3" style="max-width: 650px;display:flex;justify-content:center">
          <div class="row g-0">
            <div class="col-md-4 dati" style="background-color: aqua;">
              <img src="./asset/img/e005649ec6f2f47033f7a728c8c9aed5.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Alat</h5>
                <p>Total Pendapatan Alat</p>
                <p class="card-text">
                  <?= 'Rp. ' . number_format($pemasukanalt, 0, ',', '.'); ?>
                </p>
                <button type="button" onclick="window.location.href='./alat.php'" class="btn btn-info">Info</button>
              </div>
            </div>

          </div>

        </div>

      </div>
      <div class="card mb-3" style="max-width: 650px;display:flex;justify-content:center;width:350px">

        <div class="row g-0">
          <div class="col-md-8">
            <div class="card-body">
              <h2>Total Pendapatan Klinik</h2>
              <h3 class="card-text">
                <?= 'Rp. ' . number_format($total, 0, ',', '.'); ?>
              </h3>
            </div>
          </div>
        </div>

      </div>
      <footer class="footer fixed-bottom py-3 bg-light ">
        <div class="container text-center">
          <span class="text-muted">Muhammad Dani Nasution</span>
          <span class="text-muted">223510290</span>
          <span class="text-muted">Universitas Islam Riau</span>
        </div>
      </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"></script>
</body>

</html>