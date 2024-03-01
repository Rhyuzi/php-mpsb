<?php
require '../config/koneksi.php';
session_start();
date_default_timezone_set('Asia/Jakarta');
$time = date('Y-m-d H:i:s');

if(isset($_POST['name']) && isset($_POST['user']) && isset($_POST['email']) && isset($_POST['cpassword'])) {
    $nama = $_POST['name'];
    $user = $_POST['user'];
    $email = $_POST['email'];
    $conpassword = password_hash($_POST['cpassword'], PASSWORD_DEFAULT);

    // echo $conpassword
    // return;
    $insert_data = $koneksi->query("INSERT INTO tblusers
                            (username,
                            password,
                            name,
                            email,
                            UserLocation
                            )
                            VALUES
                            ('$user',
                            '$conpassword',
                            '$nama',
                            '$email',
                            '7669'
                            )
                            ");
    if ($insert_data){
        echo json_encode(array('success'=>true,'successMsg'=>'Berhasil.'));
    } else {
        echo json_encode(array('success'=>false,'errorMsg'=>'Terjadi Kesalahan .'.$koneksi->error));    
    }
} else {
    echo json_encode(array('success'=>false,'errorMsg'=>'Missing required fields.'));
}
?>
