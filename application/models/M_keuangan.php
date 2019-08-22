<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_keuangan extends CI_Model {
	
	function ambildatamasterspp()
	{
		$this->db->select('jumlah_bayar_spp.*, tahun_masuk.keterangan_tahun_masuk');
		$this->db->from('jumlah_bayar_spp');
		$this->db->join('tahun_masuk', 'tahun_masuk.id_tahun_masuk=jumlah_bayar_spp.id_tahun_masuk', 'left');

		return $this->db->get();
	}
	function ambildatapembayaran()
	{

		$this->db->select('*');
		$this->db->from('pembayaran_spp a');
		$this->db->join('siswa b','b.id_siswa=a.id_siswa');
		$this->db->join('jumlah_bayar_spp c','c.id_jumlah_bayar_spp=a.id_jumlah_bayar_spp');
		return $this->db->get();
	}
	function downloadpdfspp()
	{
		$this->db->select('a.* , b.nama_siswa');
		$this->db->from('pembayaran_spp a');
		$this->db->join('siswa b','b.id_siswa=a.id_siswa');
		$this->db->order_by('a.id_pembayaran_spp',"desc");
		$this->db->limit(1);
		$query = $this->db->get('pembayaran_spp');
		return $query->result_array();
	}

	function riwayatbayarsiswax($id_siswa)
	{
		$this->db->select('*');
		$this->db->from('siswa a');
		$this->db->join('pembayaran_spp b','b.id_siswa=a.id_siswa');
	//	$this->db->join('pembayaran_infaq c', 'c.id_siswa=a.id_siswa','left');
		$this->db->where('a.id_siswa',$id_siswa);
		//$this->db->distinct();

		return $this->db->get();
	}
	function riwayatbayarsiswaz($id_siswa)
	{
		$this->db->select('*');
		$this->db->from('siswa siswaz');
	//	$this->db->join('pembayaran_spp b','b.id_siswa=a.id_siswa','left');
		$this->db->join('pembayaran_infaq c', 'c.id_siswa=siswaz.id_siswa','left');
		$this->db->where('siswaz.id_siswa',$id_siswa);
		//$this->db->distinct();

		return $this->db->get();
	}
	function tagihansppsiswa($id_siswa)
	{
		$this->db->select('*');
		$this->db->from('pembayaran_spp a');
		$this->db->join('siswa b','b.id_siswa=a.id_siswa','left');
		$this->db->where('a.id_siswa',$id_siswa);
		$this->db->order_by('id_bulan',"desc");
		$this->db->limit(1);

		return $this->db->get();
	}
	function tunggakansppsiswa()
	{
		$this->db->select('siswa.*, tahun_masuk.keterangan_tahun_masuk,pembayaran_spp.id_bulan');
			if ('pembayaran_spp.id_bulan , FALSE') {
				$this->db->select_max('pembayaran_spp.id_bulan');
			}
		$this->db->from('siswa');
		$this->db->join('tahun_masuk', 'tahun_masuk.id_tahun_masuk=siswa.id_tahun_masuk','left');
		$this->db->join('pembayaran_spp', 'pembayaran_spp.id_siswa=siswa.id_siswa','left');
		$this->db->group_by('siswa.id_siswa');
		//$this->db->where()
		$this->db->distinct();
		//$this->db->order_by('id_bulan',"desc");
		return $this->db->get();
	}
	function inputdataspp($data, $table)
	{
		$query = $this->db->insert($table, $data);
	}
	function editmasterspp($where, $table)
	{
		return $this->db->get_where($table,$where);
	}
	function updatemasterspp($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function combobox_tahun_masuk()
	{
	//$this->db->join('siswa', 'siswa.id_tahun_masuk = tahun_masuk.id_tahun_masuk');
	return $this->db->get('tahun_masuk')->result();
	}
/*	public function combobox_jumlahbayarspp()
	{
		$this->db->select('a.*, b.*, c.*');
		$this->db->from('siswa a');
		$this->db->join('tahun_masuk b','b.id_tahun_masuk = a.id_tahun_masuk');
		$this->db->join('jumlah_bayar_spp c','c.id_tahun_masuk = b.id_tahun_masuk');
		//$this->db->where('a.id_tahun_masuk=c.id_tahun_masuk');
		//$this->db->order_by('id_pembayaran_spp', 'asc');
        return $this->db->get('jumlah_bayar_spp')->result();
	}*/
	public function combobox_jumlahbayarspp()
	{
		/*$this->db->select('a.*, c.*');
		$this->db->from('pembayaran_spp a');
		//$this->db->join('bulan b','b.id_bulan=a.id_bulan');
		$this->db->join('siswa c','c.id_siswa=a.id_siswa');
		$this->db->where('a.id_siswa',$id_siswa);
		//$this->db->where($id_siswa);
		$data = array();
		$query=$this->db->get('pembayaran_spp');
		if ($query->num_rows() > 0){
			foreach ($query->result_array() as $row) {
				$data[] = $row;
			}
		}
		$query->free_result();
        return $data;*/
        //$this->db->order_by('id_jumlah_bayar_spp', 'asc');
        $this->db->join('tahun_masuk', 'tahun_masuk.id_tahun_masuk = jumlah_bayar_spp.id_tahun_masuk');
        $this->db->join('siswa', 'siswa.id_tahun_masuk = tahun_masuk.id_tahun_masuk');
        return $this->db->get('jumlah_bayar_spp')->result();
	}
	public function combobox_bulan($id_siswa="")
	{
		//$this->db->select('a.*, b.id_siswa, b.id_bulan');
		//$this->db->from('bulan a');
		//$this->db->join('pembayaran_spp b', 'b.id_bulan = a.id_bulan');
		//$this->db->join('siswa', 'siswa.id_siswa = pembayaran_spp.id_siswa');
		//$this->db->where_not_in('bulan.id_bulan', 'SELECT id_bulan from pembayaran_spp', FALSE);
		//SELECT * FROM `bulan` WHERE id_bulan NOT IN (SELECT id_bulan from pembayaran_spp WHERE id_siswa = '18')
		//$this->db->query('SELECT * FROM bulan WHERE id_bulan NOT IN(SELECT id_bulan from pembayaran_spp)');
		//return $this->db->get('bulan')->result();
		//$this->db->where_not_in('bulan.id_bulan', 'SELECT id_bulan FROM pembayaran_spp WHERE id_siswa="bulan_selected"', FALSE);
		//return $this->db->get('bulan')->result();
								//print_r($result);
								//echo $this->db->last_query();
		$id_siswa = "";
		$Subquery = $this->db
		    ->select('id_bulan')
		    ->from('pembayaran_spp')
		    ->join('siswa','siswa.id_siswa=pembayaran_spp.id_siswa')
		    ->where('pembayaran_spp.id_siswa', $id_siswa)
		    ->get_compiled_select();

		$query = $this->db
		    //->from('bulan')
		    ->where_not_in('bulan.id_bulan', $Subquery, false);
		return  $this->db->get('bulan')->result();
		//print_r($query);
	}
	public function combobox_bulan_infaq($id_siswa="0")
	{
		$id_siswa = "";
		$Subquery = $this->db
		    ->select('id_bulan')
		    ->from('pembayaran_infaq')
		    ->join('siswa','siswa.id_siswa=pembayaran_infaq.id_siswa')
		    ->where('pembayaran_infaq.id_siswa', $id_siswa)
		    ->get_compiled_select();

		$query = $this->db
		    //->from('bulan')
		    ->where_not_in('bulan.id_bulan', $Subquery, false);
		return  $this->db->get('bulan')->result();
		//print_r($query);
	}

	public function combobox_siswa()
	{
	/*	$data = array();
		$query = $this->db->get('siswa');
		if ($query->num_rows() > 0){
			foreach ($query->result_array() as $row) {
				$data[] = $row;
			}
		}
		$query->free_result();
        return $data;*/
        $this->db->order_by('id_siswa', 'asc');
        $this->db->join('tahun_masuk', 'tahun_masuk.id_tahun_masuk = siswa.id_tahun_masuk');
        return $this->db->get('siswa')->result();
	}
	/*function combobox_jumlahbayarspp($id_siswa='')
	{
		
		$data = array();
		/*if($id_siswa!='')
		{
		$this->db->select('a.*, b.*, c.*');
		$this->db->from('siswa a, tahun_masuk b, jumlah_bayar_spp c');
		$this->db->join('b', 'b.id_tahun_masuk=a.id_tahun_masuk');
		$this->db->join('c', 'c.id_tahun_masuk=c.id_tahun_masuk');
		$this->db->where('a.id_siswa', $id_siswa);
			$query = $this->db->get('jumlah_bayar_spp');
		}
		else
		{
		$query = $this->db->get('jumlah_bayar_spp');
		//}
		if ($query->num_rows() > 0){
			foreach ($query->result_array() as $row) {
				$data[] = $row;
			}
		}
		$query->free_result();
        return $data;
	}*/
	//revisi
	function combobox_jumlahbayarinfaq()
	{
		$this->db->join('tahun_masuk', 'tahun_masuk.id_tahun_masuk = jumlah_bayar_infaq.id_tahun_masuk');
        $this->db->join('siswa', 'siswa.id_tahun_masuk = tahun_masuk.id_tahun_masuk');
        return $this->db->get('jumlah_bayar_infaq')->result();
	}
	function combobox_jumlahbayartahunan()
	{
		$this->db->join('tahun_masuk', 'tahun_masuk.id_tahun_masuk = jumlah_bayar_tahunan.id_tahun_masuk');
        $this->db->join('siswa', 'siswa.id_tahun_masuk = tahun_masuk.id_tahun_masuk');
        return $this->db->get('jumlah_bayar_tahunan')->result();
	}
	function downloadpdfinfaq()
	{
		$this->db->select('b.* , c.nama_siswa');
		$this->db->from('pembayaran_infaq b');
		$this->db->join('siswa c','b.id_siswa=c.id_siswa');
		$this->db->order_by('b.id_pembayaran_infaq',"desc");
		$this->db->limit(1);
		$query = $this->db->get('pembayaran_infaq');
		return $query->result_array();
	}
	function ambildatamasterinfaq()
	{
		$this->db->select('jumlah_bayar_infaq.*, tahun_masuk.keterangan_tahun_masuk');
		$this->db->from('jumlah_bayar_infaq');
		$this->db->join('tahun_masuk', 'tahun_masuk.id_tahun_masuk=jumlah_bayar_infaq.id_tahun_masuk', 'left');

		return $this->db->get();
	}
	function inputdatainfaq($data, $table)
	{
		$this->db->insert($table, $data);
	}
	function ambildatapembayaraninfaq()
	{

		$this->db->select('*');
		$this->db->from('pembayaran_infaq a');
		$this->db->join('siswa b','b.id_siswa=a.id_siswa');
		$this->db->join('jumlah_bayar_infaq c','c.id_jumlah_bayar_infaq=a.id_jumlah_bayar_infaq');
		return $this->db->get();
	}
	function editmasterinfaq($where, $table)
	{
		return $this->db->get_where($table,$where);
	}
	function updatemasterinfaq($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function tunggakaninfaqsiswa()
	{
		$this->db->select('siswa.*, tahun_masuk.keterangan_tahun_masuk, pembayaran_infaq.id_bulan');
		if ('pembayaran_infaq.id_bulan = 0') {
				$this->db->select_max('pembayaran_infaq.id_bulan');
			}
		$this->db->from('siswa');
		$this->db->join('tahun_masuk', 'tahun_masuk.id_tahun_masuk=siswa.id_tahun_masuk','left');
		$this->db->join('pembayaran_infaq', 'pembayaran_infaq.id_siswa=siswa.id_siswa','left');
		$this->db->group_by('siswa.id_siswa');
		$this->db->distinct();
		return $this->db->get();
	}
	function downloadpdftahunan()
	{
		$this->db->select('c.* , d.nama_siswa');
		$this->db->from('pembayaran_tahunan c');
		$this->db->join('siswa d','c.id_siswa=d.id_siswa');
		$this->db->order_by('c.id_pembayaran_tahunan',"desc");
		$this->db->limit(1);
		$query = $this->db->get('pembayaran_tahunan');
		return $query->result_array();
	}
	function ambildatamastertahunan()
	{
		$this->db->select('jumlah_bayar_tahunan.*, tahun_masuk.keterangan_tahun_masuk');
		$this->db->from('jumlah_bayar_tahunan');
		$this->db->join('tahun_masuk', 'tahun_masuk.id_tahun_masuk=jumlah_bayar_tahunan.id_tahun_masuk', 'left');

		return $this->db->get();
	}
	function inputdatatahunan($data, $table)
	{
		$this->db->insert($table, $data);
	}
	function ambildatapembayarantahunan()
	{
		$this->db->select('*');
		$this->db->from('pembayaran_tahunan a');
		$this->db->join('siswa b','b.id_siswa=a.id_siswa');
		$this->db->join('jumlah_bayar_tahunan c','c.id_jumlah_bayar_tahunan=a.id_jumlah_bayar_tahunan');
		return $this->db->get();
	}
	function statusbayartahunansiswa()
	{
		$this->db->select('siswa.* , jumlah_bayar_tahunan.nominal_bayar_tahunan , tahun_masuk.keterangan_tahun_masuk , pembayaran_tahunan.jumlah_pembayaran_tahunan , SUM(jumlah_pembayaran_tahunan) AS total', FALSE);
		$this->db->from('siswa');
		$this->db->join('tahun_masuk', 'tahun_masuk.id_tahun_masuk=siswa.id_tahun_masuk');
		$this->db->join('pembayaran_tahunan', 'pembayaran_tahunan.id_siswa=siswa.id_siswa');
		$this->db->join('jumlah_bayar_tahunan', 'jumlah_bayar_tahunan.id_jumlah_bayar_tahunan=pembayaran_tahunan.id_jumlah_bayar_tahunan');
		$this->db->group_by('siswa.id_siswa');
		$this->db->distinct();
		return $this->db->get();
	}
	function editmastertahunan($where, $table)
	{
		return $this->db->get_where($table,$where);
	}
	function updatemastertahunan($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}