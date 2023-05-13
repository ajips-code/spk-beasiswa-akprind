  <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                           Nilai Matrix Awal
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
                                            <th><center>C1</center></th>
                                            <th><center>C2</center></th>
                                            <th><center>C3</center></th>
                                            <th><center>C4</center></th>
                                            <th><center>C5</center></th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                      
                                            
                                            <?php 
            $kriteria1 = mysqli_query($GLOBALS["___mysqli_ston"], "select * from alternatif order by id_alternatif DESC");
                                            $q=0;
                                            while ($kriteria = mysqli_fetch_array($kriteria1)) {
                                               $q++;
                                               ?> <tr class="odd gradeX ">
                                            <td><center><?php echo $q; ?></center></td>
                                            <td style="vertical-align:middle;"><?php echo $kriteria['nim']; ?></td>
                                           <td style="vertical-align:middle;"><?php echo $kriteria['nama_lengkap']; ?></td>
                                            <td><center><?php echo $kriteria['c1']; ?></center></td>
                                            <td><center><?php echo $kriteria['c2']; ?></center></td>
                                            <td><center><?php echo $kriteria['c3']; ?></center></td>
                                            <td><center><?php echo $kriteria['c4']; ?></center></td>
                                            <td><center><?php echo $kriteria['c5']; ?></center></td>
                                          
 
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