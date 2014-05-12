<?php 
// views/mailing_list/view_mailing_list_detail.php
if ($query->num_rows>0) : ?>

<?php foreach ($query->result() as $row) : ?>
	<h3> <?=$row->first_name;?> <?=$row->last_name;?> </h3>
	
	<p>	User Id: <?=$row->userid;?></p>
	<p>	First Name: <?=$row->first_name;?></p>
	<p>	Last Name: <?=$row->last_name;?></p>
	<p>	Email: <?=$row->email;?></p>
	<p>	Address: <?=$row->address;?></p>
	<p>	Zip Code: <?=$row->zip_postal;?></p>
	<p>	Username: <?=$row->username;?></p>
	<p>	Bio: <?=$row->bio;?></p>

	<p>	Tours: <?=$row->num_tours;?></p>


		
	
	</p>
<?php endforeach; ?>

<?php endif; ?>  