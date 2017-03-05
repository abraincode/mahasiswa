<?php
include_once 'header.php';
require_once 'class_accountbank.php';

$ab1 = new AccountBank("2001",5000,"Agung Sedayu");
$ab2 = new AccountBank("2022",8000,"Sekar Mirah");

echo "<u>Info sebelum transaksi:</u><br>";;
$ab1->cetak();
echo "<br>";
$ab2->cetak();
echo "<hr>";
// Agung sedayu transfer uang 1250 ke sekar mirah
$ab1->transfer($ab2, 1250);
echo "<u>Info sebelum transaksi:</u><br>";;
$ab1->cetak();
echo "<br>";
$ab2->cetak();

include_once 'footer.php';
 ?>
