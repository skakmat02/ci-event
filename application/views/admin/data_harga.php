<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Daftar Harga
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Daftar Harga</li>
          </ol>
          <br/>
          <?php echo $this->session->flashdata('success'); ?><?php echo $this->session->flashdata('error'); ?>
        </section>
                      
        <!-- Main content -->
        <section class="content">

        	<div class="row">          	
          	<div class="col-xs-12">
          		<div class="box">
                <div class="box-header">
                  <h3 class="box-title">
                  	<a href="<?php echo base_url(); ?>admin/tambah_data_harga" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-edit"></i> Tambah</a>
                  </h3>
                  <div class="box-tools">
                  	<!--
                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                    -->
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                
                  <table id="example1" class="table table-bordered table-striped dataTable">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Kota Asal</th>
                        <th>Kota Tujuan</th>
                        <th>Kode</th>
                       <th>Maskapai</th>
                        <th>Harga Maskapai</th>
                      <th>PPN</th>
                        <th>WH</th>
                        <th>Handling</th>
                        
                        <th>RA</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                      	<?php  
                      	$no = 1;
                      	foreach ($data as $lihat):
                      	?>
                    	<tr>
                        <td><?php echo $no++ ?></td>
                    	<td><?php echo ucwords($lihat->froms) ?></td> 
                      <td><?php echo ucwords($lihat->tos) ?></td> 
                      <td><?php echo ucwords($lihat->kode) ?></td> 
                      <td><?php echo ucwords($lihat->maskapai) ?></td> 
                      <td><?php echo ucwords($lihat->harga_maskapai) ?></td>   
                    <td><?php echo ucwords($lihat->ppn) ?></td> 
                      <td><?php echo ucfirst($lihat->wh) ?></td>  
                      <td><?php echo ucfirst($lihat->handling) ?></td>
                      <td><?php echo ucfirst($lihat->ra) ?></td>
                        <td align="center">
                          <div class="btn-group" role="group">
                            <a href="<?php echo base_url(); ?>admin/edit_data_harga/<?php echo $lihat->harga_id ?>" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-edit"></i> Edit</a>
                            <a href="<?php echo base_url(); ?>admin/hapus_data_harga/<?php echo $lihat->harga_id ?>" onclick="javascript: return confirm('Anda yakin akan menghapus data ini ?')" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-trash"></i> Hapus</a>
                          </div>
                        </td>                  		
                    	</tr>
                    	<?php endforeach; ?>
                    </tbody>
                  </table>
                  
                  
                </div><!-- /.box-body -->
                </div>
             </div>
          </div>
          
         

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
