<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class quizmodel extends CI_Model {

	public function getQuestions()
	{
		$this->db->select("quizID, question, choice1, choice2, choice3, answer");
		$this->db->from("Quiz");
		
		$query = $this->db->get();
		
		return $query->result();
		
		$num_data_returned = $query->num_rows;
		
		if ($num_data_returned < 1) {
		  echo "There is no data in the database";
		  exit();	
		}
	}
}

