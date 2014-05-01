<?php 
// mailing_list.php

class Mailing_list extends CI_controller{

function __construct(){
	parent::__construct();
	$this->load->helper('url');
	
}// end of constructor
public function index()
{
	//here we're making data available to out header and footer
	$this->load->model('Mailing_list_model'); // this loads the model
	$data['query'] = $this->Mailing_list_model->get_mailing_list(); //this executes the function
	$data['title'] = "Here is out title tag.";
	// this refers to the current running object
	// self refers to the class
	// $data['banner'] = "Here is out web site.";
	// $data['style'] = "cerulian.css";
	// $data['copyright'] = "Here is out title tag.";
	// $data['base_url'] = base_url();
	$this->load->view('header',$data);
	//var_dump($data['query']);
	$this->load->view('mailing_list/view_mailing_list',$data);
	//var_dump( $data['mail_list']);  
	$this->load->view('footer',$data);  
	//this as an object has a property of load, which has a method of view and passes to header the $data

}//end of index()

public function view($id)
{// this will show us the data from a single page. 
	//here we're making data available to out header and footer
	$this->load->model('Mailing_list_model')->get_id($id); // this loads the model
	$data['query'] = $this->Mailing_list_model->get_mailing_list(); //this executes the function
	$data['title'] = "Here is out title tag.";
	// this refers to the current running object
	// self refers to the class
	$data['banner'] = $id;
	$data['style'] = "cerulian.css";
	$data['copyright'] = "Here is out title tag.";
	$data['base_url'] = "Here is out title tag.";
	$this->load->view('header',$data);
	//var_dump($data['query']);
	$this->load->view('mailing_list/view_mailing_list_detail',$data);
	//var_dump( $data['mail_list']);  
	$this->load->view('footer',$data);  
	//this as an object has a property of load, which has a method of view and passes to header the $data

}//end of view

public function add()
{// add() is a form to add a new reckord

	$this->load->helper('form');

	$data['title'] = "Adding a reckord.";
	// this refers to the current running object
	// self refers to the class
	$data['banner'] = "Add a reckord";
	$data['style'] = "cerulian.css";
	$data['copyright'] = "Copyright goes here.";
	$data['base_url'] = base_url();
	$this->load->view('header',$data);
	
	$this->load->view('header',$data);  

	$this->load->view('mailing_list/add_mailing_list',$data);

	$this->load->view('footer', $data);

}// end of add()
 
 public function insert()
 {// will insert the data enetered via add();

$this->load->model('Mailing_list_model'); // this loads the model
$this->load->library->('form_validation'); // a lot of crap
$this->load->helper->('url'); //usually small scripts

if ($this->form_validation->run()==FALSE) //failed validation send back to form 
{
	echo"insert failed";
}else //insert the data 
{
$post = array(
	'first_name' => $this->inptut->post('first_name');
	'last_name' => $this->inptut->post('last_name');
	'email' => $this->inptut->post('email');
	'address' => $this->inptut->post('address');
	'state_code' => $this->inptut->post('state_code');
	'zip_postal' => $this->inptut->post('zip_postal');
	'username' => $this->inptut->post('username');
	'password' => $this->inptut->post('password');
	'bio' => $this->inptut->post('bio');
	'interests' => $this->inptut->post('interests');
	'num_tours' => $this->inptut->post('num_tours');
	);
	
$this->Mailing_list_model->insert($post);
echo "Data Inserted";

}

 }// end of insert. 
}

 ?>