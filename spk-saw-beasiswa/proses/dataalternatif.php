  <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                           Data Alternatif
                        </div>

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                       
  <table  id="data_laptop" style="margin-left:-16px; " class=" table table-striped  table-bordered table-hover" >
                                  <thead>
                                        <tr>
                 <th><center>No.</center></th>
                <th>ID</th>
                <th>Nama Lengkap</th>
                <th>Tempat Tanggal Lahir</th>
                <th>Umur</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      
                                            
<?php 
include 'includes/koneksi.php';
include 'includes/fungsi_indotgl.php';
$Kelas = mysqli_query($GLOBALS["___mysqli_ston"], "select * from alternatif order by id_alternatif DESC");
                                            $q=0; 
                                            mysqli_query($GLOBALS["___mysqli_ston"], "TRUNCATE TABLE ranging");
                                            while ($row = mysqli_fetch_array($Kelas)) {
                                               $q++;
                                               ?> <tr class="odd gradeX ">
                                            <td><center><?php echo $q; ?></center></td>
<td style="vertical-align:middle;"><?php echo $row['nim'] ?></td>
                <td style="vertical-align:middle;"><?php echo $row['nama_lengkap'] ?></td>
                <td style="vertical-align:middle;"><?php echo $row['tempat_lahir'] ?>, <?php echo $data = tgl_indo($row['tanggal_lahir']) ?></td>
                  <td style="vertical-align:middle;"><?php echo $row['umur'] ?></td>
                  <td style="vertical-align:middle;"><?php echo $row['jk'] ?></td>
                   <td style="vertical-align:middle;"><?php echo $row['alamat'] ?></td>
                                           
 
                                     </tr>

                                
                                              <?php } ?>
                                      
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                         
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->