<div class="modal-header">
	<h3>Add a {table}</h3>
</div>
<div class="modal-body">
	
	<?php echo form_open(current_url()); ?>
	<?php echo $custom_error; ?>
		{forms_inputs}
	<p><?php echo form_submit( 'submit', 'Submit'); ?></p>

	<?php echo form_close(); ?>
</div>
