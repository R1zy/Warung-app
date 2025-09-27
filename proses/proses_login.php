<!-- Untuk menggunakan proses login ini, bisa menggunakan form dengan method POST, dan buat action mengarah ke file ini -->

<?php
require '../database.php';

$loginData = [
    "username" => $_POST['username'],
    "password" => $_POST['password'],
];

$sql = "SELECT password FROM user WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $loginData['username'])->exectute();
$stmt->bind_result($hashed_password)->fetch()->close();

if ($hashed_password && password_verify($password, $hashed_password)) {
    $_SESSION['logged_in'] = true;
    $_SESSION['username'] = $username;
    header("Location: index.php"); // Setelah login, user akan diarahkan ke suatu halaman, bisa itu index php ataupun dashboard.php
    exit;
} else {
    echo "Invalid username or password";
}

$conn->close();



?>