<!DOCTYPE html>
<html>

    <head>

        <meta charset="UTF-8">
        <title>Senarai Iklan</title>
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

                <!--/breadcrumb-->
                <div class="inner-w3pvt-page-info">
                    <ol class="breadcrumb d-flex">
                        <li class="breadcrumb-item">
                            <a href="index.html">Utama</a>
                        </li>
                        <li class="breadcrumb-item active"> Iklan</li>

                        <li class="breadcrumb-item active">Perincian Iklan</li>
                    </ol>
                </div>
                <!--//breadcrumb-->

            </div>
            <!-- //top-nav -->

        </div>

    </div>
    <!-- //home -->

        <br /><br />
    
    <div class="container">
        
        <div class="row">
            <div class="col-lg-12 mt40">
                <div class="pull-left">
                    <h2>PERINCIAN IKLAN</h2>
                </div>
            </div>
        </div>

        <br>
     
        <form action="#" method="POST">
        <input type="hidden" name="id" value="<?php echo $note->id ?>">
            <div class="row">

                <div class="form-group col-md-12">
                    <label class="col-sm-4 col-form-label col-form-label-lg"><h4>Iklan Jawatan Kosong</h4></label>
                        <div class="col-md-12">
                            <input class="form-control form-control-lg" name="title" value="<?php echo $note->title ?>" readonly></input>
                        </div>
                </div>

                <div class="form-group col-md-12">
                    <label class="col-sm-4 col-form-label col-form-label-lg"><h4>Jawatan Ditawarkan</h4></label>
                        <div class="col-md-12">
                            <input class="form-control form-control-lg" name="jawatan" value="<?php echo $note->jawatan ?>" readonly></input>
                        </div>
                </div>

                <div class="form-group col-md-12">
                    <label class="col-sm-4 col-form-label col-form-label-lg"><h4>Huraian Iklan</h4></label>
                        <div class="col-md-12">
                            <textarea class="form-control form-control-lg" name="description" readonly><?php echo $note->description ?></textarea>
                        </div>
                </div>

                <div class="form-group col-md-12">
                    <label class="col-sm-4 col-form-label col-form-label-lg"><h4>Link Permohonan</h4></label>
                        <div class="col-md-12">
                            <textarea class="form-control form-control-lg" name="linkk" readonly><?php echo $note->linkk ?></textarea>
                        </div>
                </div>

                <div class="col-md-12 text-center">
                    <?php if($this->session->userdata('level')==='1'):?>

                        <a href="<?php echo site_url('page') ?>" class="btn btn-primary btn-lg " role="button" aria-pressed="true" ><i class="fa fa-home"></i> KEMBALI</a>

                    <?php else:?>

                        <a href="<?php echo site_url('page/author') ?>" class="btn btn-primary btn-lg " role="button" aria-pressed="true" ><i class="fa fa-home"></i> KEMBALI</a>
                    <?php endif;?>


                </div>

            </div>
        <form>
 
    </div>
     
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
        
    </body>
</html>

    <!-- Footer -->
    <footer class="page-footer font-small fixed-bottom">

        <!-- Copyright -->
        <div class="copyright text-center my-3">© 2019 e-Graduan V1.0 All rights reserved | Design by <a href="#"> Azhar Mustapha</a></div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->