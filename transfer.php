<?php
include_once 'header.php';
?>

<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Form Transfer Bank</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="account-asal">No. Account Asal</label>
  <div class="col-md-4">
  <input id="account-asal" name="account-asal" type="text" placeholder="" class="form-control input-md">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="jumlah-transfer">Jumlah Transfer</label>
  <div class="col-md-4">
  <input id="jumlah-transfer" name="jumlah-transfer" type="text" placeholder="" class="form-control input-md">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="noaccount-tujuan">No. Account Tujuan</label>
  <div class="col-md-4">
  <input id="noaccount-tujuan" name="noaccount-tujuan" type="text" placeholder="" class="form-control input-md">

  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="transfer"></label>
  <div class="col-md-4">
    <button id="transfer" name="transfer" class="btn btn-primary">Transfer</button>
  </div>
</div>

</fieldset>
</form>

<?php
require_once 'class_accountbank.php';
// require_once 'class_nfbank.php'; //untuk menyertakan atau memasukan file/library untuk di gunakan
// error_reporting(E_ALL & ~E_NOTICE);

// $akun = new Account($_POST['account-asal'], $_POST['jumlah-transfer'], $_POST['noaccount-tujuan']);
// if (isset($_POST["transfer"])) {
//   echo "<hr>";
//   $akun->cetak();
//   echo "<br><hr><br>";
//   echo "Customer" .$akun[3];
//   echo "NIM :" .$nim = $_POST['nim'];
//
// }

$ac1 = new Account('001', 5000);
$ac2 = new Account('002', 3000);

echo "<hr>";
echo "Info Account sebelum Transaksi";
echo "<br>";
$ac1->cetak();
echo "<br>";
$ac2->cetak();

echo "<hr>";
echo "Customer Achmad Transfer 3000 ke Mutiara";
echo "<br>";
//ac1 menabung 500
$ac1->deposit(200);
$ac1->cetak();
echo "<br>";
$ac2->cetak();


 ?>


<?php
include_once 'footer.php';
 ?>
