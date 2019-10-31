<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_admin extends CI_Model {

	public function tampil_config()
	{
		return $this->db->get('tb_config');
	}
	
	public function tampil_jenis()
	{
		return $this->db->get('tb_kota');
	}

	public function tampil_data_utama()
	{
		return $this->db->query("SELECT a.* FROM tb_data as a WHERE  a.user='".$this->session->userdata('admin_nama')."'");
	}
	
	public function tampil_data_harga()
	{
		return $this->db->query("SELECT a.* FROM tb_data_harga as a WHERE   a.user='".$this->session->userdata('admin_nama')."'");
	}
	
/*	public function tampil_jurnal_marquee()
	{
		return $this->db->query("SELECT a.* FROM tb_daftar_marquee as a WHERE a.user='".$this->session->userdata('admin_nama')."'");
	}

	public function edit_jenis($id)
	{
		return $this->db->get_where('tb_jenis',array('kota_id'=>$id));
	}
*/
	public function hapus_jenis($id)
	{
		return $this->db->delete('tb_jenis', array('kota_id' => $id));
	}
	
	public function hapus_marquee($id)
	{
		return $this->db->delete('tb_daftar_marquee', array('marquee_id' => $id));
	}

	public function hapus_data_utama($id)
	{
		return $this->db->delete('tb_data', array('jovial_id' => $id));
	}
	
	public function hapus_data_harga($id)
	{
		return $this->db->delete('tb_data_harga', array('harga_id' => $id));
	}

	public function cek_login($user, $pass)
	{
		$array = array('username' => $user, 'password' => $pass);

		$query = $this->db->where($array);

		$query = $this->db->get('jovial_login');

		return $query;
	}

	public function tampil_user()
	{
		return $this->db->get('login');
	}

	public function insert_user($object)
	{
		$this->db->insert('login', $object);
	}

	public function edit_user($id)
	{
		return $this->db->get_where('login',array('id_user'=>$id));
	}

	public function update_user($id, $object)
	{
		$this->db->where('id_user', $id);
		$this->db->update('login', $object); 
	}

	public function hapus_user($id)
	{
		return $this->db->delete('login', array('id_user' => $id));
	}
}
