<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_quiz extends CI_Model {

	function __construct(){
			parent::__construct();
			//$this->tbl = "tb_pengguna";
			$this->tbl = "nilai";

	}
	public function ambilQuiz6(){
		$sql="SELECT * FROM quiz WHERE tema=6";
		$query = $this->db->query($sql);
			return $query->result();
		
		$num_data_returned = $query->num_rows;
		
		if ($num_data_returned < 1) {
		  echo "There is no data in the database";
		  exit();	
		}
	}
	
	
}

?>