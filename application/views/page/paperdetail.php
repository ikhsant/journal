<a href="<?php echo base_url('jurnal/').$jurnal->id_jurnal ?>">< <?php echo $jurnal->judul_jurnal ?> Volume: <?php echo $jurnal->volume ?> (<?php echo $jurnal->tahun ?>)</a>
<h3><b><?php echo $paper->judul ?></b></h3>
<h4>
	<?php foreach ($author as $author1) : ?>
		<?php $ke = $author1->author_ke+1; echo $author1->nama_author.'<sup>'.$ke.'</sup>' ?>
	<?php endforeach ?>
</h4>
<p>
	<?php foreach ($author as $author2) : ?>
		<?php $ke = $author2->author_ke+1; echo $author2->institusi.' '.$author2->negara.'<sup>'.$ke.'</sup>' ?>
	<?php endforeach ?>
</p>
<?php if ($paper->doi): ?>
	<p><a href="<?php echo $paper->doi ?>">DOI: <?php echo $paper->doi ?></a></p>
<?php endif ?>
<br>
<h4 class="kapital"><b>Abstract</b></h4>
<p>
	<?php echo $paper->abstrak ?>
</p>
<p><span class="kapital"><b>Keywords</b></span>: <?php echo $paper->keyword ?></p>
<p></p>

<?php if ($paper->file_paper_final): ?>
	<hr>
	<a href="<?php echo base_url('uploads/paper/').$paper->file_paper_final ?>" target="_blank" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-download"></span> DOWNLOAD</a>
<?php endif ?>
