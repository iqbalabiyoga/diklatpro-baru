<style>
    body {
        padding-top: 20px;
    }
    
    .btn-default {
        top: 25%;
        left: 25%;
        color: #999;
        background: #fffccc;
    }
</style>
<?php 
$fotobersama=array('1fotobersama1.jpg','1fotobersama2.jpg','1fotobersama3.jpg','1fotobersama4.jpg','1fotobersama5.jpg','1fotobersama6.jpg');
$inhouse=array('2inhouse1.jpg','2inhouse2.jpg','2inhouse3.jpg','2inhouse4.jpg','2inhouse5.jpg','2inhouse6.jpg');
$diskusi=array('3diskusi1.jpg','3diskusi2.jpg','3diskusi3.jpg','3diskusi4.jpg','3diskusi3.jpg','3diskusi4.jpg','3diskusi5.jpg','3diskusi6.jpg','3diskusi7.jpg','3diskusi8.jpg','3diskusi9.jpg');
$kunjungan=array('4kunjungan1.jpg','4kunjungan2.jpg','4kunjungan3.jpg');
?>

    <body>
        <?php include "header.php"; $i=-1; ?> <img src="images/alumni.jpg">
            <div class="container">
                <h3>Galeri Foto</h3>
                <div class="row">
                <h4 style="color: #d43d34;">
               Foto Bersama
            </h4>
                <?php while($i<(count($fotobersama)-1)){
                $i=$i+1;?>
                    <div class="col-md-4"> <img style="
    margin-bottom: 35px;
" width=263px src="foto/1%20FOTO%20BERSAMA/<?php echo $fotobersama[$i];?>"> </div>
                    <?php }?></div>
                <div class="row">
                        <h4 style="color: #d43d34;">
               In-House-Training
            </h4>
                        <?php  $i=-1; while($i<(count($inhouse)-1)){
                $i=$i+1;?>
                            <div class="col-md-4"> <img style="
    margin-bottom: 35px;
" width=263px src="foto/2%20INHOUSE%20TRAINING/<?php echo $inhouse[$i];?>"> </div>
                    <?php }?></div>
                <div class="row">
                                <h4 style="color: #d43d34;">
               Diskusi dan Presentasi
            </h4>
                                <?php  $i=-1; while($i<(count($diskusi)-1)){
                $i=$i+1;?>
                                    <div class="col-md-4"> <img style="
    margin-bottom: 35px;
" width=263px src="foto/3%20DISKUSI%20DAN%20PRESENTASI/<?php echo $diskusi[$i];?>"> </div>
                    <?php }?></div>
                <div class="row">
                                        <h4 style="color: #d43d34;">
Kunjungan Lapang            </h4>
                                        <?php  $i=-1; while($i<(count($kunjungan)-1)){
                $i=$i+1;?>
                                            <div class="col-md-4"> <img style="
    margin-bottom: 35px;
" width=270px src="foto/4%20KUNJUNGAN%20LAPANG/<?php echo $kunjungan[$i];?>"> </div>
                    <?php }?></div>
                
                                                <h1> Click Me </h1>
                                                <!-- Large modal -->
                                                <button class="btn btn-default" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>
                                                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                                                <!-- Wrapper for slides -->
                                                                <div class="carousel-inner">
                                                                    <div class="item active"> <img class="img-responsive" src="http://placehold.it/1200x600/555/000&text=One" alt="...">
                                                                        <div class="carousel-caption"> One Image </div>
                                                                    </div>
                                                                    <div class="item"> <img class="img-responsive" src="http://placehold.it/1200x600/fffccc/000&text=Two" alt="...">
                                                                        <div class="carousel-caption"> Another Image </div>
                                                                    </div>
                                                                    <div class="item"> <img class="img-responsive" src="http://placehold.it/1200x600/fcf00c/000&text=Three" alt="...">
                                                                        <div class="carousel-caption"> Another Image </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Controls -->
                                                                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a>
                                                                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
            </div>
    </body>