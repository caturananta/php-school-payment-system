<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keuangan extends CI_Controller {

	function __construct()
	{
		parent:: __construct();

			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->model('M_keuangan');
			$this->load->model('M_home');
			$this->load->library('session');
			$this->load->library('form_validation');

			$this->session->userdata();

			if ($this->session->userdata('nama_admin')==""){
 				redirect('Home/login');
 			}
		}
	function contoh()
	{
		$query = $this->db->query('SELECT * FROM siswa');
		echo $query->num_rows();
	}
	function tampilspp()
	{
		$data['jumlah_bayar_spp'] = $this->M_keuangan->ambildatamasterspp()->result();

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('keuangan/v_datamasterspp',$data);
		$this->load->view('template/footer');
	}
	function tambahdataspp()
	{
		$this->load->model('M_keuangan');
        $data['tahun_masuk'] = $this->M_keuangan->combobox_tahun_masuk();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('keuangan/v_tambahdataspp',$data);
		$this->load->view('template/footer');
	}
	function prosestambahdataspp()
	{
		$id_tahun_masuk = $this->input->post('id_tahun_masuk');
 		$nominal_bayar_spp = $this->input->post('nominal_bayar_spp');
		$data = array(
			'id_tahun_masuk' => $id_tahun_masuk ,
			'nominal_bayar_spp' => $nominal_bayar_spp
			);
		$this->M_keuangan->inputdataspp($data,'jumlah_bayar_spp');
		redirect('keuangan/tampilspp');
	}
	function editmasterspp($id_jumlah_bayar_spp)
	{
		$where = array('id_jumlah_bayar_spp' => $id_jumlah_bayar_spp);
		$data['jumlah_bayar_spp'] = $this->M_keuangan->editmasterspp($where,'jumlah_bayar_spp')->result();
		$data['tahun_masuk'] = $this->M_home->combobox_tahun();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('keuangan/v_editmasterspp',$data);
		$this->load->view('template/footer');
	}
	function updatemasterspp()
	{
		$id_jumlah_bayar_spp = $this->input->post('id_jumlah_bayar_spp');
		$nominal_bayar_spp = $this->input->post('nominal_bayar_spp');
		$id_tahun_masuk = $this->input->post('id_tahun_masuk');
	 
		$data = array(
			'nominal_bayar_spp' => $nominal_bayar_spp,
			'id_tahun_masuk' => $id_tahun_masuk
		);
	 
		$where = array(
			'id_jumlah_bayar_spp' => $id_jumlah_bayar_spp
		);
	 
		$this->M_keuangan->updatemasterspp($where,$data,'jumlah_bayar_spp');
		redirect('keuangan/tampilspp');
	}
	function riwayatbayarspp()
	{
		$data['pembayaran_spp'] = $this->M_keuangan->ambildatapembayaran()->result();

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('keuangan/v_datapembayaran',$data);
		$this->load->view('template/footer');
	}
	function bayarspp()
	{	
	/*	$id_siswa = $this->input->post('id_siswa');
		$x = array('id_siswa' => $id_siswa);
		if ($id_siswa) {
			//$data['jumlah_bayar_spp'] = $this->M_keuangan->combobox_jumlahbayarspp();
			$data['pembayaran_spp'] = $this->M_keuangan->combobox_bulan($x, 'id_siswa');
			$data['siswa'] = $this->M_keuangan->combobox_pembayaranspp();
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('keuangan/v_bayarspp',$data);
			$this->load->view('template/footer');
		}
		else { */
			//$data['jumlah_bayar_spp'] = $this->M_keuangan->combobox_jumlahbayarspp();
			//$data['bulan'] = $this->M_keuangan->combobox_bulan();
			//$data['siswa'] = $this->M_keuangan->combobox_pembayaranspp();
			 $data = array(
			'tahun_masuk' => $this->M_keuangan->combobox_tahun_masuk(),
            'siswa' => $this->M_keuangan->combobox_siswa(),
            'jumlah_bayar_spp' => $this->M_keuangan->combobox_jumlahbayarspp(),
            'bulan' => $this->M_keuangan->combobox_bulan(),
            
            'tahun_masuk_selected' => '',
            'siswa_selected' => '',
            'jumlah_bayar_spp_selected' => '',
            'nominal_bayar_spp_selected' => '',
            'bulan_selected' => '',
        );	
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('keuangan/v_bayarspp',$data);
			$this->load->view('template/footer');
		//	}
	}
	function prosesbayarspp()
	{
		$id_siswa = $this->input->post('id_siswa');
		$jumlah_pembayaran_spp = $this->input->post('jumlah_pembayaran_spp');
		$id_jumlah_bayar_spp = $this->input->post('id_jumlah_bayar_spp');
		$id_bulan = $this->input->post('id_bulan');
		$tanggal_bayar = $this->input->post('tanggal_bayar');

        $data = array(
          'id_siswa' => $id_siswa,
          'jumlah_pembayaran_spp' => $jumlah_pembayaran_spp,
          'id_bulan' => $id_bulan,
          'tanggal_bayar' => $tanggal_bayar,
          'id_jumlah_bayar_spp' => $id_jumlah_bayar_spp
        );
        $query = $this->M_keuangan->inputdataspp($data, 'pembayaran_spp');
        $this->session->set_flashdata('message','data berhasil di input');
        redirect('keuangan/bayarspp');
    // fungsi redirect ke controller lain.
        //redirect('laporan/laporan_pdf_bayar_spp');
        //redirect('keuangan/riwayatbayarspp');
	}
	function riwayatbayar($id_siswa)
	{
		$data['siswa'] = $this->M_keuangan->riwayatbayarsiswax($id_siswa)->result();
		$data['siswaz'] = $this->M_keuangan->riwayatbayarsiswaz($id_siswa)->result();

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('keuangan/v_detailtagihan',$data);
		//$this->load->view('template/footer');
	}
	function detailtagihanspp($id_siswa)
	{
		$data['pembayaran_spp'] = $this->M_keuangan->tagihansppsiswa($id_siswa)->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('keuangan/v_detailtagihanspp',$data);
		$this->load->view('template/footer');
	}
	function tunggakanspp()
	{
		$data['pembayaran_spp'] = $this->M_keuangan->tunggakansppsiswa()->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('keuangan/v_tunggakanspp',$data);
		$this->load->view('template/footer');
	}
	/*function loaddataspp($id_siswa='')
	{
		$data['pembayaran_spp'] = $this->M_keuangan->combobox_jumlahbayarspp();
		//$data['bulan'] = $this->M_keuangan->combobox_bulan();
		//$data['siswa'] = $this->M_keuangan->combobox_pembayaranspp();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('keuangan/v_loadbayarspp', $data);
		$this->load->view('template/footer');
	}*/
	//fungsi saat form di submit. data form masuk ke tabel pembayaran_spp
	
	function tampilinfaq()
	{
		$data['jumlah_bayar_infaq'] = $this->M_keuangan->ambildatamasterinfaq()->result();

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('keuangan/v_datamasterinfaq',$data);
		$this->load->view('template/footer');
	}
	function tambahdatainfaq()
	{
        $data['tahun_masuk'] = $this->M_keuangan->combobox_tahun_masuk();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('keuangan/v_tambahdatainfaq',$data);
		$this->load->view('template/footer');
	}
	function prosestambahdatainfaq()
	{
		$id_tahun_masuk = $this->input->post('id_tahun_masuk');
 		$nominal_bayar_infaq = $this->input->post('nominal_bayar_infaq');
		$data = array(
			'id_tahun_masuk' => $id_tahun_masuk ,
			'nominal_bayar_infaq' => $nominal_bayar_infaq
			);
		$this->M_keuangan->inputdatainfaq($data,'jumlah_bayar_infaq');
		redirect('keuangan/tampilinfaq');
	}
	function editmasterinfaq($id_jumlah_bayar_infaq)
	{
		$where = array('id_jumlah_bayar_infaq' => $id_jumlah_bayar_infaq);
		$data['jumlah_bayar_infaq'] = $this->M_keuangan->editmasterinfaq($where,'jumlah_bayar_infaq')->result();
		$data['tahun_masuk'] = $this->M_home->combobox_tahun();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('keuangan/v_editmasterinfaq',$data);
		$this->load->view('template/footer');
	}
	function updatemasterinfaq()
	{
		$id_jumlah_bayar_infaq = $this->input->post('id_jumlah_bayar_infaq');
		$nominal_bayar_infaq = $this->input->post('nominal_bayar_infaq');
		$id_tahun_masuk = $this->input->post('id_tahun_masuk');
	 
		$data = array(
			'nominal_bayar_infaq' => $nominal_bayar_infaq,
			'id_tahun_masuk' => $id_tahun_masuk
		);
	 
		$where = array(
			'id_jumlah_bayar_infaq' => $id_jumlah_bayar_infaq
		);
	 
		$this->M_keuangan->updatemasterinfaq($where,$data,'jumlah_bayar_infaq');
		redirect('keuangan/tampilinfaq');
	}
	function bayarinfaq()
	{
		//$data['jumlah_bayar_infaq'] = $this->M_keuangan->combobox_jumlahbayarinfaq();
		//$data['bulan'] = $this->M_keuangan->combobox_bulan();
		//$data['siswa'] = $this->M_keuangan->combobox_pembayaranspp();
		$data = array(
			'tahun_masuk' => $this->M_keuangan->combobox_tahun_masuk(),
            'siswa' => $this->M_keuangan->combobox_siswa(),
            'jumlah_bayar_infaq' => $this->M_keuangan->combobox_jumlahbayarinfaq(),
            'bulan' => $this->M_keuangan->combobox_bulan_infaq(),
            
            'tahun_masuk_selected' => '',
            'siswa_selected' => '',
            'jumlah_bayar_infaq_selected' => '',
            'nominal_bayar_infaq_selected' => '',
            'bulan_selected' => '',
        );	
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('keuangan/v_bayarinfaq',$data);
		$this->load->view('template/footer');
	}
	function prosesbayarinfaq()
	{
		$id_siswa = $this->input->post('id_siswa');
		$jumlah_pembayaran_infaq = $this->input->post('jumlah_pembayaran_infaq');
		$id_jumlah_bayar_infaq = $this->input->post('id_jumlah_bayar_infaq');
		$id_bulan = $this->input->post('id_bulan');
		$tanggal_bayar_infaq = $this->input->post('tanggal_bayar_infaq');

        $data = array(
          'id_siswa' => $id_siswa,
          'jumlah_pembayaran_infaq' => $jumlah_pembayaran_infaq,
          'id_bulan' => $id_bulan,
          'tanggal_bayar_infaq' => $tanggal_bayar_infaq,
          'id_jumlah_bayar_infaq' => $id_jumlah_bayar_infaq
        );

        $query = $this->M_keuangan->inputdatainfaq($data, 'pembayaran_infaq');
        $this->session->set_flashdata('message','data berhasil di input');
        redirect('keuangan/bayarinfaq');
	}
	function riwayatbayarinfaq()
	{
		$data['pembayaran_infaq'] = $this->M_keuangan->ambildatapembayaraninfaq()->result();

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('keuangan/v_datapembayaraninfaq',$data);
		$this->load->view('template/footer');
	}
	function tunggakaninfaq()
	{
		$data['pembayaran_infaq'] = $this->M_keuangan->tunggakaninfaqsiswa()->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('keuangan/v_tunggakaninfaq',$data);
		$this->load->view('template/footer');
	}
	function tampiltahunan()
	{
		$data['jumlah_bayar_tahunan'] = $this->M_keuangan->ambildatamastertahunan()->result();

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('keuangan/v_datamastertahunan',$data);
		$this->load->view('template/footer');
	}
	function tambahdatatahunan()
	{
        $data['tahun_masuk'] = $this->M_keuangan->combobox_tahun_masuk();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('keuangan/v_tambahdatatahunan',$data);
		$this->load->view('template/footer');
	}
	function prosestambahdatatahunan()
	{
		$id_tahun_masuk = $this->input->post('id_tahun_masuk');
 		$nominal_bayar_tahunan = $this->input->post('nominal_bayar_tahunan');
		$data = array(
			'id_tahun_masuk' => $id_tahun_masuk ,
			'nominal_bayar_tahunan' => $nominal_bayar_tahunan
			);
		$this->M_keuangan->inputdatatahunan($data,'jumlah_bayar_tahunan');
		redirect('keuangan/tampiltahunan');
	}
	function bayartahunan()
	{
		$data = array(
			'tahun_masuk' => $this->M_keuangan->combobox_tahun_masuk(),
            'siswa' => $this->M_keuangan->combobox_siswa(),
            'jumlah_bayar_tahunan' => $this->M_keuangan->combobox_jumlahbayartahunan(),
            
            'tahun_masuk_selected' => '',
            'siswa_selected' => '',
            'jumlah_bayar_tahunan_selected' => '',
        );	
		//$data['jumlah_bayar_tahunan'] = $this->M_keuangan->combobox_jumlahbayartahunan();
		//$data['siswa'] = $this->M_keuangan->combobox_pembayaranspp();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('keuangan/v_bayartahunan',$data);
		$this->load->view('template/footer');
	}
	function prosesbayartahunan()
	{
		$id_siswa = $this->input->post('id_siswa');
		$id_jumlah_bayar_tahunan = $this->input->post('id_jumlah_bayar_tahunan');
		$jumlah_pembayaran_tahunan = $this->input->post('jumlah_pembayaran_tahunan');
		$tanggal_bayar_tahunan = $this->input->post('tanggal_bayar_tahunan');

        $data = array(
          'id_siswa' => $id_siswa,
          'id_jumlah_bayar_tahunan' => $id_jumlah_bayar_tahunan,
          'jumlah_pembayaran_tahunan' => $jumlah_pembayaran_tahunan,
          'tanggal_bayar_tahunan' => $tanggal_bayar_tahunan
        );

        $query = $this->M_keuangan->inputdatatahunan($data, 'pembayaran_tahunan');
        $this->session->set_flashdata('message','data berhasil di input');
        redirect('keuangan/bayartahunan');
	}
	function riwayatbayartahunan()
	{
		$data['pembayaran_tahunan'] = $this->M_keuangan->ambildatapembayarantahunan()->result();

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('keuangan/v_datapembayarantahunan',$data);
		$this->load->view('template/footer');
	}
	function statusbayartahunan()
	{
		$data['pembayaran_tahunan'] = $this->M_keuangan->statusbayartahunansiswa()->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('keuangan/v_statusbayartahunan',$data);
		$this->load->view('template/footer');
	}
	function edittahunan($id_jumlah_bayar_tahunan)
	{
		$where = array('id_jumlah_bayar_tahunan' => $id_jumlah_bayar_tahunan);
		$data['jumlah_bayar_tahunan'] = $this->M_keuangan->editmastertahunan($where,'jumlah_bayar_tahunan')->result();
		$data['tahun_masuk'] = $this->M_home->combobox_tahun();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('keuangan/v_editmastertahunan',$data);
		$this->load->view('template/footer');
	}
	function updatemastertahunan()
	{
		$id_jumlah_bayar_tahunan = $this->input->post('id_jumlah_bayar_tahunan');
		$nominal_bayar_tahunan = $this->input->post('nominal_bayar_tahunan');
		$id_tahun_masuk = $this->input->post('id_tahun_masuk');
	 
		$data = array(
			'nominal_bayar_tahunan' => $nominal_bayar_tahunan,
			'id_tahun_masuk' => $id_tahun_masuk
		);
	 
		$where = array(
			'id_jumlah_bayar_tahunan' => $id_jumlah_bayar_tahunan
		);
	 
		$this->M_keuangan->updatemastertahunan($where,$data,'jumlah_bayar_tahunan');
		redirect('keuangan/tampiltahunan');
	}
}