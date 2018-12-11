<h2><b><?php echo $paper->judul ?></b></h2>
<h4>
	<?php foreach ($author as $author1) : ?>
		<?php echo $author1->nama_author.'<sup>'.$author1->author_ke.'</sup>' ?>
	<?php endforeach ?>
</h4>
<p>
	<?php foreach ($author as $author2) : ?>
		<?php echo $author2->institusi.',' ?>
	<?php endforeach ?>
</p>
<?php if ($paper->doi): ?>
	<p><a href="<?php echo $paper->doi ?>">DOI: <?php echo $paper->doi ?></a></p>
<?php endif ?>
<br>
<h4><b>ASTRACT</b></h4>
<p>
	<?php echo $paper->abstrak ?>
</p>
<?php if ($paper->file_paper_final): ?>
	<hr>
	<a href="<?php echo base_url('uploads/paper/').$paper->file_paper_final ?>" target="_blank" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-download"></span> DOWNLOAD</a>
<?php endif ?>
