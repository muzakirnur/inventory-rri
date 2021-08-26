  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
              <div class="pull-left image">
              </div>
          </div>
          <!-- search form -->

          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
              <li class="header">MAIN NAVIGATION</li>

              <li class="treeview active">
                  <a href="<?php echo base_url('user') ?>">
                      <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                      <span class="pull-right-container">
                          <!-- <i class="fa fa-angle-left pull-right"></i> -->
                      </span>
                  </a>
              </li>
              <li class="treeview">
                  <a href="#">
                      <i class="fa fa-table"></i> <span>Tabel Barang</span>
                      <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                      </span>
                  </a>
                  <ul class="treeview-menu">
                      <li><a href="<?= base_url('user/tabel_rekaman') ?>"><i class="fa fa-circle-o"></i> Ruang Rekaman</a></li>
                      <li><a href="<?= base_url('user/tabel_mp') ?>"><i class="fa fa-circle-o"></i> Ruang Multimedia Purpose</a></li>
                      <li><a href="<?= base_url('user/tabel_pro1') ?>"><i class="fa fa-circle-o"></i> Ruang Pro 1</a></li>
                      <li><a href="<?= base_url('user/tabel_pro2') ?>"><i class="fa fa-circle-o"></i> Ruang Pro 2</a></li>
                      <li><a href="<?= base_url('user/tabel_satuan') ?>"><i class="fa fa-circle-o"></i> Daftar Satuan Barang</a></li>
                  </ul>
          </ul>
      </section>
      <!-- /.sidebar -->
  </aside>