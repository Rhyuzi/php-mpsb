<?php
	include('../config/koneksi.php');
    $rs = $koneksi->query("SELECT * FROM tblcustomer_bussines");
    $result = array();
    while ($data = mysqli_fetch_object($rs)) {
        $result[] = array(
            'id' => $data->id,
            'type' => $data->CB_Nama
        );
    }
    echo json_encode($result);
?>

