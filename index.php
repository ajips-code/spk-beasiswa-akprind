<?php
include "includes/koneksi.php";
include_once 'header.php';
?>
		<div class="row">
		  <br><br><br>

              <div class="col-md-8 col-sm-8 col-xs-12">
               <div id="carousel-example" class="carousel slide slide-bdr" data-ride="carousel" >
                   
                    <div class="carousel-inner">
                        <div class="item active">

                            <img src="images/carousel/1.jpg" alt="" />
                           
                        </div>
                        <div class="item">
                            <img src="images/carousel/2.jpg" alt="" />
                          
                        </div>
                        <div class="item">
                            <img src="images/carousel/3.jpg" alt="" />
                           
                        </div>
                        <div class="item">
                            <img src="images/carousel/4.jpg" alt="" />
                          
                        </div>
                    </div>
                    <!--INDICATORS-->
                     <ol class="carousel-indicators">
                        <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example" data-slide-to="1"></li>
                        <li data-target="#carousel-example" data-slide-to="2"></li>
                        <li data-target="#carousel-example" data-slide-to="3"></li>
                    </ol>
                    <!--PREVIUS-NEXT BUTTONS-->
                     <a class="left carousel-control" href="#carousel-example" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
</div>
 <!--koding carousel-->
		  <br/>
		<div class="row">

<div class="col-md-4 col-sm-4 col-xs-12">
                      <div class="alert alert-success back-widget-set text-center">
                       <?php $r = mysqli_num_rows(mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM bobot_data_kriteria")); ?>
                            <i class="fa fa-bars fa-3x"></i>
                            <h3><?php echo $r; ?> Kriteria</h3>
                        </div>
                    </div>
<div class="col-md-4 col-sm-4 col-xs-12">
                      <div class="alert alert-success back-widget-set text-center">
                       <?php $r1 = mysqli_num_rows(mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM alternatif")); ?>
                            <i class="fa fa-users fa-3x"></i>
                            <h3><?php echo $r1; ?> Data Alternatif</h3>
                        </div>
                    </div>
<div class="col-md-4 col-sm-4 col-xs-12">
                      <div class="alert alert-success back-widget-set text-center">
                      <?php $r2 = mysqli_num_rows(mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM ranging WHERE nilai BETWEEN 0.86 and 1")); ?>
                            <i class="fa fa-briefcase fa-3x"></i>
                            <h3><?php echo $r2; ?> Alternatif Terbaik </h3>
                        </div>
					</div>   

		</div>
		

</div>
<br>
<?php include_once 'footer.php'; ?>