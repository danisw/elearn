<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
		$this->auth->cek_auth(); //ngambil auth dari library
		$this->load->model('m_user');
		
		$this->load->model('m_kategori');
		$this->load->model('m_level');

	}
	public function list_pengguna(){
       $ambil_akun = $this->m_login->ambil_user($this->session->userdata('uname'));
        $data = array(
            'user'  => $ambil_akun,
            );
        $uname=$this->session->userdata('uname');
        $stat = $this->session->userdata('lvl');
        $kategori= $this->session->userdata('kategori');
        
            $data['page']="list_pengguna";
            $data['daftar_pengguna'] = $this->m_user->get_all_user();
            $this->load->view("dashboard_admin",$data);
    }
    public function tambah_pengguna(){
       $ambil_akun = $this->m_login->ambil_user($this->session->userdata('uname'));
        $data = array(
            'user'  => $ambil_akun,
            );
        $uname=$this->session->userdata('uname');
        $stat = $this->session->userdata('lvl');
        $kategori= $this->session->userdata('kategori');
        
            $data['page']="add_user";
            $data['level'] = $this->m_level->getAllLevel_user();
            $data['an'] = $this->m_user->get_daftar_siswa();
            $this->load->view("dashboard_admin",$data);
    }

 function add_data_user(){
         $ambil_akun = $this->m_login->ambil_user($this->session->userdata('uname'));
        $data = array(
            'user'  => $ambil_akun,
            );
            
            $udata['judul'] = $this->input->post('judul');
            $udata['isi'] = $this->input->post('isi');
            $udata['user_iduser']=$this->input->post('user_iduser');

            $udata['status_berita']=$this->input->post('0');
            $udata['status_read']=$this->input->post('0');
            $udata['kategori']=$this->session->userdata('kategori');

            $idberita=$this->m_berita->insert_berita($udata);
            $data1['idberita'] =$idberita;
            $data1['judul'] = $this->input->post('judul');
            $data1['isi'] = $this->input->post('isi');
            $data1['userid']=$this->input->post('user_iduser');
            $data1['status_berita']=$this->input->post('0');
                 //mendapatkan data berita untuk Nama
            $data['result']=$this->m_berita->getBerita($idberita);
            $result=$this->m_berita->getBerita($idberita);
            $data1['Nama']=$this->session->userdata('uname');
            // $data1['Nama']=$result['Nama'];
            
            if ($this->m_history->insert_berita_to_history($data1)) {
                redirect('user/list_berita');
               }
    }
	// public function list_user(){
 //       $ambil_akun = $this->m_login->ambil_user($this->session->userdata('uname'));
 //        $data = array(
 //            'user'  => $ambil_akun,
 //            );
 //        $uname=$this->session->userdata('uname');
 //        $stat = $this->session->userdata('lvl');
       

 //        	$data['page']="list_user";
	// 		//$data['anak_list'] = $this->m_user->get_nama_anak();
	// 		$data['level_list'] = $this->m_level->getAllLevel_user();
	// 		//$data['_list']=$this->m_level->getAllLevel_user();
	// 		$data['user_list'] = $this->m_user->get_all_user();
 //        	$this->load->view("dashboard_admin");
            
 //    }

    public function ajax_edit($iduser)
	{
		$data = $this->m_user->getById($iduser);
		echo json_encode($data);

	}
	public function ajax_add()
	{
		$data = array(
				'nama' => $this->input->post('Nama'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'kelas' => $this->input->post('kelas'),
				'absen' => $this->input->post('absen'),
				'level_user' => $this->input->post('level'),
				'id_anak' => $this->input->post('nama_anak'),
			);
		$this->m_user->insert_user($data);
		echo json_encode(array("status" => TRUE));
	}
	public function ajax_update()
	{
		$iduser = $_POST['iduser'];
		$data = array(
				'iduser'=>$this->input->post('iduser'),
				'Nama' => $this->input->post('Nama'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'level_idlevel' => $this->input->post('level'),
				'kategori_idkategori' => $this->input->post('kategori'),
			);
		$hasil=$this->m_user->update($iduser, $data);
		if($hasil){
			echo json_encode(array("status" => TRUE));
		}else{
			console.log("gagal");
		}

	}


	// public function ajax_edit($iduser)
	// {
	// 	$data = $this->m_user->getById($iduser);
	// 	echo json_encode($data);

	// }

	public function ajax_delete($iduser)
	{
		$this->m_user->delete_by_id($iduser);
		echo json_encode(array("status" => TRUE));
	}
}
