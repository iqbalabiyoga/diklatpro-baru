<?php include "import-style.php";?>
    <style>
        body#nav {
            padding-top: 65px !important;
        }
    </style>

    <body id="nav">
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav pull-right">
                    <li class="col-md-4">
                        <a href="<?php echo PROJECT_ROOT;?>index.php"><img width=35% src="images/logo-diklatpro.png"></a>
                    </li>
                    <li><a href="<?php echo PROJECT_ROOT;?>home">Serambi</a></li>
                    <li><a href="<?php echo PROJECT_ROOT;?>tentang-kami">Tentang Kami</a></li>
                    <li><a href="<?php echo PROJECT_ROOT;?>alumni">Alumni Kegiatan</a></li>
                    <li><a href="http://info.diklatprofesi.com">Artikel</a></li>
                    <li class="col-md-2"></li>
                    <li style="
    margin-top: 15px" ;><strong><?php
                    date_default_timezone_set("Asia/Jakarta");
                    $tanggal=date("d-M-Y");
                    $day = date('D', strtotime($tanggal));
                    $month = date('M', strtotime($tanggal));
$dayList = array(
	'Sun' => 'Minggu',
	'Mon' => 'Senin',
	'Tue' => 'Selasa',
	'Wed' => 'Rabu',
	'Thu' => 'Kamis',
	'Fri' => 'Jumat',
	'Sat' => 'Sabtu'
);
$monthList = array(
    'Jan' => 'Januari',
    'Feb' => 'Februari',
    'Mar' => 'Maret',
    'Apr' => 'April',
    'May' => 'Mei',
    'Jun' => 'Juni',
    'Jul' => 'Juli',
    'Aug' => 'Agustus',
    'Sep' => 'September',
    'Oct' => 'Oktober',
    'Nov' => 'November',
    'Dec' => 'Desember'
);
echo $dayList[$day].", ".date("d ").$monthList[$month].date(" Y");
                    ?></strong></li>
                </ul>
            </div>
        </div>
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="
    margin-top: 55px;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div class="collapse navbar-collapse">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-8">
                        <ul class="nav navbar-nav">
                            <style>
                                .show-on-hover {
                                    margin-top: 7px;
                                }
                                
                                .show-on-hover:hover > ul.dropdown-menu {
                                    display: block;
                                }
                            </style>
                            <li>
                                <div class="show-on-hover"> <a href="<?php echo PROJECT_ROOT;?>index.php#jadwalberita" class="btn btn-primary" role="button"> Agenda </a> </div>
                            </li>
                            <li>
                                <div class="show-on-hover">
                                    <button class="btn btn-primary" data-toggle="dropdown"> Training Profesi <span class="caret"></span> </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="<?php echo PROJECT_ROOT;?>training/haccp">HACCP</a></li>
                                        <li><a href="<?php echo PROJECT_ROOT;?>training/iso-22000">ISO 22000</a></li>
                                        <li><a href="<?php echo PROJECT_ROOT;?>training/manajemen-halal">Manajemen Kehalalan</a></li>
                                        <li><a href="<?php echo PROJECT_ROOT;?>training/pertanian-organik">Pertanian Organik</a></li>
                                        <li><a href="<?php echo PROJECT_ROOT;?>training/rspo-ispo">RSPO ISPO</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="show-on-hover">
                                    <button class="btn btn-primary" data-toggle="dropdown"> Kerja Sama <span class="caret"></span> </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="<?php echo PROJECT_ROOT;?>kerjasama/in-house-training">In-House Training</a></li>
                                        <li><a href="<?php echo PROJECT_ROOT;?>kerjasama/konsultasi">Konsultasi</a></li>
                                        <li><a href="<?php echo PROJECT_ROOT;?>kerjasama/pendampingan-ukm">Pendampingan UKM/Masyrakat</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="show-on-hover">
                                    <button class="btn btn-primary" data-toggle="dropdown"> Berita dan Galeri <span class="caret"></span> </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="http://info.diklatprofesi.com">Berita dan Kegiatan</a></li>
                                        <li><a href="<?php echo PROJECT_ROOT;?>galeri">Foto</a></li>
                                        <li><a href="<?php echo PROJECT_ROOT;?>galeri">Video</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="show-on-hover">
                                    <button class="btn btn-primary" data-toggle="dropdown"> Pendaftaran <span class="caret"></span> </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="<?php echo PROJECT_ROOT;?>pendaftaran/training">Training</a></li>
                                        <li><a href="<?php echo PROJECT_ROOT;?>pendaftaran/konsultasi">Konsultasi</a></li>
                                        <li><a href="<?php echo PROJECT_ROOT;?>pendaftaran/pendampingan-masyarakat">Pendampingan</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-3 col-md-3 pull-right">
                        <script>
                            (function () {
                                var cx = '006030336781520816903:w-igtwu8ob0';
                                var gcse = document.createElement('script');
                                gcse.type = 'text/javascript';
                                gcse.async = true;
                                gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
                                var s = document.getElementsByTagName('script')[0];
                                s.parentNode.insertBefore(gcse, s);
                            })();
                        </script>
                        <gcse:search></gcse:search>
                    </div>
                </div>
            </div>
        </div>
    </body>