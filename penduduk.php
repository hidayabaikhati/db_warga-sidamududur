<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Pendataan Warga Ds.Sukamududur</title>
    <style>
        body{
    background-image:url('lo.jpg') 
    
}
</style>
</head>
</head>


<center>
<body>
<?php
   session_start();
   if($_SESSION['status']!="login"){
    header("location:../login.php?pesan=belum_login");
   }
   ?>

   <h4>Selamat Datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>

    <h1>Aplikasi Pendataan Warga Ds.Sukamududur</h1>
    
    
    <h1> Warga Ds.Sukamududur</h1>
    <h4> <a href=logout.php> <input type="submit"  name="logout" value="Logout"/></a></h4>
    <table border="1">
       
    <tr>
        <th>id</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Agama</th>

        </tr>
        

</p>

<?php
include("koneksi.php");
$sql='SELECT * FROM tb_warga';
$query=mysqli_query($koneksi,$sql);
while($db_warga=mysqli_fetch_array($query)){
    echo"<tr>";
    echo"<td>".$db_warga['id']."</td>";
    echo"<td>".$db_warga['NIK']."</td>";
    echo"<td>".$db_warga['Nama']."</td>";
    echo"<td>".$db_warga['Agama']."</td>";
    echo"<td>";
    echo "<a href='edit-warga.php?id=".$db_warga['id']."'>Edit</a> |";
    echo "<a href='hapus-warga.php?id=".$db_warga['id']."'>Hapus</a> |";
    
    echo"</td>";
    echo"</tr>";
}

?>
</center>
</table>

<a href="tambah.php"><input type="submit" value="Tambah Data" name="tambah"/></a>
</body>
</html>