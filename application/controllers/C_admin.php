<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

	function __construct()
	{
		parent:: __construct();

			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->model('M_home');
			$this->load->library('session');
			$this->session->userdata();

			//cek apabila admin belum login 
			if ($this->session->userdata('nama_admin')==""){
 				redirect('Home/login');
 			}
	}
	function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('home');
		$this->load->view('template/footer');
	}
		public function kepsek()
	{
		if ($this->session->userdata('status_admin')!=="kepsek") {
			redirect('home/login');
		}else{
		 	$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('kepsek');
			$this->load->view('template/footer');
		}
	 }

	public function tu()
		 {
		 	if ($this->session->userdata('status_admin')!=="tu") {
			redirect('home/login');
		}else{
		 	$this->load->view('template/header');
			$this->load->view('template/sidebar_tu');
			$this->load->view('tu');
			$this->load->view('template/footer');
		}
	}
	function dataadmin()
	{
		if ($this->session->userdata('status_admin')=="tu") {
			redirect('c_admin/dataadmin_tu');
		}else
		$data['admin'] = $this->M_home->ambildataadmin()->result();

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('v_kepsek/v_dataadmin',$data);
		$this->load->view('template/footer');
	}
	function dataadmin_tu()
	{
		$data['admin'] = $this->M_home->ambildataadmin()->result();

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('v_kepsek/v_dataadmin_tu',$data);
		$this->load->view('template/footer');
	}
	public function tambahadmin()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('v_kepsek/v_tambahadmin');
		$this->load->view('template/footer');
	}
	public function prosestambahadmin()
	{
		$status_admin = $this->input->post('status_admin');
		$password = $this->input->post('password');
		$nama_admin = $this->input->post('nama_admin');
 
		$data = array(
			'status_admin' => $status_admin,
			'password' => $password,
			'nama_admin' => $nama_admin
			);
		$this->M_home->tambahdata($data,'admin');
		redirect('C_admin/dataadmin');
	}
	public function hapusdataadmin($id_admin)
	{
		$where = array('id_admin' => $id_admin);
		$this->M_home->hapusadmin($where,'admin');
		redirect('c_admin/dataadmin');
	}

	public function editadmin($id_admin)
	{
		$where = array('id_admin' => $id_admin);
		$data['admin'] = $this->M_home->editadmin($where,'admin')->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('v_kepsek/v_editadmin',$data);
		$this->load->view('template/footer');
	}
	public function updateadmin()
	{
		$id_admin = $this->input->post('id_admin');
		$nama_admin = $this->input->post('nama_admin');
		$password = $this->input->post('password');
		$status_admin = $this->input->post('status_admin');
	 
		$data = array(
			'nama_admin' => $nama_admin,
			'password' => $password,
			'status_admin' => $status_admin
		);
	 
		$where = array(
			'id_admin' => $id_admin
		);
	 
		$this->M_home->updateadmin($where,$data,'admin');
		redirect('C_admin/dataadmin');
	}

	public function datasiswa()
	{
		$data['siswa'] = $this->M_home->ambildatasiswa()->result();

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('v_kepsek/v_datasiswa',$data);
		$this->load->view('template/footer');
	}
	public function editsiswa($id_siswa)
	{
		$where = array('id_siswa' => $id_siswa);
		$data['siswa'] = $this->M_home->editsiswa($where,'siswa')->result();
		$data['tahun_masuk'] = $this->M_home->combobox_tahun();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('v_kepsek/v_editsiswa',$data);
		$this->load->view('template/footer');
	}
	public function hapussiswa($id_siswa)
	{
		$where = array('id_siswa' => $id_siswa);
		$this->M_home->hapussiswa($where,'siswa');
		redirect('c_admin/datasiswa');
	}
	public function tambahsiswa()
	{
		$data['tahun_masuk'] = $this->M_home->combobox_tahun();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('v_kepsek/v_tambahsiswa',$data);
		$this->load->view('template/footer');
	}
	public function prosestambahsiswa($value='')
	{
		$nama_siswa = $this->input->post('nama_siswa');
		$id_tahun_masuk = $this->input->post('id_tahun_masuk');
 
		$data = array(
			'nama_siswa' => $nama_siswa ,
			'id_tahun_masuk' => $id_tahun_masuk
			);
		$this->M_home->tambahsiswa($data,'siswa');
		redirect('C_admin/datasiswa');
	}
	public function updatesiswa()
	{
		$id_siswa = $this->input->post('id_siswa');
		$nama_siswa = $this->input->post('nama_siswa');
		$id_tahun_masuk = $this->input->post('id_tahun_masuk');
	 
		$data = array(
			'nama_siswa' => $nama_siswa,
			'id_tahun_masuk' => $id_tahun_masuk
		);
	 
		$where = array(
			'id_siswa' => $id_siswa
		);
	 
		$this->M_home->updatesiswa($where,$data,'siswa');
		redirect('c_admin/datasiswa');
	}
	public function datatahun()
	{
		$data['tahun_masuk'] = $this->M_home->ambildatatahun()->result();

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('v_kepsek/v_datatahunmasuk',$data);
		$this->load->view('template/footer');
	}
	public function tambahtahun()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('v_kepsek/v_tambahtahun');
		$this->load->view('template/footer');
	}
	public function prosestambahtahun($value='')
	{
		$keterangan_tahun_masuk = $this->input->post('keterangan_tahun_masuk');
		$id_tahun_masuk = $this->input->post('id_tahun_masuk');
 
		$data = array(
			'keterangan_tahun_masuk' => $keterangan_tahun_masuk ,
			'id_tahun_masuk' => $id_tahun_masuk
			);
		$this->M_home->tambahsiswa($data,'tahun_masuk');
		redirect('C_admin/datatahun');
	}
	public function edittahun($id_tahun_masuk)
	{
		$where = array('id_tahun_masuk' => $id_tahun_masuk);
		$data['tahun_masuk'] = $this->M_home->edittahun($where,'tahun_masuk')->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('v_kepsek/v_edittahun',$data);
		$this->load->view('template/footer');
	}
	public function updatetahun()
	{
		$id_tahun_masuk = $this->input->post('id_tahun_masuk');
		$keterangan_tahun_masuk = $this->input->post('keterangan_tahun_masuk');
	 
		$data = array(
			'keterangan_tahun_masuk' => $keterangan_tahun_masuk,
		);
	 
		$where = array(
			'id_tahun_masuk' => $id_tahun_masuk
		);
	 
		$this->M_home->updatetahun($where,$data,'tahun_masuk');
		redirect('c_admin/datatahun');
	}
}