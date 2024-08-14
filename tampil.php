<?php
include "koneksi.php";

//perintah
$query= mysqli_query($koneksi, "select * from data");
//ambil data

while($data= mysqli_fetch_array($query)){
    echo $data["id"];
    echo $data["nama"];
    echo "<hr/>";
}

?>