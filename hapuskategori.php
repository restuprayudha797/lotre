<?php
include 'config/function.php';


$id_kategori = $_GET["id"];
$sql_delete = "DELETE FROM kategorilotto WHERE id_kategori = $id_kategori ";
mysqli_query($conn, $sql_delete);
echo "<script>alert('Data Berhasil Dihapus');window.location='kategorilotto.php'</script>";
