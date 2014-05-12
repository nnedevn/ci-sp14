<?php 
//mailing_list_model.php

/**
* 
*/
class Mailing_list_model extends CI_Model
{
	public function __construct() //this is the cosntructor
	{// creates an active connectrion to the database. 
		$this->load->database();
		
	}// end constructor

	public function get_mailing_list(){
		// this will show all data in table named list

		//$querry = $this->db->get("mailing_list");
		//return $querry->result_array();
		return $this->db->get("mailing_list");
		//automatically selects * from this table
		
	}//end getmailing list
public function get_id($id){
		
		// $this->db->select('userid, first_name, last_name'); //selct fields from
		$this->db->where('userid', $id); //this is where it gets passed in
		return $this->db->get("mailing_list");	

}// end get_id

public function insert($row){
	$this->db->insert('mailing_list', $row);

}//end insert()
}


 ?>