<?php

/**
 *
 */
class Account {
    var $nomor;
    var $saldo;
    static $counter = 0;

    function __construct($no, $saldo_awal)
    {
        $this->nomor = $no;
        $this->saldo = $saldo_awal;
        self::$counter++;
    }

    function deposit ($uang)
    {
        $this->saldo = $this->saldo + $uang;
    }

    function withdraw ($uang)
    {
        $this->saldo = $this->saldo + $uang;
    }

    function cetak()
    {
        echo "Nomor Account" . $this->nomor;
        echo "Saldonya" . $this->saldo;
    }
}
?>
