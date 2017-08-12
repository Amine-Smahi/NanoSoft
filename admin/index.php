<html>
<head>
	<title></title>

	<!--Custom CSS-->
	<link rel="stylesheet" type="text/css" href="../css/global.css">
	<!--Bootstrap CSS-->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <!--Script-->
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container" style="margin:10% auto;width:400px;">
		<div class="panel panel-success">
			<div class="panel-heading">
			<h3 class="panel-title text-center">Administrator</h3>
		</div>
			<div class="panel-body">
			<form method="POST" class="form-signin" action="login.php">
				<input type="text" class="form-control" name="uname" placeholder="Username" required>
				<input type="password" class="form-control" name="pwd"placeholder="Password" required>
				<input type="submit" class="btn btn-success" value="Login" style="width:100%;">
			</form>
				</div>
			</div>
		</div>
	</body>
</html