<!DOCTYPE html>
<?php require 'archive_query.php'?>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="https://sourcecodester.com">Sourcecodester</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Students Data</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#form_modal"><span class="glyphicon glyphicon-plus"></span> Add product</button>
		<a href="archive.php" class="pull-right">Archive</a>
		<br /><br />
		<table class="table table-bordered">
			<thead class="alert-info">
				<tr>
					<th>Students</th>
					<th>Announcements</th>
					<th>Lectures</th>
					<th>Branch</th>
				</tr>
			</thead>
			<tbody style="background-color:#fff;">
				<?php
					require './../../connection.php';
					
					$query = mysqli_query($conn, "SELECT * FROM `es_payments`") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?php echo $fetch['Students']?></td>
					<td><?php echo $fetch['Announcements']?></td>
					<td><?php echo $fetch['Lectures']?></td>
					<td><?php echo $fetch['Branch']?></td>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>
	</div>
	<div class="modal fade" id="form_modal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="POST" action="save.php">
					<div class="modal-header">
						<h3 class="modal-title">Add Payment</h3>
					</div>
					<div class="modal-body">
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<div class="form-group">
								<label>Students</label>
								<input type="text" name="Students" class="form-control" required="required"/>
							</div>
							<div class="form-group">
								<label>Announcements</label>
								<input type="text" name="Announcements" class="form-control" required="required"/>
							</div>
							<div class="form-group">
								<label>Lectures</label>
								<input type="text" name="Lectures" class="form-control" required="required" />
							</div>
							<div class="form-group">
								<label>Branch</label>
								<input type="date" name="Branch" class="form-control" required="required" />
							</div>
						</div>
					</div>
					<div style="clear:both;"></div>
					<div class="modal-footer">
						<button name="save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Save</button>
						<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
					</div>
					</div>
				</form>
			</div>
		</div>
	</div>
<script src="js/jquery-3.2.1.min.js"></script>	
<script src="js/bootstrap.js"></script>	
</body>	
</html>