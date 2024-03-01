	<?php
require '../config/koneksi.php';
session_start();
date_default_timezone_set('Asia/Jakarta');
$time = date('Y-m-d');
if (isset($_SESSION['cusername']) && $_SESSION['nocust']) {
	header("Location: ../form_login.php");
	exit();
}
$user = $_SESSION['cusername'];
$custNo = $_SESSION['nocust'];   


$namacustomer = $_POST['namacustomer'];
$tujuankunjungan = $_POST['tujuankunjungan'];
$jeniskunjungan = $_POST['jeniskunjungan'];
$opporname = $_POST['opporname'];
$kompetitor = $_POST['kompetitor'];
$isi = $_POST['isi'];
$qty = $_POST['qty'];
$berat = $_POST['berat'];
$destinasi = $_POST['destinasi'];
$ketdestinasi = $_POST['ketdestinasi'];
$tahap = $_POST['tahap'];
$revenu = $_POST['revenu'];
$catatan = $_POST['catatan'];

$targetDirectory = '../data/images/kunjungan/'; 
$newFileName = null;

if (!is_dir($targetDirectory)) {
        mkdir($targetDirectory, 0777, true); 
}
if (isset($_FILES['file-img']['name'])) {
	$lampiran = basename($_FILES['file-img']['name']);
	$uniqueIdentifier = uniqid();
	$extension = pathinfo($lampiran, PATHINFO_EXTENSION);
	$newFileName = $uniqueIdentifier . '_' . time() . '.' . $extension;
	$target = $targetDirectory . $newFileName;
	move_uploaded_file($_FILES['file-img']['tmp_name'], $target);
}


$insert_data = $koneksi->query("INSERT INTO tblsaleskunjung
						(SalesKode,
						Tanggal,
						CustomerName,
						CustomerNo,
						Tujuan_Kunjung,
						Jenis_Kunjung,
						OpporName,
						Competitor,
						JOIsi,
						JOQty,
						JOBrt,
						JODest,
						JODestKet,
						JOTahap,
						Revenu,
						Catatan,
						photoKunjung
						)
						VALUES
						('$user',
						'$time',
						'$namacustomer',
						'$custNo',
						'$tujuankunjungan',
						'$jeniskunjungan',
						'$opporname',
						'$kompetitor',
						'$isi',
						'$qty',
						'$berat',
						'$destinasi',
						'$ketdestinasi',
						'$tahap',
						'$revenu',
						'$catatan',
						'$newFileName'
						)
						");
if ($insert_data){
	echo json_encode(array('success'=>true,'successMsg'=>'Berhasil.'));
} else {
	echo json_encode(array('success'=>false,'errorMsg'=>'Terjadi Kesalahan .'.$koneksi->error));	
}
?>