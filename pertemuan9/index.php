<?php
include ("koneksi.php");

$query = "select * from usaha";
$hasill = mysqli_query($koneksi, $query);


while($row = mysqli_fetch_array($hasill)){
    echo"<tr>";
    echo"<td> ".$row['id_tu']."</td>";
    echo"<td> ".$row['provinsi']."</td>";
    echo"<td> ".$row['kabupaten']."</td>";
    echo"<td> ".$row['kecamatan']."</td>";
    echo"<td> ".$row['desa']."</td>";
    echo"<td> ".$row['pelabuhan']."</td>";
   
}


?>  
