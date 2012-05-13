<html>
<head>
	<style>
		.slideshow img {
			position: absolute; top: 0; bottom: 0; left: 0; right: 0;
		}
	</style>
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>
	<script>
		setInterval(reloadImage, 1000);
			
		function reloadImage() {
			$(".slideshow").prepend("<img src='cameras/1.jpg'>");
			$(".slideshow img").last().fadeOut(300, function(){
				$(".slideshow img").last().remove();
			});
			
		}
	
	</script>
</head>

<body>
	<h1>VIEW</h1>
	<div class='slideshow' style='width: 320px; height: 240px; float: left; position: relative;'>
		<img src='cameras/1.jpg'>
	</div>
</body>

</html>