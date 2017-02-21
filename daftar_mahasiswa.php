<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>

<body>
<?php
require_once 'class_mahasiswa.php'; //untuk menyertakan atau memasukan file/library untuk di gunakan

$mhs1 = new Mahasiswa ("02011", "Faiz Fikri");
$mhs1->prodi = "TI";
$mhs1->thn_angkatan=2012;
$mhs1->ipk=3.8;
echo "Nama :" .$mhs1->nama;
echo "<br/>Nim :" .$mhs1->nim;
echo "<br/>IPK :" .$mhs1->ipk;
echo "<br/>Predikat :" .$mhs1->predikat_ipk();

$mhs2 = new Mahasiswa ("02012", "Alissa Khairunnisa");
$mhs2->prodi = "TI";
$mhs2->thn_angkatan=2012;
$mhs2->ipk=3.9;

$mhs3 = new Mahasiswa ("01011", "Rosalie Naurah");
$mhs3->prodi = "SI";
$mhs3->thn_angkatan=2010;
$mhs3->ipk=3.46;

$mhs4 = new Mahasiswa ("01012", "Defgi Muhammad");
$mhs4->prodi = "SI";
$mhs4->thn_angkatan=2010;
$mhs4->ipk=3.2;

// buat array
echo "<hr>";
$ar_mahasiswa = [$mhs1,$mhs2,$mhs3,$mhs4];
foreach($ar_mahasiswa as $mhs){
    echo $mhs->nim . ' - ' .
         $mhs->nama .' - ' .
         $mhs->thn_angkatan .' - ' .
         $mhs->prodi .' - ' .
         $mhs->predikat_ipk();
    echo "<br/>";
    ;
}


?>
</body>
</html>
