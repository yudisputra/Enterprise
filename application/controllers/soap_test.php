<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soap_test extends CI_Controller {

	 function __construct() {
        parent::__construct();
        //$this->load->model(''); //load your models here

        $this->load->library("Nusoap_lib");
    }

	public function index()
	{
		$this->load->view('soap/webservice-server');
	}

	public function index2()
	{
		$this->load->view('soap/webservice-client');
	}

}

/* End of file soap_test.php */
/* Location: ./application/controllers/soap_test.php */