<?php

$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "intan";

$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

// Check connection
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
