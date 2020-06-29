<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Permohonan</title>
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
                        <li class="breadcrumb-item active">Permohonan</li>
                    </ol>
                </div>
                <!--//breadcrumb-->

            </div>
            <!-- //top-nav -->

        </div>

    </div>
    <!-- //home -->

    <br />

    <div class="container">

    <form method="post" action="<?php echo base_url()?>permohonan/form_validation">

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

        <div class="panel-heading">
            <h3 class="panel-title">MAKLUMAT PERIBADI</h3>
        </div>

        <br>

            <div class="form-group row">
                <label class="col-2 col-form-label">Nama Penuh*</label>
                <div class="col-8">
                    <input type="text" name="full_name" class="form-control" />
                </div>
                <span class="text-danger"><?php echo form_error("full_name"); ?></span>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">Kad Pengenalan*</label>
                <div class="col-8">
                    <input type="text" name="ic" class="form-control" />
                </div>
                <span class="text-danger"><?php echo form_error("ic"); ?></span>
            </div>

            <div class="form-group row">
                <label  class="col-2 col-form-label">Alamat Tetap*</label>
                <div class="col-8">
                    <input type="text" name="alamat" class="form-control" />
                </div>
                <span class="text-danger"><?php echo form_error("alamat"); ?></span>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">Telefon Bimbit*</label>
                <div class="col-5">
                    <input type="text" name="phone" class="form-control" />
                </div>
                <span class="text-danger"><?php echo form_error("phone"); ?></span>
            </div>

            <div class="form-group row">
            <label for="date-input" class="col-2 col-form-label">Tarikh Lahir*</label>
                <div class="col-5">
                    <input class="form-control" type="date" name="date" value="2020-01-01" id="date-input">
                </div>
            </div>

            <fieldset class="form-group">
                <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Jantina*</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="Lelaki">
                    <label class="form-check-label" for="gridRadios1">
                        Lelaki
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="Perempuan">
                    <label class="form-check-label" for="gridRadios2">
                        Perempuan
                    </label>
                    </div>
                </div>
                </div>
            </fieldset>

        <hr>

        <div class="panel-heading">
            <h3 class="panel-title">MAKLUMAT PENDIDIKAN</h3>
        </div>

        <br>

        <div class="form-group row">
            <label for="kelulusan" class="col-2 col-form-label">Peringkat Kelulusan*</label>
            <div class="col-5">
                <select class="form-control" name="kelulusan" id="kelulusan">
                    <option>Sila Pilih</option>
                    <option>PMR</option>
                    <option>SPM</option>
                    <option>Diploma/STPM</option>
                    <option>Ijazah Sarjana Muda</option>
                    <option>Ijazah Sarjana</option>
                    <option>PhD</option>
                </select>
            </div>
        </div>

        <h5>Jika Anda Kelulusan PMR/SPM...</h5>

        <br />

        <div class="form-group row">
            <label class="col-2 col-form-label">Keputusan</label>
            <div class="col-5">
                <input type="text" name="result" class="form-control" placeholder="A=_, B=_, C=_, D=_, E=_, F=_"/>
            </div>
            <span class="text-danger"><?php echo form_error("result"); ?></span>
        </div>

        <br />

        <h5>Jika Anda Kelulusan IPT...</h5>

        <br />

        <div class="form-group row">
            <label class="col-2 col-form-label">Institusi Pengajian</label>
            <div class="col-5">
                <input type="text" name="ipt" class="form-control" />
            </div>
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
        
        <div class="form-group row">
            <label class="col-2 col-form-label">Program Pengajian</label>
            <div class="col-5">
                <input type="text" name="kursus" class="form-control" />
            </div>
            <span class="text-danger"><?php echo form_error("kursus"); ?></span>
        </div>

        <div class="form-group row">
            <label class="col-2 col-form-label">PNGK</label>
            <div class="col-5">
                <input type="text" name="pngk" class="form-control" />
            </div>
            <span class="text-danger"><?php echo form_error("pngk"); ?></span>
        </div>

        <div class="form-group row">
            <label for="grad" class="col-2 col-form-label">Tahun Graduasi</label>
            <div class="col-5">
                <select class="form-control" name="grad" id="grad">
                    <option>Sila Pilih Tahun</option>
                    <option>2015</option>
                    <option>2016</option>
                    <option>2017</option>
                    <option>2018</option>
                    <option>2019</option>
                    <option>2020</option>
                    <option>2021</option>
                    <option>2022</option>
                    <option>2023</option>
                    <option>2024</option>
                    <option>2025</option>
                    <option>Tidak Dinyatakan</option>
                </select>
            </div>
        </div>

        <hr>

        <div class="panel-heading">
            <h3 class="panel-title">PENGALAMAN KERJA</h3>
        </div>

        <br>

        <fieldset class="form-group">
            <div class="row">
            <legend class="col-form-label col-sm-2 pt-0">Pernah Bekerja*</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="kerja" id="gridRadios3" value="Ya">
                    <label class="form-check-label" for="gridRadios3">YA</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="kerja" id="gridRadios4" value="Tidak">
                    <label class="form-check-label" for="gridRadios4">TIDAK</label>
                </div>
            </div>
            </div>
        </fieldset>

        <h5>Jika YA, sila teruskan....</h5>

        <br>

        <div class="form-group row">
            <label for="grad" class="col-2 col-form-label">Sektor Pekerjaan</label>
            <div class="col-5">
                <select class="form-control" name="sektor" id="sektor">
                    <option>Sila Pilih Sektor Pekerjaan</option>
                    <option>Sektor Perkhidmatan</option>
                    <option>Sektor Perikanan</option>
                    <option>Sektor Pertanian</option>
                    <option>Sektor Komputer & IT</option>
                    <option>Sektor Perindustrian</option>
                    <option>Sektor Pelancongan</option>
                    <option>Lain-lain Sektor</option>
                </select>
            </div>
            <span class="text-danger"><?php echo form_error("sektor"); ?></span>
        </div>

        <div class="form-group row">
            <label class="col-2 col-form-label">Nama Syarikat</label>
            <div class="col-5">
                <input type="text" name="syarikat" class="form-control" />
            </div>
            <span class="text-danger"><?php echo form_error("syarikat"); ?></span>
        </div>

        <div class="form-group row">
            <label class="col-2 col-form-label">Nama Jawatan</label>
            <div class="col-5">
                <input type="text" name="jawatan" class="form-control" />
            </div>
            <span class="text-danger"><?php echo form_error("jawatan"); ?></span>
        </div>

        <div class="form-group row">
            <label class="col-2 col-form-label">Tempoh Bekerja</label>
            <div class="col-5">
                <input type="text" name="tempoh" class="form-control" />
            </div>
            <span class="text-danger"><?php echo form_error("tempoh"); ?></span>
        </div>

        <br>

        <div class="container">
            <input type="submit" name="insert" value="Save" class="btn btn-info btn-lg" />
        </div>

    </form>
    
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
