<!DOCTYPE html>
<html>
<head>
    <title>Data User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="bg_costume.css" rel="stylesheet">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
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
          <a class="nav-link active fw-bolder" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bolder" href="User.php">User</a>
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

<h2>Data User</h2>

<table>
    <tr>
        <th>ID User</th>
        <th>User</th>
        <th>Code Barang</th>
        <th>Barang</th>
        <th>Action</th>
    </tr>

    <?php
    include 'konek.php';

    $result = $conn->query("SELECT * FROM datauser");

    if ($result->num_rows > 0) {
        // Output data dari setiap baris
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["ID_User"]. "</td>
                    <td>" . $row["User"]. "</td>
                    <td>" . $row["Code_Barang"]. "</td>
                    <td>" . $row["Barang"]. "</td>
                    <td>
                        <a href='edituser.php?id=" . $row["ID_User"] . "'>Edit</a> | 
                        <a href='delete.php?id=" . $row["ID_User"] . "'>Delete</a>
                    </td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='4'>Tidak ada data</td></tr>";
    }

    $conn->close();
    ?>

</table>
<br>
  <form method="POST" action="cetak.php">
  <button type="submit" name="cetak" class="btn btn-primary">Cetak</button>
  </form>

</body>
</html>
