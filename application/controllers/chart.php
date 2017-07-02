<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Chart extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('mread');
         $this->load->model(array('m_user'));
    }
    public function index()
    {
        //$data['charts'] = $this->mread->report();
         $data['page']="grafik_siswa";
         $data['charts'] = $this->m_user->get_daftar_siswa();
        $this->load->view("dashboard_guru",$data);
    }
}