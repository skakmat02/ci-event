<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PT. Jovial | Air Cargo</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>JOV</b>IAL</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>JOV</b>IAL</span>
        </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
			  <a href="<?php echo base_url(); ?>../" target="_BLANK">
                <i class="fa fa-home"></i> <span>Halaman Depan</span>
              </a>
            
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!--<img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> -->
              <span class="hidden-xs"><?php  echo $this->session->userdata('admin_nama');?></span>
              <span class="pull-down-container">
              <i class="fa fa-angle-down pull-down"></i>
            </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li style="height:70px;" class="user-header">
               <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
-->
                <p>
                  Selamat Datang, 
                  <small><?php  echo $this->session->userdata('admin_nama');?></small>
                </p>
              </li>
              <!-- Menu Body -->
              
              
          			  
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url(); ?>login/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button 
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>-->
        </ul>
      </div>
    </nav>
  </header>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="<?php if($page == 'home'){echo 'active';} ?>">
              <a href="<?php echo base_url(); ?>admin/index">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> 
              </a>
            </li>            
           <!-- <li class="<?php if($page == 'jenis_surat'){echo 'active';} ?>">
              <a href="<?php echo base_url(); ?>admin/jenis_surat">
                <i class="fa fa-tag"></i> <span>Jenis jurnal</span>
              </a>
            </li>  -->         
            <li class="<?php if($page == 'data_utama'){echo 'active';} ?>">
              <a href="<?php echo base_url(); ?>admin/data_utama">
                <i class="fa fa-calendar"></i> <span>Data Utama</span>
              </a>
            </li>
            <?php  $admin_kode = $this->session->userdata('admin_kode'); 
					if ($admin_kode== 5 ) {
            ?>
            <li class="<?php if($page == 'data_harga'){echo 'active';} ?>">
              <a href="<?php echo base_url(); ?>admin/data_harga">
                <i class="fa fa-calendar-o"></i> <span>Daftar Harga</span>
              </a>
            </li> 
            <?php } ?>
            <!--
            <li class="<?php if($page == 'jurnal_marquee'){echo 'active';} ?>">
              <a href="<?php echo base_url(); ?>admin/jurnal_marquee">
                <i class="fa fa-newspaper-o"></i> <span>Daftar Tulisan Berjalan</span>
              </a>
            </li> -->
            
         <!--   <li class="<?php //if($page == 'config'){echo 'active';} ?>">
              <a href="<?php //echo base_url(); ?>admin/config">
                <i class="fa fa-cog"></i> <span>Konfigurasi</span>
              </a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

 <?php $this->load->view('admin/'.$page); ?>
 
  <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>--</b> 
        </div>
        <strong>Copyright &copy; <?php echo date('Y') ?> <a href="#"></a>.</strong> All rights reserved.
      </footer>

  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  
</div>
<!-- ./wrapper -->
<script>  
//$(document).ready(function(){
//	$('#upload_form').on('submit', function(e){
	////	e.preventDefault();
	//	if($('#image_file').val() == '')
	//	{
	//		alert("Please Select the File");
	//	}
	//	else
	//	{
	//		$.ajax({
	//			url:"<?php echo base_url(); ?>admin/do_upload", 
				//base_url() = http://localhost/tutorial/codeigniter
	//			method:"POST",
	//			data:new FormData(this),
	//			contentType: false,
	//			cache: false,
	//			processData:false,
	//			success:function(data)
	//			{
	//				$('#uploaded_image').html(data);
		//		}
	//		});
	//	}
	//});
//});

 //$(document).ready(function()
 //                 { $('#cancel').hide();
 ////                 $('#ganti').hide();
    //              $('#urls').hide();
//					   $('#form-group').hover(function() {
  //  $('#urls').val($('#url').val());
//});
// $('#content').hover(function() {
 //   $('#urls').val($('#url').val());
//});

//$('#simpan').click(function() {
	//if ( $('#url').val() == null || $('#url').val() == "" ){
	//	$('#urls').val($('#urlse').val());
	//	}
  /// else{  $('#urls').val($('#url').val());}
    
//});

//$('#upload').click(function() {
  // / $('#cancel').show();
  //                $('#ganti').show();
//});
//$('#cancel').click(function() {
 //   $('#url').val('');
 //   $('#url').hide();
 //   $('#uploadsss').hide();
  //  $('#cancel').hide();
  //  $('#ganti').hide();
//});
     //   {
              
              //    $("#jeniss").change(function()
     //   {
     //        if($(this).val() == "2" )
     //   {
     //       $("#upload").show();
     //       $("input[name=image_file]").show();
       //     $("input[name=url]").hide();
       //     $("sup[name=url]").hide();
      //      $("#isi").hide();
      //      $("#labelurl").show();
     //   }
     //   else
     //   {
       //     $("#upload").hide();
         //   $("input[name=image_file]").hide();
         //   $("input[name=url]").hide();
        //    $("sup[name=url]").hide();
        //    $("#labelurl").hide();
         //   $("#isi").show();
      //  }
      //      });
       //  $("#upload").hide();
       //  $("input[name=image_file]").hide();
       //  $("#labelurl").show();
        // $("#isi").hide();



      $(function () {
        $("#example1").DataTable({     
			 dom: 'Bfrtip',
        buttons: [
        { extend: 'copyHtml5', footer: true },
            { extend: 'excelHtml5', footer: true },
            { extend: 'csvHtml5', footer: true },
            { extend: 'pdfHtml5', footer: true },
            {
				
                extend: 'print',
                exportOptions: {
                    columns: ':visible'
                }
            },
            'colvis'
        ],
        columnDefs: [ {
            targets: -1,
            visible: false
        } ],   
        
          "language": {
            "url": "<?php echo base_url(); ?>assets/plugins/datatables/Indonesian.json",
            "sEmptyTable": "Tidak ada data di database"
        }
        });
      });
      $(function() {
          $( "#tgl_jurnal" ).datepicker({ 
            autoclose: true 
          });
        });
        
      
        
       
    </script>
    <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url(); ?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url(); ?>assets/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url(); ?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url(); ?>assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>

<!-- DataTables -->
<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->

<script>
  $(function () {
    $("#example1").DataTable({     
			 dom: 'Bfrtip' });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>
