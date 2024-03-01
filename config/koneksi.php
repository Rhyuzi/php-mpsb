<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
// $hostname_koneksi = "localhost";
// $database_koneksi = "pandusiw_psb";
// $username_koneksi = "pandusiw_user";
// $password_koneksi = "lds9ntRSfSTW";

$hostname_koneksi = "localhost";
$database_koneksi = "pandusiw_psb2";
$username_koneksi = "root";
$password_koneksi = "1234";


$koneksi = new mysqli($hostname_koneksi,$username_koneksi,$password_koneksi,$database_koneksi);
if($koneksi->connect_error){
    die('Connection failed : " '.$connect->connect_error);
}
?>