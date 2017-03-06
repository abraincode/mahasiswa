<?php
include_once '../layout/header.php';
?>

<form class="form-horizontal" method="post" action="transfer.php">
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
 require_once '../bank/class_NFBank.php'; //untuk menyertakan atau memasukan file/library untuk di gunakan
 error_reporting(E_ALL & ~E_NOTICE);

  $akun = new NFBank($_POST['account-asal'], $_POST['jumlah-transfer'], $_POST['noaccount-tujuan']);
  if (isset($_POST["transfer"])) {
  $asal = $akun->cariAccount($_POST['account-asal']);
  $tujuan = $akun->cariAccount($_POST['noaccount-tujuan']);

  echo '<u>Info sebelum transaksi:</u><br/>';
  $asal->cetak();
  echo '</br>';
  $tujuan->cetak();
  echo '</br>';

  echo'<hr>';
  $asal->transfer($tujuan,$_POST['jumlah-transfer']);

  echo '<u>Info sesudah transaksi:</u><br/>';
  echo 'Customer '.$asal->customer .' Transfer '.$_POST['jumlah-transfer']. ' Ke '.$tujuan->customer;
  echo '</br>';
  $asal->cetak();
  echo '</br>';
  $tujuan->cetak();
}
?>

<?php
include_once '../layout/footer.php';
 ?>
