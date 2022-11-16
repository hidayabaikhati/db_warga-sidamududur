<?php
include("koneksi.php");
if(isset($_POST['kirim'])){
    $NIK =$_POST['NIK'];
    $Nama =$_POST['Nama'];
    $Agama =$_POST['Agama'];

    $sql ="INSERT INTO tb_warga(NIK, Nama, Agama) VALUES ('$NIK', '$Nama', '$Agama')";
    $query = mysqli_query ($koneksi, $sql);
    
    }else{
        ("akses dilarang");
    }


?>