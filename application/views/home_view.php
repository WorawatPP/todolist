<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>

<body>

	<div class="container">
		<div class="row" align="center">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<h1>::TODO List::</h1>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row" align="center">
			<div class="col-md-4"></div>
			<div class="col-md-4">
			<form action="<?php echo site_url('home/addtodo'); ?>" method="post">
		<div class="form-group">
			<label>Add TODO</label>
			<input type="text" class="form-control" name="todo" placeholder="">
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
			</div>
		</div>
	</div>


</body>

</html>
