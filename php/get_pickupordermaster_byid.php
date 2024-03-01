<?php 

include('../config/koneksi.php');
$currentDate = date('Y-m-d');
$id = $_GET['id'];

// print_r($id);
// return;
$result = array();
$query = $koneksi->query("
    SELECT *
    FROM tblpickuporder_master
    LEFT JOIN tblpegawai ON tblpickuporder_master.POrderKurirId = tblpegawai.id
    WHERE DATE(POrderDate) = '$currentDate' AND POrderKurirId = '$id'
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