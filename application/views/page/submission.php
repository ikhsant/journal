<h3>Paper Submission</h3>
<div class="panel panel-default">
	<div class="panel-heading">
		<b>To submit a paper, please use form below</b>
	</div>
	<form method="post" class="form-horizontal" enctype="multipart/form-data">

		<div class="panel-body">
			<div class="form-group">
				<label class="control-label col-sm-4">Choose Journal</label>
				<div class="col-sm-8">
					<select name="jurnal" class="form-control" required>
						<?php foreach ($jurnal as $jurnal): ?>
							<option value="<?php echo $jurnal->id_jurnal ?>"><?php echo $jurnal->judul_jurnal ?></option>
						<?php endforeach ?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-4">Paper Title</label>
				<div class="col-sm-8">
					<input type="text" name="judul" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-4">Paper Abstract</label>
				<div class="col-sm-8">
					<textarea name="abstrak" class="form-control" required></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-4">Keywords</label>
				<div class="col-sm-8">
					<input type="text" name="keyword" class="form-control" required>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-4">Paper Categories</label>
				<div class="col-sm-8">
					<select type="text" name="kategori" class="form-control" required>
						<option value="mechanical engineering">mechanical engineering</option>
						<option value="civil engineering">civil engineering</option>
						<option value="industrial engineering">industrial engineering</option>
						<option value="electrical engineering">electrical engineering</option>
						<option value="power engineering">power engineering</option>
						<option value="environmental engineering">environmental engineering</option>
						<option value="postharvest technology">postharvest technology</option>
						<option value="food technology">food technology</option>
						<option value="biotechnology">biotechnology</option>
						<option value="emerging technologies">emerging technologies</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-4">Paper File (MSWord)</label>
				<div class="col-sm-8">
					<input type="file" name="file_paper" class="form-control" accept=".doc,.docx" required>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-4">Originality Declaration & Copyright Transfer (PDF)</label>
				<div class="col-sm-8">
					<input type="file" name="pernyataan_originial" accept=".pdf" class="form-control" required>
				</div>
			</div>
			<div class="form-group" id="author_input">
				<label class="control-label col-sm-4">Author</label>
				<div class="col-sm-8">
					<input type="text" name="nama_author[]" class="form-control" placeholder="Full Name" value="<?php echo $user->name ?>" required>
					<input type="text" name="email_author[]" class="form-control" placeholder="Email" value="<?php echo $user->email ?>" required>
					<input type="text" name="institusi_author[]" class="form-control" placeholder="Institution" value="<?php echo $user->institution ?>" required>
				</div>
			</div>
			<div id="baru">

			</div>
			<div class="text-center">
				<span class="btn btn-primary btn-sm" id="add_author">Add</span>
				<span class="btn btn-danger btn-sm" id="remove_author">Remove</span>
			</div>

		</div>
		<div class="panel-footer text-center">
			<button class="btn btn-primary" type="submit" name="submit_paper"><span class="glyphicon glyphicon-save"></span> Submit</button>
		</div>
	</form>

</div>

<h3>NOTE:</h3>
<ol>
	<li>Filename title's length should less than 50 character and contain alphabetical character only</li>
	<li>The submitted menuscript should follow the instruction for manuscript preparation. The examples of manuscript can be downloaded from here</li>
	<li>Please fill Originality Declaration and Copyright Transfer and upload it together with the paper. The template can be downloaded from here</li>
	<li>To check whether the paper has been uploaded successfully:</li>
	<li>Log in to member area with your email and password</li>
	<li>Click "Paper Submission" in the left navigation bar, and your submitted paper will be shown</li>
	<li>Click on "Paper": if the paper can be downloaded and opened successfully, it means that your paper has been uploaded successfully; otherwise your paper may truncated during upload process.</li>
	<li>Please delete the current and submit the paper again.</li>
	<li>Click on "Originality": if the originality and copyright letter can be downloaded and opened successfully, it means that has been uploaded successfully; otherwise the letter may truncated during upload process.</li>
	<li>Please delete the current and submit again.</li>
	<li>Once the paper is began reviewed by us, you cannot delete the paper</li>
	<li>Proposed reviewers may or may not be asigned because of various considerations</li>
</ol>


