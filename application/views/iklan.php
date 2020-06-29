<!DOCTYPE html>
<html>

    <head>

        <meta charset="UTF-8">
        <title>Butiran Iklan</title>
        <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
        <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">  

    </head>

    &nbsp;

    <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container"><a class="navbar-brand d-flex align-items-center"> <i class="fa fa-graduation-cap fa-lg text-dark mr-2"></i><strong>e-Graduan</strong></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>        
      <div class="collapse navbar-collapse" id="basicExampleNav">
        <ul class="navbar-nav ml-auto">

              <!--ACCESS MENUS FOR ADMIN-->
              <?php if($this->session->userdata('level')==='1'):?>
              <li class="nav-item active"><a class="nav-link" href="<?php echo site_url('page') ?>">Utama</a></li>
              
              <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" id="navbardrop">Senarai</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?php echo site_url('pemohon') ?>">Senarai Pemohon</a>
                    <a class="dropdown-item" href="<?php echo site_url('note') ?>">Senarai Iklan</a>
                    <a class="dropdown-item" href="<?php echo site_url('iklan') ?>">Senarai iklan</a>
                  </div>
              </li>

              <!--ACCESS MENUS FOR AUTHOR-->
              <?php else:?>
              <li class="nav-item active"><a class="nav-link" href="<?php echo site_url('page/author') ?>">Utama</a></li>
              <li class="nav-item active"><a class="nav-link" href="<?php echo site_url('permohonan') ?>">Permohonan</a></li>
              <?php endif;?>

              <li class="nav-item"><a href="<?php echo site_url('login/logout');?>" class="nav-link"> Log Keluar </a></li>
        </ul>
        </div>
      </div>
    </nav>

        <br /><br />
    
    <div class="container">
        
        <div class="row">
            <div class="col-lg-12 mt40">
                <div class="pull-left">
                    <h2>BUTIRAN IKLAN</h2>
                </div>
            </div>
        </div>

        <br>
     
        <form action="<?php echo base_url('iklan/store') ?>" method="POST" name="edit_iklan">
        <input type="hidden" name="id" value="<?php echo $iklan->id ?>">
            <div class="row">

                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Nama Syarikat/iklan</strong>
                        <input type="text" name="title" class="form-control" value="<?php echo $iklan->title ?>" placeholder="Tajuk Iklan">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Alamat Syarikat/iklan</strong>
                        <input type="text" name="jawatan" class="form-control" value="<?php echo $iklan->jawatan ?>" placeholder="Nama Jawatan Kosong">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <strong>No. Telefon</strong>
                        <textarea class="form-control" col="4" name="description" placeholder="Huraian Iklan"><?php echo $iklan->description ?></textarea>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Alamat Email</strong>
                        <textarea class="form-control" col="4" name="linkk" placeholder="Link Permohonan"><?php echo $iklan->linkk ?></textarea>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                    <strong>Tahun Syarikat/iklan Ditubuhkan</strong>
                        <textarea class="form-control" col="4" name="tahun" placeholder="Link Permohonan"><?php echo $iklan->tahun ?></textarea>
                    </div>
                </div>

                <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
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