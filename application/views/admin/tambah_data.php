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
              <small>Data</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>admin/data_utama">Data Utama</a></li>
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
                <h3 class="box-title">Form Data Tambah Data</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open('admin/insert_data'); ?>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">No SMU</label>
                      <input type="text" id="no_smu" class="form-control" name="no_smu" placeholder="No SMU" required />
                  </div>                
                  <div  id="form-group" class="form-group">
                    <label for="exampleInputEmail1">Kota Asal</label>
                      <select name="froms" id="froms" class="form-control" required>
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
                      <input type="number" id="koli" class="form-control" name="koli" placeholder="Koli" required />
                  </div>
                 <div class="form-group" >
                    <label for="exampleInputEmail1">Berat</label>
                      <input type="number" id="kg" class="form-control" name="kg" placeholder="Berat" required />
                  </div> 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tgl SMU</label>
                      <input  type="text" class="form-control" name="tgl_smu" id="tgl_smu" data-date-format="yyyy-mm-dd" placeholder="Tgl SMU" data-provide="datepicker" value="<?php echo date("Y-m-d"); ?>" required />
                  </div>
                  <div class="form-group" >
                    <label for="exampleInputEmail1">Keterangan</label>
                      <textarea onkeyup="resizeTextarea('keterangan')" id="keterangan" class="form-control" name="keterangan" placeholder="Keterangan" required ></textarea>
                  </div>
                <!--    <div class="form-group">
                    <label for="exampleInputEmail1">Link Jurnal</label>
                      <input type="text" id="link" class="form-control" name="link" placeholder="LInk Jurnal" required />
                  </div>
                 <div class="form-group" id="isi">
                    <label for="exampleInputEmail1">Isi</label>
                      <textarea name="isi" class="form-control" cols="30" rows="10"></textarea>
                  </div> 
                  <div class="form-group">
                    <label for="exampleInputEmail1" id="labelurl">Cover</label>
                   
                    <div id="uploaded_image"></div>
                    <input type="text" class="form-control" id="urls" name="urls" value="" required  />
    
                  </div>-->
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
                      <textarea onkeyup="resizeTextarea('status')" id="status" class="form-control" name="status" placeholder="Status" required ></textarea>
                  </div>
                  
                 <!-- <div class="form-group">
                    <label for="exampleInputEmail1">Durasi</label>
                    <input type="text" class="form-control" name="durasi" placeholder="Durasi"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
                    <select name="status" class="form-control" required>
					<option value="Aktif">Aktif</option>
					<option value="Tidak Aktif">Tidak Aktif</option>
					</select>
                  </div> -->
                  <div class="form-group">
                    
                    <input readonly type="hidden" value="<?php  echo $this->session->userdata('admin_nama');?>" class="form-control" name="user" placeholder="<?php  echo $this->session->userdata('admin_nama');?>"/>
                  </div>
                  <a href="<?php echo base_url(); ?>admin/jurnal_aktif" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button id="simpan" type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
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

 
