<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Innventory RRI | Cetak Laporan</title>
  <!-- <link rel="stylesheet" href="/assets/css/bootstrap.min.css" /> -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/web_admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/web_admin/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/web_admin/bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/web_admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/web_admin/dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/sweetalert/dist/sweetalert.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/web_admin/dist/css/skins/_all-skins.min.css">
</head>

<body>

  <div class="container">
    <div class="card">
      <div class="card-body">
        <table class="table table-bordered table-striped text-center">
          <thead>
            <p>Ruangan : <?= $ruangan ?></p>
            <p>Tanggal : <?= date('d-m-Y') ?></p>
            <tr class="bg-primary">
              <th scope="col">No</th>
              <th scope="col">ID Transaksi</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Nama Barang</th>
              <th scope="col">Merk</th>
              <th scope="col">Tipe</th>
              <th scope="col">Tahun Pengadaan</th>
              <th scope="col">Keterangan</th>
              <th scope="col">Satuan</th>
              <th scope="col">Jumlah</th>
              <th scope="col">Kondisi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <?php if (is_array($brgpro2)) { ?>
                <?php $no = 1; ?>
                <?php foreach ($brgpro2 as $row) : ?>
                  <td><?= $no ?></td>
                  <td><?= $row->id_transaksi ?></td>
                  <td><?= $row->tanggal ?></td>
                  <td><?= $row->nama_barang ?></td>
                  <td><?= $row->merk_barang ?></td>
                  <td><?= $row->tipe_barang ?></td>
                  <td><?= $row->tahun_pengadaan ?></td>
                  <td><?= $row->keterangan ?></td>
                  <td><?= $row->satuan ?></td>
                  <td><?= $row->jumlah ?></td>
                  <td><?= $row->kondisi_barang ?></td>
            </tr>
            <?php $no++; ?>
          <?php endforeach; ?>
        <?php } else { ?>
          <td colspan="7" align="center"><strong>Data Kosong</strong></td>
        <?php } ?>
          </tbody>
        </table><br>
        <div class="section mt-3 text-right" style="position: absolute;right:7%;transform: translateX(-7%);">
          <p>Lhokseumawe, <?= date('d-m-Y') ?></p>
          <span>Mengetahui,</span>
          <br><br>
          <br><br>
          <p>NIP :</p>
          <span>Penanggung Jawab</span>
        </div>
      </div>
    </div>
  </div>
  <script>
    window.print()
  </script>

</body>

</html>