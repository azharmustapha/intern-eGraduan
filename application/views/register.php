<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Daftar Pengguna</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.10.2/js/all.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.10.2/js/v4-shims.js"></script>
    <link href="<?php echo base_url('assets/css/reads.css');?>" rel="stylesheet" type="text/css" media="all">
  </head>

<body>
    <!--/home -->
    <div id="home" class="inner-w3pvt-page">
        <div class="overlay-innerpage">
            <!--/top-nav -->
            <div class="top_w3pvt_main container">
                <!--/header -->
                <header class="nav_w3pvt text-center">
                    <!-- nav -->
                    <nav class="wthree-w3ls">
                        <div id="logo">
                            <h1> <a class="navbar-brand px-0 mx-0" href="#"><i class="fa fa-graduation-cap fa-lg text-white mr-2"></i><strong>e-Graduan</strong>
                                </a>
                            </h1>
                        </div>

                        <label for="drop" class="toggle">Menu</label>
                        <input type="checkbox" id="drop" />
                        <ul class="menu mr-auto">
                            <li><a href="<?php echo site_url('welcome');?>" class="nav-link">Utama</a></li>
                            <li><a href="<?php echo site_url('perkhidmatan');?>">Kronologi</a></li>
                            <li>
                                <!-- First Tier Drop Down -->
                                <label for="drop-2" class="toggle toggle-2">Pautan <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
                                <a href="#">Pautan  <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                <input type="checkbox" id="drop-2" />
                                <ul>

                                    <li><a href="http://www.kelantan.gov.my/index.php/suk-kelantan/bahagian-unit/bahagian-pengurusan-sumber-manusia" target="_blank" class="drop-text">BPSM SUK Kelantan</a></li>
                                    <li><a href="https://www.hrdf.com.my/" target="_blank" class="drop-text">HRDF</a></li>
                                    <li><a href="https://mdec.my/" target="_blank" class="drop-text">MDEC</a></li>
                                    <li><a href="http://jtksm.mohr.gov.my/en/" target="_blank" class="drop-text">Jabatan Tenaga Kerja</a></li>
                                    <li><a href="http://www.teraju.gov.my/" target="_blank" class="drop-text">Teraju</a></li>
                                    <!--li><a href="error.html" target="_blank" class="drop-text">Social Media</a></li-->
                                </ul>
                            </li>
                            <!--/li><a href="index.html">Projects</a></li-->
                            <li><a href="<?php echo site_url('login');?>">Log Masuk</a></li>

                            <li class="social-icons ml-lg-3"><a href="#" class="p-0 social-icon"><span class="fa fa-facebook-official" aria-hidden="true"></span>
                                    <div class="tooltip">Facebook</div>
                                </a> </li>
                            <li class="social-icons"><a href="#" class="p-0 social-icon"><span class="fa fa-twitter" aria-hidden="true"></span>
                                    <div class="tooltip">Twitter</div>
                                </a> </li>
                            <li class="social-icons"><a href="#" class="p-0 social-icon"><span class="fa fa-instagram" aria-hidden="true"></span>
                                    <div class="tooltip">Instagram</div>
                                </a> </li>
                        </ul>
                    </nav>
                    <!-- //nav -->
                </header>
                <!--//header -->

                <!--/breadcrumb-->
                <div class="inner-w3pvt-page-info">
                    <ol class="breadcrumb d-flex">
                        <li class="breadcrumb-item">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Daftar Pengguna</li>
                    </ol>

                </div>
                <!--//breadcrumb-->
            </div>
            <!-- //top-nav -->
        </div>
    </div>
    <!-- //home -->
    
    <div class="container">
    <div class="row">
      <div class="col-sm-13 col-md-11 col-lg-9 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h2 class="card-title text-center">Daftar Pengguna e-Graduan</h2>

            <div class="panel-body">
            <form method="post" action="<?php echo base_url(); ?>register/validation">

                <?php if($this->session->flashdata('error')) { ?>
                    <div class="alert alert-danger" role="alert">
                        <h5><?php echo $this->session->flashdata('error'); ?></h5>
                    </div>
                <?php } ?>

                    <div class="form-group col-md-12">
                        <label class="col-sm-4 col-form-label col-form-label-lg"><h4>Nama Penuh</h4></label>
                            <div class="col-md-12">
                                <input type="text" class="form-control form-control-lg" name="user_name" value="<?php echo set_value('user_name'); ?>"></input>
                                <span class="text-danger"><?php echo form_error('user_name'); ?></span>
                            </div>
                    </div>

                    <div class="form-group col-md-12">
                        <label class="col-sm-4 col-form-label col-form-label-lg"><h4>Kad Pengenalan</h4></label>
                            <div class="col-md-12">
                                <input type="text" class="form-control form-control-lg" name="user_ic" value="<?php echo set_value('user_ic'); ?>"></input>
                                <span class="text-danger"><?php echo form_error('user_ic'); ?></span>
                            </div>
                    </div>

                    <div class="form-group col-md-12">
                        <label class="col-sm-4 col-form-label col-form-label-lg"><h4>Email</h4></label>
                            <div class="col-md-12">
                                <input type="text" class="form-control form-control-lg" name="user_email" value="<?php echo set_value('user_email'); ?>"></input>
                                <span class="text-danger"><?php echo form_error('user_email'); ?></span>
                            </div>
                    </div>

                    <div class="form-group col-md-12">
                        <label class="col-sm-4 col-form-label col-form-label-lg"><h4>Kata Laluan</h4></label>
                            <div class="col-md-12">
                                <input type="password" class="form-control form-control-lg" name="user_password" value="<?php echo set_value('user_password'); ?>"></input>
                                <span class="text-danger"><?php echo form_error('user_password'); ?></span>
                            </div>
                    </div>

                    <div style="text-align: center" >
                        <button class="btn btn-lg btn-primary text-uppercase" type="submit" name="register">Daftar Pengguna</button>
                    </div>
                    
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>

    
		<!-- Footer -->
		<footer class="page-footer font-small fixed-bottom">

            <!-- Copyright -->
            <div class="copyright text-center my-3">© 2019 e-Graduan V1.0 All rights reserved | Design by <a href="#"> Azhar Mustapha</a></div>
            <!-- Copyright -->

        </footer>
        <!-- Footer -->
 
	<!-- Optional JavaScript -->
  	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
  	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>

  </body>
</html>