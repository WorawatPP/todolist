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

	<h1>::Edit Todo::</h1>
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-7">
				<form action="<?php echo site_url('home/edittodo'); ?>" method="post">
					<div class="form-group row">
						<div class="col-sm-2 control-label"></div>
						<div class="col-sm-6">
                        <label>Todo</label>
							<input type="text" name="todo" required class="form-control" placeholder="" value="<?php echo $query->todo; ?>">
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-2 control-label"></div>
						<div class="col-sm-6">
                            <input type="hidden" name="id" value="<?php echo $query->id; ?>">
							<button type="submit" class="btn btn-primary">Edit Todo</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>


</body>

</html>
