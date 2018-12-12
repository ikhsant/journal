<h1>Archive</h1>
<?php foreach ($jurnal as $jurnal): ?>
	<ul>
		<li><a href="<?php echo base_url('jurnal/').$jurnal->id_jurnal ?>"><h3>Volume: <?php echo $jurnal->volume ?> [<?php echo $jurnal->tahun ?>]</h3></a></li>
	</ul>
<?php endforeach ?>