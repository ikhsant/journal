<h1>Paper List</h1>
<div class="table-responsive">
<table class="table table-striped table-bordered">
	<tr>
		<th>No</th>
		<th>Title</th>
		<th>Author</th>
		<th>Submit Date</th>
		<th>Status</th>
	</tr>
	<?php $no = 1; if (count($paper) > 0): ?>
	<?php foreach ($paper as $paper): ?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $paper->judul; ?></td>
			<td><?php echo $paper->judul; ?></td>
			<td><?php echo $paper->tanggal_submit; ?></td>
			<td><?php echo $paper->tanggal_submit; ?></td>
		</tr>
	<?php endforeach ?>
	<?php endif ?>
</table>
</div>