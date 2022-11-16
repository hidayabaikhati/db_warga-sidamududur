<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
    background-image:url('kol.jpg') 
    
        }
</style>
</head>
<center>
<body>
    <h1>Warga Ds.Sukamududur</h1>
    <form action="proses_tambah.php"method="POST">
        <form>
            <fieldset>
            <a href="penduduk.php"><input type="button" value="back" name="back"/></a>
                <p>
                <label for ="NIK">NIK:</label>
                    <input type="number" name="NIK"/>

</p>

<p>
                 <label for ="Nama">Nama:</label>
                    <input type="text" name="Nama"/>
                </p>
                <p>
                <label for="Agama">Agama :</label>
                <select name="Agama" >
    <option value="islam">Islam</option>
    <option value="katholik">Katholik</option>
    <option value="budha">Budha</option>
    <option value="hindu">Hindu</option>
    <option value="kristen">Kristen</option>
    <option value="konghucu">Konghucu</option>
</select>
</p>
<p>
<input type="submit"  name="kirim" value="kirim">
</p>
</fieldset>
</form>
</body>
</html>
</center>
</body>
</html>