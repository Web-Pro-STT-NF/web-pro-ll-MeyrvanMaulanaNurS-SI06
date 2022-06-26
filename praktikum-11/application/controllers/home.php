<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index(){
        $this->load->model('mahasiswa_model', 'mahasiswa');
        $list_mahasiswa=$this->mahasiswa->getAll();
        $data ['list_mahasiswa'] = $list_mahasiswa;


        $this->load->view('home/index',$data);
    }

}