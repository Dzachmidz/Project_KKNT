  <aside class="main-sidebar">
    <section class="sidebar">
      <ul class="sidebar-menu" data-widget="tree">

        <li class="<?php echo ($this->uri->segment(2) == 'dashboard' or $this->uri->segment(2) == NULL) ? 'active' : '' ?>">
          <a href="<?php echo site_url('manage'); ?>">
            <i class="fa fa-tachometer"></i> <span>DASHBOARD</span>
            <span class="pull-right-container"></span>
          </a>
        </li>

        <li class="<?php echo ($this->uri->segment(2) == 'payout') ? 'active' : '' ?>">
          <a href="<?php echo site_url('manage/payout'); ?>">
            <i class="fa fa-google-wallet"></i> <span>TRANSAKSI SISWA</span>
            <span class="pull-right-container"></span>
          </a>
        </li>

        <?php if ($this->session->userdata('uroleid') <> SUPERUSER) { ?>
          <li class="<?php echo ($this->uri->segment(2) == 'report' or $this->uri->segment(3) == 'report_bill') ? 'active' : '' ?> treeview">
            <a href="#">
              <i class="fa fa-file-text text-stock"></i> <span>LAPORAN</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="<?php echo ($this->uri->segment(2) == 'report' and $this->uri->segment(3) != 'report_bill') ? 'active' : '' ?> ">
                <a href="<?php echo site_url('manage/report') ?>"><i class="fa  <?php echo ($this->uri->segment(2) == 'report' and $this->uri->segment(3) != 'report_bill') ? 'fa-dot-circle-o' : 'fa-circle-o' ?>"></i> LAPORAN TOTAL KEUANGAN</a>
              </li>
              <li class="<?php echo ($this->uri->segment(3) == 'report_bill') ? 'active' : '' ?> ">
                <a href="<?php echo site_url('manage/report/report_bill') ?>"><i class="fa  <?php echo ($this->uri->segment(3) == 'report_bill') ? 'fa-dot-circle-o' : 'fa-circle-o' ?>"></i> LAPORAN PER-KELAS</a>
              </li>
            </ul>
          </li>
        <?php } ?>
        <?php if ($this->session->userdata('uroleid') <> BENDAHARA || USER) { ?>
          <li class="<?php echo ($this->uri->segment(2) == 'kredit' or $this->uri->segment(2) == 'debit') ? 'active' : '' ?> treeview">
            <a href="#">
              <i class="fa fa-shopping-cart text-stock"></i> <span>TRANSAKSI UMUM</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="<?php echo ($this->uri->segment(2) == 'kredit') ? 'active' : '' ?> ">
                <a href="<?php echo site_url('manage/kredit') ?>"><i class="fa  <?php echo ($this->uri->segment(2) == 'kredit') ? 'fa-dot-circle-o' : 'fa-circle-o' ?>"></i> PENGELUARAN</a>
              </li>
              <li class="<?php echo ($this->uri->segment(2) == 'debit') ? 'active' : '' ?> ">
                <a href="<?php echo site_url('manage/debit') ?>"><i class="fa  <?php echo ($this->uri->segment(2) == 'debit') ? 'fa-dot-circle-o' : 'fa-circle-o' ?>"></i> PENERIMAAN</a>
              </li>
            </ul>
          </li>
        <?php } ?>
        <?php if ($this->session->userdata('uroleid') == SUPERUSER) { ?>
          <li class="<?php echo ($this->uri->segment(2) == 'pos' or $this->uri->segment(2) == 'payment') ? 'active' : '' ?> treeview">
            <a href="#">
              <i class="fa fa-cog text-stock"></i> <span>PENGATURAN PEMBAYARAN</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="<?php echo ($this->uri->segment(2) == 'pos') ? 'active' : '' ?> ">
                <a href="<?php echo site_url('manage/pos') ?>"><i class="fa  <?php echo ($this->uri->segment(2) == 'pos') ? 'fa-dot-circle-o' : 'fa-circle-o' ?>"></i> NAMA PEMBAYARAN</a>
              </li>
              <li class="<?php echo ($this->uri->segment(2) == 'payment') ? 'active' : '' ?> ">
                <a href="<?php echo site_url('manage/payment') ?>"><i class="fa  <?php echo ($this->uri->segment(2) == 'payment') ? 'fa-dot-circle-o' : 'fa-circle-o' ?>"></i> JENIS PEMBAYARAN</a>
              </li>
            </ul>
          </li>
        <?php } ?>
        <?php if ($this->session->userdata('uroleid') == SUPERUSER) { ?>
          <li class="<?php echo ($this->uri->segment(2) == 'student' or $this->uri->segment(2) == 'class' or $this->uri->segment(2) == 'majors' or $this->uri->segment(2) == 'period' or $this->uri->segment(2) == 'setting' or $this->uri->segment(2) == 'month') ? 'active' : '' ?> treeview">
            <a href="#">
              <i class="fa fa-wrench text-stock"></i> <span>PENGATURAN UMUM</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="<?php echo ($this->uri->segment(2) == 'setting') ? 'active' : '' ?> ">
                <a href="<?php echo site_url('manage/setting') ?>"><i class="fa  <?php echo ($this->uri->segment(2) == 'setting') ? 'fa-dot-circle-o' : 'fa-circle-o' ?>"></i> PROFIL MADRASAH</a>
              </li>

              <li class="<?php echo ($this->uri->segment(2) == 'month') ? 'active' : '' ?> ">
                <a href="<?php echo site_url('manage/month') ?>"><i class="fa  <?php echo ($this->uri->segment(2) == 'month') ? 'fa-dot-circle-o' : 'fa-circle-o' ?>"></i> BULAN</a>
              </li>

              <li class="<?php echo ($this->uri->segment(2) == 'period') ? 'active' : '' ?> ">
                <a href="<?php echo site_url('manage/period') ?>"><i class="fa  <?php echo ($this->uri->segment(2) == 'period') ? 'fa-dot-circle-o' : 'fa-circle-o' ?>"></i> TAHUN PELAJARAN</a>
              </li>

              <li class="<?php echo ($this->uri->segment(2) == 'class') ? 'active' : '' ?> ">
                <a href="<?php echo site_url('manage/class') ?>"><i class="fa  <?php echo ($this->uri->segment(2) == 'class') ? 'fa-dot-circle-o' : 'fa-circle-o' ?>"></i> KELAS</a>
              </li>

              <?php if (majors() == 'senior') { ?>
                <li class="<?php echo ($this->uri->segment(2) == 'majors') ? 'active' : '' ?> ">
                  <a href="<?php echo site_url('manage/majors') ?>"><i class="fa  <?php echo ($this->uri->segment(2) == 'majors') ? 'fa-dot-circle-o' : 'fa-circle-o' ?>"></i> JENJANG</a>
                </li>

                <li class="<?php echo ($this->uri->segment(2) == 'student' and $this->uri->segment(3) != 'pass' and $this->uri->segment(3) != 'upgrade') ? 'active' : '' ?> ">
                  <a href="<?php echo site_url('manage/student') ?>"><i class="fa  <?php echo ($this->uri->segment(2) == 'student' and $this->uri->segment(3) != 'pass' and $this->uri->segment(3) != 'upgrade') ? 'fa-dot-circle-o' : 'fa-circle-o' ?>"></i> PESERTA DIDIK</a>
                </li>

                <li class="<?php echo ($this->uri->segment(3) == 'pass') ? 'active' : '' ?> ">
                  <a href="<?php echo site_url('manage/student/pass') ?>"><i class="fa  <?php echo ($this->uri->segment(3) == 'pass') ? 'fa-dot-circle-o' : 'fa-circle-o' ?>"></i> KELULUSAN</a>
                </li>

                <li class="<?php echo ($this->uri->segment(3) == 'upgrade') ? 'active' : '' ?> ">
                  <a href="<?php echo site_url('manage/student/upgrade') ?>"><i class="fa  <?php echo ($this->uri->segment(3) == 'upgrade') ? 'fa-dot-circle-o' : 'fa-circle-o' ?>"></i> KENAIKAN KELAS</a>
                </li>
            </ul>
          </li>
        <?php } ?>

        <li class="<?php echo ($this->uri->segment(2) == 'report' or $this->uri->segment(3) == 'report_bill') ? 'active' : '' ?> treeview">
          <a href="#">
            <i class="fa fa-file-text text-stock"></i> <span>LAPORAN</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php echo ($this->uri->segment(2) == 'report' and $this->uri->segment(3) != 'report_bill') ? 'active' : '' ?> ">
              <a href="<?php echo site_url('manage/report') ?>"><i class="fa  <?php echo ($this->uri->segment(2) == 'report' and $this->uri->segment(3) != 'report_bill') ? 'fa-dot-circle-o' : 'fa-circle-o' ?>"></i> LAPORAN TOTAL KEUANGAN</a>
            </li>

            <li class="<?php echo ($this->uri->segment(3) == 'report_bill') ? 'active' : '' ?> ">
              <a href="<?php echo site_url('manage/report/report_bill') ?>"><i class="fa  <?php echo ($this->uri->segment(3) == 'report_bill') ? 'fa-dot-circle-o' : 'fa-circle-o' ?>"></i> LAPORAN PER-KELAS</a>
            </li>
          </ul>
        </li>

        <li class="<?php echo ($this->uri->segment(2) == 'users') ? 'active' : '' ?>">
          <a href="<?php echo site_url('manage/users'); ?>">
            <i class="fa fa-user"></i> <span>PENGGUNA APLIKASI</span>
            <span class="pull-right-container"></span>
          </a>
        </li>

        <li class="<?php echo ($this->uri->segment(2) == 'maintenance') ? 'active' : '' ?>">
          <a href="<?php echo site_url('manage/maintenance'); ?>">
            <i class="fa fa-database"></i> <span>BACKUP DATABASE</span>
            <span class="pull-right-container"></span>
          </a>
        </li>
      <?php } ?>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>