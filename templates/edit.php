<div class="modal-header">
	<h3>Edit {C_table_name}</h3>
</div>
<?php echo form_open(current_url()); ?>
	<div class="modal-body">

	<!-- <h2>{table}</h2> -->


	<?php echo $custom_error; ?>

		{primary}
		{forms_inputs}

	</div>
	<div class="modal-footer">
		<div class="clearfix">
			<div class="pull-left">
				<?php echo form_submit( 'submit', 'Save','class="btn btn-primary"'); ?>
				<?php echo anchor((site_url('{controller_name_l}')) , '{C_controller_name_l} list', array('class'=>'btn btn-default')); ?>
			</div>
			<div class="span4 pull-right"><?php echo anchor(site_url(), ' &copy; '. date('Y').' '.$site_name); ?></div>
		</div>
	</div>
<?php echo form_close(); ?>
