<!-- update data pembelian -->
<?php
include 'konek.php';

if (isset($_POST['save'])) {
    $user = $_POST['user'];
    $code_barang = $_POST['codebarang'];
    $barang = $_POST['barang'];
    $harga_barang = $_POST['hargabarang'];

    $sql = "UPDATE pembelian SET User='$user', Barang='$barang', Harga_Barang='$harga_barang' WHERE Code_Barang='$code_barang'";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil diupdate";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
    header('Location: datapembeli.php');
    exit;
}
?>

