<html>
<head>
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>
	<script>
		setInterval(reloadImage, 2000);
			
		function reloadImage() {
			$(".view").html("<img src='cameras/1.jpg'>");
			console.log('loaded');
		}
	</script>
</head>

<body>
	<h1>VIEW</h1>
	<div class='view'>
		<img src='cameras/1.jpg'>
	</div>
</body>

</html>