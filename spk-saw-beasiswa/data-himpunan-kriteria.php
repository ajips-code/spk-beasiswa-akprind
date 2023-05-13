<?php
include_once 'header.php';
?>
	<div class="row">
		<div class="col-md-6 text-left">
			<strong style="font-size:18pt;"><span class="fa fa-user"></span> Data Alternatif</strong>
		</div>
		<div class="col-md-6 text-right">
            <button type="submit" name="hapus-contengan" class="btn btn-danger btn-sm"><span class="fa fa-close"></span> Hapus Contengan</button>
			<button type="button" onclick="location.href='alternatif-input.php'" class="btn btn-primary btn-sm"><span class="fa fa-clone"></span> Tambah Data</button>
		</div>
	</div>
	<br/>

<div class="panel-body" >
                       
                               
  <!-- Nav tabs -->
  <ul class="nav nav-tabs"   role="tablist">
    <li role="presentation" class="active" ><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Data alternatif</a></li>
    <li role="presentation" ><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Nilai Kriteria</a></li>
    <li role="presentation"  ><a href="#MatrikAwal" aria-controls="MatrikAwal" role="tab" data-toggle="tab">Matrik Awal</a></li>
    <li role="presentation" ><a href="#MatrikNormalisasi" aria-controls="profile" role="tab" data-toggle="tab">Matrik Normalisasi</a></li>
    <li role="presentation"  ><a href="#PerengkinganKategori" aria-controls="home" role="tab" data-toggle="tab">Perangkingan</a></li>
    <!--xx
    <li role="presentation" ><a href="#AlternatifTerbaik" aria-controls="profile" role="tab" data-toggle="tab">Alternatif Terbaik</a></li>
    xx -->
    </ul>

  <!-- Tab panes -->
  <div class="tab-content"><br>
    <!--data laptop -->
    <div role="tabpanel" class="tab-pane active" id="home">
    <div class="row">                
              <?php include 'proses/dataalternatif.php'; ?>
                </div></div>
     </div>
    
<!--Nilai Kriteria Laptop -->
    <div role="tabpanel" class="tab-pane" id="profile">
    <div class="row">
           <?php include 'proses/datakriteriaalternatif.php'; ?>
    </div>       
    </div>  

     <div role="tabpanel" class="tab-pane" id="MatrikAwal">
    <div class="row">
            <?php include 'proses/matrikawal.php'; ?>
    </div>       
    </div>  


 <div role="tabpanel" class="tab-pane" id="MatrikNormalisasi">
    <div class="row">
     <?php include 'proses/MatrikNormalisasi.php'; ?>
    </div>       
    </div>  

 <div role="tabpanel" class="tab-pane" id="PerengkinganKategori">
    <div class="row">
         <?php include 'proses/PerengkinganKategori.php'; ?>
    </div>       
    </div>  

 <div role="tabpanel" class="tab-pane" id="AlternatifTerbaik">
    <div class="row">
        <?php include 'proses/AlternatifTerbaik.php'; ?>
    </div>       
    </div>  

</div>		
<?php
include_once 'footer.php';
?>