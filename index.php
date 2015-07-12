<!DOCTYPE html>
<html lang='es' ng-app="errorHandler">
<head>
	<title></title>
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<div class="page_header">
			<h1>Error handler</h1>
		</div>		
	
		<!-- angular view div -->
		<div ng-view></div>
	</div>


	<!-- javscripts files -->
	<script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="node_modules/angular/angular.min.js"></script>
	<script type="text/javascript" src="node_modules/angular-route/angular-route.min.js"></script>
	<!-- javascripts files application -->
	<script type="text/javascript" src="js/routes.js"></script>
	<script type="text/javascript" src="js/controllers.js"></script>
</body>
</html>