<div class="modal-header">
	<h3>View {table} </h3>
</div>
<div class="modal-body">
	{forms_inputs}

	<a href="<?php echo(site_url('{controller_name_l}')) ?> ">List</a>
	<a href="<?php echo(site_url('{controller_name_l}'.'/edit/'.$result->{primaryKey_id})) ?> ">Edit</a>
</div>
