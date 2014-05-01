<?php 
// views/mailing_list/view_mailing_list.php
if ($query->num_rows>0) : ?>

<?php foreach ($query->result() as $row) : ?>
	<p>
		<?php $row->userid; ?>
		<?php $row->first_name; ?>
		<?php $row->last_name; ?> 
		<?php 
			echo anchor('mailing_list/view/' . $row->userid, "view User");


		 ?>
</p>
<?php endforeach; ?>

<?php endif; ?>  