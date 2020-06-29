<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Kronologi</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet"> 
    <link href="<?php echo base_url('assets/css/timeline.css');?>" rel="stylesheet"> 
    <link href="<?php echo base_url('assets/css/reads.css');?>" rel="stylesheet"> 

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
                        <li class="breadcrumb-item active">Kronologi Permohonan Pekerjaan</li>
                    </ol>
                </div>
                <!--//breadcrumb-->

            </div>
            <!-- //top-nav -->

        </div>

    </div>
    <!-- //home -->

    	<!-- features -->
      <!--section class="banner-bottom editContent" id="card" data-selector=".editContent">
        <div class="container py">

        <div class="container">
          <div class="row news-grids mt-md-5 mt-4 text-center">
            <h3 class="tittle-w3ls text-center mb-5 editContent" data-selector=".editContent"><span class="pink editContent" data-selector=".editContent" style="outline: none; cursor: inherit;">Servis</span> Kami</h3>
          </div>   
        </div>

        <div class="card-deck">
          <div class="card">
            <img src="../assets/img/perkhidmatan/mahasiswa.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title">Graduan Universiti <span class="fa fa-graduation-cap"></span> </h4>
              <p class="mt-2">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <!--/div class="card-footer">
              <small class="text-muted">Dimuatnaik pada 14/05/1997</small>
            </div-->
          </div>

          <!--/div class="card">
            <img src="../assets/img/perkhidmatan/work.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title">Peluang Pekerjaan <span class="fa fa-key"></span></h4>
              <p class="mt-2">This card has supporting text below as a natural lead-in to additional content.</p>
            </div>
            <!--/div class="card-footer">
              <small class="text-muted">Dimuatnaik pada 14/05/1997</small>
            </div-->
          </div>

          <!--/div class="card">
            <img src="../assets/img/perkhidmatan/kerjaya.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title">Mencipta Kerjaya <span class="fa fa-handshake-o"></span></h4>
              <p class="mt-2">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            </div>
            <!--/div class="card-footer">
              <small class="text-muted">Dimuatnaik pada 14/05/1997</small>
            </div-->
          </div>
        </div>

        </div>
      </section>
      <!-- //features -->


    <div class="container">
      <div class="row news-grids mt-md-5 mt-4 text-center">
        <h3 class="tittle-w3ls text-center mb-5 editContent" data-selector=".editContent"><span class="pink editContent" data-selector=".editContent" style="outline: none; cursor: inherit;">Kronologi </span> Permohonan Pekerjaan</h3>
      </div>   

    	<ul class="timeline">

        <li>
          <div class="timeline-badge"><i class="fa fa-briefcase"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Iklan Pekerjaan di Laman e-Graduan</h4>
              <!--p><small class="text-muted"><i class="fa fa-graduation-cap"></i> 11 hours ago via Twitter</small></p!-->
            </div>
            <div class="timeline-body">
              <p>Admin e-Graduan memuatnaik iklan peluang pekerjaan dari syarikat/industri yang membuka peluang di laman utama bagi memudahkan para graduan memohon untuk mengisi kekosongan jawatan. </p>
            </div>
          </div>
	    	</li>
		
        <li class="timeline-inverted">
          <div class="timeline-badge warning"><i class="fa fa-file"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Memohon Melalui Link Yang Disediakan</h4>
            </div>
            <div class="timeline-body">
              <p>Pemohon yang telah mendaftar di e-Graduan boleh memohon pada link yang telah disertakan pada iklan peluang pekerjaan.</p>
            </div>
          </div>
	    	</li>
		
        <li>
          <div class="timeline-badge danger"><i class="fa fa-envelope"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Industri Menerima Permohonan Yang Dimohon oleh Graduan</h4>
            </div>
            <div class="timeline-body">
              <p>Industri menerima permohonan dari pemohon yang telah memohon melalui link yang telah disediakan bersama iklan peluang pekerjaan di laman e-Graduan. </p>
            </div>
          </div>
        </li>

       
        <li class="timeline-inverted">
          <div class="timeline-badge success"><i class="fa fa-mail-reply"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Mendapat Maklum Balas Dari Industri/Syarikat</h4>
            </div>
            <div class="timeline-body">
              <p>e-Graduan menerima maklum balas dari industri berkenaan permohonan bagi mengisi kekosongan jawatan sama ada diterima atau ditolak.</p>
            </div>
          </div>
        </li>

		</ul>
	</div>


	<!-- Optional JavaScript -->
  	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
  	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>

    <!-- Footer -->
    <footer class="page-footer font-small">

        <!-- Copyright -->
        <div class="copyright text-center my-3">© 2019 e-Graduan V1.0 All rights reserved | Design by <a href="#"> Azhar Mustapha</a></div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
    
  </body>
</html>
