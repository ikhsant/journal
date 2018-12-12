<h1>Dashboard</h1>
<div class="row">
	<div class="col-sm-4">
		<a href="<?php echo base_url('admin/jurnal') ?>">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-6">
							<span class="glyphicon glyphicon-book" style="font-size: 70px;"></span>
						</div>
						<div class="col-xs-6 text-right">
							<p style="font-size: 30px;"><b><?php echo count($jurnal) ?></b></p>
							<p><b>Journal</b></p>
						</div>
					</div>
				</div>
			</div>
		</a>
	</div>
	<div class="col-sm-4">
		<a href="<?php echo base_url('admin/paper') ?>">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-6">
							<span class="glyphicon glyphicon-list-alt" style="font-size: 70px;"></span>
						</div>
						<div class="col-xs-6 text-right">
							<p style="font-size: 30px;"><b><?php echo count($paper) ?></b></p>
							<p><b>Paper</b></p>
						</div>
					</div>
				</div>
			</div>
		</a>
	</div>
	<div class="col-sm-4">
		<a href="<?php echo base_url('admin/user') ?>">
			<div class="panel panel-warning">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-6">
							<span class="glyphicon glyphicon-user" style="font-size: 70px;"></span>
						</div>
						<div class="col-xs-6 text-right">
							<p style="font-size: 30px;"><b><?php echo count($user_all) ?></b></p>
							<p><b>User</b></p>
						</div>
					</div>
				</div>
			</div>
		</a>
	</div>
	<div class="col-sm-4">
		<a href="<?php echo base_url('paper/submited') ?>">
			<div class="panel panel-danger">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-6">
							<span class="glyphicon glyphicon-bullhorn" style="font-size: 70px;"></span>
						</div>
						<div class="col-xs-6 text-right">
							<p style="font-size: 30px;"><b><?php echo count($paper_waiting) ?></b></p>
							<p><b>Waiting Paper</b></p>
						</div>
					</div>
				</div>
			</div>
		</a>
	</div>
	<!-- <div class="col-sm-4">
		<a href="<?php echo base_url('paper/submited') ?>">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-6">
							<span class="glyphicon glyphicon-edit" style="font-size: 70px;"></span>
						</div>
						<div class="col-xs-6 text-right">
							<p style="font-size: 30px;"><b><?php echo count($revision) ?></b></p>
							<p><b>Revision</b></p>
						</div>
					</div>
				</div>
			</div>
		</a>
	</div>
	<div class="col-sm-4">
		<a href="<?php echo base_url('paper/submited') ?>">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-6">
							<span class="glyphicon glyphicon-edit" style="font-size: 70px;"></span>
						</div>
						<div class="col-xs-6 text-right">
							<p style="font-size: 30px;"><b><?php echo count($approve) ?></b></p>
							<p><b>Approve</b></p>
						</div>
					</div>
				</div>
			</div>
		</a>
	</div> -->
</div>