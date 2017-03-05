<?php
include_once 'header.php';
?>
    <?php
    require_once 'class_mahasiswa.php'; //untuk menyertakan atau memasukan file/library untuk di gunakan

    $mhs1 = new Mahasiswa ("1", "02011", "Faiz Fikri");
    $mhs1->prodi = "TI";
    $mhs1->thn_angkatan=2012;
    $mhs1->ipk=3.8;

    $mhs2 = new Mahasiswa ("2", "02012", "Alissa Khairunnisa");
    $mhs2->prodi = "TI";
    $mhs2->thn_angkatan=2012;
    $mhs2->ipk=3.9;

    $mhs3 = new Mahasiswa ("3", "01011", "Rosalie Naurah");
    $mhs3->prodi = "SI";
    $mhs3->thn_angkatan=2010;
    $mhs3->ipk=3.46;

    $mhs4 = new Mahasiswa ("4", "01012", "Defgi Muhammad");
    $mhs4->prodi = "SI";
    $mhs4->thn_angkatan=2010;
    $mhs4->ipk=3.2;
    ?>

    <table id="table_id" class="display">
        <thead>
            <tr>
                <th>No. </th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Thn Angkatan</th>
                <th>IPK</th>
                <th>Predikat</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
              // buat array
              echo "<hr>";
              $ar_mahasiswa = [$mhs1,$mhs2,$mhs3,$mhs4];
              foreach($ar_mahasiswa as $mhs):
            ?>
            <tr>
              <td><?php echo $mhs->no; ?></td>
              <td><?php echo $mhs->nim; ?></td>
              <td><?php echo $mhs->nama; ?></td>
              <td><?php echo $mhs->prodi; ?></td>
              <td><?php echo $mhs->thn_angkatan; ?></td>
              <td><?php echo $mhs->ipk; ?></td>
              <td><?php echo $mhs->predikat_ipk(); ?></td>
              <td><span class="glyphicon glyphicon-eye-open" aria-hidden="true" style="padding-right:15%; color:blue;"></span><span class="glyphicon glyphicon-pencil" aria-hidden="true" style="color:blue;"></span></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
    </table>
    <?php
    include_once 'footer.php';
     ?>
</div>
<script type="text/javascript">
$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
