<?php 

class join extends CI_controller{

public function index()
{
	//here we're making data available to out header and footer
	$this->load->model('MailList_model'); // this loads the model
	$data['mail_list'] = $this->MailList_model->get_maillist(); //this executes the function
	$data['title'] = "Here is out title tag.";
	// this refers to the current running object
	// self refers to the class
	$this->load->view('header',$data);
	//var_dump( $data['mail_list']);  
	$this->load->view('footer',$data);  
	//this as an object has a property of load, which has a method of view and passes to header the $data
}


 
}

 ?>