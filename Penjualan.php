<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href ="bg_costume.css" rel="stylesheet">
    
  </head>
  <body>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <nav class="navbar navbar-expand-lg bg-warning p-3 shadow">
  <div class="container">
    <a class="navbar-brand fw-bolder">IVENTORI</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active fw-bolder" aria-current="page" href="Save Data.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bolder" href="#">User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bolder" href="Pembelian.php">Pembelian</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bolder" href="Penjualan.php">Penjualan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bolder" href="Laporan.php">Laporan</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="border">
<form method ="POST">
  <div class="mb-3">
    <label class="form-label">User</label>
    <input type="text" name="user" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Code Barang</label>
    <input type="text" name="codebarang" class="form-control">
</div>
    <div class="mb-3">
    <label class="form-label">Barang</label>
    <input type="text" name="barang" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Barang</label>
    <input type="text" name="hargabarang" class="form-control">
  </div>
  <button type="submit" name="save" class="btn btn-primary">Submit</button>
</form>
</div>
<?php
    if(isset($_POST['save'])){
    include "konek.php";
    $User=$_POST['user'];
    $Codebarang=$_POST['codebarang'];
    $barang=$_POST['barang'];
    $Harga=$_POST['hargabarang'];
    $konn = $conn -> query("INSERT into penjualan(User,Code_Barang,Barang,Harga_Barang) 
    values('$User','$Codebarang','$barang','$Harga')");
    }
    ?>

  </body>
</html>