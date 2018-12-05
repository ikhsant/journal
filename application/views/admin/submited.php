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
				<th>Author</th>
				<th>Status</th>
				<th>Revision</th>
			</tr>
			<?php $no = 1; foreach ($paper as $paper): ?>
			<?php 
			$id_user_submit = $paper->id_user;
			$user_submit = $this->Crud_model->select('user','name','id_user ="'.$id_user_submit.'"')->row();
			?>
				<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $paper->tanggal_submit ?></td>
				<td><?php echo $user_submit->name ?></td>
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
					<?php
					$revisi = $this->Crud_model->select('revisi','*','id_paper ="'.$paper->id_paper.'"')->row();
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
					<a href="<?php echo base_url('revisi/detail/').$paper->id_paper ?>" class="btn btn-info btn-xs">DETAIL</a>
				</td>
			</tr>
			<?php endforeach ?>
		</table>
	</div>
</div>