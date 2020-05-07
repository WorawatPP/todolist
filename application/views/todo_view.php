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
				<h4>Show Todo</h4>
				<table class='table table-dark table-hover'>
					<thead>
						<tr>
							<th>ID</th>
							<th>TODO</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($query as $rs) { ?>
						<tr>
							<td><?php echo $rs->id; ?></td>
							<td><?php echo $rs->todo; ?></td>
							<td><a href="<?php echo site_url('home/edit/').$rs->id; ?>">Edit</a></td>
							<td><a href="<?php echo site_url('home/delete/').$rs->id; ?>"
									onclick="return confirm('ต้องการลบข้อมูล');">Delete</a></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>



</body>

</html>
