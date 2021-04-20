<?php
  include("konek.php");
?>
<html>
<body>
<head>
<title>Website Perpus</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<div class="container">
<form method="POST" action="proses-daftar.php" class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Judul</label>
    <input type="text" name="judul_buku"class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Eksemplar</label>
    <input type="text" name="eksemplar" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label" >Pengarang</label>
    <input type="text" name="pengarang" class="form-control" id="inputAddress">
  </div>
  <div class="col-12">
    <button type="submit" name="daftar" class="btn btn-primary">Tambahkan Buku</button>
  </div>
</form>
</div>

</body>
</html>