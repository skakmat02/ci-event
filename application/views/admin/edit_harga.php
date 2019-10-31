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
              <small>Data Harga</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>admin/data_harag">Data Harga</a></li>
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
                <?php echo form_open('admin/update_data_harga'); ?>
                <?php  
                foreach ($editdata as $data):
                ?>
                
                 <div  id="form-group" class="form-group">
                    <label for="exampleInputEmail1">Kota Asal</label>
                      <select name="froms" id="froms" class="form-control" required>
						  <option  value="<?php echo $data->froms ?>"><?php echo $data->froms ?></option>
                        
<option value="Surabaya">Surabaya</option>
<option value="Jakarta">Jakarta</option>
<option value="Medan">Medan</option>
<option value="Jogjakarta">Jogjakarta</option>
<option value="Tanjungkarang">Tanjungkarang</option>
                        
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
                    <label for="exampleInputEmail1">Kode</label>
                      <input type="text" id="kode" value="<?php echo $data->kode ?>" class="form-control" name="kode" placeholder="No Kode" required />
                </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Maskapai</label>
                      <select name="maskapai" id="maskapai" class="form-control" required>
						<option value="<?php echo $data->maskapai ?>"><?php echo $data->maskapai ?></option>
                        <?php  
                        $jenis = $this->db->query("SELECT * FROM tb_maskapai")->result();
                        foreach ($jenis as $l_jurnal) {
                          echo "<option  value='$l_jurnal->maskapai'>".ucwords($l_jurnal->maskapai)."</option>"; 
                        }
                        ?>
                      </select>
                  </div>
                 <div class="form-group" id="isi">
                    <label for="exampleInputEmail1">Harga Maskapai</label>
                      <input value="<?php echo $data->harga_maskapai ?>" type="number" id="harga_maskapai" class="form-control" name="harga_maskapai" placeholder="harga_maskapai" required />
                  </div> 
                  <div class="form-group">
                    <label for="exampleInputEmail1">WH</label>
                      <input value="<?php echo $data->wh ?>" type="number" class="form-control" name="wh" id="wh"  placeholder="WH"  required />
                  </div>
                  <div class="form-group" id="isi">
                    <label for="exampleInputEmail1">Handling</label>
                      <input value="<?php echo $data->handling ?>" type="number" id="handling" class="form-control" name="handling" placeholder="handling" required />
                  </div> 
                  
                 <div class="form-group" id="isi">
                    <label for="exampleInputEmail1">RA</label>
                      <input value="<?php echo $data->ra ?>" type="number" id="ra" class="form-control" name="ra" placeholder="ra" required />
                  </div> 
                  <div class="form-group">
                    
                    <input readonly type="hidden" value="<?php  echo $this->session->userdata('admin_nama');?>" class="form-control" name="user" placeholder="<?php  echo $this->session->userdata('admin_nama');?>"/>
                  </div>
                  
                  <input type="hidden" name="id" value="<?php echo $data->harga_id ?>">
                  <a href="<?php echo base_url(); ?>admin/data_harga" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" id="simpan" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php endforeach ?>
                <?php echo form_close(); ?>
                  
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>
