<div class="modal-header">
	<h3>Edit {C_table_name}</h3>
</div>
<div class="modal-body">

	<!-- <h2>{table}</h2> -->

	<?php echo form_open(current_url()); ?>

	<?php echo $custom_error; ?>

		{primary}
		{forms_inputs}
	<p>  <?php echo form_submit( 'submit', 'Submit'); ?> </p>

	<?php echo form_close(); ?>
</div>
