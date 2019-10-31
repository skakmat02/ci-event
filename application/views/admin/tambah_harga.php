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
      <div class="content-wrapper" >
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Tambah
              <small>Data Harga</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>admin/data_harga">Data Harga</a></li>
              <li class="active">Tambah</li>
              <!--
              <li><a href="#">Layout</a></li>
              <li class="active">Top Navigation</li>
              -->
            </ol>
          </section>

          <!-- Main content -->
          <section id="content" class="content">
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Form Data Tambah Data Harga</h3>
              </div>
              <div class="box-body" name="formharga">
                <!-- form start -->
                <?php echo form_open('admin/insert_data_harga'); ?>
                
                             
                  <div  id="form-group" class="form-group">
                    <label for="exampleInputEmail1">Kota Asal</label>
                      <select name="froms" id="froms" class="form-control" required>
                       
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
                      <input type="text" id="kode" class="form-control" name="kode" placeholder="Kode" required />
                  </div>   
                  <div class="form-group">
                    <label for="exampleInputEmail1">Maskapai</label>
                      <select name="maskapai" id="maskapai" class="form-control" required>
                        <?php  
                        $jenis = $this->db->query("SELECT * FROM tb_maskapai")->result();
                        foreach ($jenis as $l_jurnal) {
                          echo "<option  value='$l_jurnal->maskapai'>".ucwords($l_jurnal->maskapai)."</option>"; 
                        }
                        ?>
                        
                      </select>
                  </div>
                 <div class="form-group" >
                    <label for="exampleInputEmail1">Harga Maskapai</label>
                      <input type="number" id="harga_maskapai" class="form-control" name="harga_maskapai" placeholder="Harga Maskapai" required />
                  </div> 
                  <div class="form-group" >
                    <label for="exampleInputEmail1">WH</label>
                      <input  type="number" id="wh" class="form-control" name="wh" placeholder="WH" required />
                  </div>
                  <div class="form-group" >
                    <label for="exampleInputEmail1">Handling</label>
                      <input type="number" id="handling" class="form-control" name="handling" placeholder="Handling" required />
                  </div>
                                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">RA</label>
                      <input  type="number" id="ra" class="form-control" name="ra" placeholder="RA" required />
                  </div>
                  
                 
                  <div class="form-group">
                    
                    <input readonly type="hidden" value="<?php  echo $this->session->userdata('admin_nama');?>" class="form-control" name="user" placeholder="<?php  echo $this->session->userdata('admin_nama');?>"/>
                  </div>
                  <a href="<?php echo base_url(); ?>admin/data_harga" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button id="simpan"  type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php echo form_close(); ?> 
                
               <!--   <div style="border:solid black;padding:10px;background:white;position:absolute;right:5%;top:10vh;" class="form-group" id="upload">
					 <form method="post" id="upload_form" align="center" enctype="multipart/form-data"> 
					 <label id="upload">Pilih Gambar</label> 
                <input type="file" name="image_file" id="image_file" required />  
                                <input type="submit" name="upload" id="upload" value="Upload" class="btn btn-info" />  
           </form>
                </div> -->
               
                
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>

 
