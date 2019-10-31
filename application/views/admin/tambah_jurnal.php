
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Tambah
              <small>Jurnal</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>admin/jurnal_aktif">jurnal Aktif</a></li>
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
                <h3 class="box-title">Form Data Tambah jurnal</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open('admin/insert_jurnal'); ?>
                  <div id="form-group" class="form-group">
                    <label for="exampleInputEmail1">Jenis jurnal</label>
                      <select name="jenis" id="jenis" class="form-control" required>
                        <?php  
                        $jenis = $this->db->query("SELECT * FROM tb_jenis_jurnal")->result();
                        foreach ($jenis as $l_jurnal) {
                          echo "<option  value='$l_jurnal->jenis_id'>".ucwords($l_jurnal->fakultas)."</option>"; 
                        }
                        ?>
                        
                      </select>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tgl Jurnal</label>
                      <input type="text" class="form-control" name="tgl" id="tgl_jurnal" data-date-format="yyyy-mm-dd" placeholder="Tgl jurnal" data-provide="datepicker" value="<?php echo date("Y-m-d"); ?>" required />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Judul</label>
                      <input type="text" id="judul" class="form-control" name="judul" placeholder="Judul" required />
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Link Jurnal</label>
                      <input type="text" id="link" class="form-control" name="link" placeholder="LInk Jurnal" required />
                  </div>
              <!--    <div class="form-group" id="isi">
                    <label for="exampleInputEmail1">Isi</label>
                      <textarea name="isi" class="form-control" cols="30" rows="10"></textarea>
                  </div> -->
                  <div class="form-group">
                    <label for="exampleInputEmail1" id="labelurl">Cover</label>
                   
                    <div id="uploaded_image"></div>
                    <input type="text" class="form-control" id="urls" name="urls" value="" required  />
    
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Akreditasi jurnal</label>
                      <select name="akreditasi" id="akreditasi" class="form-control" required>
                        <?php  
                        $akreditasi = $this->db->query("SELECT * FROM tb_akreditasi_jurnal")->result();
                        foreach ($akreditasi as $l_jurnals) {
                          echo "<option  value='$l_jurnals->akreditasi_id'>".ucwords($l_jurnals->akreditasi)."</option>"; 
                        }
                        ?>
                        
                      </select>
                  </div>
                  
                 <!-- <div class="form-group">
                    <label for="exampleInputEmail1">Durasi</label>
                    <input type="text" class="form-control" name="durasi" placeholder="Durasi"/>
                  </div> -->
                  <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
                    <select name="status" class="form-control" required>
					<option value="Aktif">Aktif</option>
					<option value="Tidak Aktif">Tidak Aktif</option>
					</select>
                  </div>
                  <div class="form-group">
                    
                    <input readonly type="hidden" value="<?php  echo $this->session->userdata('admin_nama');?>" class="form-control" name="user" placeholder="<?php  echo $this->session->userdata('admin_nama');?>"/>
                  </div>
                  <a href="<?php echo base_url(); ?>admin/jurnal_aktif" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button id="simpan" type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php echo form_close(); ?> 
                
                 <div style="border:solid black;padding:10px;background:white;position:absolute;right:5%;top:10vh;" class="form-group" id="upload">
					 <form method="post" id="upload_form" align="center" enctype="multipart/form-data"> 
					 <label id="upload">Pilih Gambar</label> 
                <input type="file" name="image_file" id="image_file" required />  
                                <input type="submit" name="upload" id="upload" value="Upload" class="btn btn-info" />  
           </form>
                </div>
               
                
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>

 
