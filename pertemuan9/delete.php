<?php
 include("koneksi.php");

 $id_tu= $_GET['id_tu'];

 $query ="delete from usaha where id_tu= $id_tu"; 


 if (mysqli_query($koneksi, $query)){
     header("Location: index.php");

 }else{
    header("Location: edit.php?id_tu= $id_tu");
     echo "gagal";
 }
 ?>