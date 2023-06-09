<?php


include 'config/function.php';


$idlotte = $_GET["idlotte"];
var_dump($idlotte);
$sql_delete = "DELETE FROM `datalotto` WHERE `idlotte` = $idlotte ";
mysqli_query($conn, $sql_delete);
echo "<script>alert('Data Berhasil Dihapus');window.location='datalotto.php'</script>";
