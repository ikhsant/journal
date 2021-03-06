<?php  
$setting = $this->Crud_model->select('setting','*')->row();
if (isset($page_isi)) {
  $judul_page = $page_isi->judul_page;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php if(isset($judul_page)){echo $judul_page;}else{ echo $setting->nama_website;} ?> - <?php echo $setting->keterangan ?></title>
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
      <a href="<?php echo base_url() ?>"><img src="<?php echo base_url('uploads/logo/').$setting->logo_header ?>" class="main-logo"></a>
    </div>
  </div>
  <div class="container">
    <div class="row content">
      <div class="col-sm-9">
        <br>
        <div class="panel panel-default">
          <div class="panel-body">
            <?php  
            if (isset($page)) {
              $this->load->view($page);
            }
            ?>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <br>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3>About IJEAT</h3>
          </div>
          <div class="panel-body">
            <ul>
              <li><h4><a href="<?php echo base_url(); ?>">Current Paper</a></h4></li>
              <?php  
              $page_menu = $this->db->query("SELECT * FROM page ORDER BY judul_page ASC")->result();
              foreach ($page_menu as $page_menu) :
                ?>
                <li><h4><a href="<?php echo base_url().$page_menu->url ?>"><?php echo $page_menu->judul_page ?></a></h4></li>
              <?php endforeach ?>
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
        <!-- link partner -->
        <?php  
        $partner = $this->db->query("SELECT * FROM partner ORDER BY urutan ASC")->result();
        if (count($partner)) {
          echo '<hr>';
          echo '<h2>Indexed by:</h2>';
        }
        foreach ($partner as $partner) :
          ?>
          <div class="text-center">

            <a href="<?php echo $partner->link ?>" target="_blank">
              <img src="<?php echo base_url('uploads/partner/').$partner->logo ?>" class="img-responsive img-thumbnail" align="center" style="margin-bottom: 10px;">
            </a>
          </div>
        <?php endforeach ?>
        <!-- end link partner -->
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
