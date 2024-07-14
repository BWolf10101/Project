    
<?php
include 'konek.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM datauser WHERE ID_User=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil dihapus";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
    header('Location: datauser.php');
}
?>

<?php
include 'konek.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM pembelian WHERE Code_Barang=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil dihapus";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
    header('Location: datapembeli.php');
}
?>

<?php
include 'konek.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM penjualan WHERE Code_Barang=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil dihapus";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
    header('Location: datapembeli.php');
}
?>
