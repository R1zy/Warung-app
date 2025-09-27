<!-- File in akan menghandle proses ambil seluruh data barang -->
<!-- Untuk menggunakan file ini bisa menggunakan include untuk halaman yang membutuhkan data seluruh barang dari database -->

<!-- Kedepannya, logic mengambil barang akan dikumpulkan ke dalam 1 class, sehingga mirip dengan model -->

<?php 
    require '../../database.php'; // Nanti coba gw rapihin pake relative path aja.
    
    $sql = "SELECT * FROM barang";
    $result = $conn->query($sql);

    $data;
    
    // Bisa gunakan $data untuk data di FE. $data berisi semua data barang di database
    if ($result->num_rows != 0) {
        $data = $result->fetch_assoc();
    } else {
        $data = null;
    }
    
    $conn->close();
    // Sementara simpel aja dulu, selanjutnya bakal dijadiin function atau method biar lebih rapih.
?>