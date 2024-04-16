<?php
include './proses/read.php';
include './proses/create.php';
include './proses/koneksi.php';
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
  <!-- AWALAN MODAL TAMBAH -->
  <div class="modal fade" id="modtam" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="./proses/create.php" method="POST">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
              <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Stok Barang</label>
              <input type="text" name="stok" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Harga Barang</label>
              <input type="text" name="harga" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="modal-footer">
              <button type="button-danger" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" name="tambahobat">Tambah</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- AKHIRAN MODAL -->


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
        <h3 style="font-size:150px;margin-top:50px">Obat</h3>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modtam"
          name="add">TambahData</button>

      </div>
      <div class="card-body d-flex justify-content-evenly"
        style="height:900px;background-image:url(./asset/img/Background-Aesthetic-HD-1.webp);background-size:cover">
        <div class="container">
          <table class="table table-hover table table-bordered">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Stok</th>
                <th scope="col">Harga</th>
                <th scope="col">Subtotal</th>
                <th scope="col">aksi</th>

              </tr>
            </thead>
            <tbody>

              <?php

              $sql = mysqli_query($kon, "SELECT * FROM obat");
              $no = 1;
              $total = 0;
              while ($data = mysqli_fetch_array($sql)) {
                $subtotal = $data['stok_obat'] * $data['harga_obat'];
                $total = $total + $subtotal;
                ?>
                <tr>
            <!-- AWALAN MODAL EDIT -->
  <div class="modal fade" id="edit<?= $data['id_obat']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Data</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="./proses/update.php" method="POST">
            <?php
            $id = $data['id_obat'];
            $row = mysqli_fetch_assoc(mysqli_query($kon, "SELECT * FROM obat WHERE id_obat='$id'"));
            ?>
            <input type="hidden" name="id_obat" value="<?= $row['id_obat']; ?>">

            <div class="mb-3" style="text-align:left">
              <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
              <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $row['nama_obat']; ?>">
            </div>
            <div class="mb-3" style="text-align:left">
              <label for="exampleInputPassword1" class="form-label">Stok Barang</label>
              <input type="text" name="stok" class="form-control" id="exampleInputPassword1" value="<?= $row['stok_obat']; ?>">
            </div>
            <div class="mb-3" style="text-align:left">
              <label for="exampleInputPassword1" class="form-label">Harga Barang</label>
              <input type="text" name="harga" class="form-control" id="exampleInputPassword1" value="<?= $row['harga_obat']; ?>">
            </div>
            <div class="modal-footer">
              <button type="button-danger" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" name="editobat">Edit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- AKHIRAN MODAL EDIT -->

                  <td>
                    <?= $no++; ?>
                  </td>
                  <td>
                    <?= $data['nama_obat']; ?>
                  </td>
                  <td>
                    <?= $data['stok_obat']; ?>
                  </td>
                  <td>
                  <?= $data['harga_obat']; ?>
                  </td>
                  <td>
                    <?= 'Rp. ' . number_format($subtotal, 0, ',', '.'); ?>
                  </td>
                  <td>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit<?= $data['id_obat']?>";
                      name="add">EditData</button>
                    <a href="./proses/delete.php?hapus_datao=<?= $data['id_obat']; ?>" type="button"
                      class="btn btn-danger"
                      onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i>
                      Hapus</a>
                  </td>
                </tr>
                <?php
              }
              ?>
            </tbody>

            <tfoot>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th>TOTAL</th>
              <th>
                <?= 'Rp. ' . number_format($total, 0, ',', '.'); ?>
              </th>
            </tfoot>

          </table>
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