<?php
 include("koneksi.php");

 $id_tu= $_POST['id_tu'];
 $provinsi= $_POST['provinsi'];
 $kabupaten= $_POST['kabupaten'];
 $kecamatan= $_POST['kecamatan'];
 $desa= $_POST['desa'];
 $pelabuhan= $_POST['pelabuhan'];

 $query ="insert into usaha values ('', '$id_tu', '$provinsi', '$kabupaten', '$kecamatan', '$desa', '$pelabuhan')";


 if (mysqli_query($koneksi, $query)){
     header("Location: index.php");

 }else{
    header("Location: edit.php?id_tu= $id_tu");
     echo "gagal";
 }
?>