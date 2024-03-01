<?php
	include('../config/koneksi.php');
    session_start();
    $user = $_SESSION['cusername'];
    $rs = $koneksi->query("SELECT * FROM tblguestbook where GuestResponBy='$user'");
    $result = array();
    while ($data = mysqli_fetch_object($rs)) {
        $result[] = array(
            'id' => $data->id,
            'value' => $data->GuestName
        );
    }
    echo json_encode($result);
?>

