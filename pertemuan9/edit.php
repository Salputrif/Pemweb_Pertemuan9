<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

<?php
include ("koneksi.php");
$id_tu= $_GET['id_tu'];

$query = "select * from usaha where id_tu = $id_tu";
$hasil = mysqli_query($koneksi, $query);
$row = mysqli_fetch_array($hasil);
?>
    <h1> Edit Data</h1>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="id_tu" value="<?php echo $row['id_tu'];?>">
       Provinsi : <input type="text" name="provinsi" value="<?php echo $row['provinsi'];?>"><br/>
       Kabupaten/Kota : <input type="text" name="kabupaten" value="<?php echo $row['kabupaten'];?>"><br/>
       Kecamatan : <input type="text" name="kecamatan" value="<?php echo $row['kecamatan'];?>"><br/>
       Desa : <input type="text" name="desa" value="<?php echo $row['desa'];?>"><br/>
       Nama Pelabuhan : <input type="text" name="pelabuhan" value="<?php echo $row['pelabuhan'];?>"><br/>
        <input type="submit" value="simpan">
    </form>
</body>
</html>