<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Kontak extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }


    //Menampilkan data kontak
    function index_get() {
        $id = $this->get('id');
        if ($id == '') {
            $kontak = $this->db->get('biodata')->result();
        } else {
            $this->db->where('id', $id);
            $kontak = $this->db->get('biodata')->result();
        }
        $this->response($kontak, 200);
    }

    function index_post() {
        $data = array(
                'id'                =>  $this->input->post('id'),
                'first_name'        =>  $this->input->post('first_name'),
                'last_name'         =>  $this->input->post('last_name'),
                'tangal_lahir'      =>  $this->input->post('tangal_lahir'),
                'umur'              =>  $this->input->post('umur'),
                'alamat'            =>  $this->input->post('alamat'),
                'telepon'           =>  $this->input->post('telepon'),
                'email'             =>  $this->input->post('email')
            );
        $insert = $this->db->insert('biodata', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }    

    //Memperbarui data kontak yang telah ada
    function index_put() {
        $id = $this->put('id');
        $data = array(
                'id'                =>  $this->put('id'),
                'first_name'        =>  $this->put('first_name'),
                'last_name'         =>  $this->put('last_name'),
                'tangal_lahir'      =>  $this->put('tangal_lahir'),
                'umur'              =>  $this->put('umur'),
                'alamat'            =>  $this->put('alamat'),
                'telepon'           =>  $this->put('telepon'),
                'email'             =>  $this->put('email')
            );
        $this->db->where('id', $id);
        $update = $this->db->update('biodata', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //Menghapus salah satu data kontak
    function index_delete() {
        $id = $this->delete('id');
        $this->db->where('id', $id);
        $delete = $this->db->delete('biodata');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    //Masukan function selanjutnya disini
}
?>