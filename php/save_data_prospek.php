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

$nama = $_POST['namaperusahaan'];
// $email = $_POST['email'];
$telp = $_POST['telp'];
$addr = $_POST['alamat'];
// $memo = $_POST['catatan'];
$location = $_POST['lokasi'];
$type = $_POST['komoditi'];
// $potency = $_POST['potensi'];
// $contact = $_POST['pic'];
$maploc = $_POST['map-lokasi'];

$potency1 = $_POST['potency1'];
$potency2 = $_POST['potency2'];
$potency3 = $_POST['potency3'];

$contactname1 = $_POST['contactname1'];
$contactname2 = $_POST['contactname2'];
$contacttlp1 = $_POST['contacttlp1'];
$contacttlp2 = $_POST['contacttlp2'];
$payperiode = $_POST['payperiode'];

$kompetitor1 = $_POST['kompetitor1'];
$kompetitor2 = $_POST['kompetitor2'];
$kompetitor3 = $_POST['kompetitor3'];
$areakirim = $_POST['areakirim'];

$targetDirectory = '../data/images/prospek/'; 
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


$insert_data = $koneksi->query("INSERT INTO tblguestbook
						(GuestName,
						GuestAddr,
						GuestCity,
						GuestLocation,
						GuestResponBy,
						GuestType,
						GuestMemo,
						GuestTelp,
						GuestPotency1,
						GuestPotency2,
						GuestPotency3,
						GuestContactTelp1,
						GuestContactTelp2,
						GuestContactName1,
						GuestContactName2,
						GuestKompetitor1,
						GuestKompetitor2,
						GuestKompetitor3,
						GuestPayPeriode,
						GuestPicture1,
						GuestMap
						)
						VALUES
						('$nama',
						'$addr',
						'$location',
						'$loc',
						'$user',
						'$type',
						'$areakirim',
						'$telp',
						'$potency1',
						'$potency2',
						'$potency3',
						'$contacttlp1',
						'$contacttlp2',
						'$contactname1',
						'$contactname2',
						'$kompetitor1',
						'$kompetitor2',
						'$kompetitor3',
						'$payperiode',
						'$newFileName',
						'$maploc'
						)
						");
if ($insert_data){
	echo json_encode(array('success'=>true,'successMsg'=>'Berhasil.'));
} else {
	echo json_encode(array('success'=>false,'errorMsg'=>'Terjadi Kesalahan .'.$koneksi->error));	
}
?>