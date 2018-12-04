<h1>Submited Paper</h1>
<div class="panel panel-default">
	<div class="panel-heading">
		Detail Paper
	</div>
	<div class="table-responsive">
		<table class="table">
			<tr>
				<th>Date</th>
				<td><?php echo $paper->tanggal_submit ?></td>
			</tr>
			<tr>
				<th>Title</th>
				<td><?php echo $paper->judul ?></td>
			</tr>
			<tr>
				<th>Author</th>
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
			</tr>
		</table>
	</div>
	<div class="panel-footer">
		<a href="<?php echo base_url('paper/submited') ?>" class="btn btn-danger"><span class="glyphicon glyphicon-chevron-left"></span> Back</a>
	</div>
</div>
<hr>
<div class="panel panel-primary">
	<div class="panel-heading">
		REVISION
	</div>
	<div class="table-responsive">
		<table class="table table-striped">
			<?php if (count($revisi) > 0): ?>
				<tr>
					<th>No</th>
					<th>Date</th>
					<th>File</th>
					<th>Comment</th>
					<th>Status</th>
				</tr>
				<?php $no = 1; foreach ($revisi as $revisi): ?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $revisi->tanggal ?></td>
					<td><?php echo $revisi->file_paper ?></td>
					<td><?php echo $revisi->komentar ?></td>
					<td><?php echo $revisi->status ?></td>
				</tr>
			<?php endforeach ?>
			<?php else: ?>
				<h3 align="center">No Revision</h3>
			<?php endif ?>
		</table>
	</div>
	<div class="panel-footer">
		<button class="btn btn-primary" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span> Add Revision</button>
	</div>
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>