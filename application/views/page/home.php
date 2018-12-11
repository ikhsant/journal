<?php foreach ($jurnal as $jurnal): ?>
  <h1>
    <?php 
    if ($jurnal->status == '1') {
      echo "Call for paper";
    }elseif($jurnal->status == '2'){
      echo "Current paper";
    }else{
      echo "Archive";
    }
    ?>
  </h1>
  <hr>
  <div class="row">
    <div class="col-sm-3">
      <?php if (!empty($jurnal->cover)): ?>
        <a href="<?php echo base_url('uploads/cover/').$jurnal->cover ?>" target="_blank"><img src="<?php echo base_url('uploads/cover/').$jurnal->cover ?>" style="width: 100%"></a>
        <?php else: ?> 
          <!-- <a href="<?php echo base_url('assets/logo/cover-default.jpg') ?>" target="_blank"><img src="<?php echo base_url('assets/logo/cover-default.jpg') ?>" style="width: 100%"></a> -->
        <?php endif ?>
      </div>
      <div class="col-sm-9">
        <h3>Vol. <?php echo $jurnal->volume ?> No. <?php echo $jurnal->nomor ?>, <?php echo $jurnal->tanggal ?> </h3>
        <?php if (!empty($jurnal->keterangan)): ?>
          <p><?php echo $jurnal->keterangan ?></p>
        <?php endif ?>
      </div>
    </div>
    <br>

    <?php $jurnal_paper = $this->db->query("SELECT * FROM jurnal_paper WHERE id_jurnal = '$jurnal->id_jurnal' ")->result(); ?>
    <?php foreach ($jurnal_paper as $jurnal_paper): ?>
      <?php $paper = $this->db->query("SELECT * FROM paper WHERE id_paper = '$jurnal_paper->id_paper' ")->row(); ?>
      <h4><a href="<?php echo base_url('paper/detail/').$paper->id_paper ?>"><b><?php echo $paper->judul ?></b></a></h4>
      <div style="padding-left: 1em;">
        <?php  $paper_author = $this->db->query("SELECT * FROM paper_author WHERE id_paper = '$paper->id_paper' ")->result(); ?>
        <p style="margin: 0px">
          <?php foreach($paper_author as $paper_author1): ?>
            <?php $author = $this->db->query("SELECT * FROM author WHERE id_author = '$paper_author1->id_author' ")->row(); ?>
            <?php echo $author->nama_author.','; ?>
          <?php endforeach ?>
        </p>
        <p>
          <?php foreach($paper_author as $paper_author2): ?>
            <?php $author = $this->db->query("SELECT * FROM author WHERE id_author = '$paper_author2->id_author' ")->row(); ?>
            <?php echo $author->institusi.','; ?>
          <?php endforeach ?>
        </p>
        <?php if($paper->doi): ?>
        <p><a href="<?php echo $paper->doi ?>">DOI: <?php echo $paper->doi ?></a></p>
        <?php endif ?>
      </div>
      <hr>
    <?php endforeach ?>
    <?php endforeach ?>