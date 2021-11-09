<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include ("koneksi.php");

$query = "select * from usaha";
$hasil = mysqli_query($koneksi, $query);
?>

<h1> Keterangan Tempat Usaha</h1>
<form action="proses_insert.php" method="POST">
    Provinsi: <input type="text" name="provinsi" value=""><br/>
    Kabupaten/Kota: <input type="text" name="kabupaten" value=""><br/>
    Kecamatan: <input type="text" name="kecamatan" value=""><br/>
    Desa: <input type="text" name="desa" value=""><br/>
    Nama Pelabuhan: <input type="text" name="pelabuhan" value=""><br/>
    <input type="submit" value="simpan">
</form>
<h1> Tabel Keterangan Tempat Usaha</h1>


<table border="1">
    <tr>
        <th>ID Tempat Usaha</th>
        <th>Provinsi</th>
        <th>Kabupaten/Kota</th>
        <th>Kecamatan</th>
        <th>Desa</th>
        <th>Nama Pelabuhan</th>
        <th colspan="2">Aksi</th>
    </tr>
        

<?php
while($row = mysqli_fetch_array($hasil)){
    echo"<tr>";
    echo"<td> ".$row['id_tu']."</td>";
    echo"<td> ".$row['provinsi']."</td>";
    echo"<td> ".$row['kabupaten']."</td>";
    echo"<td> ".$row['kecamatan']."</td>";
    echo"<td> ".$row['desa']."</td>";
    echo"<td> ".$row['pelabuhan']."</td>";
    echo"<td><a href='edit.php?id_tu=".$row['id_tu']."'>edit</a></td>";
    echo"<td><a href='delete.php?id_tu=".$row['id_tu']."'>delete</a></td>";
    echo"</tr>";
}


?>  
</body>
</html>

