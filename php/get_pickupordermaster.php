<?php 

include('../config/koneksi.php');
$currentDate = date('Y-m-d');

$result = array();
$query = $koneksi->query("
    SELECT *
    FROM tblpickuporder_master
    LEFT JOIN tblpegawai ON tblpickuporder_master.POrderKurirId = tblpegawai.id
    WHERE DATE(POrderDate) = '$currentDate' AND POrderKurirId != '0'
    GROUP BY POrderKurirId
");

if ($query) {
    // Fetch the result set
    while ($row = mysqli_fetch_object($query)) {
        // Process each row
        $result[] = $row;
    }
    echo json_encode($result);
    // Free the result set
    // $result->free();
}


?>