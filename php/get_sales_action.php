<?php
	include('../config/koneksi.php');
    $rs = $koneksi->query("SELECT * FROM tblsalesaction");
    $result = array();
    while ($data = mysqli_fetch_object($rs)) {
        $result[] = array(
            'id' => $data->ID,
            'value' => $data->KETERANGAN
        );
    }
    echo json_encode($result);
?>

