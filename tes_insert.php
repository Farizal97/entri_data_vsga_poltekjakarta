<?php 
require_once "koneksi2.php";

echo "succesfully connect to database.will insert data now.<br>";
    $nama_merek = "fujitsu";
    $warna = "hitam";
    $jumlah = 20;


$sql = "INSERT INTO `printer` (`nama_merek`,`warna`,`jumlah`)
VALUES ('$nama_merek','$warna','$jumlah')";

mysqli_query($conn,$sql);
echo "input data done. <br>";

