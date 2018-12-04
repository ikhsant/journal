<h1>Submited Paper</h1>
<div class="panel panel-primary">
	<div class="panel-heading">
		New Paper Submit
	</div>
	<div class="table-responsive">
		<table class="table table-striped">
			<tr>
				<th>No</th>
				<th>Date</th>
				<th>Title</th>
				<th>Author</th>
				<th>Revision</th>
			</tr>
			<?php $no = 1; foreach ($paper as $paper): ?>
				<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $paper->tanggal_submit ?></td>
				<td><?php echo $paper->judul ?></td>
				<td>
					<ol>
						<?php  
						$author = $this->db->query("SELECT * FROM author JOIN paper_author ON author.id_author = paper_author.id_author WHERE id_paper = '$paper->id_paper' ")->result();
						foreach ($author as $author):
						?>
						<li><?php echo $author->nama_author ?></li>
						<?php endforeach ?>
					</ol>
				</td>
				<td> 
					<a href="<?php echo base_url('revisi/detail/').$paper->id_paper ?>" class="btn btn-info btn-xs">DETAIL</a>
				</td>
			</tr>
			<?php endforeach ?>
		</table>
	</div>
</div>