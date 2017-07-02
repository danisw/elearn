 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        session_start();
        $this->load->model(array('m_user'));
        $this->load->model('m_berita');
        $this->load->model('m_login'); 
        $this->load->model('m_kategori'); 
        $this->load->model('m_level'); 
        $this->load->model('m_history');
         $this->load->model('m_nilai');  
         $this->load->model('m_quiz');  
        if ($this->session->userdata('username')) {
            redirect('dashboard');
    }
 
    function index()
    {
    	
    	$this->load->view('login');
    }

    function main()
    {

        $this->load->view('main');
    }

    function proses() {
        $this->form_validation->set_rules('username', 'username', 'required|trim|xss_clean');
        $this->form_validation->set_rules('password', 'password', 'required|trim|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login');
        } else {
            $usr = $this->input->post('username');
            $psw = $this->input->post('password');
            $u = mysql_real_escape_string($usr);
            $p = md5(mysql_real_escape_string($psw));
            $cek = $this->m_user->cek($u, $p);
            if ($cek->num_rows() > 0) {
                //login berhasil, buat session
                foreach ($cek->result() as $qad) {
                    $sess_data['u_id'] = $qad->u_id;
                    $sess_data['nama'] = $qad->nama;
                    $sess_data['u_name'] = $qad->u_name;
                    $sess_data['role'] = $qad->role;
                    $this->session->set_userdata($sess_data);
                }
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('result_login', '<br>Username atau Password yang anda masukkan salah.');
                redirect('login');
            }
        }
    }


     function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
    
    }

///--------------------------------------- SISWA --------------------------------------------------///

     public function list_siswa(){
       $ambil_akun = $this->m_login->ambil_user($this->session->userdata('uname'));
        $data = array(
            'user'  => $ambil_akun,
            );
        $uname=$this->session->userdata('uname');
        $stat = $this->session->userdata('lvl');
        $kategori= $this->session->userdata('kategori');
        
            $data['page']="daftar_siswa";
            $data['daftar_siswa'] = $this->m_user->get_daftar_siswa();
            $this->load->view("indexguru",$data);
    }
    public function lihat_grafik(){
       $ambil_akun = $this->m_login->ambil_user($this->session->userdata('uname'));
        $data = array(
            'user'  => $ambil_akun,
            );
        $uname=$this->session->userdata('uname');
        $stat = $this->session->userdata('lvl');
        $kategori= $this->session->userdata('kategori');
         $iduser=$this->uri->segment(3);

            
            $data['data_siswa']=$this->m_user->ambilUser($iduser);
             // $data['dataGrafik']=$this->m_nilai->ambilUser($iduser);


            //-------------- nampilin Tema-------------//
            $tema=$this->m_nilai->getTema($iduser);
            $label = array();
            foreach ($tema as $m) {
            $label[] = $m->tema;
         }
           $data['label'] = json_encode($label);

           //------------------- nampilin Nilai --------------------- //
        $nilai=$this->m_nilai->getNilai($iduser);
        $value=array();
        foreach ($nilai as $n){
            $value[]=$n->nilai;
        }
        $data['hasil'] = json_encode($value);

            $data['page']="grafik_siswa";

            $this->load->view("indexguru",$data);
    }

     public function lihat_grafik_anak(){
       $ambil_akun = $this->m_login->ambil_user($this->session->userdata('uname'));
        $data = array(
            'user'  => $ambil_akun,
            );
        $uname=$this->session->userdata('uname');
        $stat = $this->session->userdata('lvl');
        $kategori= $this->session->userdata('kategori');
      
        $idortu=$this->uri->segment(3);
        $iduser=$this->m_user->getAnak($idortu);
            
            $data['data_siswa']=$this->m_user->ambilUser($iduser);
             // $data['dataGrafik']=$this->m_nilai->ambilUser($iduser);


            //-------------- nampilin Tema-------------//
            $tema=$this->m_nilai->getTema($iduser);
            $label = array();
            foreach ($tema as $m) {
            $label[] = $m->tema;
         }
           $data['label'] = json_encode($label);

           //------------------- nampilin Nilai --------------------- //
        $nilai=$this->m_nilai->getNilai($iduser);
        $value=array();
        foreach ($nilai as $n){
            $value[]=$n->nilai;
        }
        $data['hasil'] = json_encode($value);

            $data['page']="grafik_siswa";
            
            $this->load->view("indexortu",$data);
    }

    public function list_materi(){
       $ambil_akun = $this->m_login->ambil_user($this->session->userdata('uname'));
        $data = array(
            'user'  => $ambil_akun,
            );
            $data['page']="list_materi";
            
            $this->load->view("indexsiswa",$data);
    }
    public function list_quiz(){
       $ambil_akun = $this->m_login->ambil_user($this->session->userdata('uname'));
        $data = array(
            'user'  => $ambil_akun,
            );
            $data['page']="daftar_quiz";
            
            $this->load->view("indexsiswa",$data);
    }
    public function belajar_6(){
       $ambil_akun = $this->m_login->ambil_user($this->session->userdata('uname'));
        $data = array(
            'user'  => $ambil_akun,
            );
            $data['page']="materi_6";
            
            $this->load->view("indexsiswa",$data);
    }
    

    public function show_quiz_6(){
        $ambil_akun = $this->m_login->ambil_user($this->session->userdata('uname'));
        $data = array(
            'user'  => $ambil_akun,
            );
             $data['question']=$this->m_quiz->ambilQuiz6();
            $data['page']="quiz-6";
            
            $this->load->view("indexsiswa",$data);
    }
    // public function ambil_quiz_6(){
       
       
    //         $data['page']="quiz-6";
            
    //         $this->load->view("dashboard_siswa",$data);
    // }

     public function add_nilai($iduser){
        $ambil_akun = $this->m_login->ambil_user($this->session->userdata('uname'));
        $data = array(
            'user'  => $ambil_akun,
            );
        //$kunci= $this->m_user->ambilKunci($idquiz);
         $iduser=$this->uri->segment(3);
                
        $this->m_nilai->insert_nilai($iduser,$data);
        echo json_encode(array("status" => TRUE));

     }
     public function cek_jawaban(){

        $ambil_akun = $this->m_login->ambil_user($this->session->userdata('uname'));
        // $data= array(
        //     'user'  => $ambil_akun,
        //     );

       for($i=0;$i<11;$i++){
        $data['jawaban'.$i]=$this->input->post('jawaban'.$i);
        $data['kunci'.$i]=$this->input->post('kunci'.$i);
    }

       $hasil=$this->m_nilai->count_nilai($data);

        $data1['tema']=$this->input->post('tema');
       $data1['iduser']=$this->input->post('iduser');
       $data1['nilai']=$hasil;
       
        $result= $this->m_nilai->insert_nilai($data1);
              // $dat['page']="result";
              // $dat['hasil']=$nilai;
              // $this->load->view("dashboard_siswa",$dat);
      //return $nilai;
        
      
       echo $hasil;

       
     }
}