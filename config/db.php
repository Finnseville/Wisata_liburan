<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_liburan";

$db = new mysqli($host, $user, $pass, $db);
if ($db->connect_error) {
    die("Koneksi gagal: " . $db->connect_error);
}
$db->set_charset("utf8mb4");
?>