<div class="row">
	<div class="col-sm-4">
		<h4>Wellcome</h4>
		<h4 style="margin: 0px"><b><?php echo $user->name ?></b></h4> 
		<p><span class="label label-primary"><?php echo $user->akses_level ?></span></p>
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
					<li><a href="<?php echo base_url('logout') ?>">Logout</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>