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
	'name' => 'firstname',
	'id' => 'firstname'
	);
echo form_label('First Name', 'first_name') . ' : '; 
echo " : ";
echo form_input($firstname).'<br/>';

$last_name = array(
	'name' => 'lastname',
	'id' => 'lastname'
	);
echo form_label('Last Name', 'last_name') . ' : '; 
echo " : ";
echo form_input($lastname).'<br/>';


$email = array(
	'name' => 'email',
	'id' => 'email',
	'value'=> set_value('email',''), // this will make it function as a sticky form
	);
echo form_label('Email', 'email') . ' : '; 
echo " : ";
echo form_input($email).'<br/>';



$address = array(
	'name' => 'address',
	'id' => 'address'
	);
echo form_label('Address', 'adresss') . ' : '; 
echo " : ";
echo form_input($address) .'<br/>';


$state_code = array(
	'name' => 'state_code',
	'id' => 'state_code'
	);
echo form_label('State: ', 'state_code') . ' : '; 
echo " : ";
echo form_input($state_code) .'<br/>';

$zip_postal = array(
	'name' => 'zip_postal',
	'id' => 'zip_postal'
	);
echo form_label('zip_postal', 'zip_postal') . ' : '; 
echo " : ";
echo form_input($zip_postal) .'<br/>';

$username = array(
	'name' => 'username',
	'id' => 'username'
	);
echo form_label('username', 'username') . ' : '; 
echo " : ";
echo form_input($username) .'<br/>';

$password = array(
	'name' => 'password',
	'id' => 'password'
	);
echo form_label('password', 'password') . ' : '; 
echo " : ";
echo form_input($password) .'<br/>';

$bio = array(
	'name' => 'bio',
	'id' => 'bio'
	);
echo form_label('Bio', 'bio') . ' : '; 
echo " : ";
echo form_textarea($bio) .'<br/>';

$interests = array(
	'backpack_cal' => 'Bioackpack California',
	'cycle_cal' => 'Cycle California'
	'nature_watch' => 'Nature Watch'
	);

// $interests = array(
// 	'name' => 'interests',
// 	'id' => 'interests'
// 	);

echo form_label('Interests', 'interests') . ' : '; 
echo " : ";
echo form_multiselect('interests',$interests) .'<br/>';





$num_tours1 = array(
	'name' => 'num_tours',
	'id' => 'num_tours1'
	'value' => '0', 
	'checked' => TRUE,
	);
$num_tours2 = array(
	'name' => 'num_tours',
	'id' => 'num_tours2'
	'value' => '1-3', 

	);
$num_tours1 = array(
	'name' => 'num_tours',
	'id' => 'num_tours3'
	'value' => '4-6', 

	);


echo form_label('None', 'num_tours') . ' : '; 
echo " : ";

echo form_label('1-3', 'num_tours2') . ' : '; 
echo " : ";

echo form_label('4-6', 'num_tours3') . ' : '; 
echo " : ";


echo form_radio($num_tours1).'<br/>';

echo "</fieldset>";

 ?>

<?=form_submit('submit', 'Add to mailing list');?>

 <?=form_close('');?>