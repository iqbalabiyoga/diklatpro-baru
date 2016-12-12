<style>
    body#slideberita {
        padding-top: 50px;
    }
    /*#####################
Additional Styles (required)
######################*/
    
    .carousel-indicators {
        bottom: -40px;
        left: 0;
        width: 100%;
        background: rgba(255, 255, 255, .0);
        padding: 6px 0px;
        margin-left: 0;
    }
    
    .carousel-indicators li {
        width: 12px;
        height: 12px;
        background: #fff;
        border-color: #fff;
    }
    
    .carousel-indicators .active {
        width: 14px;
        height: 14px;
        background: #428bca;
        border-color: #428bca;
    }
    
    .carousel-inner .thumbnail {
        margin-bottom: 0;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
    }
    
    .carousel-inner .caption {
        background: #ddd;
        padding: 10px;
    }
</style>
<script>
    $(function () {
        $('#myCarousel').carousel({
            interval: 2000
        });
    });
</script>

<body id="slideberita">
    <h3>Berita <span>Terbaru</span></h3>
    <br>
    <link href="css/carousel.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Carousel-->
    <?php 
                     include 'fetch_berita.php';?>
        <div id="myCarousel" class="carousel slide">
            <div class="carousel-inner">
                <?php for($x=0; $x<4;$x++) { 
                                $title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
                                $link = $feed[$x]['link'];
                                $description = substr(rip_tags($feed[$x]['desc']), 0, 150)."...";
                                $image = $feed[$x]['image'];
                                $image = preg_replace("/(http:\/\/www.info.diklatprofesi.com\/wp-content\/uploads\/)([0-9]+\/[0-9]+)\/([a-zA-Z0-9_-]+)-[0-9]+x[0-9]+\.(jpg|png|jpeg|bmp)/","$1$2/$3.$4", $feed[$x]['image']);
                                $date = date('l F d, Y', strtotime($feed[$x]['date']));
                            ?>
                    <div class="item <?php if($x==0) echo " active "; ?>"> <a href="<?php echo $link;?>">
                                         <img width="400px" src="<?php echo $image;?>">
                                        </a>
                        <div class="caption">
                            <h3><?php echo $title; ?></h3> <em><?php echo $date;?></em>
                            <br>
                            <br>
                            <p>
                                <?php echo $description; ?> <strong> <a href="<?php echo $link;?>">  Selengkapnya</a></strong> </div>
                    </div>
                    <?php } ?>
            </div>
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
        </div>
        <!-- End Carousel -->
        <br>
        <br>
        <center> <a class="btn btn-primary" href="http://info.diklatprofesi.com">Lihat Berita Lainnya</a> </center>
</body>