<div class="modal-header">
	<h3>View {C_table_name} </h3>
</div>
<div class="modal-body">
	<table class="table ">
		{ind_view_list}
	</table>
	<a href="<?php echo(site_url('{controller_name_l}')) ?> ">List</a>
	<a href="<?php echo(site_url('{controller_name_l}'.'/edit/'.$result->{primaryKey_id})) ?> ">Edit</a>
</div>
