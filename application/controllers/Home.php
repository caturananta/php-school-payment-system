<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent:: __construct();

			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->model('M_home');
			$this->load->library('session');
		}

//fungsi login
 public function login()
 {
 	$this->load->view('login');
// 	$this->_isLoggedIn();
 }
 //fungsi ketika tombol login di klik
 public function proses_login(){
 	$nm_admin=$this->input->post('nama_admin');
 	$pass=$this->input->post('password');

 	$ceklogin=$this->M_home->login($nm_admin,$pass);

 	if ($ceklogin) {
 		foreach ($ceklogin as $row);
 		$this->session->set_userdata('nama_admin', $row->nama_admin);
 		$this->session->set_userdata('status_admin', $row->status_admin);

 		if ($this->session->userdata('status_admin')=="kepsek"){
 			redirect('c_admin/kepsek');
 		}elseif($this->session->userdata('status_admin')=="tu"){
 			redirect('c_admin/tu');
 		}else redirect('home/login');

 	}else{
 		$data['pesan']="username atau password tidak sesuai.";
 		$this->load->view('login', $data);
 		}
 	 }
//fungsi logout / hapus session
	function logout()
	{
		$this->session->sess_destroy();
		redirect();
	}
}