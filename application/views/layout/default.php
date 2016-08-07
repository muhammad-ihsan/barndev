<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<?php $this->load->view('partials/header'); ?>

	<!-- Content -->
	<?php $this->load->view($page); ?>


	<?php $this->load->view('partials/footer'); ?>
</body>
</html>