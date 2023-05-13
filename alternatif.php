<?php
include_once 'header.php';
include_once 'includes/fungsi_indotgl.php';
include_once 'includes/alternatif.inc.php';
$pro = new alternatif($db);
$stmt = $pro->readAll();
$count = $pro->countAll();

if(isset($_POST['hapus-contengan'])){
    $imp = "('".implode("','",array_values($_POST['checkbox']))."')";
    $result = $pro->hapusell($imp);
    if($result){
            ?>
            <script type="text/javascript">
            window.onload=function(){
                showSuccessToast();
                setTimeout(function(){
                    window.location.reload(1);
                    history.go(0)
                    location.href = location.href
                }, 5000);
            };
            </script>
            <?php
    } else{
            ?>
            <script type="text/javascript">
            window.onload=function(){
                showErrorToast();
                setTimeout(function(){
                    window.location.reload(1);
                    history.go(0)
                    location.href = location.href
                }, 5000);
            };
            </script>
            <?php
    }
}
?>
<div class="row">
<!--	<div class="col-xs-12 col-sm-12 col-md-2">
		  	<?php
//			include_once 'sidebar.php';
			?>
	</div>-->
	<div class="col-xs-12 col-sm-12 col-md-12">
	<ol class="breadcrumb">
	  <li><a href="index.php"><span class="fa fa-home"></span> Beranda</a></li>
	  <li class="active"><span class="fa fa-bank"></span> Data alternatif</li>
	</ol>
<form method="post">
	<div class="row">
		<div class="col-md-6 text-left">
			<strong style="font-size:18pt;"><span class="fa fa-user"></span> Data alternatif</strong>
		</div>
		<div class="col-md-6 text-right">
            <button type="submit" name="hapus-contengan" class="btn btn-danger btn-sm"><span class="fa fa-close"></span> Hapus Contengan</button>
			<button type="button" onclick="location.href='alternatif-input.php'" class="btn btn-primary btn-sm"><span class="fa fa-clone"></span> Tambah Data</button>
		</div>
	</div>
	<br/>

	<table width="100%" class="table table-striped table-bordered" id="tabeldata">
        <thead>
            <tr>
                <th width="10px"><input type="checkbox" name="select-all" id="select-all" /></th>
                <th>No.</th>
                <th>ID-alternatif</th>
                <th>Nama Lengkap</th>
                <th>Tempat Tanggal Lahir</th>
                <th>Usia</th>
                <th>Kelamin</th>
                <th>Alamat</th>
                <th width="30px">Aksi</th>
            </tr>
        </thead>

        <tbody>
<?php
$no=0;
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
$no++;
?>
            <tr>
                <td style="vertical-align:middle;"><input type="checkbox" value="<?php echo $row['id_alternatif'] ?>" name="checkbox[]" /></td>
                <td style="vertical-align:middle;"><?php echo $no ?></td>
                 <td style="vertical-align:middle;"><?php echo $row['nim'] ?></td>
                <td style="vertical-align:middle;"><?php echo $row['nama_lengkap'] ?></td>
                <td style="vertical-align:middle;"><?php echo $row['tempat_lahir'] ?>, <?php echo $data = tgl_indo($row['tanggal_lahir']) ?></td>
                 <td style="vertical-align:middle;"><?php echo $row['umur'] ?> Tahun</td>
                  <td style="vertical-align:middle;"><?php echo $row['jk'] ?></td>
                   <td style="vertical-align:middle;"><?php echo $row['alamat'] ?></td>
                <td style="text-align:center;vertical-align:middle;">
					<a href="alternatif-input.php?id_alternatif=<?php echo $row['id_alternatif'] ?>" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
					<a href="alternatif-hapus.php?id=<?php echo $row['id_alternatif'] ?>" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
			    </td>
            </tr>
<?php
 }
?>
        </tbody>

    </table>
</form>
</div>
</div>			
<?php
include_once 'footer.php';
?>