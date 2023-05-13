<?php 
include "includes/koneksi.php";
include_once 'header.php';	
?>
		<div class="row">
<!--		  <div class="col-xs-12 col-sm-12 col-md-2">
		  <?php
//			include_once 'sidebar.php';
			?>
		  </div>-->
		  <div class="col-xs-12 col-sm-12 col-md-12">
		  <ol class="breadcrumb">
			  <li><a href="index.php"><span class="fa fa-home"></span> Beranda</a></li>
			  <li><a href="data-himpunan-kriteria.php"><span class="fa fa-book"></span> Data Himpunan Kriteria</a></li>
			  <li class="active"><span class="fa fa-clone"></span> Tambah Data</li>
			</ol>
		  	<p style="margin-bottom:10px;">
<strong style="font-size:18pt;"><span class="fa fa-edit"></span> Input Himpunan Kriteria</strong>
		  	</p>
		  	<div class="panel panel-default">
		<div class="panel-body">
 <?php
 if(isset($_POST['simpan'])){
         $nisn = htmlspecialchars(mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['nisn']));
         $nama_lengkap = htmlspecialchars(mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['nama_lengkap']));
         $C1 = htmlspecialchars(mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['C1']));
         $C2 = htmlspecialchars(mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['C2']));
         $C3 = htmlspecialchars(mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['C3']));
         $C4 = htmlspecialchars(mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['C4']));
         $C5 = htmlspecialchars(mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['C5']));
		 $C6 = htmlspecialchars(mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['C6']));

$c = $C1; // C1 inputan Nilai UN
$d = $C2;
$e = $C3;
$f = $C4;
$g = $C5;
$h = $C6;

//Nilai UN
//kondisi rendah
if ((40.00 <= $c ) && ( $c <= 59.99 )) {
  $hasilc1 = (59.99-$c)/59.99;
  $hasilc1;
}
//kondisi sedang
if ((60.00 <= $c ) && ( $c <= 69.00 )) {
  $hasilc2 = ($c-60.00)/60.00;
    $hasilc2;

}
if ((70.00 <= $c ) && ( $c <= 79.00 )) {
   $hasilc3 = (79.00-$c)/69.00;
    $hasilc3;

}
//kondisi tinggi

if ((79.01 <= $c ) && ( $c <= 84.99 )) {
   $hasilc4 = ($c-79.01)/70.00;
    $hasilc4;

}

//kondisi tinggi sekali

if ((85.00 <= $c ) && ( $c <= 97.99 )) {
   $hasilc5 = ($c-85.00)/70.00;
    $hasilc5;

}

$nilaic = max(($hasilc1),($hasilc2),($hasilc3),($hasilc4),($hasilc5));


//Nilai US
//kondisi rendah
if ((40.00 <= $d ) && ( $d <= 59.99 )) {
  $hasild1 = (59.99-$d)/59.99;
  $hasild1;
}
//kondisi sedang
if ((60.00 <= $d ) && ( $d <= 69.00 )) {
  $hasild2 = ($d-60.00)/60.00;
    $hasild2;

}
if ((70.00 <= $d ) && ( $d <= 79.00 )) {
   $hasild3 = (79.00-$d)/69.00;
    $hasild3;

}
//kondisi tinggi

if ((79.01 <= $d ) && ( $d <= 84.99 )) {
   $hasild4 = ($d-79.01)/70.00;
    $hasild4;

}

//kondisi tinggi sekali

if ((85.00 <= $d ) && ( $d <= 97.99 )) {
   $hasild5 = ($d-85.00)/70.00;
    $hasild5;

}

$nilaid = max(($hasild1),($hasild2),($hasild3),($hasild4),($hasild5));

//Zonasi
//kondisi dekat
if ((50 <= $e ) && ( $e <= 1500 )) {
  $hasile1 = (1500-$e)/1000;
  $hasile1;
}
//kondisi sedang
if ((2000 <= $e ) && ( $e <= 3000 )) {
  $hasile2 = ($e-2000)/1500;
    $hasile2;

}
if ((3000 <= $e ) && ( $e <= 5000 )) {
   $hasile3 = (5000-$e)/2000;
    $hasile3;

}
//kondisi jauh

if ((5001 <= $e ) && ( $e <= 25000 )) {
   $hasile4 = ($e-5001)/3000;
    $hasile4;

}

$nilaif = max (($hasile1),($hasile2),($hasile3),($hasile4));



//UMUR
//kondisi rendah
if ((14 <= $e ) && ( $e <= 15 )) {
  $hasile1 = (15-$e)/14;
  $hasile1;
}
//kondisi sedang
if ((15 <= $e ) && ( $e <= 16 )) {
   $hasile2 = (16-$e)/14;
    $hasile2;

}
//kondisi tinggi
if ((15 <= $e ) && ( $e <= 19 )) {
  $hasile3 = ($e-19)/15;
    $hasile3;

}

$nilaie = max(($hasile1),($hasile2),($hasile3));


//P-AKADEMIK
//kondisi rendah
if ((1 <= $g ) && ( $g <= 1 )) {
  $hasilg1 = (1-$g)/1;
  $hasilg1;
}
//kondisi sedang
if ((2 <= $g ) && ( $g <= 2 )) {
  $hasilg2 = ($g-2)/2;
    $hasilg2;

}
if ((3 <= $g ) && ( $g <= 3 )) {
   $hasilg3 = (3-$g)/3;
    $hasilg3;

}
//kondisi tinggi

if ((4 <= $g ) && ( $g <= 4 )) {
   $hasilg4 = ($g-4)/4;
    $hasilg4;

}
//kondisi tinggi sekali
if ((5 <= $g ) && ( $g <= 5 )) {
   $hasilg5 = ($g-5)/5;
    $hasilg5;

}
$nilaig = max(($hasilg1),($hasilg2),($hasilg3),($hasilg4),($hasilg5));

//P-Non Akademik
//kondisi rendah
if ((1 <= $h ) && ( $h <= 1 )) {
  $hasilh1 = (1-$h)/1;
  $hasilh1;
}
//kondisi sedang
if ((2 <= $h ) && ( $h <= 2 )) {
  $hasilh2 = ($h-2)/2;
    $hasilh2;

}
if ((3 <= $h ) && ( $h <= 3 )) {
   $hasilh3 = (3-$h)/3;
    $hasilh3;

}
//kondisi tinggi

if ((4 <= $h ) && ( $h <= 3 )) {
   $hasilh4 = ($h-4)/4;
    $hasilh4;

}
//kondisi tinggi sekali
if ((5 <= $h ) && ( $h <= 5 )) {
   $hasilh5 = ($h-5)/5;
    $hasilh5;

}
$nilaih = max(($hasilh1),($hasilh2),($hasilh3),($hasilh4),($hasilh5));

$cek = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM kriteria WHERE nisn='$nisn' AND nama_lengkap='$nama_lengkap'");
if(mysqli_num_rows($cek) == 0){	
$a=mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO kriteria(id_kr,nisn,nama_lengkap,C1,C2,C3,C4,C5,C6)VALUES('','$nisn','$nama_lengkap','$nilaic','$nilaid','$nilaie','$nilaif','$nilaig','$nilaih')");
if($a){
echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Berhasil Di Simpan.</div>';
echo "<meta http-equiv='refresh' content='2; url=input-kriteria.php'>";
						}else{
echo '<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Gagal Di simpan !</div>';
						}
				}else{
echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Cek Kembali Isian.., Data Sudah Ada,..!</div>';
				}
			}
			
//Proses edit
$id_siswa=$_GET['id_siswa'];
$sql="select * from calon_siswa where id_siswa='$id_siswa'";
$query=mysqli_query($GLOBALS["___mysqli_ston"], $sql);
$r=mysqli_fetch_array($query);
if(isset($_POST['Edit'])){

$nisn=$_POST['nisn'];
$nama_lengkap=ucwords(htmlentities($_POST['nama_lengkap']));
$tempat_lahir=$_POST['tempat_lahir'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$umur=$_POST['umur'];
$jk=$_POST['jk'];
$alamat=$_POST['alamat'];
$no_hp=$_POST['no_hp'];
$sekolah_asal=$_POST['sekolah_asal'];
$jarak_rumah=$_POST['jarak_rumah'];
$nilai_un=$_POST['nilai_un'];
$nilai_us=$_POST['nilai_us'];
$prestasi_akademik=$_POST['prestasi_akademik'];
$prestasi_nonakademik=$_POST['prestasi_nonakademik'];

$a=mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE calon_siswa SET nisn='$nisn',nama_lengkap='$nama_lengkap',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',umur='$umur',jk='$jk',alamat='$alamat',no_hp='$no_hp',sekolah_asal='$sekolah_asal',jarak_rumah='$jarak_rumah',nilai_un='$nilai_un',nilai_us='$nilai_us',prestasi_akademik='$prestasi_akademik',prestasi_nonakademik='$prestasi_nonakademik' WHERE id_siswa='$id_siswa'");
if($a){
echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Berhasil Di Simpan.</div>';
echo "<meta http-equiv='refresh' content='2; url=data-calon-siswa.php'>";
}else{
echo '<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Gagal Di Simpan !</div>';

}
}
?>
<form action="" method="post" enctype="multipart/form-data">
 <div class="row">


<div class="col-md-4">
<div class="form-group">
<label>Nama Calon Siswa</label>
              <?php
        $result = mysqli_query($GLOBALS["___mysqli_ston"], "select * from calon_siswa ");

        $jsArray = "var prdName = new Array();\n";
        echo '<select name="nama_lengkap" class="form-control" required="" data-errormessage-value-missing="pilih salah satu.." onchange="changeValue(this.value)">'; 
        echo '<option value=""> Silahkan Pilih..</option>';
        while ($row = mysqli_fetch_array($result)) {
        echo '<option value="' . $row['nama_lengkap'] . '">' . $row['nama_lengkap'] . '</option>';
        $jsArray .= "prdName['" . $row['nama_lengkap'] . "'] = {nama_lengkap:'" . addslashes($row['nama_lengkap']) . "',
        nisn:'" . addslashes($row['nisn']). "', nilai_un:'" . addslashes($row['nilai_un']). "', nilai_us:'" . addslashes($row['nilai_us']). "', 
        jarak_rumah:'" . addslashes($row['jarak_rumah']). "',umur:'" . addslashes($row['umur']). "', 
		prestasi_akademik:'" . addslashes($row['prestasi_akademik']). "', 
		prestasi_nonakademik:'" . addslashes($row['prestasi_nonakademik']). "'};\n"; 
		}
        echo '</select>';
        ?>
</div>
</div>
<div class="col-sm-2">
<div class="form-group">
<label>NISN</label>
<input id="nisn" name="nisn" type="text" class="form-control " value="<?php echo $r['nisn']; ?>" required="" autofocus="" data-errormessage-value-missing="nisn masih kosong." readonly="readonly" />
</div>	
</div>
</div>
<div class="row">
<div class="col-sm-1">
<div class="form-group">
<label>C1</label>
<input id="nilai_un" name="C1" type="text" class="form-control" value="<?php echo $r['C1']; ?>" required="" autofocus="" data-errormessage-value-missing="isian masih kosong." readonly="readonly" />
</div>
</div>

<div class="col-sm-1">
<div class="form-group">
<label>C2</label>
<input id="nilai_us" name="C2" type="text" value="<?php echo $r['C2']; ?>" class="form-control" required='' data-errormessage-value-missing='isian masih kosong' readonly="readonly" />
</div>
</div>
<div class="col-sm-1">
<div class="form-group">
<label>C3</label>
<input id="jarak_rumah" name="C3" type="text" class="form-control" value="<?php echo $r['C3']; ?>" required="" autofocus="" data-errormessage-value-missing="isian masih kosong." readonly="readonly" />
</div>
</div>
<div class="col-sm-1">
<div class="form-group">
<label>C4</label>
<input id="umur" name="C4" type="text" value="<?php echo $r['C4']; ?>" class="form-control" readonly="readonly" required='' data-errormessage-value-missing='isian masih kosong' />	
</div>
</div>
<div class="col-md-1">
<div class="form-group">
<label>C5</label>
<input id="prestasi_akademik" name="C5" type="text" value="<?php echo $r['C5']; ?>" class="form-control" readonly="readonly" required='' data-errormessage-value-missing='isian masih kosong' />	
</div>
</div>
<div class="col-md-1">
<div class="form-group">
<label>C6</label>
<input id="prestasi_nonakademik" name="C6" type="text" value="<?php echo $r['C6']; ?>" class="form-control" readonly="readonly" required='' data-errormessage-value-missing='isian masih kosong' />	
</div>
</div>
</div>
<div class="form-group">
<?php if(!$_GET['id_siswa']){
		//bila mau tambah data yang tampil tombol simpan
		echo "<input name=\"simpan\" class=\"btn btn-primary\" type=\"submit\" id=\"simpan\" value=\"Simpan\" />&nbsp;";
		echo "<input name=\"batal\" class=\"btn btn-warning\" type=\"reset\" id=\"batal\" value=\"Batal\" />";
        } else {
		//Apabila mau edit yg tampil tombol edit dan hapus
		echo "<input name=\"Edit\" class=\"btn btn-success\" type=\"submit\" id=\"edit\" value=\"Simpan\" />&nbsp;";
		echo "<input name=\"batal\" class=\"btn btn-warning\" type=\"reset\" id=\"batal\" value=\"Batal\" />";
} ?>
</div>
				</form>
			  
		  </div></div></div>
		</div>
        
 <script type="text/javascript">
        <?php echo $jsArray;
         echo $jsArrayQ; ?>
        function changeValue(id){
        document.getElementById('nisn').value = prdName[id].nisn;
		
		document.getElementById('nilai_un').value = prdName[id].nilai_un;

        document.getElementById('nilai_us').value = prdName[id].nilai_us;

        document.getElementById('jarak_rumah').value = prdName[id].jarak_rumah;

        document.getElementById('umur').value = prdName[id].umur;

        document.getElementById('prestasi_akademik').value = prdName[id].prestasi_akademik;
		
		document.getElementById('prestasi_nonakademik').value = prdName[id].prestasi_nonakademik;
      
   };
  
        </script>  
<?php include_once 'footer.php'; ?>