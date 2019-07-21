<?php
//error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include "conf/connection.php";
$query = $db->query("SELECT * FROM user WHERE id_user ='".$_GET['id']."'");
//menampilkan hasil query dalam bentuk object
//bisa juga menggunakan mysql_fetch_assoc atau mysql_fetch_array dll
$rows               = $query->fetch_object();
$id_user            = $rows->id_user;
$username           = $rows->username;
$password           = $rows->password;
$level              = $rows->level;
?>                
<div style="margin-top: 50px; background-color: white; width: 80px; height: 80px; padding: 20px; padding-left: 25px; margin-bottom: -50px; margin-left: 15px; box-shadow: 0px 0px 10px gray; position: relative;"> <h2><i class="fa fa-user"></i></h2> </div>
<div class="page-header">
    <div class="page-title">
        <div style="margin-left: 100px; font-weight: bold; font-size: 20px; padding-top: 10px">Data User</div>
        <ol class="breadcrumb" style="padding-top: 10px; text-align: right; padding-left: 100px; text-align: right;">
            <li><a href="admin.php">Dashboard</a></li>
            <li>Master Data</li>
            <li class="active">Edit Data User</li>
            
        </ol>
    </div>
</div>
<div class="breadcrumbs" >
  <div class="content mt-3" style="margin-left: -5px; width: 102%">
    <div class="card">
      <div class="card-header">
        <strong>Form</strong> Edit Data User
      </div>
      <div class="card-body card-block">
        <form action="?target=user&action=update" method="post" enctype="multipart/form-data" class="form-horizontal">
          <input type="hidden" name="id_user" value="<?php echo $id_user; ?>">

          <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Username</label></div>
            <div class="col-9 col-md-6"><input type="text" name="username" placeholder="Username" class="form-control" value="<?php echo $username; ?>"></div>
          </div>

          <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Password</label></div>
            <div class="col-9 col-md-6"><input type="password" name="password" placeholder="Password" class="form-control" value="<?php echo $password; ?>"></div>
          </div> 

          <div class="row form-group">
            <div class="col col-md-3"><label for="select" class="form-control-label">level</label></div>
            <div class="col-9 col-md-6">
              <select name="level" id="select" class="form-control">
                <option>
                  <?php echo $level; ?>
                </option>
                <option value="admin">
                    admin
                </option>
                <option value="staff">
                    staff
                </option>
            </select>
            </div>  
          </div>        

          <button type="submit" class="btn btn-success" style="border-radius: 5px"> <i class="fa fa-check-square-o"></i> Simpan </button>
          <a href="?target=user" class="btn btn-danger" style="border-radius: 5px"> <i class="fa fa-arrow-circle-left"></i> Kembali</a>

        </form>
      </div>
    </div>
  </div>
</div>