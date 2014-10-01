<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width; initial-scale=1"/>
		<link rel="stylesheet" href="bootstrap-3.2.0-dist/css/bootstrap.min.css" type="text/css"/>
		<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="js/angular.min.js"></script>
		<script type="text/javascript" src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container-fluid">
			<h1>FutureGo</h1>
			<form role="form">
				<div class="form-group">
					<label for="email">Email:</label>
					<input type="email" class="form-control" id="email" placeholder="Enter email">
				</div>
				<div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" class="form-control" id="pwd" placeholder="Enter password">
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox">
						Remember me</label>
				</div>
				<button type="submit" class="btn btn-default">
					Submit
				</button>
			</form>
		</div>
	</body>
</html>