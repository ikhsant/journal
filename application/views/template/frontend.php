<!DOCTYPE html>
<html lang="en">
<head>
  <title>IJEAT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/custom.css">
  <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
  <style>  
</style>
</head>
<body>
  <div class="header">
  <div class="container" align="center">
        <a href="<?php echo base_url() ?>"><img src="<?php echo base_url('assets/logo/logo_journal.png') ?>" class="main-logo"></a>

    <!-- <div class="row">
      <div class="col-sm-6">
      </div>
      <div class="col-sm-6">
      </div>
    </div> -->
  </div>
</div>
  <div class="container">
    <div class="row content">
      <div class="col-sm-9">
        <?php 
        if(isset($page))   {
          $this->load->view($page);
        }
        ?>
      </div>
      <div class="col-sm-3">
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
  <footer class="container-fluid">
    <h4 align="center">Copyright 2018 International Journal on Electrical Engineering and Informatics</h4>
  </footer>

</body>
</html>
