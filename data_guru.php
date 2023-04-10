<?php include 'header.php'; ?>

<div id="page-wrapper">
			<div class="main-page">
   

				<h3 class="title1"> <span class="fa fa-folder-o"></span> View Data <small> / Data Guru</small> </h3>
        <hr style="border: 1px solid #f50057;">
				<div class="blank-page widget-shadow scroll" id="style-2 div1">
						<a href="add_guru.php" class="btn btn-warning"> <span class="fa fa-plus"></span> Tambah Data Guru </a>
						<br>
            <br>



<div class="panel panel-default">
<div class="panel-heading">
<h3><span class="fa fa-th-large"></span> Daftar Data Guru</h3>
</div>
<div class="panel-body">

       <table class="table table-striped table-condensed table-hover data">
            <thead>
              <tr>
								<th>No.</th>
								<th>Nama Guru</th>
								<th>Mata Pelajaran</th>
								<th>Jabatan</th>
								<th>Foto</th>
								<th>Opsi</th>
							</tr>
                      </thead>
                      <tbody>
                            <?php 
              $no=1;
              $sql_User = mysqli_query($konek, "SELECT * FROM guru") or die(mysqli_error($konek)) ;
              while ($data = mysqli_fetch_array($sql_User)) {
              ?>
                           <tr>
								<td><?php echo $no++; ?> </td>
								<td><?php echo $data['namaguru']; ?> </td>
								<td><?php echo $data['mapel']; ?> </td>
								<td><?php echo $data['Jabatan']; ?> </td>
								<td>
									<img src="images/<?php echo $data['foto']; ?>" width="50" height="50" style="border: 1px solid; border-radius: 100%; ">
								</td>
								<td>
									<a href="edit_guru.php?id=<?php echo $data['idguru'] ?> " class="btn btn-primary"> <span class="fa fa-edit"></span> </a>
									<a href="hapus_guru.php?id=<?php echo $data['idguru'] ?> " class="btn btn-danger"> <span class="fa fa-times"></span> </a>
								</td>
							</tr>
                              <?php

                              }
                          ?>
                     
                      </tbody>
                    </table>
			<!-- 		<?php
                  if (@$_POST['pencarian'] == '') {?>
                    <div style="float:left; margin-bottom: 50px;">

                  <?php 
                      $jml = mysqli_num_rows(mysqli_query($konek,$queryJml));
                      echo " Jumlah Data : <span style='font-size: 20px; color: white;' class='badge dashbg-3'>$jml</span> ";
                      ?>  
                                        
                    </div>
          
                    <?php 
                  }else{
                    echo "<div style=\"float:left;margin-bottom:30px; \">";
                    $jml = mysqli_num_rows(mysqli_query($konek, $queryJml));
                    echo "Data Hasil Pencarian : <span style='font-size: 20px; color: white;' class='badge dashbg-3'>$jml</span>";
                    echo "</div>";
                  }
                  ?>  -->
              </div>
          </div>
          





					</div>
				</div>
			</div>


<?php include 'footer.php'; ?>