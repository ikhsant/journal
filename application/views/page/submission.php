<div class="row">
	<div class="col-sm-4">
		<h4>
			Wellcome
			<br>
			<b><?php echo $user->nama; ?></b>
		</h4>
		<hr>
		<div class="panel panel-default">
			<div class="panel-heading">
				MENU
			</div>
			<div class="panel-body">
				<ul>
					<li><a href="#">Paper Submission</a></li>
					<li><a href="#">Change Profile</a></li>
					<li><a href="#">CV and Photos</a></li>
					<li><a href="#">Change Password</a></li>
					<li><a href="<?php base_url('login/logout') ?>">Logout</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-sm-8">
		<h3>Revise Paper Submission</h3>
		<p><b>To submit a paper, please use form below</b></p>
		<form method="post" class="form-horizontal">
			<div class="form-group">
				<label class="control-label col-sm-4">First Name</label>
				<div class="col-sm-8">
					<input type="text" disabled value="<?php echo $user->nama ?>" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-4">Last Name</label>
				<div class="col-sm-8">
					<input type="text" disabled value="Thohir" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-4">Email</label>
				<div class="col-sm-8">
					<input type="text" disabled value="<?php echo $user->email ?>" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-4">Paper Title</label>
				<div class="col-sm-8">
					<input type="text" name="paper_title" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-4">Paper Abstract</label>
				<div class="col-sm-8">
					<textarea name="abstract" class="form-control"></textarea>
				</div>
			</div>
		</form>
	</div>
</div>