<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		// $this->load->helper(array('isi','form'));
		// $this->load->model('model_admin');
	}

	function index(){
		if($this->session->userdata('admin_valid') != TRUE ){
			redirect("login");
		}

	//		$a['jenis']	= $this->model_admin->tampil_jenis()->num_rows(); //judul ambil data dari file model_admin.php dengan function tampil_jenis
		$a['data_utama']	= $this->model_admin->tampil_data_utama()->num_rows();
		$a['data_harga']	= $this->model_admin->tampil_data_harga()->num_rows();
	//	$a['jurnal_marquee']	= $this->model_admin->tampil_jurnal_marquee()->num_rows();
		$a['page']	= "home";

		$this->load->view('admin/index', $a);
	}

	function do_upload()
      {
        if(isset($_FILES["image_file"]["name"]))
           {
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['encrypt_name'] = TRUE;
                $this->load->library('upload', $config);
                if(!$this->upload->do_upload('image_file'))
                {
                     echo $this->upload->display_errors();
                }
                else
                {


                     $data = $this->upload->data();
                     echo '<img src="'.base_url().'uploads/'.$data["file_name"].'" width="300" height="225" class="img-thumbnail" name="uploadsss" id="uploadsss"/>';
                     echo '<br/><input type="text" class="form-control" id="url" name="url" value="'.base_url().'uploads/'.$data["file_name"].'" readonly />'  ;

                }
           }
}

     function config(){
		if($this->session->userdata('admin_valid') != TRUE ){
			redirect("login");
		}

		$a['editdata']	= $this->db->get_where('tb_config')->result_object();
		$a['page']	= "config";

		$this->load->view('admin/index', $a);
	}

	function update_config(){
		$dury = $this->input->post('dury');
		$durg = $this->input->post('durg');
		$idc = $this->input->post('idc');
		$object = array(
				'durasi_youtube' => $dury,
				'durasi_gambar' => $durg,
				'user' => 'Administrator'
			);
		$this->db->where('config_id', $idc);
		$this->db->update('tb_config', $object);

		redirect('admin/config','refresh');
	}

	//

	function jurnal_marquee(){
		if($this->session->userdata('admin_valid') != TRUE ){
			redirect("login");
		}
		$a['data']	= $this->model_admin->tampil_jurnal_marquee()->result_object();
		$a['page']	= "jurnal_marquee";

		$this->load->view('admin/index', $a);
	}

	function tambah_marquee(){
		if($this->session->userdata('admin_valid') != TRUE ){
			redirect("login");
		}
		$a['page']	= "tambah_marquee";

		$this->load->view('admin/index', $a);
	}

	function insert_marquee(){

		$marquee = $this->input->post('isim');
		$umarquee = $this->input->post('userm');
		$object = array(
				'isi' => $marquee,
				'user' => $umarquee
			);
		$this->db->insert('tb_daftar_marquee', $object);

		redirect('admin/jurnal_marquee','refresh');
	}

	function edit_marquee($id){

		$a['editdata']	= $this->db->get_where('tb_daftar_marquee',array('marquee_id'=>$id))->result_object();
		$a['page']	= "edit_marquee";

		$this->load->view('admin/index', $a);
	}

	function update_marquee(){
		$id = $this->input->post('idm');
		$marquee = $this->input->post('isim');
		$object = array(
				'isi' => $marquee
			);
		$this->db->where('marquee_id', $id);
		$this->db->update('tb_daftar_marquee', $object);

		redirect('admin/jurnal_marquee','refresh');
	}

function hapus_marquee($id){

		$this->model_admin->hapus_marquee($id);
		redirect('admin/jurnal_marquee','refresh');
	}

	/* Fungsi Jenis jurnal */
	function jenis_jurnal(){
		$a['data']	= $this->model_admin->tampil_jenis()->result_object();
		$a['page']	= "jenis_jurnal";

		$this->load->view('admin/index', $a);
	}

	function tambah_jenis(){
		$a['page']	= "tambah_jenis_jurnal";

		$this->load->view('admin/index', $a);
	}

	function insert_jenis(){

		$jenis = $this->input->post('jenis');
		$object = array(
				'jenis_jurnal' => $jenis
			);
		$this->db->insert('tb_jenis_jurnal', $object);

		redirect('admin/jenis_jurnal','refresh');
	}

	function edit_jenis($id){

		$a['editdata']	= $this->db->get_where('tb_jenis_jurnal',array('jenis_id'=>$id))->result_object();
		$a['page']	= "edit_jenis_jurnal";

		$this->load->view('admin/index', $a);
	}

	function update_jenis(){
		$id = $this->input->post('id');
		$jenis = $this->input->post('jenis');
		$object = array(
				'jenis_jurnal' => $jenis
			);
		$this->db->where('jenis_id', $id);
		$this->db->update('tb_jenis_jurnal', $object);

		redirect('admin/jenis_jurnal','refresh');
	}

	function hapus_jenis($id){

		$this->model_admin->hapus_jenis($id);
		redirect('admin/jenis_jurnal','refresh');
	}


	/* Fungsi data harga */


	function data_harga(){
		if($this->session->userdata('admin_valid') != TRUE ){
			redirect("login");
		}
		if($this->session->userdata('admin_kode') != 5 ){
			redirect("admin/data_utama");
		}
		$a['data']	= $this->model_admin->tampil_data_harga()->result_object();
		$a['page']	= "data_harga";

		$this->load->view('admin/index', $a);
	}

	function tambah_data_harga(){
		if($this->session->userdata('admin_valid') != TRUE ){
			redirect("login");
		}
		if($this->session->userdata('admin_kode') != 5 ){
			redirect("admin/data_utama");
		}
		$a['page']	= "tambah_harga";

		$this->load->view('admin/index', $a);
	}



function insert_data_harga(){

		$kode = $this->input->post('kode');
		$froms = $this->input->post('froms');
		$tos = $this->input->post('tos');
		$maskapai = $this->input->post('maskapai');

		$wh = $this->input->post('wh');
		$handling = $this->input->post('handling');
		$ra = $this->input->post('ra');
		$harga_maskapai = $this->input->post('harga_maskapai');
	$user = $this->input->post('user');
	$ppn = $harga_maskapai * (10 /100);
            $object = array(
                'kode' => $kode,
				'froms' => $froms,
				'tos' => $tos,
				'maskapai' => $maskapai,
				'ppn' => $ppn,
				'wh' => $wh,
				'user' => $user,
				'handling' => $handling,
				'ra' => $ra,
				'harga_maskapai' => $harga_maskapai
            );
            $this->db->insert('tb_data_harga', $object);

		if($this==true)
{
    $this->session->set_flashdata('success', "<div class='alert alert-success alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4><i class='icon fa fa-check'></i> Alert!</h4>
                Data Berhasil Disimpan
              </div>");
}else{
    $this->session->set_flashdata('error', "<div class='alert alert-danger alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4><i class='icon fa fa-check'></i> Alert!</h4>
                Data Gagal Disimpan
              </div>");
}

		redirect('admin/data_harga','refresh');
	}

	function edit_data_harga($id){
		$a['editdata']	= $this->db->get_where('tb_data_harga',array('harga_id'=>$id))->result_object();
		$a['page']	= "edit_harga";

		$this->load->view('admin/index', $a);
	}

	function update_data_harga(){
		$id = $this->input->post('id');
		$kode = $this->input->post('kode');
		$froms = $this->input->post('froms');
		$tos = $this->input->post('tos');
		$maskapai = $this->input->post('maskapai');

		$wh = $this->input->post('wh');
		$handling = $this->input->post('handling');
		$ra = $this->input->post('ra');
		$harga_maskapai = $this->input->post('harga_maskapai');
	$user = $this->input->post('user');
	$ppn = $harga_maskapai * (10 /100);
            $object = array(
                'kode' => $kode,
				'froms' => $froms,
				'tos' => $tos,
				'maskapai' => $maskapai,
				'ppn' => $ppn,
				'wh' => $wh,
				'user' => $user,
				'handling' => $handling,
				'ra' => $ra,
				'harga_maskapai' => $harga_maskapai
            );
		$this->db->where('harga_id', $id);
		$this->db->update('tb_data_harga', $object);
if($this==true)
{
    $this->session->set_flashdata('success', "<div class='alert alert-success alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4><i class='icon fa fa-check'></i> Alert!</h4>
                Data Berhasil Diupdate
              </div>");
}else{
    $this->session->set_flashdata('error', "<div class='alert alert-danger alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4><i class='icon fa fa-check'></i> Alert!</h4>
                Data Gagal Diupdate
              </div>");
}
		redirect('admin/data_harga','refresh');
	}


	function hapus_data_harga($id){

		$this->model_admin->hapus_data_harga($id);
		redirect('admin/data_harga','refresh');
	}



/* Fungsi data utama */



function data_utama(){

	if($this->session->userdata('admin_valid') != TRUE ){
			redirect("login");
		}

		$a['data']	= $this->model_admin->tampil_data_utama()->result_object();
		$a['page']	= "data_utama";

		$this->load->view('admin/index', $a);
	}

	function tambah_data(){
		if($this->session->userdata('admin_valid') != TRUE ){
			redirect("login");
		}
		$a['page']	= "tambah_data";

		$this->load->view('admin/index', $a);
	}


	function insert_data(){

		$no_smu = $this->input->post('no_smu');
		$froms = $this->input->post('froms');
		$tos = $this->input->post('tos');
		$koli = $this->input->post('koli');
		$tgl_smu = $this->input->post('tgl_smu');
		$kg = $this->input->post('kg');
		$user = $this->input->post('user');
		$status = $this->input->post('status');
		$keterangan = $this->input->post('keterangan');
		$query = $this->db->get_where('tb_data', array(
            'no_smu' => $no_smu
        ));

        $count = $query->num_rows();

        if ($count === 0) {
            $object = array(
                'no_smu' => $no_smu,
				'froms' => $froms,
				'tos' => $tos,
				'koli' => $koli,
				'kg' => $kg,
				'status' => $status,
				'user' => $user,
				'tgl_smu' => $tgl_smu,
				'keterangan' => $keterangan
            );
            $this->db->insert('tb_data', $object);
        }
		if($count===0)
{
    $this->session->set_flashdata('success', "<div class='alert alert-success alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4><i class='icon fa fa-check'></i> Alert!</h4>
                Data Berhasil Disimpan
              </div>");
}else{
    $this->session->set_flashdata('error', "<div class='alert alert-danger alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4><i class='icon fa fa-check'></i> Alert!</h4>
                Data Gagal Disimpan
              </div>");
}
		redirect('admin/data_utama','refresh');
	}

	function edit_data($id){
		$a['editdata']	= $this->db->get_where('tb_data',array('jovial_id'=>$id))->result_object();
		$a['page']	= "edit_data";

		$this->load->view('admin/index', $a);
	}

	function update_data(){
		$id = $this->input->post('id');
		$no_smu = $this->input->post('no_smu');
		$froms = $this->input->post('froms');
		$tos = $this->input->post('tos');
		$koli = $this->input->post('koli');
		$tgl_smu = $this->input->post('tgl_smu');
		$kg = $this->input->post('kg');
		$user = $this->input->post('user');
		$status = $this->input->post('status');
		$keterangan = $this->input->post('keterangan');
		$object = array(
				'no_smu' => $no_smu,
				'froms' => $froms,
				'tos' => $tos,
				'koli' => $koli,
				'kg' => $kg,
				'status' => $status,
				'user' => $user,
				'tgl_smu' => $tgl_smu,
				'keterangan' => $keterangan
			);
		$this->db->where('jovial_id', $id);
		$this->db->update('tb_data', $object);
if($this==true)
{
    $this->session->set_flashdata('success', "<div class='alert alert-success alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4><i class='icon fa fa-check'></i> Alert!</h4>
                Data Berhasil Diupdate
              </div>");
}else{
    $this->session->set_flashdata('error', "<div class='alert alert-danger alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4><i class='icon fa fa-check'></i> Alert!</h4>
                Data Gagal Diupdate
              </div>");
}
		redirect('admin/data_utama','refresh');
	}


	function hapus_data($id){

		$this->model_admin->hapus_data_utama($id);
		redirect('admin/data_utama','refresh');
	}

	/* Fungsi Manage User */
	function manage_user(){
		$a['data']	= $this->model_admin->tampil_user()->result_object();
		$a['page']	= "manage_user";

		$this->load->view('admin/index', $a);
	}

	function tambah_user(){
		$a['page']	= "tambah_user";

		$this->load->view('admin/index', $a);
	}

	function insert_user(){

		$user 	  = $this->input->post('user');
		$password = $this->input->post('password');
		$nama	  = $this->input->post('nama');

		$object = array(
				'username' => $user,
				'password' => md5($password),
				'nama' => $nama
			);
		$this->model_admin->insert_user($object);

		redirect('admin/manage_user','refresh');
	}

	function edit_user($id){
		$a['editdata']	= $this->model_admin->edit_user($id)->result_object();
		$a['page']	= "edit_user";

		$this->load->view('admin/index', $a);
	}

	function update_user(){
		$id 	  = $this->input->post('id');
		$user 	  = $this->input->post('user');
		$password = $this->input->post('password');
		$pass_old = $this->input->post('pass_old');
		$nama	  = $this->input->post('nama');

		if (empty($password)) {
			$object = array(
				'username' => $username,
				'password' => $password,
				'nama' => $nama
			);
		}else{
			$object = array(
				'username' => $username,
				'password' => $pass_old,
				'nama' => $nama
			);
		}


		$this->model_admin->update_user($id, $object);

		redirect('admin/data_utama','refresh');
	}

	function hapus_user($id){

		$this->model_admin->hapus_user($id);
		redirect('admin/manage_user','refresh');
	}


}
