<?php
require_once __DIR__ . '/../app/config.php';

$page = $_GET['page'] ?? 'dashboard';

// proses login sederhana
if ($page === 'do_login' && $_SERVER['REQUEST_METHOD'] === 'POST') {
  $u = $_POST['username'] ?? '';
  $p = $_POST['password'] ?? '';
  // Dummy auth: ganti sesuai kebutuhan
  if ($u === 'admin' && $p === 'admin123') {
    $_SESSION['user'] = ['username' => 'admin'];
    redirect('index.php?page=dashboard');
  } else {
    $_SESSION['error'] = 'Username atau password salah';
    redirect('index.php?page=login');
  }
  exit;
}

// routing view
switch ($page) {
  case 'login':
    require __DIR__ . '/../app/views/login.php';
    break;

  case 'dashboard':
    require __DIR__ . '/../app/views/dashboard.php';
    break;

  case 'barang_index':
    require __DIR__ . '/../app/views/barang/index.php';
    break;

  case 'barang_create':
    require __DIR__ . '/../app/views/barang/create.php';
    break;

  default:
    http_response_code(404);
    echo "404 - Halaman tidak ditemukan";
}
