<?php
$database_hostname = "localhost";
$database_user = "id21731230_dimasdc";
$database_password = "Dimasdc15@";
$database_name = "id21731230_dimas";

try{
    $database_connection = new PDO("mysql:host=$database_hostname;dbname=$database_name", $database_user, $database_password);
    $cek = "Koneksi Berhasil!";
    echo $cek;
}catch(PDOException $z){
    die($x->getMessage());
}

?>
