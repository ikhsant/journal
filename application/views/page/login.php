<h1>Author's Member Area</h1>
<p>Please enter your email address and password for author's member area.</p>
<p>Not registered yet? Please <a href="<?php echo base_url('register') ?>">click here to register.</a></p>
<p>Lost Password? Please <a href="#">Click here to recover</a></p>
<?php
if($this->session->flashdata('success')) {
	echo '<div class="alert alert-success">';
	echo $this->session->flashdata('success');
	echo '</div>';
}
if($this->session->flashdata('error')) {
	echo '<div class="alert alert-danger">';
	echo $this->session->flashdata('error');
	echo '</div>';
}
// Cetak validasi error
echo validation_errors('<div class="alert alert-danger">','</div>');
?>
<form method="post" style="max-width: 300px">
	<div class="form-group">
		<label>Email address:</label>
		<input type="email" class="form-control" name="email" required>
	</div>
	<div class="form-group">
		<label>Password:</label>
		<input type="password" class="form-control" name="password" required>
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>
<hr>
<h2>Authors Fees:</h2>
<p>On Line publication in IJEEI is free. Postal fees are needed for printed version.</p>