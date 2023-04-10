<h3 class="title1"><span class="fa fa-gears"></span> User Setting</h3>
<hr style="border: 1px solid #f50057;">
<div class="blank-page widget-shadow scroll" id="style-2 div1">

	<div class="panel panel-danger">
  <div class="panel-heading"> <span class="fa fa-edit"></span> Ganti Password</div>
  <div class="panel-body">

  	<form class="form-inline" action="?page=act" method="post">
  <div class="form-group">
    <label for="exampleInputName2">Username</label>
    <input type="hidden" name="id" value=" <?php echo $data['idguru'] ?> ">
    <input type="text" name="username" class="form-control" id="exampleInputName2" value=" <?php echo $data['username'] ?> ">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail2">Password</label>
    <input type="text" name="password" class="form-control" id="exampleInputEmail2" value=" <?php echo $data['password'] ?> ">
  </div>
    <div class="form-group">
    <label for="exampleInputEmail2">Nama Lengkap</label>
    <input type="text" name="nama" class="form-control" id="exampleInputEmail2" value=" <?php echo $data['namaguru'] ?> ">
  </div>
  <button type="submit" name="ganti" class="btn btn-info"><span class="fa fa-edit"></span> Ubah</button>
</form>


    
  </div>
</div>


</div>
