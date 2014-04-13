<?php $this->load->view('temp/components/page_head'); ?>
<body>
    <div class="navbar navbar-static-top navbar-inverse">
	    <div class="navbar-inner">
		    <a class="brand" href="<?php echo site_url('admin/dashboard'); ?>"><?php //echo $meta_title; ?></a>
		    <ul class="nav">
			    <li class="active"><a href="<?php echo site_url('admin/dashboard'); ?>">Dashboard</a></li>
			    <li><?php echo anchor('admin/page', 'pages'); ?></li>
			    <li><?php echo anchor('admin/user', 'users'); ?></li>
		    </ul>
	    </div>
    </div>

	<div class="container">
		<div class="row">
			<!-- Main column -->
			<div class="span9">
				<div class="container-fluid">
					<div class="row-fluid">
						<div class="span3">
								<div class="conatainer">
									<ul>
										<li><a href="<?php echo site_url('admin') ?> ">Admin</a></li>
										<li><a href="<?php echo site_url('bookmark_location') ?> ">Bookmark location</a></li>
										<li><a href="<?php echo site_url('brand') ?> ">Brand</a></li>
										<li><a href="<?php echo site_url('cash_log') ?> ">Cash log</a></li>
										<li><a href="<?php echo site_url('chat') ?> ">Chat</a></li>
										<li><a href="<?php echo site_url('device') ?> ">Device</a></li>
										<li><a href="<?php echo site_url('driver') ?> ">Driver</a></li>
										<li><a href="<?php echo site_url('food_place') ?> ">Food place</a></li>
										<li><a href="<?php echo site_url('fuel_center') ?> ">Fuel center</a></li>
										<li><a href="<?php echo site_url('fuel_refill') ?> ">Fuel refill</a></li>
										<li><a href="<?php echo site_url('hotel') ?> ">Hotel</a></li>
										<li><a href="<?php echo site_url('journey') ?> ">Journey</a></li>
										<li><a href="<?php echo site_url('notification') ?> ">Notification</a></li>
										<li><a href="<?php echo site_url('salary') ?> ">Salary</a></li>
										<li><a href="<?php echo site_url('town') ?> ">Town</a></li>
										<li><a href="<?php echo site_url('vehicle') ?> ">Vehicle</a></li>
										<li><a href="<?php echo site_url('vehicle_log') ?> ">Vehicle log</a></li>
										<li><a href="<?php echo site_url('vehicle_status') ?> ">Vehicle status</a></li>
										<li><a href="<?php echo site_url('vehicle_type') ?> ">Vehicle type</a></li>
										<li><a href="<?php echo site_url('website_news') ?> ">Website news</a></li>
									</ul>
								</div>
						</div>
						<div class="span9">
								<?php $this->load->view($subview,$dataprovider); ?>
						</div>
					</div>
				</div>
			</div>
			<!-- Sidebar -->
			<!-- <div class="span3">
				<section>
					<?php echo mailto('joost@codeigniter.tv', '<i class="icon-user"></i> joost@codeigniter.tv'); ?><br>
					<?php echo anchor('admin/user/logout', '<i class="icon-off"></i> logout'); ?>
				</section>
			</div> -->
		</div>
	</div>

<?php $this->load->view('temp/components/page_tail'); ?>