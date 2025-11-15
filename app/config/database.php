<?php

$host = "localhost";
$port = "5432";
$db   = "pbl_coba";
$user = "postgres";
$pass = "";  // isi jika ada password

try {
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$db;", $user, $pass);

    // Supaya error muncul kalau salah query
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("Koneksi ke PostgreSQL gagal: " . $e->getMessage());
}
