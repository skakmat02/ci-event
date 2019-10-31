<script>
function resizeTextarea (id) {
  var a = document.getElementById(id);
  a.style.height = 'auto';
  a.style.height = a.scrollHeight+'px';
}

function init() {
  var a = document.getElementsByTagName('textarea');
  for(var i=0,inb=a.length;i<inb;i++) {
     if(a[i].getAttribute('data-resizable')=='true')
      resizeTextarea(a[i].id);
  }
}

addEventListener('DOMContentLoaded', init);

</script>
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Edit
              <small>Data</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>admin/data_utama">Data Utama</a></li>
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
                <h3 class="box-title">Form Data Edit Data</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open('admin/update_data'); ?>
                <?php  
                foreach ($editdata as $data):
                ?>
                <div class="form-group">
                    <label for="exampleInputEmail1">No SMU</label>
                      <input type="text" id="no_smu" value="<?php echo $data->no_smu ?>" class="form-control" name="no_smu" placeholder="No SMU" required />
                </div>
                 <div  id="form-group" class="form-group">
                    <label for="exampleInputEmail1">Kota Asal</label>
                      <select name="froms" id="froms" class="form-control" required>
						  <option  value="<?php echo $data->froms ?>"><?php echo $data->froms ?></option>
                        <?php  
                        $jenis = $this->db->query("SELECT * FROM tb_kota")->result();
                        foreach ($jenis as $l_jurnal) {
                          echo "<option  value='$l_jurnal->kota'>".ucwords($l_jurnal->kota)."</option>"; 
                        }
                        ?>
                        
                      </select>
                  </div>
                  <div  id="form-group" class="form-group">
                    <label for="exampleInputEmail1">Kota Tujuan</label>
                      <select name="tos" id="tos" class="form-control" required>
						  <option  value="<?php echo $data->tos ?>"><?php echo $data->tos ?></option>
                        <?php  
                        $jenis = $this->db->query("SELECT * FROM tb_kota")->result();
                        foreach ($jenis as $l_jurnal) {
                          echo "<option  value='$l_jurnal->kota'>".ucwords($l_jurnal->kota)."</option>"; 
                        }
                        ?>
                        
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Koli</label>
                      <input value="<?php echo $data->koli ?>" type="number" id="koli" class="form-control" name="koli" placeholder="Koli" required />
                  </div>
                 <div class="form-group" id="isi">
                    <label for="exampleInputEmail1">Berat</label>
                      <input value="<?php echo $data->kg ?>" type="number" id="kg" class="form-control" name="kg" placeholder="Berat" required />
                  </div> 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tgl SMU</label>
                      <input value="<?php echo $data->tgl_smu ?>" type="text" class="form-control" name="tgl_smu" id="tgl_smu" data-date-format="yyyy-mm-dd" placeholder="Tgl SMU" data-provide="datepicker" value="<?php echo date("Y-m-d"); ?>" required />
                  </div>
                  <div class="form-group" >
                    <label for="exampleInputEmail1">Keterangan</label>
                      <textarea  onkeyup="resizeTextarea('keterangan')" id="keterangan" class="form-control" name="keterangan" placeholder="Keterangan" required ><?php echo $data->keterangan ?></textarea>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
                      <textarea onkeyup="resizeTextarea('status')" id="status" class="form-control" name="status" placeholder="Status" required ><?php echo $data->status ?></textarea>
                  </div>
                  <div class="form-group">
                    
                    <input readonly type="hidden" value="<?php  echo $this->session->userdata('admin_nama');?>" class="form-control" name="user" placeholder="<?php  echo $this->session->userdata('admin_nama');?>"/>
                  </div>
                  
                  <input type="hidden" name="id" value="<?php echo $data->jovial_id ?>">
                  <a href="<?php echo base_url(); ?>admin/data_utama" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" id="simpan" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php endforeach ?>
                <?php echo form_close(); ?>
                  
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>
