<!-- File in akan menghandle proses insert data barang -->
<!-- Untuk menggunakan file ini bisa lewat form dengan method POST, dan action mengarah ke file ini. -->
<!-- File ini kemudian akan mengarahkan user kembali ke halaman sebelumnya/index. -->

<!-- Kedepannya, logic insert barang akan dikumpulkan ke dalam 1 class, sehingga mirip dengan model -->

<?php
require '../../database.php'; // Nanti coba gw rapihin pake relative path aja.

$data_barang = [
    "nama_barang" => $_POST['nama_barang'],
    "harga_jual" => $_POST['harga_jual'],
    "kategori" => $_POST['kategori'],
    "unit" => $_POST['unit'],
    "created_at" => date('Y-m-d H:i:s'),
];

$sql = "INSERT INTO barang (nama_barang, harga_jual, kategori, unit, created_at) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sisss", $data_barang['nama_barang'], $data_barang['harga_jual'], $data_barang['kategori'], $data_barang['unit'], $data_barang['created_at']);

if ($stmt->execute()) {
    echo "Data baru berhasil diinput!"; // Nanti gunakan session agar pesan sukses dapat ditampilkan di FE>
} else {
    echo "Error: " . $stmt->error;
}
$stmt->close();
$conn->close();

// Beri redirect disini setelah data masuk
header("Location: index.html");
exit;
?>