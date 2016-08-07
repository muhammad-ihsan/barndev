<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link href="<?php echo base_url() ?>public/assets/css/style.default.css" rel="stylesheet">
</head>
<body>
	<section>
		<?php $this->load->view('partials/admin/header'); ?>

		<!-- Content -->
		<div class="mainpanel">
		    <div class="headerbar">
		      <a class="menutoggle"><i class="fa fa-bars"></i></a>
		    </div>
		    
		    <?php $this->load->view('partials/admin/pageheader'); ?>
		    
		    <div class="contentpanel">
				<?php $this->load->view($page); ?>
		    </div><!-- contentpanel -->
	  	</div>


		<?php $this->load->view('partials/admin/footer'); ?>
	</section>
	<script src="<?php echo base_url() ?>public/assets/js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url() ?>public/assets/js/jquery-migrate-1.2.1.min.js"></script>
	<script src="<?php echo base_url() ?>public/assets/js/jquery-ui-1.10.3.min.js"></script>
	<script src="<?php echo base_url() ?>public/assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>public/assets/js/modernizr.min.js"></script>
	<script src="<?php echo base_url() ?>public/assets/js/jquery.sparkline.min.js"></script>
	<script src="<?php echo base_url() ?>public/assets/js/toggles.min.js"></script>
	<script src="<?php echo base_url() ?>public/assets/js/retina.min.js"></script>
	<script src="<?php echo base_url() ?>public/assets/js/jquery.cookies.js"></script>

	<script src="<?php echo base_url() ?>public/assets/js/flot/jquery.flot.min.js"></script>
	<script src="<?php echo base_url() ?>public/assets/js/flot/jquery.flot.resize.min.js"></script>
	<script src="<?php echo base_url() ?>public/assets/js/flot/jquery.flot.spline.min.js"></script>
	<script src="<?php echo base_url() ?>public/assets/js/morris.min.js"></script>
	<script src="<?php echo base_url() ?>public/assets/js/raphael-2.1.0.min.js"></script>

	<script src="<?php echo base_url() ?>public/assets/js/custom.js"></script>
	<script src="<?php echo base_url() ?>public/assets/js/dashboard.js"></script>

</body>
</html>