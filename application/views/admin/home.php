<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php echo $data_utama ?></h3>
                  <p>Data Utama</p>
                </div>
                <div class="icon">
                  <i class="fa fa-calendar"></i>
                </div>
                <a href="<?php echo base_url(); ?>admin/data_utama" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <?php  $admin_kode = $this->session->userdata('admin_kode');
                    if ($admin_kode== 5) {
                        ?>
             <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo $data_harga; ?></h3>
                  <p>Daftar Harga</p>
                </div>
                <div class="icon">
                  <i class="fa fa-calendar-o"></i>
                </div>
                <a href="<?php echo base_url(); ?>admin/data_harga" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <?php
                    } ?>
            <!-- ./col
            <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php echo $jurnal_marquee; ?></h3>
                  <p>Daftar jurnal Marquee</p>
                </div>
                <div class="icon">
                  <i class="fa fa-newspaper-o"></i>
                </div>
                <a href="<?php echo base_url(); ?>admin/jurnal_marquee" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>-->

          </div>




        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
