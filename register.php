<?php
include 'konek.php';

if (isset($_POST['daftar'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO dataakun (Nama, Password) VALUES ('$username', '$password')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Pendaftaran berhasil";
        header('Location: index.php');
        exit;
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
