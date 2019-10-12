<!DOCTYPE html>
<html>

	<head>

		<title>Adblock detector</title>
		<script src="js/ads.js"></script>

	</head>

	<body>

		<p>Adblock detector page</p>

		<script>
			if( typeof antiAdblock == "undefined" ){
        		alert("Um bloqueador de anuncios foi detectado!");
    		}
		</script>

	</body>

</html>