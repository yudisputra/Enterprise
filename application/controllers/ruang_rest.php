<?php
    require APPPATH . '/libraries/REST_Controller.php';

    class ruang_rest extends REST_Controller{
        function __construct($config = 'rest'){
            parent::__construct($config);
        }

        //show data mahasiswa
        function index_get(){
            $noruang = $this->get('noruang');
            if($noruang == ''){
                $ruang = $this->db->get('ruang')->result();
            } else{
                $this->db->where('noruang', $noruang);
                $ruang = $this->db->get('ruang')->result();
            }
            $this->response($ruang, 200);
        }

        //insert new data to mahasiswa
        function index_post(){

            $this->load->model('kunci_model');
            $data = $this->kunci_model->getRuangan();
            var_dump($data);
            $insert = $this->db->insert('ruang', $data);
            if($insert){
                $this->response($data, 200);
            }else{
                $this->response(array('status' => 'fail', 502));
            }
        }

        //update data mahasiswa
        function index_put(){
            $nim = $this->put('nim');
            $data = array(
                        'nim'           => $this->post('nim'),
                        'nama'          => $this->post('nama'),
                        'tempatlahir'    => $this->post('tempatlahir'),
                        'tanggallahir'   => $this->post('tanggallahir'),
                        'alamat'        => $this->post('alamat'),
                        'jurusan'       => $this->post('jurusan'),
                        'prodi'         => $this->post('prodi'),
                        'foto'          => $this->post('foto')
            );
            $this->db->where('nim', $nim);
            $update = $this->db->update('mahasiswa', $data);
            if($update){
                $this->response($data, 200);
            }else{
                $this->response(array('status' => 'fail', 502));
            }
        }

        //delete mahasiswa
        function index_delete(){
            $nim = $this->delete('nim');
            $this->db->where('nim', $nim);
            $delete = $this->db->delete('mahasiswa');
            if($delete){
                $this->response(array('status' => 'success'), 201);
            }else{
                $this->response(array('status' => 'fail'), 502);
            }
        }
    }
?>