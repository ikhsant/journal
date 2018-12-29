<h1>Archive</h1>
<?php foreach ($jurnal as $jurnal): ?>
	<ul>
		<li><a href="<?php echo base_url('jurnal/').$jurnal->id_jurnal ?>"><h3>Volume: <?php echo $jurnal->volume ?> [<?php echo $jurnal->tahun ?>] <?php if($jurnal->status == '2'){echo '<span class="label label-success label-sm">Current</span>' ;} ?></h3></a></li>
	</ul>
<?php endforeach ?>