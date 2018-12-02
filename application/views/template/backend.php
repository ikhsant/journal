<?php  
$setting = $this->Crud_model->select('setting','*')->row();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $setting->nama_website ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/custom.css">
  <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
  <?php if (isset($css_files)){ foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
  <?php endforeach; }?>
  <style>  
</style>
</head>
<body>
  <div class="header">
    <div class="container" align="center">
      <a href="<?php echo base_url() ?>"><img src="<?php echo base_url('assets/logo/logo_journal.png') ?>" class="main-logo"></a>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-9">
        <br>
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="row">
              <div class="col-sm-4">
                <h4>
                  Wellcome
                  <br>
                  <b><?php echo $user->title.' '.$user->name; ?></b>
                </h4>
                <hr>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    MENU
                  </div>
                  <div class="panel-body">
                    <ul>
                      <li><a href="<?php echo base_url('submission/paper_list') ?>">Paper List</a></li>
                      <li><a href="<?php echo base_url('submission') ?>">Paper Submission</a></li>
                      <li><a href="#">Change Profile</a></li>
                      <li><a href="#">CV and Photos</a></li>
                      <li><a href="<?php echo base_url('user/changepassword') ?>">Change Password</a></li>
                      <li><a href="<?php echo base_url('logout') ?>">Logout</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-sm-8">
                <?php
                if($this->session->flashdata('success')) {
                  echo '<div class="alert alert-success">';
                  echo $this->session->flashdata('success');
                  echo '</div>';
                }
                if($this->session->flashdata('error')) {
                  echo '<div class="alert alert-danger">';
                  echo $this->session->flashdata('error');
                  echo '</div>';
                }
                // Cetak validasi error
                echo validation_errors('<div class="alert alert-danger">','</div>');
                ?>
                <?php  
                if (isset($page)) {
                  $this->load->view($page);
                }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <br>
        <div class="panel panel-default">
          <div class="panel-body">
            <h2>About IJEAT</h2>
            <ul>
              <li><h4><a href="#">Aims & Scope</a></h4></li>
              <li><h4><a href="#">Editorial Board</a></h4></li>
              <li><h4><a href="#">Current Papers</a></h4></li>
              <li><h4><a href="#">Contact IJEEI</a></h4></li>
              <li><h4><a href="#">Archives</a></h4></li>
              <li><h4><a href="#">Manuscript Preparation</a></h4></li>
              <li><h4><a href="#">Policies</a></h4></li>
              <li><h4><a href="<?php echo base_url('submission'); ?>">Submission</a></h4></li>
            </ul><br>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search paper..">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">
                  <span class="glyphicon glyphicon-search"></span>
                </button>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="container-fluid">
    <h4 align="center">Copyright 2018 <?php echo $setting->keterangan ?></h4>
    <p align="center"><b>Develop by <a href="http://twitter.com/ikhsan.thohir" target="_blank">Nusa Putra IT Team</a></b></p>
  </footer>
  <?php if (isset($js_files)){ foreach($js_files as $file): ?>
    <script src="<?php echo $file; ?>"></script>
  <?php endforeach; } ?>
  <script src="<?php echo base_url() ?>assets/js/custom.js"></script>
</body>
</html>