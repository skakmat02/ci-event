<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Config
              <small>Agenda</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>admin/config">Config Agenda</a></li>
              <li class="active">---</li>
              <!--
              <li><a href="#">Layout</a></li>
              <li class="active">Top Navigation</li>
              -->
            </ol>
          </section>

          <!-- Main content -->
          <section class="content">
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Form Config Agenda</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open('admin/update_config'); ?>
                <?php  
                foreach ($editdata as $data):
                ?>
                                   
                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Durasi Youtube </label>
                      <input type="text" class="form-control" name="dury" placeholder="Dalam Menit" value="<?php echo $data->durasi_youtube ?>" required/><sup>*Dalam Menit</sup>
                  </div>
                  
                   <div class="form-group">
                    <label for="exampleInputEmail1">Durasi Gambar</label>
                      <input type="text" class="form-control" name="durg" placeholder="Dalam Menit" value="<?php echo $data->durasi_gambar ?>" required/><sup>*Dalam Menit</sup>
                  </div>
                
                  <div class="form-group">
                    
                    <input readonly type="hidden" value="<?php echo $data->user ?>" class="form-control" name="userc" placeholder="<?php echo $data->user ?>"/>
                  </div>
                  
                  
                  <input type="hidden" name="idc" value="<?php echo $data->config_id ?>">
                  <a href="<?php echo base_url(); ?>admin/index" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Dashboard</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php endforeach ?>
                <?php echo form_close(); ?>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>
