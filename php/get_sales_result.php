<?php
	include('../config/koneksi.php');
    $rs = $koneksi->query("SELECT * FROM tblsalesresult");
    $result = array();
    while ($data = mysqli_fetch_object($rs)) {
        $result[] = array(
            'id' => $data->id_sales_result,
            'value' => $data->KETERANGAN
        );
    }
    echo json_encode($result);
?>

