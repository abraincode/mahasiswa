<?php
require_once 'class_account.php';

$ac1 = new Account('001', 5000);
$ac2 = new Account('002', 3000);

//ac1 menabung 500
$ac1->deposit(500);
//ac2 ambil uang 300
$ac2->withdraw(300);
// cetak info ac1 dan ac2
$ac1->cetak();
$ac2->cetak();

?>
