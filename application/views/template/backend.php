<?php  
$setting = $this->Crud_model->select('setting','*')->row();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php if ($this->uri->segment(1) == 'paper'): ?>
  <!-- tag standar -->
  <title><?php echo $setting->nama_website.' - '.$paper->judul ?></title>
  <meta name="title" content="<?php echo $paper->judul ?>">
  <meta name="description" content="<?php echo strip_tags($paper->abstrak) ?>">
  <meta name="keywords" content="<?php echo $paper->keyword ?>">
  <!-- end tag standar -->

  <!-- tag jurnal -->
  <meta name="citation_title" content="<?php echo $paper->judul ?>">
  <meta name="citation_publisher" content="Universitas Nusa Putra">
  <?php foreach ($author as $author): ?>
  <meta name="citation_author" content="<?php echo $author->nama_author ?>">
  <?php endforeach ?>
  <meta name="citation_publication_date" content="<?php echo $paper->tanggal_publikasi ?>">
  <meta name="citation_language" content="Indonesia">
  <meta name="citation_keywords" content="<?php echo $paper->keyword ?>">
  <meta name="citation_journal_title" content="<?php echo $setting->nama_website ?>">
  <meta name="citation_abstract_html_url" content="<?php echo current_url() ?>"> 
  <!-- end tag jurnal -->

  <!-- tambahan -->
  <meta property="og:title" content="<?php echo $paper->judul ?>" />
  <meta property="og:type" content="book" />
  <meta property="og:url" content="<?php echo current_url() ?>" />
  <meta property="og:image" content="<?php echo base_url() ?>uploads/cover/default-cover.jpg" />
  <meta property="og:site_name" content="<?php echo $setting->nama_website ?>" />
  <meta property="og:description" content="<?php echo strip_tags($paper->abstrak) ?>" />
  <!-- end tambahan -->

  <?php else: ?>
  <title><?php echo $setting->nama_website ?></title>
  <?php endif ?>

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
      <a href="<?php echo base_url() ?>"><img src="<?php echo base_url('uploads/logo/').$setting->logo_header ?>" class="main-logo" style="height: 100px;width: auto;"></a>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-9">
        <br>
        <div class="panel panel-default">
          <div class="panel-body">
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
      <div class="col-sm-3">
          <br>
        <?php if ($this->session->userdata('akses_level')): ?>
          <?php $id_user = $this->session->userdata('id_user') ?>
          <?php $user = $this->Crud_model->select('user','*','id_user = "'.$id_user.'"')->row(); ?>
          <h4>
              <span class="kapital"><b>Wellcome</b></span>
            <br>
            <b><?php echo $user->title.' '.$user->name; ?></b>
          </h4>
          <hr>
          <div class="panel panel-default">
            <div class="panel-heading">
              <span class="kapital"><b>Menu</b></span>
            </div>
            <div class="panel-body">
              <ul>
                <?php if ($this->session->userdata('akses_level') === 'admin'): ?>
                  <li><a href="<?php echo base_url('admin') ?>">Dashboard</a></li>
                  <li><a href="<?php echo base_url('admin/jurnal') ?>">Journal</a></li>
                  <li><a href="<?php echo base_url('admin/paper') ?>">Paper</a></li>
                  <li><a href="<?php echo base_url('paper/submited') ?>">Submited Paper</a></li>
                  <li><a href="<?php echo base_url('admin/author') ?>">Author</a></li>
                  <li><a href="<?php echo base_url('admin/page') ?>">Pages</a></li>
                  <li><a href="<?php echo base_url('admin/user') ?>">User</a></li>
                  <li><a href="<?php echo base_url('admin/partner') ?>">Partner</a></li>
                  <li><a href="<?php echo base_url('admin/setting') ?>">Setting</a></li>
                <?php endif ?>
                <?php if ($this->session->userdata('akses_level') === 'author'): ?>
                  <li><a href="<?php echo base_url('paper/submited') ?>">Submited Paper</a></li>
                  <li><a href="#">Change Profile</a></li>
                  <li><a href="#">CV and Photos</a></li>
                <?php endif ?>
                <li><a href="<?php echo base_url('user/changepassword') ?>">Change Password</a></li>
                <li><a href="<?php echo base_url('logout') ?>" onclick="return confirm('Are You Sure?')">Logout</a></li>
              </ul>
            </div>
          </div>
        <?php endif ?>

        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="kapital">About</h3>
          </div>

          <div class="panel-body">
            <ul>
              <li><h4><a href="<?php echo base_url(); ?>">Current Paper</a></h4></li>
              <li><h4><a href="<?php echo base_url('archive'); ?>">Archive</a></h4></li>
              <?php  
              $page_menu = $this->db->query("SELECT * FROM page ORDER BY judul_page ASC")->result();
              foreach ($page_menu as $page_menu) :
                ?>
                <li><h4><a href="<?php echo base_url('page/detail/').$page_menu->url ?>"><?php echo $page_menu->judul_page ?></a></h4></li>
              <?php endforeach ?>
              <li><h4><a href="<?php echo base_url('submission'); ?>">Submission</a></h4></li>
            </ul><br>
            <form method="post" action="<?php echo base_url('search') ?>">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search paper.." name="cari" required>
              <span class="input-group-btn">
                <button class="btn btn-info" type="submit">
                  <span class="glyphicon glyphicon-search"></span>
                </button>
              </span>
            </div>
            </form>
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
    <p align="center"><b>Develop by <a href="http://twitter.com/ikhsanthohir" target="_blank">Nusa Putra IT Team</a></b></p>
  </footer>
  <?php if (isset($js_files)){ foreach($js_files as $file): ?>
    <script src="<?php echo $file; ?>"></script>
  <?php endforeach; } ?>
  <script src="<?php echo base_url() ?>assets/js/custom.js"></script>
</body>
</html>
