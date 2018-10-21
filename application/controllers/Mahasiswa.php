<?php
Class Mahasiswa extends CI_Controller{
var $API ="";
function __construct() {
parent::__construct();
$this->API="http://192.168.1.101/enterprise/index.php";
$this->load->library('session');
}

// menampilkan data mahasiswa
function index(){
	$data['mahasiswa'] = json_decode($this->curl->simple_get($this->API.'/mahasiswa_rest'));
	$this->load->view('mahasiswa/list',$data);
}

//insert data mahasiswa
function create(){
	if(isset($_POST['submit'])){
		$data = array(
			'nim' 			=> $this->input->post('nim'),
			'nama'          => $this->input->post('nama'),
			'tempatlahir'    => $this->input->post('tempatlahir'),
            'tanggallahir'   => $this->input->post('tanggallahir'),
            'alamat'        => $this->input->post('alamat'),
            'jurusan'       => $this->input->post('jurusan'),
            'prodi'         => $this->input->post('prodi'),
            'foto'          => $this->input->post('foto'));
		$insert = $this->curl->simple_post($this->API.'/mahasiswa_rest', $data, array(CURLOPT_BUFFERSIZE => 10));
			if($insert)
			{
				$this->session->set_flashdata('hasil','Insert Data Berhasil');
			} else 
			{
				$this->session->set_flashdata('hasil','Insert Data Gagal');
			}
			redirect('mahasiswa');
	}else{
		$data['mahasiswa'] = json_decode($this->curl->simple_get($this->API.'/mahasiswa_rest'));
		$this->load->view('mahasiswa/create',$data);
	}
}

// edit data mahasiswa
function edit(){
	if(isset($_POST['submit'])){
		$data = array(
			'nim' => $this->input->post('nim'),
			'nama' => $this->input->post('nama'),
			'tempatlahir'    => $this->input->post('tempatlahir'),
            'tanggallahir'   => $this->input->post('tanggallahir'),
            'alamat'        => $this->input->post('alamat'),
            'jurusan'       => $this->input->post('jurusan'),
            'prodi'         => $this->input->post('prodi'),
            'foto'          => $this->input->post('foto'));
		$update = $this->curl->simple_put($this->API.'/mahasiswa_rest', $data, array(CURLOPT_BUFFERSIZE => 10));
		if($update)
		{
			$this->session->set_flashdata('hasil','Update Data Berhasil');
		}else{
			$this->session->set_flashdata('hasil','Update Data Gagal');
		}
		redirect('mahasiswa');
		}else{
			$data['jurusan'] = json_decode($this->curl->simple_get($this->API.'/jurusan'));
			$params = array('nim'=> $this->uri->segment(3));
			$data['mahasiswa'] = json_decode($this->curl->simple_get($this->API.'/mahasiswa',$params));
			$this->load->view('mahasiswa/edit',$data);
		}
}

// delete data mahasiswa
function delete($nim){
	if(empty($nim))
	{
	redirect('mahasiswa');
	}else{
	$delete = $this->curl->simple_delete($this->API.'/mahasiswa', array('nim'=>$nim), array(CURLOPT_BUFFERSIZE => 10));
	if($delete)
	{
	$this->session->set_flashdata('hasil','Delete Data Berhasil');
	}else
	{
	$this->session->set_flashdata('hasil','Delete Data Gagal');
	}
	redirect('mahasiswa');
}
}
}
?>