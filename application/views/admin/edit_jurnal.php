<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Edit
              <small>jurnal</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>admin/jurnal_aktif">jurnal Aktif</a></li>
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
                <h3 class="box-title">Form Data Edit jurnal</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open('admin/update_jurnal'); ?>
                <?php  
                foreach ($editdata as $data):
                ?>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jenis jurnal</label>
                      <select name="jenis" id="jenis" class="form-control" required>
                        <?php
                        $l_jenis = $this->db->query("SELECT * FROM tb_jenis_jurnal")->result();
                        
                        if (empty($l_jenis)) {
                          echo "<option  value=''> --Tidak Ada Data-- </option>";
                        } else {
                        foreach($l_jenis as $l_jenis_surat){
                        ?>
                       <option <?php if( $data->jenis_id == $l_jenis_surat->jenis_id) {echo "selected"; } ?> value='<?php echo $l_jenis_surat->jenis_id ;?>'><?php echo $l_jenis_surat->fakultas ;?></option>

                        <?php 
                          } 
                          }
                        ?>
                        
                      </select>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tgl jurnal</label>
                      <input type="text" class="form-control" name="tgl" id="tgl_jurnal" data-date-format="yyyy-mm-dd" value="<?php echo $data->tgl_jurnal ?>" data-provide="datepicker" required />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Judul</label>
                      <input type="text" class="form-control" name="judul" placeholder="Judul" value="<?php echo $data->judul ?>" required />
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Link Jurnal</label>
                      <input type="text" id="link" class="form-control" name="link" placeholder="LInk Jurnal" value="<?php echo $data->link ?>" required />
                  </div>
                 <!-- <div class="form-group" id="isi">
                    <label for="exampleInputEmail1">Isi</label>
                      <textarea name="isi" class="form-control" cols="30" rows="10"><?php echo $data->isi ?></textarea>
                  </div> -->
                  <div class="form-group">
                    <label for="exampleInputEmail1">Cover</label>
                    <br/>
                    <img src="<?php echo $data->url ?>" width="300" height="225" class="img-thumbnail" name="uploadss" id="uploadss"/> <input type="text" class="form-control" id="urlse" name="urlse" value="<?php echo $data->url ?>"  /><br/><font id="ganti">Diganti : </font> <br/>
                    <div id="uploaded_image"></div>
                    <br/> <input name="cancel" id="cancel" class="btn btn-info" value="Cancel" />
                    <input type="text" class="form-control" id="urls" name="urls" value="" required hidden />
                  </div>
                <!--  <div class="form-group">
                    <label for="exampleInputEmail1">Durasi</label>
                    <input type="text" class="form-control" name="durasi" placeholder="Durasi" value="<?php echo $data->durasi ?>"/>
                  </div> -->
                  <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
                    <select name="status" class="form-control" required>
					<option value="<?php echo $data->status ?>"><?php echo $data->status ?></option>
					<option value="<?php if($data->status=="Aktif"){echo "Tidak Aktif";}else { echo "Aktif"; } ?>"><?php if($data->status=="Aktif"){echo "Tidak Aktif";}else { echo "Aktif"; } ?></option>
					</select>
                  </div>
                  <div class="form-group">
                    
                    <input readonly type="hidden" value="<?php echo $data->user ?>" class="form-control" name="user" placeholder="<?php echo $data->user ?>"/>
                  </div>
                  
                  
                  <input type="hidden" name="id" value="<?php echo $data->jurnal_id ?>">
                  <a href="<?php echo base_url(); ?>admin/jurnal_aktif" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" id="simpan" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php endforeach ?>
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
