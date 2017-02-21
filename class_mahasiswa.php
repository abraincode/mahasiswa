<?php
/**
 *
 */

class Mahasiswa {
  var $nim;
  var $nama;
  var $thn_angkatan;
  var $prodi;
  var $ipk;

  function __construct($nim, $nama)
  {
    $this->nim = $nim;
    $this->nama = $nama;
  }

}

?>
