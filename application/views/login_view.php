<!DOCTYPE html>
<html>
	<head>
	<title>Log Masuk</title>

		<!-- meta_tags-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Daftar Masuk e-Graduan" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

		<!-- Meta_tag_Keywords -->
		<script defer src="https://use.fontawesome.com/releases/v5.10.2/js/all.js"></script>
		<script defer src="https://use.fontawesome.com/releases/v5.10.2/js/v4-shims.js"></script>
		<link href="<?php echo base_url('assets/login/css/style.css');?>" rel="stylesheet" type="text/css" media="all"><!--style_sheet-->
		<link href="<?php echo base_url('assets/login/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css" media="all"><!--font_awesome_icons-->
		
		<!--web_fonts-->
		<link href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&amp;subset=latin-ext" rel="stylesheet">
		<!--//web_fonts-->

	</head>

		<body>
	
		<div class="form">

		<br />
		
		<div class="button_cont"><a class="example_f" href="welcome" rel="nofollow"><span>UTAMA</a></div>
		
			<div class="form-content">
				<form action="<?php echo site_url('login/auth');?>" method="post" class="signin-form">
					
					<?php echo $this->session->flashdata('msg');?>

					<?php if($this->session->flashdata('success')) { ?>
						<div class="alert alert-success" role="alert">
							<h5><?php echo $this->session->flashdata('success'); ?></h5>
						</div>
					<?php } ?>

					<div class="form-info">
						<h2>Log Masuk e-Graduan</h2>
					</div>

					<div class="email-w3l">
						<span class="i1"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
						<input class="email" type="email" name="email" placeholder="Alamat Email" required="">
					</div>

					<div class="pass-w3l">
					<!---728x90--->
					<span class="i2"><i class="fa fa-unlock" aria-hidden="true"></i></span>
						<input class="pass" type="password" name="password" placeholder="Kata Laluan" required="">
					</div>

					<div class="form-check">
						<div class="left">
							<input type="checkbox" value="Remember me">Remember me
						</div>

						<div class="clear"></div>
					</div>
					
					<div class="submit-agileits">
						<input class="login" type="submit" value="login">
					</div>

					<h4 class="register">Dont have an account? <a href="register">Daftar Disini</a></h4>

				</form>

			</div>
		</div>

		<!-- Footer -->
		<footer class="page-footer font-small">

			<!-- Copyright -->
			<div class="copyright text-center my-3">© 2019 e-Graduan V1.0 All rights reserved | Design by <a href="#"> Azhar Mustapha</a></div>
			<!-- Copyright -->

		</footer>
		<!-- Footer -->

		</body>
</html>
 
	<!-- Optional JavaScript -->
  	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
  	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
