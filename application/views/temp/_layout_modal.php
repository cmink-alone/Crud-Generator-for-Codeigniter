<?php $this->load->view('temp/components/page_head'); ?>

<body style="background: #555;">

	<div class="modal show" role="dialog">
		
		<?php $this->load->view($subview,$dataprovider); // Subview is set in controller ?>

		<div class="modal-footer">
			&copy; <?php echo date('Y'); ?> <?php //echo $meta_title; ?>
		</div>
	</div>

<?php $this->load->view('temp/components/page_tail'); ?>