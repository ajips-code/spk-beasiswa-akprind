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
			  <li><a href="data_kriteria.php"><span class="fa fa-list-alt"></span> Data Kriteria</a></li>
			  <li class="active"><span class="fa fa-clone"></span> Tambah Data</li>
			</ol>
		  	<p style="margin-bottom:10px;">
<strong style="font-size:18pt;"><span class="fa fa-list-alt"></span> Input Bobot Kriteria</strong>
		  	</p>
		  	<div class="panel panel-default">
		<div class="panel-body">
<?php 
if(isset($_POST['simpan'])){
$id_kriteria=$_POST['id_kriteria'];
$nama_kriteria=ucwords(htmlentities($_POST['nama_kriteria']));
$bobot_kriteria=$_POST['bobot_kriteria'];

$cek = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM bobot_data_kriteria WHERE id_kriteria='$id_kriteria' AND nama_kriteria='$nama_kriteria'");
if(mysqli_num_rows($cek) == 0){	
$a=mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO bobot_data_kriteria(id_kriteria,id_kriteria,nama_kriteria,bobot_kriteria)VALUES('$id_kriteria','$nama_kriteria','$bobot_kriteria')");
if($a){
echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Berhasil Di Simpan.</div>';
echo "<meta http-equiv='refresh' content='2; url=data-kriteria.php'>";
						}else{
echo '<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Gagal Di simpan !</div>';
						}
				}else{
echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Cek Kembali Isian.., Data Sudah Ada,..!</div>';
				}
			}
			
//Proses edit
$id_kriteria=$_GET['id_kriteria'];
$sql="select * from bobot_data_kriteria where id_kriteria='$id_kriteria'";
$query=mysqli_query($GLOBALS["___mysqli_ston"], $sql);
$r=mysqli_fetch_array($query);
if(isset($_POST['Edit'])){

$nama_kriteria=ucwords(htmlentities($_POST['nama_kriteria']));
$bobot_kriteria=$_POST['bobot_kriteria'];

$a=mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE bobot_data_kriteria SET nama_kriteria='$nama_kriteria',bobot_kriteria='$bobot_kriteria' WHERE id_kriteria='$id_kriteria'");
if($a){
echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Berhasil Di Simpan.</div>';
echo "<meta http-equiv='refresh' content='2; url=data-kriteria.php'>";
}else{
echo '<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Gagal Di Simpan !</div>';

}
}
?>
<form action="" method="post" enctype="multipart/form-data">
 <div class="row">
<div class="col-sm-1">
<div class="form-group">
<label>ID-Kriteria</label>
<input name="id_kriteria" type="text" class="form-control " value="<?php echo $r['id_kriteria']; ?>" required="" autofocus="" data-errormessage-value-missing="id_kriteria masih kosong.">
</div>	
</div>

<div class="col-md-4">
<div class="form-group">
<label>Nama Kriteria</label>
<input name="nama_kriteria" type="text" class="form-control" value="<?php echo $r['nama_kriteria']; ?>" required="" autofocus="" data-errormessage-value-missing="isian masih kosong.">
</div>
</div>

<div class="col-sm-2">
<div class="form-group">
<label>Bobot Kriteria</label>
<input name="bobot_kriteria" type="text" class="form-control" value="<?php echo $r['bobot_kriteria']; ?>" required="" autofocus="" data-errormessage-value-missing="isian masih kosong." onkeypress="return hanyaAngka(event)" maxlength="2" />
</div>
</div>
</div>



<div class="form-group">
<?php if(!$_GET['id_kriteria']){
		//bila mau tambah data yang tampil tombol simpan
		echo "<input name=\"simpan\" class=\"btn btn-primary\" type=\"submit\" id=\"simpan\" value=\"Simpan\" />&nbsp;";
		echo "<input name=\"batal\" class=\"btn btn-warning\" type=\"reset\" id=\"batal\" value=\"Batal\" />";
        } else {
		//Apabila mau edit yg tampil tombol edit dan hapus
		echo "<input name=\"Edit\" class=\"btn btn-success\" type=\"submit\" id=\"edit\" value=\"Simpan\" />&nbsp;";
		echo "<button class='btn btn-warning'><a href='data-kriteria.php'> Batal </a></button>";
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