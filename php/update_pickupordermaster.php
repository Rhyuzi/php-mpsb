	<?php
require '../config/koneksi.php';
session_start();
date_default_timezone_set('Asia/Jakarta');
$time = date('Y-m-d H:i:s');
if (isset($_SESSION['cusername']) && $_SESSION['nocust']) {
	header("Location: ../form_login.php");
	return;
}
$user = $_SESSION['cusername'];
$loc = $_SESSION['cloc'];  
$pegawai = $_SESSION['cpegawai']; 

$qty = $_POST['qty'];
$berat = $_POST['berat'];
$id = $_POST['id'];
$weight = $qty + $berat;


$insert_data = $koneksi->query("UPDATE tblpickuporder_master SET POrderQtyPar = '$qty', POrderQtyDoc = '$berat', POrderWeight = '$weight', POrderValidUser = '$pegawai', POrderValidTime = '$time' WHERE POrderID = $id");
if ($insert_data){
	echo json_encode(array('success'=>true,'successMsg'=>'Berhasil.'));
} else {
	echo json_encode(array('success'=>false,'errorMsg'=>'Terjadi Kesalahan .'.$koneksi->error));	
}
?>