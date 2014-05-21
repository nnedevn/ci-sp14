<?php 
// mailing_list.php is the controler

class Mailing_list extends CI_controller{

function __construct(){
	parent::__construct();
	$this->load->model('Mailing_list_model');
}// end of constructor
public function index()
{
	//here we're making data available to out header and footer
	 // this loads the model
	$data['query'] = $this->Mailing_list_model->get_mailing_list();
	$this->config->set_item('style', 'cerulean.css');
	// this will overrite the config. 
	$data['title'] = "Here is our title tag.";
	$data['banner'] = "Here is our web site.";
	$data['copyright'] = "Here is our title tag.";

	$this->load->view('header',$data);
	$this->load->view('mailing_list/view_mailing_list',$data); 
	$this->load->view('footer',$data);  
	//this as an object has a property of load, which has a method of view and passes to header the $data

}//end of index()

public function view($id)
{// this will show us the data from a single page. 
	//here we're making data available to out header and footer
	 // this loads the model
	$data['query'] = $this->Mailing_list_model->get_id($id); //this executes the function
	$data['title'] = "Here is our title tag.";
	// this refers to the current running object
	// self refers to the class
	$data['banner'] = $id;
	
	$data['copyright'] = "Here is our title tag.";

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
	
	$data['copyright'] = "Copyright goes here.";

	
	$this->load->view('header',$data);  

	$this->load->view('mailing_list/add_mailing_list',$data);

	$this->load->view('footer', $data);

}// end of add()
 
 public function insert()
 {// will insert the data enetered via add();

	 // this loads the model
	$this->load->library('form_validation'); // a lot of crap
	// $this->load->helper->('url'); //usually small scripts
	//must have at least one validation rule to be able to insert in db.
	$this->form_validation->set_rules('email','Email','trim|required|valid_email');
	$this->form_validation->set_rules('first_name','First Name','trim|required');
	$this->form_validation->set_rules('last_name','Last Name','trim|required');
	$this->form_validation->set_rules('address','Address','trim|required');
	$this->form_validation->set_rules('state_code','State','trim|required');
	$this->form_validation->set_rules('zip_postal','Zip Code','trim|required');
	$this->form_validation->set_rules('username','Username','trim|required');
	$this->form_validation->set_rules('password','Password','trim|required');


	if ($this->form_validation->run()==FALSE) //failed validation send back to form 
	{// View data of fail goes here

		$this->load->helper('form');

		$data['title'] = "Adding a reckord.";
		// this refers to the current running object
		// self refers to the class
		$data['banner'] = "Data Entry Error!";
		
		$data['copyright'] = "Copyright goes here.";
	
		
		$this->load->view('header',$data);  

		$this->load->view('mailing_list/add_mailing_list',$data);

		$this->load->view('footer', $data);

		echo "insert failed";

	}else //insert the data 
	{
	$post = array(
		'first_name' => $this->input->post('first_name'),
		'last_name' => $this->input->post('last_name'),
		'email' => $this->input->post('email'),
		'address' => $this->input->post('address'),
		'state_code' => $this->input->post('state_code'),
		'zip_postal' => $this->input->post('zip_postal'),
		'username' => $this->input->post('username'),
		'password' => $this->input->post('password'),
		'bio' => $this->input->post('bio'),
		'interests' => $this->input->post('interests'),
		'num_tours' => $this->input->post('num_tours'),
		);
		
	$id = $this->Mailing_list_model->insert($post);
	
	// echo ("id is " . $id);
	// die();	
	redirect('/mailing_list/view/' . $id);

	}// end if


}// end of insert. 
}

 ?>