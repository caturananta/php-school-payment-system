<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	function __construct()
	{
		parent:: __construct();

			$this->load->helper('url');
			$this->load->library('pdf');
			$this->load->model('M_keuangan');
	}
	function export_excel_spp($id_siswa)
	{
	    $data['siswa'] = $this->M_keuangan->riwayatbayarsiswax($id_siswa)->result();

		//$this->load->view('template/header');
		//$this->load->view('template/sidebar');
		$this->load->view('laporan/cetakspp',$data);
		//$this->load->view('template/footer');
	}
	function export_excel_infaq($id_siswa)
	{
	    $data['siswaz'] = $this->M_keuangan->riwayatbayarsiswaz($id_siswa)->result();

		//$this->load->view('template/header');
		//$this->load->view('template/sidebar');
		$this->load->view('laporan/cetakinfaq',$data);
		//$this->load->view('template/footer');
	}

	//fungsi untuk download bukti bayar spp
	function laporan_pdf_bayar_spp()
	{
		$data['a'] = $this->M_keuangan->downloadpdfspp();	
		$this->load->view('laporan/cetakbuktispp', $data);
	}
	function contohpdf()
	{
		$this->load->view('laporan/contoh');
	}

	function laporan_pdf_bayar_infaq()
	{
		$data['b'] = $this->M_keuangan->downloadpdfinfaq();	
		$this->load->view('laporan/cetakbuktiinfaq', $data);
	}
	function laporan_pdf_bayar_tahunan()
	{
		$data['c'] = $this->M_keuangan->downloadpdftahunan();	
		$this->load->view('laporan/cetakbuktitahunan', $data);
	}
}