<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css">
    <script type="text/javascript" src="jquery/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="datatables/datatables.min.js"></script>
</head>

<body>
<div class="container">
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">WEB02</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Review PHP <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PHP5 OOP <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        </ul>
        <form class="navbar-form navbar-left">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Login</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
    </nav>
    <?php
    require_once 'class_mahasiswa.php'; //untuk menyertakan atau memasukan file/library untuk di gunakan

      $mhs = new Mahasiswa('Muh Isfahani Ghiyath', '0110215046');
      $mhs->thn_angkatan = "2015";
      $mhs->prodi = "Teknik Informatika";
      $mhs->ipk = 3.97;

      $mhs1 = new Mahasiswa('Alvino Gartner', '0110215003');
      $mhs1->thn_angkatan = "2015";
      $mhs1->prodi = "Teknik Informatika";
      $mhs1->ipk = 3.5;

      $mhs2 = new Mahasiswa('Muh Arif Hidayatullah', '0110215016');
      $mhs2->thn_angkatan = "2015";
      $mhs2->prodi = "Teknik Informatika";
      $mhs2->ipk = 3.6;
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
              $ar_mahasiswa = [$mhs1,$mhs2];
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
    <hr>
    <div>
      <p><b>Lab Pemrograman Web Lanjutan</b><br>Muh Isfahani Ghiyath<br>STT NF - 2017</p>
    </div>
</div>
</body>
<script type="text/javascript">
$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
</html>
