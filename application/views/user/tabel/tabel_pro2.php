<br><br><br>
    <div class="container text-center" style="margin: 2em auto;">
    <h2 class="tex-center">Tabel Barang Ruang Pro 2</h2>
    <a href="<?=base_url('report/laporanPro2')?>" style="margin-bottom:10px;float:left;" type="button" class="btn btn-danger" name="laporan_data"><i class="fa fa-file-text" aria-hidden="true"></i> Cetak Laporan</a>
    <div class="tabel" style="margin-top:80px">
    <table class="table table-bordered table-striped" style="margin: 2em auto;" id="tabel_mp">
    <thead>
    <tr>
        <th>No</th>
        <th>ID_Transaksi</th>
        <th>Tanggal</th>
        <th>Nama</th>
        <th>Merk</th>
        <th>Tipe</th>
        <th>Tahun Pengadaan</th>
        <th>Keterangan</th>
        <th>satuan</th>
        <th>Jumlah</th>
        <th>Kondisi</th>
    </tr>
    </thead>
    <tbody>
      <tr>
        <?php if(is_array($list_pro2)){ ?>
        <?php $no = 1;?>
        <?php foreach($list_pro2 as $dd): ?>
          <td><?=$no?></td>
          <td><?=$dd->id_transaksi?></td>
          <td><?=$dd->tanggal?></td>
          <td><?=$dd->nama_barang?></td>
          <td><?=$dd->merk_barang?></td>
          <td><?=$dd->tipe_barang?></td>
          <td><?=$dd->tahun_pengadaan?></td>
          <td><?=$dd->keterangan?></td>
          <td><?=$dd->satuan?></td>
          <td><?=$dd->jumlah?></td>
          <td><?=$dd->kondisi_barang?></td>
      </tr>
    <?php $no++; ?>
    <?php endforeach;?>
    <?php }else { ?>
          <td colspan="7" align="center"><strong>Data Kosong</strong></td>
    <?php } ?>
    </tbody>
  </table>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    $('#tabel_mp').DataTable();
  });
</script>