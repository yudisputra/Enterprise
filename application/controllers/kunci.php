<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kunci extends CI_Controller {
	var $API ="";
	function __construct() {
	parent::__construct();
	$this->API="http://192.168.1.101/enterprise/index.php";
	$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('scanktm');
	}

	public function getMahasiswa($nim)
	{
		$this->load->model('kunci_model');
		$data["ruang"] = $this->kunci_model->getRuangan();
		$data["mahasiswa"] = json_decode($this->curl->simple_get($this->API.'/mahasiswa_rest/?nim='.$nim));
		$this->load->view('mahasiswa/listtest',$data);
	}

	public function pinjam()
	{
		 $this->load->model('kunci_model');
		 $this->kunci_model->insertpinjam();
		 $data["pinjam"] = $this->kunci_model->tabelpinjam();
		 $this->load->view('mahasiswa/tabelpinjam',$data);
	}

	public function datapinjam()
	{
		$this->load->model('kunci_model');
		$data["pinjam"] = $this->kunci_model->tabelpinjam();
		$this->load->view('mahasiswa/tabelpinjam',$data);
	}

	public function kirimruang()
	{
			$this->load->model('kunci_model');
			$data["ruang"] = $this->kunci_model->getRuangan();
			$insert = $this->curl->simple_post($this->API.'/mahasiswa_rest', $data, array(CURLOPT_BUFFERSIZE => 10));
			if($insert)
			{
				$this->session->set_flashdata('hasil','Insert Data Berhasil');
			} else 
			{
				$this->session->set_flashdata('hasil','Insert Data Gagal');
			}
	}
}

/* End of file kunci.php */
/* Location: ./application/controllers/kunci.php */