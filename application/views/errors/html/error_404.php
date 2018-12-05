<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>404 Page Not Found</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</style>
</head>
<body>
	<div class="container text-center">
<div class="panel panel-danger" style="width: 500px;margin: auto; margin-top: 50px">
	<div class="panel-heading text-center">
		<h1><?php echo $heading; ?></h1>
		<?php echo $message; ?>
		<a href="#" class="btn btn-info" onclick="window.history.back();"><span class="glyphicon glyphicon-home"></span> HOME</a>
	</div>
</div>
</div>
</body>
</html>