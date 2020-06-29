<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Permohonan</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">  
  </head>

  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light py-3">
      <div class="container"><a class="navbar-brand d-flex align-items-center"> <i class="fa fa-graduation-cap fa-lg text-dark mr-2"></i><strong>e-Graduan</strong></a>
        <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
        <div id="navbarSupportedContent" class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">

              <!--ACCESS MENUS FOR ADMIN-->
              <?php if($this->session->userdata('level')==='1'):?>
              <li class="nav-item active"><a class="nav-link font-italic" href="<?php echo site_url('page') ?>">Utama</a></li>
              <li class="nav-item active"><a class="nav-link font-italic" href="<?php echo site_url('note') ?>">Iklan</a></li>
              <li class="nav-item active"><a class="nav-link font-italic" href="<?php echo site_url('pemohon') ?>">Senarai Pemohon</a></li>

              <!--ACCESS MENUS FOR AUTHOR-->
              <?php else:?>
              <li class="nav-item active"><a class="nav-link font-italic" href="<?php echo site_url('page/author') ?>">Utama</a></li>
              <li class="nav-item active"><a class="nav-link font-italic" href="<?php echo site_url('permohonan') ?>">Permohonan</a></li>
              <?php endif;?>

              <li class="nav-item active"><a href="<?php echo site_url('login/logout');?>" class="nav-link font-italic"> Log Keluar </a></li>
        </ul>
        </div>
      </div>
    </nav>

    &nbsp;

    <div class="container">
    <div class="row">
        <div class="col">
            <a href="permohonan" class="btn btn-outline-warning btn-lg btn-block" style="width: 200px;"><i class="fa fa-user"></i> MAKLUMAT PERIBADI</a>
        </div>

        &nbsp;

        <div class="col">
            <a href="pendidikan" class="btn btn-outline-dark btn-lg btn-block active" style="width: 200px;"><i class="fa fa-graduation-cap"></i> MAKLUMAT PENDIDIKAN</a>
        </div>

        &nbsp;

        <div class="col">
            <a href="kerja" class="btn btn-outline-danger btn-lg btn-block" style="width: 200px;"><i class="fa fa-briefcase"></i> PENGALAMAN KERJA</a>
        </div>

        &nbsp;

        <div class="col">
            <a href="mohon" class="btn btn-outline-success btn-lg btn-block" style="width: 200px;"><i class="fa fa-file"></i> PERMOHONAN KERJA</a>
        </div>
    </div>
    </div>    

    <div class="container">
        <br /><br /><br />
        <form method="post" action="<?php echo base_url()?>pendidikan/form_validation">

            <?php if($this->session->flashdata('success')) { ?>
                <div class="alert alert-success" role="alert">
                    <h5><?php echo $this->session->flashdata('success'); ?></h5>
                </div>
            <?php } ?>

            <?php if($this->session->flashdata('error')) { ?>
                <div class="alert alert-danger" role="alert">
                    <h5><?php echo $this->session->flashdata('error'); ?></h5>
                </div>
            <?php } ?>

            <div class="form-group">
                <label>Institusi Pengajian*</label>
                <input type="text" name="ipt" class="form-control" />
                <span class="text-danger"><?php echo form_error("ipt"); ?></span>
            </div>

            <!--div class="form-group">
                <label for="universiti">Bidang Pengajian*</label>
                <select class="form-control" name="univ" id="univ">
                    <option>Sila Pilih</option>
                    <option>Universiti Malaya</option>
                    <option>Universiti Kebangsaan Malaysia</option>
                    <option>Universiti Putra Malaysia</option>
                    <option>Universiti Teknologi Mara</option>
                    <option>Universiti Malaysia Kelantan</option>
                </select>
            </div!-->
            
            <div class="form-group">
                <label>Program Pengajian*</label>
                <input type="text" name="kursus" class="form-control" />
                <span class="text-danger"><?php echo form_error("kursus"); ?></span>
            </div>

            <div class="form-group">
                <label for="grad">Tahun Graduasi*</label>
                <select class="form-control" name="grad" id="grad">
                    <option>Sila Pilih Tahun</option>
                    <option>2020</option>
                    <option>2021</option>
                    <option>2022</option>
                    <option>2023</option>
                    <option>2024</option>
                    <option>2025</option>
                </select>
            </div>

            <div class="form-group">
                <input type="submit" name="insert" value="Save" class="btn btn-info btn-lg" />
            </div>
        </form>

 
	<!-- Optional JavaScript -->
  	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
  	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>

    <!-- Footer -->
    <footer class="page-footer font-small fixed-bottom">

        <!-- Copyright -->
        <div class="copyright text-center my-3">© 2019 e-Graduan V1.0 All rights reserved | Design by <a href="#"> Azhar Mustapha</a></div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
  </body>
</html>
