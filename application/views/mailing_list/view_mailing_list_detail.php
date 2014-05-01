<?php 
// views/mailing_list/view_mailing_list_detail.php
if ($query->num_rows>0) : ?>

<?php foreach ($query->result() as $row) : ?>
	<h1>  </h1>
	<p>
<p>	User Id:<?php $row->userid; ?></p>
		<?php $row->first_name;?>
		<?php $row->last_name; ?>
		
	
</p>
<?php endforeach; ?>

<?php endif; ?>  