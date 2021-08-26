<br><br><br>
<div class="container">
  <section class="content-header">
    <h1>
      Dashboard User
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <?php if (!empty($stokPro1)) { ?>
              <?php foreach ($stokPro1 as $d) { ?>
                <h3><?= $d->jumlah ?></h3>
              <?php } ?>
            <?php } else { ?>
              <h3>0</h3>
            <?php } ?>
            <p>Tabel Pro 1</p>
          </div>
          <div class="icon">
            <i class="ion ion-android-microphone"></i>
          </div>
          <a href="<?= base_url('user/tabel_pro1') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <?php if (!empty($stokPro2)) { ?>
              <?php foreach ($stokPro2 as $d) { ?>
                <h3><?= $d->jumlah ?></h3>
              <?php } ?>
            <?php } else { ?>
              <h3>0</h3>
            <?php } ?>
            <p>Tabel Pro 2</p>
          </div>
          <div class="icon">
            <i class="ion ion-headphone"></i>
          </div>
          <a href="<?= base_url('user/tabel_mp') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <?php if (!empty($stokRekaman)) { ?>
              <?php foreach ($stokRekaman as $d) { ?>
                <h3><?= $d->jumlah ?></h3>
              <?php } ?>
            <?php } else { ?>
              <h3>0</h3>
            <?php } ?>
            <p>Tabel Rekaman</p>
          </div>
          <div class="icon">
            <i class="ion ion-ios-mic"></i>
          </div>
          <a href="<?= base_url('user/tabel_rekaman') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <?php if (!empty($stokMP)) { ?>
              <?php foreach ($stokMP as $d) { ?>
                <h3><?= $d->jumlah ?></h3>
              <?php } ?>
            <?php } else { ?>
              <h3>0</h3>
            <?php } ?>
            <p>Tabel Multimedia Purpose</p>
          </div>
          <div class="icon">
            <i class="ion ion-ios-photos"></i>
          </div>
          <a href="<?= base_url('user/tabel_pro2') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <!-- /.row (main row) -->

  </section>
</div>