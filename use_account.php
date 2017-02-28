    <?php
    include_once 'header.php';
    require_once 'class_account.php';

    $ac1 = new Account('001', 5000);
    $ac2 = new Account('002', 3000);

    echo "<hr>";
    echo "Info Account sebelum Transaksi";
    echo "<br>";
    $ac1->cetak();
    echo "<br>";
    $ac2->cetak();

    echo "<hr>";
    echo "Info Account sesudah Transaksi";
    echo "<br>";
    //ac1 menabung 500
    $ac1->deposit(200);
    $ac1->cetak();
    echo "<br>";
    $ac2->cetak();

    include_once 'footer.php';
     ?>
