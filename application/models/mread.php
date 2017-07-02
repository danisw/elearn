<?php    
class Mread extends CI_Model{
	function __construct(){
			parent::__construct();
			//$this->tbl = "tb_pengguna";
			$this->tbl = "user";
	}

    function report(){
        $query = $this->db->query("SELECT * from user");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
}