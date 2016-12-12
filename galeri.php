<head>
    <title>Galeri Foto | DiklatPro LPPM</title>
</head>

<body>
    <?php include "header.php";?>
        <div class="row">
            <div class="col-md-12"> <img src="images/alumni.jpg"> </div>
        </div>
        <div class="container">
            <div class="row">
                <h3>Galeri Foto</h3>
                <style>
                    .hide-bullets {
                        list-style: none;
                        margin-left: -40px;
                        margin-top: 20px;
                    }
                    
                    .thumbnail {
                        padding: 0;
                    }
                    
                    .carousel-inner>.item>img,
                    .carousel-inner>.item>a>img {
                        width: 100%;
                    }
                    
                    .col-sm-3 a {
                        border: 1px solid transparent;
                        border-radius: 0;
                        transition: all 3s ease;
                    }
                    
                    .col-sm-3 a:hover {
                        border: 1px solid #ff4647;
                        border-radius: 100% 60% / 30% 10%;
                        background: linear-gradient(rgba(56, 123, 131, 0.7), rgba(56, 123, 131, 0.7));
                    }
                </style>
                <script>
                    jQuery(document).ready(function ($) {
                        $('#myCarousel').carousel({
                            interval: 3000
                        });
                        //Handles the carousel thumbnails
                        $('[id^=carousel-selector-]').click(function () {
                            var id_selector = $(this).attr("id");
                            try {
                                var id = /-(\d+)$/.exec(id_selector)[1];
                                console.log(id_selector, id);
                                jQuery('#myCarousel').carousel(parseInt(id));
                            }
                            catch (e) {
                                console.log('Regex failed!', e);
                            }
                        });
                        // When the carousel slides, auto update the text
                        $('#myCarousel').on('slid.bs.carousel', function (e) {
                            var id = $('.item.active').data('slide-number');
                            $('#carousel-text').html($('#slide-content-' + id).html());
                        });
                    });
                </script>
                <?php $foto1="<img src='images/gallery1.jpg'>";
                $foto2="<img src='images/gallery2.jpg'>";
                $foto3="<img src='images/gallery3.jpg'>";
                $foto4="<img src='images/gallery4.jpg'>";
                $foto5="<img src='images/gallery5.jpg'>";
                $foto6="<img src='images/gallery6.jpg'>";
                $foto7="<img src='images/gallery7.jpg'>";
                ?>
                    <div id="main_area">
                        <!-- Slider -->
                        <div class="row">
                            <div class="col-sm-6" id="slider-thumbs">
                                <!-- Bottom switcher of slider -->
                                <ul class="hide-bullets">
                                    <li class="col-sm-3">
                                        <a class="thumbnail" id="carousel-selector-1"><?php echo $foto1;?></a>
                                    </li>
                                    <li class="col-sm-3">
                                        <a class="thumbnail" id="carousel-selector-2"><?php echo $foto2;?></a>
                                    </li>
                                    <li class="col-sm-3">
                                        <a class="thumbnail" id="carousel-selector-3"><?php echo $foto3;?></a>
                                    </li>
                                    <li class="col-sm-3">
                                        <a class="thumbnail" id="carousel-selector-4"><?php echo $foto4;?></a>
                                    </li>
                                    <li class="col-sm-3">
                                        <a class="thumbnail" id="carousel-selector-5"><?php echo $foto5;?></a>
                                    </li>
                                    <li class="col-sm-3">
                                        <a class="thumbnail" id="carousel-selector-6"><?php echo $foto6;?></a>
                                    </li>
                                    <li class="col-sm-3">
                                        <a class="thumbnail" id="carousel-selector-7"><?php echo $foto7;?></a>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <div class="col-xs-12" id="slider">
                                    <!-- Top part of the slider -->
                                    <div class="row">
                                        <div class="col-sm-12" id="carousel-bounding-box">
                                            <div class="carousel slide" id="myCarousel">
                                                <!-- Carousel items -->
                                                <div class="carousel-inner">
                                                    <div class="active item" data-slide-number="7"> <?php echo $foto7;?></div>
                                                    
                                        
                                                    <div class="item" data-slide-number="1"> <?php echo $foto1;?></div>
                                                     <div class="item" data-slide-number="2"> <?php echo $foto2;?></div>
                                                     <div class="item" data-slide-number="3"> <?php echo $foto3;?></div>
                                                     <div class="item" data-slide-number="4"> <?php echo $foto4;?></div>
                                                     <div class="item" data-slide-number="5"> <?php echo $foto5;?></div>
                                                     <div class="item" data-slide-number="6"> <?php echo $foto6;?></div>
                                                    
                                                   
                                                </div>
                                                <!-- Carousel nav -->
                                                <!--<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>--></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/Slider-->
                        </div>
                    </div>
            </div>
        </div>
</body>