<?php
include 'config.php';

// Hapus semua variabel session
$_SESSION = array();

// Hancurkan session
session_destroy();

// Redirect ke halaman login atau halaman utama
header("Location: login.php");
exit;
?>