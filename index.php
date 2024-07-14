<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IVENTORI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href ="bg_costume.css" rel="stylesheet">
  </head>
  <body>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <nav class="navbar navbar-expand-lg bg-warning p-3 shadow">
  <div class="container">
    <a class="navbar-brand fw-bolder">IVENTORI</a>
    
  </div>
</nav>
<div class="border">
<form method ="POST">
  
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" name="username" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" name="password" class="form-control">
  </div>
  
  <button type="submit" name="login" class="btn btn-primary">Submit</button>

  <a href="pra-regis.php">Pra-register</a>
</form>
</div>
<?php
session_start();
include 'konek.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM dataakun WHERE Nama='$username' AND Password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;
        header('Location: Save Data.php');
        exit;
    } else {
        echo "Username atau password salah.";
    }
    
    $conn->close();
}
?>
  </body>
</html>