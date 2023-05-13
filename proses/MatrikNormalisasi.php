  <div class="col-lg-12">
                     <div class="panel panel-primary">
                        <div class="panel-heading">
                         Matrik Normalisasi
                        </div>

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                       
  <table id="matriknormalisasi" class=" table table-striped  table-bordered table-hover" >
                                  <thead>
                                        <tr>
                                             <th><center>No.</center></th>
                                            <th>ID</th>
                                            <th>Nama Alternatif</th>
                                            <th>C1</th>
                                            <th>C2</th>
                                            <th>C3</th>
                                            <th>C4</th>
                                            <th>C5</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
<?php 
#Cari nilai maximal
$carimax = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT max(c1) as max1,
								max(c2) as max2,
								max(c3) as max3,
								max(c4) as max4,
								max(c5) as max5
								FROM alternatif order by id_alternatif DESC");
$max = mysqli_fetch_array($carimax);
#Cari nilai minimal
$carimin = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT min(c1) as min1,
								min(c2) as min2,
								min(c3) as min3,
								min(c4) as min4,
								min(c5) as min5
								FROM alternatif order by id_alternatif DESC");
$min = mysqli_fetch_array($carimin);

                                          //Hitung Normalisasi tiap Elemen
$kriteria1 = mysqli_query($GLOBALS["___mysqli_ston"], "select * FROM alternatif order by id_alternatif DESC");
                                            $q=0;
                                            while ($kriteria = mysqli_fetch_array($kriteria1)) {
                                               $q++;
                                               ?> <tr class="odd gradeX ">
                                            <td><center><?php echo $q; ?></center></td>
                                            <td style="vertical-align:middle;"><?php echo $kriteria['nim']; ?></td>
                                           <td style="vertical-align:middle;"><?php echo $kriteria['nama_lengkap']; ?></td>
                                           <td><?php echo round($kriteria['c1']/$max['max1'],2);?></td>
										   <td><?php echo round($kriteria['c2']/$max['max2'],2);?></td>
                                            <td><?php echo round($kriteria['c3']/$max['max3'],2);?></td>
                                            <td><?php echo round($min['min4']/$kriteria['c4'],2);?></td>
                                           <td><?php echo round($kriteria['c5']/$max['max5'],2);?></td>
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