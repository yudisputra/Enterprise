<?php
    require APPPATH . '/libraries/REST_Controller.php';

    class peminjam extends REST_Controller{
        function __construct($config = 'rest'){
            parent::__construct($config);
        }

        //show data peminjaman
        function index_get(){
            $id_peminjaman = $this->get('id_peminjaman');
            if($id_peminjaman == ''){
                $peminjaman = $this->db->get('peminjaman')->result();
            } else{
                $this->db->where('id_peminjaman', $id_peminjaman);
                $peminjaman = $this->db->get('peminjaman')->result();
            }
            $this->response($peminjaman, 200);
        }

        //insert new data to peminjaman
        function index_post(){
            $data = array(
                        'id_peminjaman'           => $this->post('id_peminjaman'),
                        'id_peminjam'          => $this->post('id_peminjam'),
                        'tanggal_pinjam'    => $this->post('tanggal_pinjam'),
                        'tanggal_kembali'        => $this->post('tanggal_kembali'),
                        'id_buku'        => $this->post('id_buku')
            );

            if($this->post('id_peminjaman'==null))
            {
                echo "Id peminjaman tidak boleh kosong";
            }
            else if($this->post('id_peminjam'==null))
            {
                echo "ID Peminjam tidak boleh kosong";
            }

            $insert = $this->db->insert('peminjaman', $data);
            if($insert){
                $this->response($data, 200);
            }else{
                $this->response(array('status' => 'fail', 502));
            }
        }

        //update data peminjaman
        function index_put(){
            $id_peminjaman = $this->put('id_peminjaman');
            $data = array(
                        'id_peminjaman'           => $this->put('id_peminjaman'),
                        'id_peminjam'          => $this->put('id_peminjam'),
                        'tanggal_pinjam'    => $this->put('tanggal_pinjam'),
                        'tanggal_kembali'        => $this->put('tanggal_kembali'),
                        'id_buku'        => $this->put('id_buku')
            );
            $this->db->where('id_peminjaman', $id_peminjaman);
            $update = $this->db->update('peminjaman', $data);
            if($update){
                $this->response($data, 200);
            }else{
                $this->response(array('status' => 'fail', 502));
            }
        }

        //delete peminjaman
        function index_delete(){
            $id_peminjaman = $this->delete('id_peminjaman');
            $this->db->where('id_peminjaman', $id_peminjaman);
            $delete = $this->db->delete('peminjaman');
            if($delete){
                $this->response(array('status' => 'success'), 201);
            }else{
                $this->response(array('status' => 'fail'), 502);
            }
        }
    }
?>