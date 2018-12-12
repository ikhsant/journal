<h1>Result:</h1>
<?php foreach ($paper as $paper): ?>
<h4><a href="<?php echo base_url('paper/').$paper->id_paper ?>"><?php echo $paper->judul ?></a></h4>
<?php endforeach ?>
