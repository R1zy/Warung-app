<?php
require_once __DIR__ . '/../app/config.php';
session_destroy();
redirect('index.php?page=login');
