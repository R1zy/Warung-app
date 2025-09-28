<?php
// app/config.php
if (session_status() === PHP_SESSION_NONE) session_start();

// Ganti sesuai environment kamu (misal pakai localhost/warung-app/public)
define('BASE_URL', 'http://localhost/warung-app/public');

function url($path = '') {
  return rtrim(BASE_URL, '/') . '/' . ltrim($path, '/');
}

// Fungsi sederhana untuk redirect
function redirect($to) {
  header('Location: ' . url($to));
  exit;
}
