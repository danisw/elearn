<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_nilai extends CI_Model {

	function __construct(){
			parent::__construct();
			//$this->tbl = "tb_pengguna";
			$this->tbl = "nilai";

	}
	public function ambilUser($iduser){
		$sql="SELECT * FROM nilai WHERE iduser='$iduser'";
		$query = $this->db->query($sql);
			return $query->result();
	}
	
	public function getNilai($iduser){

		$sql="SELECT nilai FROM nilai where iduser=$iduser";
		$query = $this->db->query($sql);
			return $query->result();
	}

public function getTema($iduser){
        
        $query = $this->db->query("SELECT DISTINCT tema FROM nilai where iduser=$iduser");
        return $query->result();
    }

   public function insert_nilai($data){ 

   	$this->db->insert('nilai', $data);
   

   }
    public function count_nilai($data){ 

   $hasil=-1;
   for($i=0;$i<=10;$i++){
   		if($data['kunci'.$i]==$data['jawaban'.$i]){
   			$hasil=$hasil+1;
   		}
   }
   $res=$hasil*100;
   return $res;

   }
}

?>