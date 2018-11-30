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
        <h2 style="margin-top:0px">Author <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Fist Name <?php echo form_error('fist_name') ?></label>
            <input type="text" class="form-control" name="fist_name" id="fist_name" placeholder="Fist Name" value="<?php echo $fist_name; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Last Name <?php echo form_error('last_name') ?></label>
            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name" value="<?php echo $last_name; ?>" />
        </div>
	    <div class="form-group">
            <label for="address1">Address1 <?php echo form_error('address1') ?></label>
            <textarea class="form-control" rows="3" name="address1" id="address1" placeholder="Address1"><?php echo $address1; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="address2">Address2 <?php echo form_error('address2') ?></label>
            <textarea class="form-control" rows="3" name="address2" id="address2" placeholder="Address2"><?php echo $address2; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="varchar">City <?php echo form_error('city') ?></label>
            <input type="text" class="form-control" name="city" id="city" placeholder="City" value="<?php echo $city; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Country <?php echo form_error('country') ?></label>
            <input type="text" class="form-control" name="country" id="country" placeholder="Country" value="<?php echo $country; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Phone <?php echo form_error('phone') ?></label>
            <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" value="<?php echo $phone; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Email <?php echo form_error('email') ?></label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Zip <?php echo form_error('zip') ?></label>
            <input type="text" class="form-control" name="zip" id="zip" placeholder="Zip" value="<?php echo $zip; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Institution <?php echo form_error('institution') ?></label>
            <input type="text" class="form-control" name="institution" id="institution" placeholder="Institution" value="<?php echo $institution; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Category <?php echo form_error('category') ?></label>
            <input type="text" class="form-control" name="category" id="category" placeholder="Category" value="<?php echo $category; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Username <?php echo form_error('username') ?></label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $username; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Password <?php echo form_error('password') ?></label>
            <input type="text" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>" />
        </div>
	    <div class="form-group">
            <label for="timestamp">Last Login <?php echo form_error('last_login') ?></label>
            <input type="text" class="form-control" name="last_login" id="last_login" placeholder="Last Login" value="<?php echo $last_login; ?>" />
        </div>
	    <input type="hidden" name="author_id" value="<?php echo $author_id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('author') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>