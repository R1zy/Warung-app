<?php
// app/auth.php
require_once __DIR__ . '/config.php';

function require_login() {
  if (empty($_SESSION['user'])) {
    redirect('index.php?page=login');
  }
}
