<!DOCTYPE html>
<html lang="en">
<header class="nav_w3pvt text-center">

  <head>	

    <meta charset="utf-8">
    <title>e-Graduan</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet"> 
    <link href="<?php echo base_url('assets/css/reads.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/stats.css');?>" rel="stylesheet">  
    <link href="<?php echo base_url('assets/css/foot.css');?>" rel="stylesheet">  

  </head>

<body>
    <!--/home -->
    <div id="home">
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
                <!--/header-->

            </div>
            <!-- //top-nav -->
            
    </div>
    <!-- //home -->

</header>

	<!-- banner slider -->
	<div id="homepage-slider" class="st-slider">
		<input type="radio" class="cs_anchor radio" name="slider" id="play1" checked="" />
		<input type="radio" class="cs_anchor radio" name="slider" id="slide1" />
		<input type="radio" class="cs_anchor radio" name="slider" id="slide2" />
		<input type="radio" class="cs_anchor radio" name="slider" id="slide3" />
            <div class="images">
                <div class="images-inner">
                    <div class="image-slide">
                        <div class="banner-w3pvt-1">
                            <div class="overlay-w3ls">

                            </div>

                        </div>
                    </div>
                    <div class="image-slide">
                        <div class="banner-w3pvt-2">
                            <div class="overlay-w3ls">

                            </div>
                        </div>
                    </div>
                    <div class="image-slide">
                        <div class="banner-w3pvt-3">
                            <div class="overlay-w3ls">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="labels">
                <div class="fake-radio">
                    <label for="slide1" class="radio-btn"></label>
                    <label for="slide2" class="radio-btn"></label>
                    <label for="slide3" class="radio-btn"></label>
                </div>
            </div>
            <!-- banner-hny-info -->
            <div class="banner-hny-info">
				<h1>Selamat Datang Ke e-Graduan</h1>
				<strong><p>Laman Peluang Pekerjaan Bagi Graduan Anak Jati Kelantan </p></strong>

                <!--div class="top-buttons mx-auto text-center mt-md-5 mt-3">
                    <a href="#" class="btn mr-2">Read More</a>
                    <a href="contact.html" class="btn">Contact Us</a>
                </div-->

            </div>
            <!-- //banner-hny-info -->
        </div>
        <!-- //banner slider -->
    </div>
    <!-- //banner -->
    
    <!-- about -->
    <section class="about py-5">
        <div class="container p-md-5">
            <div class="about-hny-info text-left px-md-5">
                <h3 class="tittle-w3ls mb-3"><span class="pink">e-</span>Graduan</h3>
                <p class="sub-tittle mt-3 mb-4">Laman e-Graduan dibangunkan pada tahun 2019 yang diilhamkan oleh Pengarah Pengurusan Sumber Manusia Pejabat Setiausaha Kerajaan Negeri Kelantan bagi membantu para graduan menganggur yang meningkat pada saban tahun. Kadar pengangguran dalam kalangan siswazah semakin kronik sedikit sebanyak menjejaskan ekonomi negara dan ia juga berkaitan isu serta krisis guna tenaga.</p>
                <a class="btn more black" href="read" role="button">Baca Lagi</a>
            </div>
        </div>
    </section>
    <!-- //about -->

    <!--/ab-->
    <section class="banner_bottom py-5">
        <div class="container py-md-5">
            <div class="row inner_sec_info">

                <div class="col-md-6 banner_bottom_grid help">
                    <img src="../assets/img/reads/read3.png" alt=" " class="img-fluid">
                </div>
                <div class="col-md-6 banner_bottom_left mt-lg-0 mt-4">
                    <h4><a class="link-hny" href="services.html"> Kami Membantu Anda Untuk Bersama Membangun</a></h4>
                    <p>Membantu para Graduan membangun dari semua perspektif supaya dapat melahirkan Graduan berkualiti mempunyai kemahiran, kepakaran dan menguasai ilmu kerana ia adalah kunci kepada persaingan untuk mendapatkan pekerjaan pada zaman yang semakin mencabar ini.  </p>
                    <p>Bagi memenuhi setiap sektor peluang pekerjaan syarikat/industri yang sedia ada menggunakan kemahiran daripada Graduan untuk membangun dengan pesat bagi memastikan pembangunan inklusif dalam rentak revolusi perindustrian 4.0.</p>
                    <a class="btn more black mt-3" href="perkhidmatan" role="button">Servis Kami</a>

                </div>
            </div>

            <div class="row features-w3pvt-main" id="features">
                <div class="col-md-4 feature-gird">
                    <div class="row features-hny-inner-gd">
                        <div class="col-md-3 featured_grid_left">
                            <div class="icon_left_grid">
                                <span class="fa fa-graduation-cap" style="color:black" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="col-md-9 featured_grid_right_info pl-lg-0">
                            <h4><a class="link-hny" href="single.html">Graduan Universiti</a></h4>
                            <p>Membantu para Graduan menyumbang kepada pembangunan ekonomi negeri dan negara</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 feature-gird">
                    <div class="row features-hny-inner-gd">
                        <div class="col-md-3 featured_grid_left">
                            <div class="icon_left_grid">
                                <span class="fa fa-key" style="color:black" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="col-md-9 featured_grid_right_info pl-lg-0">
                            <h4><a class="link-hny" href="single.html">Peluang Pekerjaan</a></h4>
                            <p>Membantu para Graduan & Industri memenuhi peluang pekerjaan yang sedia ada</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 feature-gird">
                    <div class="row features-hny-inner-gd">
                        <div class="col-md-3 featured_grid_left">
                            <div class="icon_left_grid">
                                <span class="fa fa-handshake-o" style="color:black" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="col-md-9 featured_grid_right_info pl-lg-0">
                            <h4><a class="link-hny" href="single.html">Mencipta Kerjaya</a></h4>
                            <p>Mencipta peluang pekerjaan berdasarkan Revolusi Industri 4.0</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--//ab-->

    <!--/services-->
    <section class="services" id="services">
        <div class="over-lay-blue py-5">
            <div class="container py-md-5">
                <div class="row my-4">

                    <div class="col-lg-5 services-innfo pr-5">
                        <h3 class="tittle-w3ls two mb-3 text-left"><span class="pink">Kami</span> Menyediakan</h3>
                        <p class="sub-tittle mt-2 mb-sm-3 text-left">e-Graduan menyediakan pelbagai kemudahan bagi siswazah yang menganggur secara atas talian.</p>
                        <a href="services.html"><img src="../assets/img/suk.jpg" alt="w3pvt" class="img-fluid"></a>
                    </div>

                    <div class="col-lg-7 services-grid-inf">
                        <div class="row services-w3pvt-main mt-5">

                            <div class="col-lg-6 feature-gird">
                                <div class="row features-hny-inner-gd mt-3">

                                    <div class="col-md-2 featured_grid_left">
                                        <div class="icon_left_grid">
                                            <span class="fa fa-paint-brush" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-10 featured_grid_right_info">
                                        <h4><a class="link-hny" href="single.html">Jaringan Industri</a></h4>
                                        <p>Menyediakan jaringan antara graduan dan industri bagi memudahkan urusan pekerjaan.</p>

                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-6 feature-gird">
                                <div class="row features-hny-inner-gd mt-3">

                                    <div class="col-md-2 featured_grid_left">
                                        <div class="icon_left_grid">
                                            <span class="fa fa-bullhorn" aria-hidden="true"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-10 featured_grid_right_info">
                                        <h4><a class="link-hny" href="single.html">Iklan Pekerjaan</a></h4>
                                        <p>Mengiklankan peluang pekerjaan kepada Graduan seacara atas talian.</p>

                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="row services-w3pvt-main mt-5">
                            <div class="col-lg-6 feature-gird ">

                                <div class="row features-hny-inner-gd mt-3">
                                    <div class="col-md-2 featured_grid_left">
                                        <div class="icon_left_grid">
                                            <span class="fa fa-shield" aria-hidden="true"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-10 featured_grid_right_info">
                                        <h4><a class="link-hny" href="single.html">Komuniti Graduan</a></h4>
                                        <p>Mewujudkan satu Komuniti Graduan bagi menyatukan idea-idea yang hebat dan bernas.</p>
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-6 feature-gird">
                                <div class="row features-hny-inner-gd mt-3">

                                    <div class="col-md-2 featured_grid_left">
                                        <div class="icon_left_grid">
                                            <span class="fa fa-lightbulb-o" aria-hidden="true"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-10 featured_grid_right_info">
                                        <h4><a class="link-hny" href="single.html">Peluang Mencipta Kerjaya</a></h4>
                                        <p>Idea-idea dari Graduan dipandang serius bagi membuka peluang mencipta kerjaya.</p>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//services-->

    <!-- stats section -->
    <section class="banner_bottom py-5">
		<div class="layer py-5">
			<div class="container p-md-5">
			<div class="row news-grids mt-md-5 mt-4 text-center">
				<h3 class="tittle-w3ls text-center mb-5 editContent" data-selector=".editContent"><span class="pink editContent" data-selector=".editContent" style="outline: none; cursor: inherit;">Statistik</span> Terkini</h3>
				<div class="row">
					<div class="col-lg-8 left-build-wthree aboutright-statwthree text-lg-left text-center">
						<div class="row">
							<div class="col-sm-3 col-6 w3layouts_stats_left w3_counter_grid">
								<span class="fa fa-credit-card" style="color:black"></span>
								<p class="counter">3</p>
								<p class="para-text-w3ls">Rakan Kongsi</p>
							</div>
							<div class="col-sm-3 col-6 w3layouts_stats_left w3_counter_grid2">	
								<span class="fa fa-users" style="color:black"></span>
								<p class="counter">105</p>
								<p class="para-text-w3ls">Pengguna</p>
							</div>
							<div class="col-sm-3 col-6 w3layouts_stats_left w3_counter_grid1 mt-md-0 mt-4">
								<span class="fa fa-dollar" style="color:black"></span>
								<p class="counter">0</p>
								<p class="para-text-w3ls">Kerjaya</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 text-lg-left text-stat text-center mt-lg-0 mt-4">
						<h4 class=""> Bilangan Statistik Terkini berdasarkan jumlah yang berdaftar di e-Graduan setakat <strong>01/12/2019</strong></h4>
					</div>
				</div>
			</div>
			</div>
		</div>
	</section>
	<!-- //stats section -->

	<br>

	<!-- /projects -->
        <div class="container p-md-5">
            <h3 class="tittle-w3ls text-left mb-5 editContent" data-selector=".editContent" style=""><span class="pink editContent" data-selector=".editContent" style="outline: none; cursor: inherit;">Sektor Pekerjaan</span> Di Kelantan</h3>
            <div class="row news-grids mt-md-5 mt-4 text-center">

                <div class="col-md-4 gal-img">
                    <a href="#gal1"><img src="../assets/img/perkhidmatan.jpg" alt="w3pvt" class="img-fluid" data-selector="img" style=""></a>
                    <div class="gal-info">
                        <h5 class="editContent" data-selector=".editContent" style="outline: none; cursor: inherit;">Sektor Perkhidmatan<span class="decription editContent" data-selector=".editContent" style="outline: none; cursor: inherit;">Website</span></h5>
                    </div>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="#gal2"><img src="../assets/img/perikanan.jpg" alt="w3pvt" class="img-fluid" data-selector="img" style=""></a>
                    <div class="gal-info">
                        <h5 class="editContent" data-selector=".editContent" style="">Sektor Perikanan<span class="decription editContent" data-selector=".editContent" style="outline: none; cursor: inherit;">Website</span></h5>
                    </div>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="#gal3"><img src="../assets/img/pertanian.jpg" alt="w3pvt" class="img-fluid" data-selector="img" style="outline: none; cursor: inherit;"></a>
                    <div class="gal-info">
                        <h5 class="editContent" data-selector=".editContent" style="outline: none; cursor: inherit;">Sektor Pertanian<span class="decription editContent" data-selector=".editContent" style="outline: none; cursor: inherit;">Website</span></h5>
                    </div>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="#gal4"><img src="../assets/img/ict.jpg" alt="w3pvt" class="img-fluid" data-selector="img" style="outline: none; cursor: inherit;"></a>
                    <div class="gal-info">
                        <h5 class="editContent" data-selector=".editContent" style="outline: none; cursor: inherit;">Sektor Komputer dan IT<span class="decription editContent" data-selector=".editContent" style="outline: none; cursor: inherit;">Website</span></h5>
                    </div>
                </div>

                <div class="col-md-4 gal-img">
                    <a href="#gal5"><img src="../assets/img/perindustrian.png" alt="w3pvt" class="img-fluid" data-selector="img" style=""></a>
                    <div class="gal-info">
                        <h5 class="editContent" data-selector=".editContent" style="">Sektor Perindustrian<span class="decription editContent" data-selector=".editContent" style="">Website</span></h5>
                    </div>
                </div>
                <div class="col-md-4 gal-img">
                    <a href="#gal6"><img src="../assets/img/pelancongan.jpg" alt="w3pvt" class="img-fluid" data-selector="img" style="outline: none; cursor: inherit;"></a>
                    <div class="gal-info">
                        <h5 class="editContent" data-selector=".editContent" style="outline: none; cursor: inherit;">Sektor Pelancongan<span class="decription editContent" data-selector=".editContent" style="outline: none; cursor: inherit;">Website</span></h5>
                    </div>
                </div>

            </div>

            <!-- popup-->
            <div id="gal1" class="pop-overlay">
                <div class="popup">
                    <img src="../assets/img/perkhidmatan.jpg" alt="Popup Image" class="img-fluid" data-selector="img" style="outline: none; cursor: inherit;">
                    <h5 class="editContent" data-selector=".editContent" style="outline: none; cursor: inherit;">Sektor Perkhidmatan</h5>
                    <p class="mt-4">Sektor perkhidmatan dikenali juga sebagai sektor ekonomi tertiar atau sektor ekonomi peringkat ketiga.  Sektor  ekonomi ini tidak mengeluarkan barangan, sebaliknya membekalkan perkhidmatan kepada pengguna. Kini industri perkhidmatan negara tumbuh dan berkembang pesat sejajar dengan perkembangan pesat industri primer dan sekunder. Antara contoh sektor perkhidmatan seperti sektor pengangkutan dan perhubungan, kewangan dan insuran, hartanah, perkhidmatan permagaan, pelancongan, hotel dan restoran, sektor utiliti elektrik, air dan gas, sektor pembinaan infrastruktur, serta perkhidmatan kerajaan dan swasta. </p>
                    <p><strong>Petikan Ucapan: </strong>YB Datuk Seri Dr. Mujahid bin Yusof</p>
                    <a class="close" href="#gallery">×</a>
                </div>
            </div>
            <!-- //popup -->
            <!-- popup-->
            <div id="gal2" class="pop-overlay">
                <div class="popup">
                    <img src="../assets/img/perikanan.jpg" alt="Popup Image" class="img-fluid" data-selector="img" style="outline: none; cursor: inherit;">
                    <h5 class="editContent" data-selector=".editContent" style="outline: none; cursor: inherit;">Sektor Perikanan</h5>
                    <p class="mt-4">Industri perikanan Malaysia mempunyai perkembangan dinamik dan kompetitif, malah berpotensi untuk dimajukan terutama dalam menyumbang pendapatan eksport negara. Sektor pertanian memainkan peranan penting dalam pertumbuhan ekonomi negara. Kerajaan juga komited dalam meningkatkan pengeluaran ikan untuk makanan di samping menguruskan sumber perikanan secara mapan dengan memperkenalkan teknologi baru</p>
                    <p><strong>Petikan Ucapan: </strong>Ketua Pengarah LKIM, Jamaludin Othman </p>
                    <a class="close" href="#gallery">×</a>
                </div>
            </div>
            <!-- //popup -->
            <!-- popup-->
            <div id="gal3" class="pop-overlay">
                <div class="popup">
                    <img src="../assets/img/pertanian.jpg" alt="Popup Image" class="img-fluid" data-selector="img" style="outline: none; cursor: inherit;">
                    <h5 class="editContent" data-selector=".editContent" style="outline: none; cursor: inherit;">Sektor Pertanian</h5>
                    <p class="mt-4">Sektor pertanian telah memainkan peranan yang penting di dalam pembangunan sosial dan ekonomi di Malaysia.  Kerajaan pada masa sekarang memberi tumpuan yang lebih kepada sektor pertanian. Ini kerana aktiviti pertanian bukanlah lagi bersifat keperluan sara hidup diri malahan telah dapat memberi keuntungan kepada pengusahanya. Kini pertanian adalah satu perniagaan. Ia bertujuan untuk mentransformasikan negara Malaysia daripada sebuah negara perindustrian kepada sebuah negara pertanian. Kerajaan telah melakukan banyak perubahan untuk pembangunan di dalam bidang pertanian.</p>
                    <p><strong>Petikan Ucapan: </strong>Menteri Pertanian dan Industri Asas Tani, Salahuddin Ayub/p>
                    <a class="close" href="#gallery">×</a>
                </div>
            </div>
            <!-- //popup3 -->
            <!-- popup-->
            <div id="gal4" class="pop-overlay">
                <div class="popup">
                    <img src="../assets/img/ict.jpg" alt="Popup Image" class="img-fluid" data-selector="img" style="outline: none; cursor: inherit;">
                    <h5 class="editContent" data-selector=".editContent" style="outline: none; cursor: inherit;">Sektor Komputer dan IT</h5>
                    <p class="mt-4">Sektor Komputer dan IT melibatkan perkembangan teknologi termasuk kecerdasan buatan (AI), perkomputeran awan (cloud) dan data raya menyaksikan syarikat dan tempat kerja mahukan profesional IT termasuk penganalisis sistem, pembangun perisian, pengaturcaraan aplikasi, pentadbir pangkalan data dan jurutera rangkaian untuk terus membangun seiring dengan peredaran zaman.</p>
                    <p><strong>Sumber: </strong>https://www.bharian.com.my/bisnes/lain-lain/2018/12/508332/bidang-kejuruteraan-ict-dan-perniagaan-antara-paling-dikehendaki</p>
                    <a class="close" href="#gallery">×</a>
                </div>
            </div>
            <!-- //popup -->
            <!-- popup-->
            <div id="gal5" class="pop-overlay">
                <div class="popup">
                    <img src="../assets/img/perindustrian.png" alt="Popup Image" class="img-fluid" data-selector="img" style="outline: none; cursor: inherit;">
                    <h5 class="editContent" data-selector=".editContent" style="outline: none; cursor: inherit;">Sektor Perindustrian</h5>
                    <p class="mt-4">Sektor Perindustrian di negara ini dijalankan sebagai usaha untuk membangunkan ekonomi negara. Sektor Perindustrian membuka banyak peluang pekerjaan kepada penduduk tempatan terutama penduduk yang berkemahiran tinggi bagi mengukuhkan ekonomi negara. </p>
                    <p><strong>Sumber: </strong>http://diversitimalaysia.blogspot.com/p/perindustrian-di-malaysia.html</p>
                    <a class="close" href="#gallery">×</a>
                </div>
            </div>
            <!-- //popup -->
            <!-- popup-->
            <div id="gal6" class="pop-overlay">
                <div class="popup">
                    <img src="../assets/img/pelancongan.jpg" alt="Popup Image" class="img-fluid" data-selector="img" style="outline: none; cursor: inherit;">
                    <h5 class="editContent" data-selector=".editContent" style="outline: none; cursor: inherit;">Sektor Pelancongan</h5>
                    <p class="mt-4">Sektor Pelancongan telah dikenalpasti sebagai pendorong utama di Malaysia. Sektor pelancongan telah mengambil peranan yang lebih besar dalam merangsangkan ekonomi dalam tempoh Rancangan Malaysia Kelapan. Teras keseluruhan dasar dalam sektor pelancongan ialah untuk mencapai pertumbuhan pelancongan yang mampan bagi merealisasikan potensi pekerjaan yang banyak dan kesan penjanaan pendapatan di tahap negara, negeri dan kawasan tempatan. </p>
                    <p><strong>Sumber: </strong>https://tourismahmadzamane.wordpress.com/</p>
                    <a class="close" href="#gallery">×</a>
                </div>
            </div>
            <!-- //popup -->

        </div>
    <!-- //projects -->
    
    <!-- logo section -->
    <section class="banner_bottom py">
		<div class="container p-md-5">

			<div class="row news-grids mt-md-5 mt-4 text-center">
				<h3 class="tittle-w3ls text-center mb-5 editContent" data-selector=".editContent"><span class="pink editContent" data-selector=".editContent" style="outline: none; cursor: inherit;">Rakan</span> Rasmi</h3>
            </div>    

            <div class="row">

                <div class="col">
                    <a href="#"><img src="../assets/img/logosuk.png" width="190" height="160" alt="Logo SUK" /></a>

                    &nbsp;&nbsp;&nbsp;
                    
                    <a href="#"><img src="../assets/img/jpa.png" width="145" height="160" alt="Logo JPA" href="#" /></a>

                    &nbsp;&nbsp;&nbsp;
                    
                    <a href="#"><img src="../assets/img/umk.png" width="145" height="200" alt="Logo UMK" href="#" /></a>
                </div>

            </div>

		</div>
	</section>
    <!-- //logo section -->

    <!--//Cadangan -->
    <section class="subscribe-text py-5" id="subscribe">
        <div class="container p-md-5">
        <div class="row news-grids mt-md-5 mt-4 text-center">
            <h3 class="tittle-w3ls text-center mb-3 editContent" data-selector=".editContent"><span class="pink editContent" data-selector=".editContent" style="outline: none; cursor: inherit;">Cadangan</span> Penambahbaikan</h3>
            <div class="col-lg-5 offset-lg-1">
                <form action="#" method="post">
                    <input type="text" name="cadangan" placeholder="Cadangan Anda..." required="">
                    <button class="btn1"><span class="fa fa-paper-plane" aria-hidden="true"></span></button>
                    <div class="clearfix"> </div>
                </form>
                <p class="mt-3"><strong>Terima Kasih</strong> Kami akan cuba sedaya mempertingkatkan mutu perkhidmatan kami.</p>
            </div>
        </div>
        </div>
    </section>
    <!--//Cadangan -->

    <!--/team -->
    <!--section class="about">
        <div class="container p-md-5">
		<div class="row news-grids mt-md-5 mt-4 text-center">
			<h3 class="tittle-w3ls text-center mb-3 editContent" data-selector=".editContent"><span class="pink editContent" data-selector=".editContent" style="outline: none; cursor: inherit;">Kumpulan</span> Eksklusif</h3>

            <div class="row mt-lg-5 mt-4">
                <div class="col-md-4 team-gd text-center">
                    <div class="team-img mb-4">
                        <a href="#"><img src="../assets/img/azhar.JPG" height="300" width="300" class="img-fluid" alt="Azhar"></a>
                    </div>
                    <div class="team-info">
                        <span class="sub-tittle-team">Founder</span>
                        <h3><a href="#"> Azhar Mustapha</a></h3>
                        <p>Lorem Ipsum has been the industry's standard since the 1500s.</p>
                        <div class="icon-social team mt-4">
                            <a href="#" class="button-footr">
                                <span class="fa fa-facebook"></span>
                            </a>
                            <a href="#" class="button-footr">
                                <span class="fa fa-linkedin"></span>
                            </a>

                            <a href="#" class="button-footr">
                                <span class="fa fa-github"></span>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="col-md-4 team-gd second text-center">
                    <div class="team-img mb-4">
                        <a href="#"><img src="../assets/img/ashraf.JPG" height="300" width="300" class="img-fluid" alt="Ashraf"></a>
					</div>
					
                    <div class="team-info">
                        <span class="sub-tittle-team">Co-Founder</span>
                        <h3><a href="#"> WM Ashraf</a></h3>
                        <p>Lorem Ipsum has been the industry's standard since the 1500s.</p>
                        <div class="icon-social team mt-4">
                            <a href="#" class="button-footr">
                                <span class="fa fa-facebook"></span>
                            </a>
                            <a href="#" class="button-footr">
                                <span class="fa fa-linkedin"></span>
                            </a>

                            <a href="#" class="button-footr">
                                <span class="fa fa-github"></span>
                            </a>

                        </div>
                    </div>
				</div>
				
                <div class="col-md-4 team-gd text-center">
                    <div class="team-img mb-4">
                        <a href="#"><img src="../assets/img/ismail.JPG" height="300" width="300" class="img-fluid" alt="Ismail"></a>
                    </div>
                    <div class="team-info">
                        <span class="sub-tittle-team">Co-Founder</span>
                        <h3><a href="#"> Ismail</a></h3>
                        <p>Lorem Ipsum has been the industry's standard since the 1500s.</p>
                        <div class="icon-social team mt-4">
                            <a href="#" class="button-footr">
                                <span class="fa fa-facebook"></span>
                            </a>
                            <a href="#" class="button-footr">
                                <span class="fa fa-linkedin"></span>
                            </a>

                            <a href="#" class="button-footr">
                                <span class="fa fa-github"></span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
		</div>
        </div>
    <//section>
    <!--//team-->

  </body>
</html>

<!-- footer -->
<footer class="footerv4-w3ls py-sm-5 py-4" id="footer">
	<div class="footerv4-top">
		<div class="container">
		
			<!-- footer logo -->
			<div class="footer-logo text-center">
				<a href="welcome"><span class="fa fa-graduation-cap" aria-hidden="true"></span>  e-Graduan </a>
			</div>
			<!-- //footer logo -->
			
			<!-- footer nav links -->
			<div class="d-flex align-items-center footer-nav-wthree justify-content-center my-3">
				<ul class="footer-link">
					<li>
						<a href="welcome">Utama</a>
					</li>
					<li>
						<a href="perkhidmatan">Kronologi</a>
                    </li>
					<li>
						<a href="login">Log Masuk</a>
					</li>
				</ul>
			</div>
			<!-- //footer nav links -->
			
			<!-- move top icon -->
			<div class="text-center">
				<a href="welcome" class="move-top text-center"><span class="fa fa-angle-double-up" aria-hidden="true"></span></a>
			</div>
			<!-- //move top icon -->
			
            <!-- Copyright -->
            <div class="copy-right text-center"><p>© 2019 e-Graduan V1.0 All rights reserved | Design by <a href="#"> Azhar Mustapha</a></p></div>
            <!-- Copyright -->
			
		</div>
	</div>
</footer>
<!-- //footer -->
