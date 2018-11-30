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
        <h2 style="margin-top:0px">Author List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('author/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('author/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('author'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Fist Name</th>
		<th>Last Name</th>
		<th>Address1</th>
		<th>Address2</th>
		<th>City</th>
		<th>Country</th>
		<th>Phone</th>
		<th>Email</th>
		<th>Zip</th>
		<th>Institution</th>
		<th>Category</th>
		<th>Username</th>
		<th>Password</th>
		<th>Last Login</th>
		<th>Action</th>
            </tr><?php
            foreach ($author_data as $author)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $author->fist_name ?></td>
			<td><?php echo $author->last_name ?></td>
			<td><?php echo $author->address1 ?></td>
			<td><?php echo $author->address2 ?></td>
			<td><?php echo $author->city ?></td>
			<td><?php echo $author->country ?></td>
			<td><?php echo $author->phone ?></td>
			<td><?php echo $author->email ?></td>
			<td><?php echo $author->zip ?></td>
			<td><?php echo $author->institution ?></td>
			<td><?php echo $author->category ?></td>
			<td><?php echo $author->username ?></td>
			<td><?php echo $author->password ?></td>
			<td><?php echo $author->last_login ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('author/read/'.$author->author_id),'Read'); 
				echo ' | '; 
				echo anchor(site_url('author/update/'.$author->author_id),'Update'); 
				echo ' | '; 
				echo anchor(site_url('author/delete/'.$author->author_id),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </body>
</html>