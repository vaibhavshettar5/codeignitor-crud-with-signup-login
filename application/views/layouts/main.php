<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
	<script type="text/javascript" src="<?php echo base_url(); ?>/assets/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>/assets/jquery.js"></script>
	<!-- 1.to work base url we have to mention url in helper array in autoload.php 
		 2. mention base url in config.php ie http://localhost/ciu/
	-->
</head>
<body>
	<div class="container">
		<div class="col-sm-3">
			<?php $this->load->view('users/login_view'); ?> 
		</div>
		<div class="col-sm-6">
			<?php $this->load->view($main_view); ?>
		</div>
	</div>
</body>
</html> 