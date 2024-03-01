<?php
	include('../config/koneksi.php');
	$rs = $koneksi->query("SELECT * FROM tbllocation");
	$result = array();
	while($data = mysqli_fetch_object($rs)){
		$result[] = array(
						'id' => $data->DefaultCityNo, 
						'kota' => $data->DefaultCityName
					);
	}
	echo json_encode($result);
?>

