<?php defined('BASEPATH') OR exit('No direct script access allowed');

class kunci_model extends CI_Model {
	
	public function getRuangan()
    {
       $query = $this->db->get('ruang');
       return $query->result();
    }

    public function insertpinjam()
    {
         $object = array(
            'noruang' => $this->input->post('ruang'), 
            'nim' => $this->input->post('nim'),
            'waktupinjam' => date("Y-m-d H:i:s",strtotime('now')),
            'status' => 'Dipinjam');
         $this->db->insert('pinjam', $object);
    }

    public function insertruang_rest($data)
    {
         $this->db->insert('pinjam', $data);
    }

    public function tabelpinjam()
    {
       $query = $this->db->get('pinjam');
       return $query->result();
    }
}