<?php
// $hostname_koneksi = "localhost";
// $database_koneksi = "pandusiw_psb";
// $username_koneksi = "pandusiw_user";
// $password_koneksi = "lds9ntRSfSTW";

$hostname_koneksi = "localhost";
$database_koneksi = "pandusiw_psb2";
$username_koneksi = "root";
$password_koneksi = "1234";


try{
  $koneksi = new PDO("mysql:host=$hostname_koneksi; dbname=$database_koneksi", $username_koneksi, $password_koneksi);
  $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "ERROR :". $e->getMessage();
  die();
}

if (isset($_POST['user'])) {
  $cuser = $_POST['user'];
  $cpass =  $_POST['password'];
  
  try {
    $sql = "SELECT * FROM tblusers 
            left join tblusers_group ON tblusers.group_id=tblusers_group.id 
            left join tbllocation ON tblusers.UserLocation=tbllocation.DefaultCityNo 
            left join tblcustomer ON tblusers.customer_id=tblcustomer.ID
            WHERE username = :username"; // buat queri select
    $stmt = $koneksi->prepare($sql); 
    $stmt->bindParam(':username', $cuser);
    $stmt->execute(); // jalankan query

    $count = $stmt->rowCount(); // mengecek row      
      if($count == 1) { // jika rownya ada 
        $data = $stmt->fetch(PDO::FETCH_OBJ);
        if(password_verify($cpass, $data->password)){

          $get_office = $koneksi->prepare("SELECT * FROM tbllocation WHERE DefaultCityNo=:lokasi");
          $get_office->bindParam(':lokasi', $data->UserLocation);
          $get_office->execute();
          $data_office = $get_office->fetch(PDO::FETCH_OBJ);

          session_start();
          $_SESSION['cid'] = $data->id;
          $_SESSION['cusername']= $data->name;
          $_SESSION['cgroupid']= $data->group_id;
          $_SESSION['cgroup']= $data->Group;
          $_SESSION['cuserlevel']= $data->user_level;
          $_SESSION['cgroupket']= $data->GroupKet;
          $_SESSION['cloc']= $data->UserLocation;
          $_SESSION['clockode']= $data->DefaultDatabaseName;
          $_SESSION['cpegawai']= $data->pegawai_id;      
          $_SESSION['cnameloc'] = $data->DefaultCompName;
          $_SESSION['ckodeloc'] = $data_office->DefaultCityName;
          $_SESSION['cuserlevel'] =  $data->user_level;
          $_SESSION['clocakun'] =  $data->DefaultAccount;
          $_SESSION['idloc'] = $data->LocationID ;
          $_SESSION['idcust'] = $data->customer_id;
          $_SESSION['nocust'] = $data->CustNo;
          $_SESSION['nmcust'] = $data->CustName;

          
          // print_r($data->Group);
          switch ($data->Group) {
            case 'MKT':
              // header("location:../component/dashboard/marketing/page-about.php");
              echo json_encode(array('success'=>true,'msg'=>'Berhasil.','url'=> 'component/dashboard/marketing/page-about.php'));
              break;
            case 'OPS':
              // header("location:../component/dashboard/operasional/page-about.php");
              echo json_encode(array('success'=>true,'msg'=>'Berhasil.','url'=> 'component/dashboard/operasional/page-about.php'));
              break;
            default:
              echo json_encode(array('success'=>true,'msg'=>'Berhasil.'));
              break;
          }
          
          // header("location:../component/dashboard/marketing/page-about.php");          
          return;
        }else{
          echo json_encode(array('success'=>false,'msg'=>'Password salah.'));
          return;
        }
          
      }else{
        echo json_encode(array('success'=>false,'msg'=>'Username salah.'));
        return;
      }
  }
  catch(PDOException $e) {
      echo $e->getMessage();
  }
  
}
?>