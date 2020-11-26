<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "shoes.saurus";

$koneksi = mysqli_connect($server, $username, $password, $database) or die("Gagal terhubung ke database");
