<?php 
$server =  'localhost';
$username = 'root';
$pass = '';
$db = 'db_printer';
$conn = mysqli_connect($server,$username,$pass,$db);

if(!$conn) {
    die("eror connectinfg database");
}else {
    echo "succesfully connect to database.will insert data now.<br>";
    $nama_merek = "fujitsu";
    $warna = "hitam";
    $jumlah = 20;


$sql = "INSERT INTO `printer` (`nama_merek`,`warna`,`jumlah`)
VALUES ('$nama_merek','$warna','$jumlah')";

mysqli_query($conn,$sql);
echo "input data done. <br>";
}