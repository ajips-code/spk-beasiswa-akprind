  <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                           Nilai Kriteria Alternatif
                        </div>

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                       
  <table id="nilaikriterialaptop" class=" table table-striped  table-bordered table-hover" >
                                  <thead>
                                        <tr>
                                           <th><center>No.</center></th>
                                            <th>ID</th>
                                            <th>Nama Alternatif</th>
                                            <th>Nilai IPK</th>
                                            <th>Semester</th>
                                            <th>Prestasi</th>
                                            <th>Penghasilan Orang Tua</th>
                                            <th>Tanggungan Orang Tua</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                      
                                            
                                            <?php 
                       $kriteria1 = mysqli_query($GLOBALS["___mysqli_ston"], "select * from alternatif order by id_alternatif DESC");
                                            $q=0;
                                            while ($kriteria = mysqli_fetch_array($kriteria1)) {
						$c1 = $kriteria['c1'];
						$arc1 = array(
						'1' => "2,75",
						'2' => "3,00 - ≤ 3,10",
						'3' => "3,10 - ≤ 3,35",
						'4' => "3,36 - ≤ 3,60",
						'5' => "> 3,61");
						
						$c2 = $kriteria['c2'];
						$arc2 = array(
						'1' => "2-3",
						'2' => "4-5",
						'3' => "6-7",
						'4' => "8");
						
						$c3 = $kriteria['c3'];
						$arc3 = array(
						'3' => "Akademik",
						'1' => "Non Akademik");
						
						$c4 = $kriteria['c4'];
						$arc4 = array(
						'1' => "X > Rp.3.600.000",
						'2' => "Rp. 2.600.00 < X ≤ Rp.  3.500.000",
						'3' => "Rp. 1.600.000 < X ≤ Rp. 2.500.000",
						'4' => "Rp. 600.000 < X Rp. 1.500.000",
						'5' => "X ≤ Rp. 500.000");
						
						$c5 = $kriteria['c5'];
						$arc5 = array(
						'1' => "1-2",
						'2' => "3-4",
						'4' => "5-6",
						'5' => "≥ 7");
						
                                               $q++;
                                               ?> <tr class="odd gradeX ">
                                            <td><center><?php echo $q; ?></center></td>
                                            <td style="vertical-align:middle;"><?php echo $kriteria['nim']; ?></td>
                                           <td style="vertical-align:middle;"><?php echo $kriteria['nama_lengkap']; ?></td>
                                            <td><center><?php echo $arc1[$c1]; ?></center></td>
                                            <td style="vertical-align:middle;"><?php echo $arc2[$c2]; ?></td>
                                            <td><center><?php echo $arc3[$c3]; ?></center></td>
                                            <td style="vertical-align:middle;"><?php echo $arc4[$c4]; ?></td>
                                            <td style="vertical-align:middle;"><?php echo $arc5[$c5]; ?></td>
                                          
 
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