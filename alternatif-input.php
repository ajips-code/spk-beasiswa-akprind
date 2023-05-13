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
			  <li><a href="alternatif.php"><span class="fa fa-book"></span> Data alternatif</a></li>
			  <li class="active"><span class="fa fa-clone"></span> Tambah Data</li>
			</ol>
		  	<p style="margin-bottom:10px;">
<strong style="font-size:18pt;"><span class="fa fa-users"></span> Input Data alternatif</strong>
		  	</p>
		  	<div class="panel panel-default">
		<div class="panel-body">
<?php 
if(isset($_POST['simpan'])){
$nim=$_POST['nim'];
$nama_lengkap=ucwords(htmlentities($_POST['nama_lengkap']));
$tempat_lahir=$_POST['tempat_lahir'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$umur=$_POST['umur'];
$jk=$_POST['jk'];
$alamat=$_POST['alamat'];
$c1=$_POST['c1'];
$c2=$_POST['c2'];
$c3=$_POST['c3'];
$c4=$_POST['c4'];
$c5=$_POST['c5'];

$cek = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM alternatif WHERE nim='$nim'");
if(mysqli_num_rows($cek) == 0){	
$a=mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO alternatif(id_alternatif,nim,nama_lengkap,tempat_lahir,tanggal_lahir,umur,jk,alamat,c1,c2,c3,c4,c5)VALUES('','$nim','$nama_lengkap','$tempat_lahir','$tanggal_lahir','$umur','$jk','$alamat','$c1','$c2','$c3','$c4','$c5')");
if($a){
echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Berhasil Di Simpan.</div>';
echo "<meta http-equiv='refresh' content='2; url=alternatif.php'>";
						}else{
echo '<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Gagal Di simpan !</div>';
						}
				}else{
echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Cek Kembali Isian.., Data Sudah Ada,..!</div>';
				}
			}
			
//Proses edit
$id_alternatif=$_GET['id_alternatif'];
$sql="select * from alternatif where id_alternatif='$id_alternatif'";
$query=mysqli_query($GLOBALS["___mysqli_ston"], $sql);
$r=mysqli_fetch_array($query);
if(isset($_POST['Edit'])){

$nim=$_POST['nim'];
$nama_lengkap=ucwords(htmlentities($_POST['nama_lengkap']));
$tempat_lahir=$_POST['tempat_lahir'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$umur=$_POST['umur'];
$jk=$_POST['jk'];
$alamat=$_POST['alamat'];
$c1=$_POST['c1'];
$c2=$_POST['c2'];
$c3=$_POST['c3'];
$c4=$_POST['c4'];
$c5=$_POST['c5'];

$a=mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE alternatif SET nim='$nim',nama_lengkap='$nama_lengkap',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',umur='$umur',jk='$jk',alamat='$alamat',c1='$c1',c2='$c2',c3='$c3',c4='$c4',c5='$c5' WHERE id_alternatif='$id_alternatif'");
if($a){
echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Berhasil Di Simpan.</div>';
echo "<meta http-equiv='refresh' content='2; url=alternatif.php'>";
}else{
echo '<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Gagal Di Simpan !</div>';

}
}
?>
<form action="" method="post" enctype="multipart/form-data">
 <div class="row">
<div class="col-sm-2">
<div class="form-group">
<label>NIM</label>
<input id="nim" name="nim" type="text" class="form-control " value="<?php echo $r['nim']; ?>" onkeypress="return hanyaAngka(event)" required="" autofocus="" data-errormessage-value-missing="nim masih kosong.">
</div>	
</div>

<div class="col-md-5">
<div class="form-group">
<label>Nama Lengkap</label>
<input id="nama" name="nama_lengkap" type="text" class="form-control" value="<?php echo $r['nama_lengkap']; ?>" required="" autofocus="" data-errormessage-value-missing="isian masih kosong.">
</div>
</div>

<div class="col-sm-5">
<div class="form-group">
<label>Tempat Lahir</label>
<input id="tempat_lahir" name="tempat_lahir" type="tempat_lahir" class="form-control" value="<?php echo $r['tempat_lahir']; ?>" required="" autofocus="" data-errormessage-value-missing="tempat lahir masih kosong.">
</div>
</div></div>
<div class="row">
<div class="col-sm-2">
<div class="form-group">
<label>Tanggal Lahir</label>
<input id="tanggal_lahir" name="tanggal_lahir" type="text" class="form-control" value="<?php echo $r['tanggal_lahir']; ?>" required="" autofocus="" data-errormessage-value-missing="isian masih kosong.">
</div>
</div>

<div class="col-sm-1">
<div class="form-group">
<label>Umur</label>
<input id="umur" name="umur" type="text" value="<?php echo $r['umur']; ?>" class="form-control" readonly="readonly" required='' data-errormessage-value-missing='isian masih kosong' />	
</div>
</div>

<div class="col-md-2">
<div class="form-group">
<label>Jenim Kelamin</label>
<select class="form-control" name="jk" id="jk">
				<?php
					$arjk = array(
						'Laki-Laki' => "Laki-Laki",
						'Perempuan' => "Perempuan"
					);
					foreach ($arjk as $db => $isi) {
						if ($r['jk']==$db){
							echo "<option value='$db' selected>$isi</option>";
						}else{
							echo "<option value='$db'>$isi</option>";
						}
					}
				?>
</select>
</div>
</div>
<div class="col-md-7">
<div class="form-group">
<label>Alamat</label>
<input id="alamat" name="alamat" type="text" class="form-control " value="<?php echo $r['alamat']; ?>" required="" autofocus="" data-errormessage-value-missing="alamat masih kosong.">
</div>
</div>

</div>
<div class="row">
<div class="col-md-2">
<div class="form-group">
<label>Nilai Indeks Kumalatif (IPK)</label>
<select class="form-control" name="c1" required="" data-errormessage-value-missing="pilih salah satu.." />
<option value=""> Silahkan Pilih..</option>
				<?php
					$arc1 = array(
						'1' => "2,75",
						'2' => "3,00 - ≤ 3,10",
						'3' => "3,10 - ≤ 3,35",
						'4' => "3,36 - ≤ 3,60",
						'5' => "> 3,61"
					);
					foreach ($arc1 as $db => $isi) {
						if ($r['c1']==$db){
							echo "<option value='$db' selected>$isi</option>";
						}else{
							echo "<option value='$db'>$isi</option>";
						}
					}
				?>
</select>
</div>
</div>
<div class="col-md-2">
<div class="form-group">
<label>Semester</label>
<select class="form-control" name="c2" required="" data-errormessage-value-missing="pilih salah satu.." />
<option value=""> Silahkan Pilih..</option>
				<?php
					$arc2 = array(
						'1' => "2-3",
						'2' => "4-5",
						'3' => "6-7",
						'4' => "8"
					);
					foreach ($arc2 as $db => $isi) {
						if ($r['c2']==$db){
							echo "<option value='$db' selected>$isi</option>";
						}else{
							echo "<option value='$db'>$isi</option>";
						}
					}
				?>
</select>
</div>
</div>

<div class="col-sm-2">
<div class="form-group">
<label>Prestasi</label>
<select class="form-control" name="c3" required="" data-errormessage-value-missing="pilih salah satu.." />
<option value=""> Silahkan Pilih..</option>
				<?php
					$arc3 = array(
						'3' => "Akademik",
						'1' => "Non Akademik"
					);
					foreach ($arc3 as $db => $isi) {
						if ($r['c3']==$db){
							echo "<option value='$db' selected>$isi</option>";
						}else{
							echo "<option value='$db'>$isi</option>";
						}
					}
				?>
</select>
</div>
</div>

<div class="col-sm-2">
<div class="form-group">
<label>Penghasilan Orang Tua</label>
<select class="form-control" name="c4" required="" data-errormessage-value-missing="pilih salah satu.." />
<option value=""> Silahkan Pilih..</option>
				<?php
					$arc4 = array(
						'1' => "X > Rp.3.600.000",
						'2' => "Rp. 2.600.00 < X ≤ Rp.  3.500.000",
						'3' => "Rp. 1.600.000 < X ≤ Rp. 2.500.000",
						'4' => "Rp. 600.000 < X Rp. 1.500.000",
						'5' => "X ≤ Rp. 500.000"
					);
					foreach ($arc4 as $db => $isi) {
						if ($r['c4']==$db){
							echo "<option value='$db' selected>$isi</option>";
						}else{
							echo "<option value='$db'>$isi</option>";
						}
					}
				?>
</select>
</div>
</div>

<div class="col-sm-2">
<div class="form-group">
<label>Tanggungan Orang Tua</label>
<select class="form-control" name="c5" required="" data-errormessage-value-missing="pilih salah satu.." />
<option value=""> Silahkan Pilih..</option>
				<?php
					$arc5 = array(
						'1' => "1-2",
						'2' => "3-4",
						'4' => "5-6",
						'5' => "≥ 7"
					);
					foreach ($arc5 as $db => $isi) {
						if ($r['c5']==$db){
							echo "<option value='$db' selected>$isi</option>";
						}else{
							echo "<option value='$db'>$isi</option>";
						}
					}
				?>
</select>
</div>
</div>
</div>

<div class="form-group">
<?php if(!$_GET['id_alternatif']){
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
        
    <script>
		function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		    return false;
		  return true;
		}
	</script>
<?php include_once 'footer.php'; ?>