<?php 
//  /view/mailing_list/add_mailing_list.php
// an add form to add an item to the table
echo validation_errors();

echo validation_errors();

 ?>
<h1>Add to mailing list</h1>
<?=form_open('mailing_list/insert');?> 
<?php 
$first_name = array(
	'name' => 'first_name',
	'id' => 'first_name',
	'value'=> set_value('first_name',''),
	);
$req ='required="required"';

echo form_label('First Name', 'first_name') . ' : '; 

echo form_input($first_name, '', $req).'<br/>';

$last_name = array(
	'name' => 'last_name',
	'id' => 'last_name',
	'value'=> set_value('last_name',''),
	);
echo form_label('Last Name', 'last_name') . ' : '; 

echo form_input($last_name).'<br/>';


$email = array(
	'name' => 'email',
	'id' => 'email',
	'value'=> set_value('email',''), // this will make it function as a sticky form
	);
echo form_label('Email', 'email') . ' : '; 

echo form_input($email).'<br/>';



$address = array(
	'name' => 'address',
	'id' => 'address',
	'value'=> set_value('address',''),
	);
echo form_label('Address', 'adresss') . ' : '; 

echo form_input($address) .'<br/>';


$state_code = array(
	'name' => 'state_code',
	'id' => 'state_code',
	'value'=> set_value('state_code',''),
	);
echo form_label('State: ', 'state_code') . ' : '; 

echo form_input($state_code) .'<br/>';

$zip_postal = array(
	'name' => 'zip_postal',
	'id' => 'zip_postal',
	'value'=> set_value('zip_postal',''),
	);
echo form_label('zip_postal', 'zip_postal') . ' : '; 

echo form_input($zip_postal) .'<br/>';

$username = array(
	'name' => 'username',
	'id' => 'username', 
	'value'=> set_value('username',''),
	);
echo form_label('username', 'username') . ' : '; 

echo form_input($username) .'<br/>';

$password = array(
	'name' => 'password',
	'id' => 'password',
	'value'=> set_value('password',''),
	);
echo form_label('password', 'password') . ' : '; 

echo form_password($password) .'<br/>';

$bio = array(
	'name' => 'bio',
	'id' => 'bio'
	);
echo form_label('Bio', 'bio') . ' : '; 

echo form_textarea($bio) .'<br/>';

$interests = array(
	'backpack_cal' => 'Bioackpack California',
	'cycle_cal' => 'Cycle California',
	'nature_watch' => 'Nature Watch',
	);

// $interests = array(
// 	'name' => 'interests',
// 	'id' => 'interests'
// 	);

echo form_label('Interests', 'interests') . ' : '; 

echo form_multiselect('interests',$interests) .'<br/>';





$num_tours1 = array(
	'name' => 'num_tours',
	'id' => 'num_tours1',
	'value' => '0', 
	'checked' => TRUE,
	);
$num_tours2 = array(
	'name' => 'num_tours',
	'id' => 'num_tours2',
	'value' => '1-3', 

	);
$num_tours1 = array(
	'name' => 'num_tours',
	'id' => 'num_tours3',
	'value' => '4-6', 

	);


echo form_label('None', 'num_tours') . ' : '; 

echo form_label('1-3', 'num_tours2') . ' : '; 

echo form_label('4-6', 'num_tours3') . ' : '; 


echo form_radio($num_tours1).'<br/>';

echo "</fieldset>";

 ?>

<?=form_submit('submit', 'Add to mailing list');?>

 <?=form_close('');?>