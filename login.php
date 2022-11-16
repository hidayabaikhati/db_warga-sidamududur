<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Pendataan Warga Ds.Sukamududur</title>
    <style>
        body{
    background-image:url('jui.jpg') 
    
}
</style>
</head>
<center>
<body>
    <h1>Aplikasi Pendataan Warga Ds.Sukamududur</h1>
<br/>
<!-- cek pesan notifikasi-->
<?php
if(isset($_GET['pesan'])){
    if($_GET['pesan'] == "gagal"){
        echo "Login gagal! username dan password salah!";
    }else if($_GET['pesan'] == "logout"){
        echo"Anda telah berhasil logout";
    }else if($_GET['pesan'] == "belum_login"){
        echo"Anda harus login  untuk mengakses halaman admin";
    }
}
?>
<br/>
<br/>
<form method="POST" action="cek_login.php">

    <table>
        <tr>
            <h2>
            <td>USERNAME</td>
            <td>:</td>
            <td> <input type="text" name="username" placeholder="Masukkan username"></td>
</tr>
<tr>
             <td>PASSWORD</td>
             <td>:</td>
            <td><input type="password" name="password" placeholder="Masukkan password"></td>
</h2>
</tr>
<tr>
    <td></td>
    <td></td>
    <td><input type="submit" value="LOGIN"></td>
   <td> <a href="tambah.php"><input type="button" value="DAFTAR" name="DAFTAR"/></a>
    
</tr>

</table>
</form>
</center>
</body>
</html>