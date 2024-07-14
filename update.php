<?php
include 'konek.php';

if (isset($_POST['save'])) {
    $id = $_POST['iduser'];
    $user = $_POST['user'];
    $code_barang = $_POST['codebarang'];
    $barang = $_POST['barang'];

    $sql = "UPDATE datauser SET User='$user', Code_Barang='$code_barang', Barang='$barang' WHERE ID_User=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil diupdate";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close(); 
    header('Location: datauser.php');
}
?>

