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
			<tr>
				<th>Abstract</th>
				<td><?php echo $paper->abstrak ?></td>
			</tr>
		</table>
	</div>
	<div class="panel-footer">
		<a href="<?php echo base_url('paper/submited') ?>" class="btn btn-danger"><span class="glyphicon glyphicon-chevron-left"></span> Back</a>
	</div>
</div>
<hr>
<div class="panel panel-info">
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
					<th>Action</th>
				</tr>
				<?php $no = 1; foreach ($revisi as $revisi): ?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $revisi->tanggal ?></td>
					<td><a href="<?php echo base_url('uploads/paper/revisi/').$revisi->file_paper ?>" target="_blank"><?php echo $revisi->file_paper ?></a></td>
					<td><?php echo $revisi->komentar ?></td>
					<td>
						<?php 
						if(!empty($revisi->status)){
							if ($revisi->status == '1') {
								echo '<span class="label label-danger">Revision</span>';
							}elseif($revisi->status == '2'){
								echo '<span class="label label-primary">Approve</span>';
							}else{
								echo '<span class="label label-warning">Waiting</span>';
							}
						}else{
							echo '<span class="label label-warning">Waiting</span>';
						} ?>
					</td>
					<td>
						<?php if ($this->session->userdata('akses_level') == 'admin'): ?>
							<a href="<?php echo base_url('revisi/delete/').$paper->id_paper.'/'.$revisi->id_revisi ?>" class="btn-btn-danger" onclick="return confirm('Are You Sure?')"><span class="glyphicon glyphicon-remove"></span></a>
							<a href="#" data-toggle="modal" data-target="#myModal<?php echo $revisi->id_revisi ?>"><span class="glyphicon glyphicon-pencil"></span></a>
							<!-- Modal add -->
							<div id="myModal<?php echo $revisi->id_revisi ?>" class="modal fade" role="dialog">
								<div class="modal-dialog">

									<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Edit Revision</h4>
										</div>
										<form method="post" enctype="multipart/form-data">
											<div class="modal-body">
												<div class="form-group">
													<label>Date</label>
													<input type="text" class="form-control" value="<?php echo $revisi->tanggal ?>" readonly>
												</div>
												<div class="form-group">
													<label>File</label>
													<a href="<?php echo base_url('uploads/paper/revisi/').$revisi->file_paper ?>" target="_blank"><?php echo $revisi->file_paper ?></a>
													<input type="file" name="file_paper" class="form-control">
												</div>
												<div class="form-group">
													<label>Comment</label>
													<textarea class="form-control" name="komentar"><?php echo $revisi->komentar ?></textarea> 
												</div>
												<div class="form-group">
													<label>Status</label>
													<select class="form-control" name="status">
														<option value="1">Revision</option>
														<option value="2" <?php if($revisi->status == '1'){echo 'selected'; } ?>>Approve</option>
													</select>
												</div>
												<input type="hidden" name="id_revisi" value="<?php echo $revisi->id_revisi ?>"> 
												<input type="hidden" name="file_paper" value="<?php echo $revisi->file_paper ?>"> 
											</div>
											<div class="modal-footer">
												<button type="submit" class="btn btn-primary" name="edit"><span class="glyphicon glyphicon-save"></span> Edit</button>
												<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-times"></span> Close</button>
											</div>
										</form>
									</div>

								</div>
							</div> <!-- end edit modal -->
						<?php endif ?>
					</td>
				</tr>
			<?php endforeach ?>
			<?php else: ?>
				<h3 align="center">No Revision</h3>
			<?php endif ?>
		</table>
	</div>
	<div class="panel-footer">
		<?php if(isset($revisi->status)): ?>
		<?php if($revisi->status == '1' OR $revisi->status == ''): ?>
		<button class="btn btn-primary" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span> Add Revision</button>
		<?php endif ?>
		<?php endif ?>
	</div>
</div>

<!-- Modal add -->
<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Add Revision</h4>
			</div>
			<form method="post" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="form-group">
						<label>Date</label>
						<input type="text" class="form-control" value="<?php echo date('Y-m-d') ?>" readonly>
					</div>
					<div class="form-group">
						<label>File</label>
						<input type="file" name="file_paper" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Comment</label>
						<textarea class="form-control" name="komentar"></textarea>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary" name="submit"><span class="glyphicon glyphicon-save"></span> Submit</button>
					<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-times"></span> Close</button>
				</div>
			</form>
		</div>

	</div>
</div>

