<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container-fluid">
		<div class="row">
		<div class="panel panel-success">
		<div class="panel-body">
				<table id="example" class="table table-responsive table-hover" style="width:100%">
					<thead>
						<tr>
							<th>No</th>
							<th>No Ruang</th>
							<th>NIM</th>
							<th>Waktu Pinjam</th>
							<th>Waktu Kembali</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($pinjam as $key) { 
							?>
			            <tr>
			            	<td><?php echo $key->nopinjam ?></td>
			                <td><?php echo $key->noruang?></td>
			                <td><?php echo $key->nim?></td>
			                <td><?php echo $key->waktupinjam?></td>
			                <td><?php echo $key->waktukembali?></td>
			                <td><?php echo $key->status?></td>
			            </tr>
			            <?php } ?>
					</tbody>
				</table>
			</div>
</div>
</div>
</div>
</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>