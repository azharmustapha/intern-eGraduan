<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>e-Graduan</title>
    <link href="../assets/fav/favicon.ico" rel="icon" type="image/x-icon" />
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/reads.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">  
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
                            <!--ACCESS MENUS FOR ADMIN-->
                            <?php if($this->session->userdata('level')==='1'):?>
                            <li><a href="<?php echo site_url('page');?>" class="nav-link">Utama</a></li>
                            <li>
                                <!-- First Tier Drop Down -->
                                <label for="drop-2" class="toggle toggle-2">Senarai <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
                                <a href="#">Senarai  <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                <input type="checkbox" id="drop-2" />
                                <ul>
                                    <li><a href="<?php echo site_url('pemohon') ?>" class="drop-text">Senarai Pemohon</a></li>
                                    <li><a href="<?php echo site_url('note') ?>" class="drop-text">Senarai Iklan</a></li>
                                    <li><a href="<?php echo site_url('industri') ?>" class="drop-text">Senarai Industri</a></li>
                                    <!--li><a href="error.html" target="_blank" class="drop-text">Social Media</a></li-->
                                </ul>
                            </li>

                            <!--ACCESS MENUS FOR AUTHOR-->
                            <?php else:?>
                            <li><a href="<?php echo site_url('page/author');?>" class="nav-link">Utama</a></li>
                            <li><a href="<?php echo site_url('permohonan');?>" class="nav-link">Permohonan</a></li>
                            <?php endif;?>

                            <li><a href="<?php echo site_url('login/logout');?>">Log Keluar</a></li>

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

            </div>
            <!-- //top-nav -->

        </div>

    </div>
    <!-- //home -->

    <div class="jumbotron" style="background: #f4f6f6">
      <div class="container">
        <h1 class="display-5">Selamat Datang, <?php echo $this->session->userdata('username');?></h1>
        <p class="lead">Laman e-Graduan bagi rakyat Kelantan untuk mencipta peluang pekerjaan dan mencari peluang pekerjaan</p>
      </div>
    </div>

      <div class="container">

          <div class="h3-head text-center">
              <h3 class="title-1">IKLAN TERKINI</h3>
          </div>

        <br>

        <div class="container">

          <br />

          <table class="table table-hover">

              <thead>
                  <tr>
                      <th>#</th>
                      <th>TAJUK IKLAN</th>
                      <th>JAWATAN</th>
                      <th>VIEW</th>

                  </tr>
              </thead>

              <tbody>
                  <?php if($notes): ?>
                  <?php foreach($notes as $note): ?>
                  <tr>
                      <td><?php echo $note->id; ?></td>
                      <td><?php echo $note->title; ?></td>
                      <td><?php echo $note->jawatan; ?></td>
                      <td><a href="<?php echo base_url('note/view/'.$note->id) ?>" class="btn btn-primary"><i class="fa fa-eye"></i> View</a></td>

                  </tr>
                  <?php endforeach; ?>
                  <?php endif; ?>
              </tbody>

          </table>

        </div>

      </div>

 
	  <!-- Optional JavaScript -->
  	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
  	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>

    <!-- Footer -->
    <footer class="page-footer font-small blue fixed-bottom">

        <!-- Copyright -->
        <div class="copyright text-center my-3">© 2019 e-Graduan V1.0 All rights reserved | Design by <a href="#"> Azhar Mustapha</a></div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
  </body>
</html>
