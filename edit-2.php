<?php
include("koneksi.php");

if(!isset($_GET['id'])){
    header('location: case-table.php');
}

$id=$_GET['id'];

$sql = "SELECT * FROM data_siswa WHERE id = $id";
$query = mysqli_query ($db, $sql);
$data_siswa = mysqli_fetch_assoc($query);
?>


<html lang="en">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="case-table.js"></script>

    <title>Update - Lunar</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/checkout/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <h2>Update Data</h2>
      </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Navigation</span>
            <span class="badge badge-secondary badge-pill">!</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0"> <b> <a href="index.html"> Back to Home</b></a></h6>
              </div>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0"> <b> <a href="case-table.php"> Back to Table</b></a></h6>
              </div>
            </li>

            <div class="input-group"><br><br><br><br>
              <div class="input-group-append">
              </div>
            </div>
        </div>
        <div class="col-md-8 order-md-1"><br><br>
          <form class="needs-validation" method="post" action="edit_proses.php" autocomplete="off" novalidate="">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">NIS</label>
                <input name="id" type="hidden" value="<?php echo $data_siswa['id'] ?>">
                <input name="nis" type="number" class="form-control" id="NIS" value="<?php echo $data_siswa['nis'] ?>" required="">
              </div>
              <div class="col-md-6 mb-3">
                <label>Nama Lengkap</label>
                <input name="nama_lengkap" type="text" class="form-control" value="<?php echo $data_siswa['nama_lengkap'] ?>" id="nama" required="">
              </div>
            </div><br>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label>Tanggal Lahir</label>
                <input name="tanggal_lahir" type="date" class="form-control" value="<?php echo $data_siswa['tanggal_lahir'] ?>" id="ttl" required="">
              </div>
              <div class="col-md-6 mb-3">
                <label>Kelas</label>
                <select name="kelas" class="form-control" id="kelas" value="<?php echo $data_siswa['kelas'] ?>" required="">
                  <option value="X">X</option>
                  <option value="XI">XI</option>
                  <option value="XII">XII</option>
                </select>
              </div><br><br><br><br>
              <div class="col-md-6 mb-3">
                <label>Jurusan</label>
                <select name="jurusan" class="form-control" id="jurusan" value="<?php echo $data_siswa['jurusan'] ?>" required="">
                  <option value="Teknik Jaringan Akses Telekomunikasi">Teknik Jaringan Akses Telekomunikasi</option>
                  <option value="Teknik Komputer & Jaringan">Teknik Komputer & Jaringan</option>
                  <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                  <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                  <option value="Animasi">Animasi</option>
                </select>
              </div>
              <div class="col-md-6 mb-3">
                <label>Email</label>
                <input name="email" type="email" class="form-control" id="email" value="<?php echo $data_siswa['email'] ?>" required>
              </div>
            </div><br>
            
            <div class="mb-3">
              <label>Alamat</label>
              <textarea name="alamat" type="text" class="form-control" id="alamat"><?php echo $data_siswa['alamat'] ?></textarea>
            </div>
            <hr class="mb-4">
            <button name="simpan" class="btn btn-primary btn-lg btn-block" type="submit">Update</button>
          </form>
        </div>
      </div> <br><br><br><br>

      <footer class="my-5 pt-5 text-muted text-center text-small" >
        <p class="mb-1">© 2022 Lunar</p>
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
    </body>
  </html>