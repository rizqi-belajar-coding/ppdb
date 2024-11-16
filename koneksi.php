<?php

$namahost = "localhost";
$user = "root";
$pasword = "";
$database = "ppdb";

$conn = mysqli_connect($namahost, $user, $pasword, $database);
if (!$conn) {
    echo "database tidak terhubung";
}

?>