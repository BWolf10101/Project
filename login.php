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
        header('Location: user.php');
        exit;
    } else {
        echo "Username atau password salah.";
    }
    
    $conn->close();
}
?>
