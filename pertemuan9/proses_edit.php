<?php
 include("koneksi.php");

 $id_tu= $_POST['id_tu'];
 $provinsi= $_POST['provinsi'];
 $kabupaten= $_POST['kabupaten'];
 $kecamatan= $_POST['kecamatan'];
 $desa= $_POST['desa'];
 $pelabuhan= $_POST['pelabuhan'];

 echo $provinsi;
 echo $kabupaten;
 echo $kecamatan;
 echo $desa;
 echo $pelabuhan;

 $query ="update usaha set provinsi= '$provinsi', kabupaten ='$kabupaten',  kecamatan ='$kecamatan', desa ='$desa', pelabuhan ='$pelabuhan' where 
 id_tu = $id_tu";

 if (mysqli_query($koneksi, $query)){
     header("Location: index.php");

 }else{
    header("Location: edit.php?id_tu= $id_tu");
     echo "gagal";
 }
 ?>