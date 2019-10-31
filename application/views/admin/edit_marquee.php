
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Edit
              <small> Tulisan Berjalan</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>admin/agenda_marquee"> Tulisan Berjalan</a></li>
              <li class="active">Edit</li>
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
                <h3 class="box-title">Form Data Edit Tulisan Berjalan</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open('admin/update_marquee'); ?>
                  <?php  
                foreach ($editdata as $data):
                ?>
                 <div class="form-group">
                    
                    <input readonly type="text" value="<?php echo $data->marquee_id ?>" class="form-control" name="idm" placeholder="<?php echo $data->marquee_id ?>"/>
                  </div>   
                                
                 <div class="form-group" id="isim">
                    <label for="exampleInputEmail1">Isi</label>
                      <textarea name="isim" class="form-control" cols="30" rows="10"><?php echo $data->isi ?></textarea>
                  </div>
                 
                  <div class="form-group">
                    
                    <input readonly type="hidden" value="<?php echo $data->user ?>" class="form-control" name="user" placeholder="<?php echo $data->user ?>"/>
                  </div>
                  
                  <a href="<?php echo base_url(); ?>admin/agenda_marquee" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                  <?php endforeach ?>
                <?php echo form_close(); ?> 
                
                                
                
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>

 
