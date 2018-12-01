<h1>Forgot Password</h1>
<p>Please enter your email address</p>
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
		<input type="email" class="form-control" name="email" value="" required>
	</div>
	<button type="submit" name="forgot_pass" class="btn btn-primary">Submit</button>
</form>
<hr>
<h2>Authors Fees:</h2>
<p>On Line publication in IJEEI is free. Postal fees are needed for printed version.</p>