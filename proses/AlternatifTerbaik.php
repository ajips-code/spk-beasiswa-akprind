
  <div class="col-lg-12">
                     <div class="panel panel-primary">
                        <div class="panel-heading">
                       Alternatif Terbaik
                        </div>

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                       
  <table id="b" class=" table table-striped  table-bordered table-hover" >
                                  <thead>
                                        <tr>
                                          <th><center>No.</center></th>
                                            <th>ID</th>
                                            <th>Nama Lengkap</th>
                                            <th>Total Nilai</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
<?php 
include 'includes/koneksi.php';
$s = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT MAX(nilai) AS total FROM ranging LIMIT 3");
while ($d = mysqli_fetch_array($s)) {
  $data = $d['total'];
}
                                           
                                            $kriteria1 = mysqli_query($GLOBALS["___mysqli_ston"], "select * from ranging where nilai='$data'");
                                            $q=0;
                                            while ($kriteria = mysqli_fetch_array($kriteria1)) {
                                               $q++;
                                               ?> <tr class="odd gradeX ">
                                            <td><center><?php echo $q; ?></center></td>
                                            <td style="vertical-align:middle;"><?php echo $kriteria['nim']; ?></td>
                                            <td style="vertical-align:middle;"> <?php echo $kriteria['nama_lengkap']; ?></td>
                                            <td><center><?php echo $kriteria['nilai']; ?></center></td>
                                          
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