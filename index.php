<!DOCTYPE html>
<html>

	<head>

		<title>Adblock detector</title>
		<script src="js/ads.js"></script>

	</head>

	<body>

		<h3>Adblock detector page</h3>

		<p>O conteúdo da página será exibido aqui caso um bloqueador de anúncios não seja detectado.</p>

		<script>
			if( typeof antiAdblock == "undefined" ) {
        		location.replace("php/blocked.php");
    		} else {
				if( typeof rdN == "undefined" ) {
					location.replace("php/blocked.php");
				} else {
					if( rdN != "CkXWl9nvkyjtyK6jsHRDzsYDzb8hxGe7pAuya5Ap" ) {
						location.replace("php/blocked.php");
					}
				}
			}
		</script>

	</body>

</html>