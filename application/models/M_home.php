<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {

	function login($nm_admin,$pass)
	{
		$this->db->select('status_admin, password, nama_admin');
		$this->db->from('admin');	
		$this->db->where('password',$pass);	
		$this->db->where('nama_admin',$nm_admin);
		$this->db->limit(1);

		$query=$this->db->get();

		if ($query->num_rows()==1) {
			return $query->result();
		}else{
			return false;
		}
	}

	function ambildataadmin()
	{
		return $this->db->get('admin');
	}

	public function tambahdata($data, $table)
	{
		$this->db->insert($table, $data);
	}

	function hapusadmin($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	function editadmin($where, $table)
	{
		return $this->db->get_where($table,$where);
	}

	function updateadmin($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function ambildatasiswa()
	{
		$this->db->select('siswa.*, tahun_masuk.keterangan_tahun_masuk');
		//$this->db->select('COUNT(siswa.id_siswa)');
		$this->db->from('siswa');
		$this->db->join('tahun_masuk', 'tahun_masuk.id_tahun_masuk=siswa.id_tahun_masuk','left');
		//$this->db->join('pembayaran_spp', 'pembayaran_spp.id_siswa=siswa.id_siswa','left');
		//$this->db->join('pembayaran_infaq', 'pembayaran_infaq.id_siswa=siswa.id_siswa','left');
		//$this->db->distinct();
		//$this->db->order_by('id_bulan',"desc");
		return $this->db->get();
	}
	public function tambahsiswa($data, $table)
	{
		$this->db->insert($table, $data);
	}
	function editsiswa($where, $table)
	{
		return $this->db->get_where($table,$where);
	}
	function updatesiswa($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function hapussiswa($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	function ambildatatahun()
	{
		return $this->db->get('tahun_masuk');
	}
	public function combobox_tahun()
	{
		$data = array();
        $query = $this->db->get('tahun_masuk');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row){
                    $data[] = $row;
                }
        }
        $query->free_result();
        return $data;
	}
	function edittahun($where, $table)
	{
		return $this->db->get_where($table,$where);
	}
	function updatetahun($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}