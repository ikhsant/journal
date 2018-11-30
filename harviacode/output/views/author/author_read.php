<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Author Read</h2>
        <table class="table">
	    <tr><td>Fist Name</td><td><?php echo $fist_name; ?></td></tr>
	    <tr><td>Last Name</td><td><?php echo $last_name; ?></td></tr>
	    <tr><td>Address1</td><td><?php echo $address1; ?></td></tr>
	    <tr><td>Address2</td><td><?php echo $address2; ?></td></tr>
	    <tr><td>City</td><td><?php echo $city; ?></td></tr>
	    <tr><td>Country</td><td><?php echo $country; ?></td></tr>
	    <tr><td>Phone</td><td><?php echo $phone; ?></td></tr>
	    <tr><td>Email</td><td><?php echo $email; ?></td></tr>
	    <tr><td>Zip</td><td><?php echo $zip; ?></td></tr>
	    <tr><td>Institution</td><td><?php echo $institution; ?></td></tr>
	    <tr><td>Category</td><td><?php echo $category; ?></td></tr>
	    <tr><td>Username</td><td><?php echo $username; ?></td></tr>
	    <tr><td>Password</td><td><?php echo $password; ?></td></tr>
	    <tr><td>Last Login</td><td><?php echo $last_login; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('author') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>