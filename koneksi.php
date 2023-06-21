
<!-- untuk menkoneksikan si data base dengan localhost --> 

<?php
  $host ='';
  $user ='root';
  $pass='';
  $db='guru1';
  $conn = mysqli_connect($host,$user,$pass,$db);
  if($conn){
  //echo"koneksi berhasil";
  }
    mysqli_select_db($conn, $db)



?>