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
  <div class="col-lg-12">
                     <div class="panel panel-primary">
                        <div class="panel-heading">
                         Perengkingan
                        </div>

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                       
  <table id="a" class=" table table-striped  table-bordered table-hover" >
                                  <thead>
                                        <tr>
                                            <th><center>No.</center></th>
                                            <th>ID</th>
                                            <th>Nama Alternatif</th>
                                            <th>Total Nilai</th>
                                            <th>Keterangan</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                      
                                            
                                            <?php 
                                             include 'includes/koneksi.php';
                                            $kriteria1 = mysqli_query($GLOBALS["___mysqli_ston"], "select * from ranging order by nilai desc");
                                            $q=0;
                                            while ($kriteria = mysqli_fetch_array($kriteria1)) {
                                               $q++;
                                               ?> <tr class="odd gradeX ">
                                            <td><center><?php echo $q; ?></center></td>
                                            <td style="vertical-align:middle;"><?php echo $kriteria['nim']; ?></td>
                                            <td style="vertical-align:middle;"><?php echo $kriteria['nama_lengkap']; ?></td>
                                            <td>&nbsp;&nbsp;<?php $nilai=round(($kriteria['nilai']),2);
								
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
                                      
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                         
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel --></div>