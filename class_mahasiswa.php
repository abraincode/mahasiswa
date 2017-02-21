<?php
/**
 *
 */

class Mahasiswa {
  var $no, $nim, $nama, $thn_angkatan, $prodi, $ipk;

  function __construct($no, $nim, $nama)
  {
    $this->no = $no;
    $this->nim = $nim;
    $this->nama = $nama;
  }

  function predikat_ipk()
  {
    if ($this->ipk < 2.0 ) return "Cukup";
    elseif ($this->ipk >= 2.0 && $this->ipk < 3.0)
      return "Baik";
    elseif ($this->ipk >= 3.0 && $this->ipk < 3.75)
      return "Memuaskan";
    elseif ($this->ipk >= 3.75 && $this->ipk <= 4)
      return "Cum Laude";
  }

}

?>
