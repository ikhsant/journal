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
				<th>Submited</th>
				<th>Title</th>
				<th>Status</th>
				<th>Revision</th>
			</tr>
			<?php $no = 1; foreach ($paper as $paper): ?>
			<?php 
			$published = $this->Crud_model->select('jurnal_paper','*','id_paper ="'.$paper->id_paper.'"')->row();
			$id_user_submit = $paper->id_user;
			$user_submit = $this->Crud_model->select('user','name','id_user ="'.$id_user_submit.'"')->row();
			?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $paper->tanggal_submit ?></td>
				<td><?php echo $user_submit->name ?></td>
				<td><?php echo $paper->judul ?></td>
				<td>
					<?php
					if ($published) {
						echo '<span class="label label-success">Published</span>';
					}else{
						$paper_file_status = $this->Crud_model->select('paper_file','*','id_paper ="'.$paper->id_paper.'"','','id_paper_file DESC')->row();
						if (count($paper_file_status) > 0){
							if ($paper_file_status->status == '1') {
								echo '<span class="label label-danger">Revision</span>';
							}elseif($paper_file_status->status == '2'){
								echo '<span class="label label-success">Approve</span>';
							}elseif($paper_file_status->status == '0'){
								echo '<span class="label label-warning">Waiting</span>';
							}else{
								echo '<span class="label label-warning">Unknown</span>';
							}
						}
					}
					?>
				</td>
				<td> 
					<a href="<?php echo base_url('paper/revisi/').$paper->id_paper ?>" class="btn btn-info btn-xs">DETAIL</a>
				</td>
			</tr>
		<?php endforeach ?>
	</table>
</div>
</div>
<a href="<?php echo base_url('submission') ?>" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Submit More</a>