<?php 
include "koneksi.php";

mysqli_query($koneksi, "UPDATE `data` SET `id`='2',`nama`='moisturizer' WHERE id= 5");
?>