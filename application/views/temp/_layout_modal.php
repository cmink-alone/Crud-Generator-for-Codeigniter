<?php $this->load->view('temp/components/page_head'); ?>

<body style="background: #555;">

	<div class="modal show" role="dialog">
		
		<?php $this->load->view($subview,$dataprovider); // Subview is set in controller ?>

		
	</div>

<?php $this->load->view('temp/components/page_tail'); ?>