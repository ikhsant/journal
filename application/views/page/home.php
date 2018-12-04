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
            <a href="<?php echo base_url('assets/logo/cover-default.jpg') ?>" target="_blank"><img src="<?php echo base_url('assets/logo/cover-default.jpg') ?>" style="width: 100%"></a>
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

      <h4><a href="<?php echo base_url('paper/detail') ?>"><b>Experimental Investigation on Sensorless Starting Capability of New 9-Slot 8-Pole PM BLDC Motor</b></a></h4>
      <div style="padding-left: 1em;">
        <p style="margin: 0px">Alfi Satria, Tri Desmana Rachmildha, Agus Purwadi, and Yanuarsyah Haroen</p>
        <p>School of Electrical Engineering and Informatics, Institut Teknologi Bandung, INDONESIA</p>
        <p><a href="#">DOI: 10.15676/ijeei.2018.10.3.1</a></p>
      </div>
      <br>
      <hr>
    <?php endforeach ?>