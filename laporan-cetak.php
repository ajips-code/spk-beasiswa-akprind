<?php  
session_start();
	include "includes/koneksi.php";
	include "includes/fungsi_indotgl.php";
	$tanggal = tgl_indo(date("Y m d"));
	$jam	 = date("H:i:s");
	date_default_timezone_set("Asia/Jakarta");
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
?>

	<script type="text/javascript">
	window.print() 
	</script>

	<style type="text/css">
	#print {
		margin:auto;
		text-align:center;
		font-family:"Calibri", Courier, monospace;
		width:1100px;
		font-size:12px;
	}
	#print .title {
		margin:20px;
		text-align:right;
		font-family:"Calibri", Courier, monospace;
		font-size:12px;
	}
	#print span {
		text-align:center;
		font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;	
		font-size:18px;
	}
	#print table {
		border-collapse:collapse;
		width:100%;
		margin:10px;
	}
	#print .table1 {
		border-collapse:collapse;
		width:90%;
		text-align:center;
		margin:10px;
	}
	#print .table2 {
		margin:auto;
		text-align:justify;
		font-family:"Tahoma", Courier, monospace;
		font-size:13px;
	}
#print .tablet {
		border-collapse:collapse;
		width:45%;
		font-weight:bold;
	}
	#print table hr {
		border:3px double #000;	
	}
	#print .ttd1 {
		float:left;
		width:400px;
	}
	#print .ttd2 {
		float:right;
		width:250px;
		background-position:center;
		background-size:contain;
	}
	#print table th {
		color:#000;
		font-family:"Calibri", Courier, monospace;
		font-size:13px;
	}
		#print table td {
		color:#000;
		font-family:"Calibri", Courier, monospace;
		font-size:12px;
	}

	#print .grand {
		width:700px;
		padding:10px;
		text-align:left;	
	}
	#print .grand table {
		margin-left:-90px;	
	}
	#logo{
		width:111px;
		height:90px;
		padding-top:10px;	
		margin-left:10px;
	}

	h2,h3{
		margin: 0px 0px 0px 0px;
	}
	</style>

	<title>Laporan-Seleksi</title>
    <link rel="shortcut icon" href="images/logo.png">
	<?php
	$hariini = tgl_indo(date("Y m d"));
	$jam	 = date("H:i:s");
	?>
    <div id="print">
	<table class='table1'>
			<tr>
            <td align="left"><img src='images/logo.png' height="80" width="80"></td>
				<td>
<h2>SISTEM BEASISWA INSTITUT SAINS & TEKNOLOGI AKPRIND YOGYAKARTA </h2>
<p style="font-size:14px;"><i> Jl. No.</i></p>
				</td>
 
			</tr>
</table>
	
<table class='table'>	
<td><hr /></td>

</table>
<td><h3>DATA HASIL SELEKSI PENERIMAAN BEASISWA</h3></td>
					<tr>
						<td>
							<table border='1' class='table' width="90%">
								<tr>
		<th width="30">No.</th>
                                <th>ID</th>
								<th>Nama Lengkap</th>
                                <th>Tempat Tanggal Lahir</th>
                <th>Usia</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
								<th>Nilai</th>
                                <th>Keterangan</th>
</tr>
 <?php 
  mysqli_query($GLOBALS["___mysqli_ston"], "TRUNCATE TABLE ranging");
  //Buat array bobot C1
  $query1 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM bobot_data_kriteria WHERE id_kriteria='C1'");
  $r1 = mysqli_fetch_array($query1);
  $bobot1 = $r1['bobot_kriteria']/100;
//Buat array bobot C2
  $query2 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM bobot_data_kriteria WHERE id_kriteria='C2'");
  $r2 = mysqli_fetch_array($query2);
  $bobot2 = $r2['bobot_kriteria']/100;
  //Buat array bobot C3
  $query3 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM bobot_data_kriteria WHERE id_kriteria='C3'");
  $r3 = mysqli_fetch_array($query3);
  $bobot3 = $r3['bobot_kriteria']/100;
//Buat array bobot C4
  $query4 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM bobot_data_kriteria WHERE id_kriteria='C4'");
  $r4 = mysqli_fetch_array($query4);
  $bobot4 = $r4['bobot_kriteria']/100;
//Buat array bobot C5
  $query5 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM bobot_data_kriteria WHERE id_kriteria='C5'");
  $r5 = mysqli_fetch_array($query5);
  $bobot5 = $r5['bobot_kriteria']/100;
  
  
  //Buat fungsi tampilkan nama
  function getNama($id_alternatif){
    $q =mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM alternatif where id_alternatif = '$id_alternatif' ORDER BY id_alternatif DESC");
    $d = mysqli_fetch_array($q);
    return $d['nama_lengkap'];
  }
    function getnim($id_alternatif){
    $q =mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM alternatif where id_alternatif = '$id_alternatif' ORDER BY id_alternatif DESC");
    $d = mysqli_fetch_array($q);
	return $d['nim'];
  }
//Lakukan Normalisasi dengan rumus pada langkah 2
#Cari nilai maximal
$carimax = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT max(c1) as max1,
								max(c2) as max2,
								max(c3) as max3,
								max(c4) as max4,
								max(c5) as max5
								FROM alternatif ORDER BY id_alternatif DESC");
$max = mysqli_fetch_array($carimax);
#Cari nilai minimal
$carimin = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT min(c1) as min1,
								min(c2) as min2,
								min(c3) as min3,
								min(c4) as min4,
								min(c5) as min5
								FROM alternatif ORDER BY id_alternatif DESC");
$min = mysqli_fetch_array($carimin);

 $sql3 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM alternatif ORDER BY id_alternatif DESC");
 $sql4 = mysqli_num_rows($sql3);
while ($dt3 = mysqli_fetch_array($sql3)) {
  $Nilai = round
      ((($dt3['c1']/$max['max1'])*$bobot1)+
      (($dt3['c2']/$max['max2'])*$bobot2)+
	  (($dt3['c3']/$max['max3'])*$bobot3)+
	  (($min['min4']/$dt3['c4'])*$bobot4)+
      (($dt3['c5']/$max['max5'])*$bobot5),2);
 
  $tampilnim = getnim($dt3['id_alternatif']);
  $tampilnama = getNama($dt3['id_alternatif']);
  
  
  mysqli_query($GLOBALS["___mysqli_ston"], "insert into ranging values ('$tampilnim','$tampilnama','$Nilai')");
}
?>
<?php 

$kriteria1 = mysqli_query($GLOBALS["___mysqli_ston"], "select * from alternatif a, ranging b WHERE a.nim=b.nim AND b.nim order by nilai desc");
                                            $q=0;
                                            while ($row = mysqli_fetch_array($kriteria1)) {
                                               $q++;
                                               ?> <tr class="odd gradeX ">
                                            <td><center><?php echo $q; ?></center></td>
                                            <td style="vertical-align:middle;">&nbsp;&nbsp;<?php echo $row['nim']; ?></td>
                                            <td style="vertical-align:middle;">&nbsp;&nbsp;<?php echo $row['nama_lengkap']; ?></td>
	<td style="vertical-align:middle;">&nbsp;&nbsp;<?php echo $row['tempat_lahir'] ?>, <?php echo $data = tgl_indo($row['tanggal_lahir']) ?></td>
                 <td style="vertical-align:middle;">&nbsp;&nbsp;<?php echo $row['umur'] ?> Tahun</td>
                  <td style="vertical-align:middle;">&nbsp;&nbsp;<?php echo $row['jk'] ?></td>
                   <td style="vertical-align:middle;">&nbsp;&nbsp;<?php echo $row['alamat'] ?></td>
								<td>&nbsp;&nbsp;<?php 
								$nilai=round(($row['nilai']),2);
								
								echo $nilai; ?></td>                               
<?php
if ($nilai>1.00) 
$ranking="<font color='#009933'> Alternatif Terpilih</font>";
else if ($nilai<=1.00 AND $nilai>0.85) 
$ranking="<font color='#009933'> Alternatif Terpilih </font>";
else if ($nilai<=0.85 AND $nilai>0.49) 
$ranking="<font color='#F06'> Belum Memenuhi Syarat </font>";
else if ($nilai<=0.49 AND $nilai>0.10) 
$ranking="<font color='#F06'> Belum Memenuhi Syarat </font>";
else if ($nilai<=0.10 AND $nilai>0) 
$ranking="<font color='#F06'> Belum Memenuhi Syarat </font>";
else
$ranking="<font color='#F06'> Belum Memenuhi Syarat </font>";
echo "<td>&nbsp;&nbsp; $ranking</td>"; ?>
						</tr>
<?php } ?>


</table></td>
</tr>
</table>
</div>
 <div id="print">
<table width="450" align="right" class="ttd2">
<tr>
<td width="100px" style="padding:20px 20px 20px 20px;" align="center">

<strong>Yogyakarta, <?php echo "$hariini";?><br>Pimpinan</strong>
                                 <br><br><br><br>
<strong><u>TTD</u><br></strong><small></small>


</td>
</tr>
</table>
</div>
