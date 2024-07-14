<?php
require('fpdf/fpdf.php');
include 'konek.php';

// Membuat instance FPDF
$pdf = new FPDF();
$pdf->AddPage();

// Judul halaman
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 10, 'Data User', 0, 1, 'C');

// Header tabel
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(30, 10, 'ID User', 1);
$pdf->Cell(50, 10, 'User', 1);
$pdf->Cell(40, 10, 'Code Barang', 1);
$pdf->Cell(60, 10, 'Barang', 1);
$pdf->Ln();

// Mengambil data dari database
$pdf->SetFont('Arial', '', 12);
$result = $conn->query("SELECT * FROM datauser");

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $pdf->Cell(30, 10, $row['ID_User'], 1);
        $pdf->Cell(50, 10, $row['User'], 1);
        $pdf->Cell(40, 10, $row['Code_Barang'], 1);
        $pdf->Cell(60, 10, $row['Barang'], 1);
        $pdf->Ln();
    }
} else {
    $pdf->Cell(0, 10, 'Tidak ada data', 1, 1, 'C');
}

$conn->close();

// Output PDF
$pdf->Output('D', 'Data_User.pdf');
?>
