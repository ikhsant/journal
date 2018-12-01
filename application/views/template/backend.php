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

    <!-- <div class="row">
      <div class="col-sm-6">
      </div>
      <div class="col-sm-6">
      </div>
    </div> -->
  </div>
</div>
  <div class="container">

        <?php  
        if (isset($page)) {
          $this->load->view($page);
        }
        ?>
      </div>
  <footer class="container-fluid">
    <h4 align="center">Copyright 2018 International Journal on Electrical Engineering and Informatics</h4>
  </footer>
<?php if (isset($js_files)){ foreach($js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; } ?>
</body>
</html>
