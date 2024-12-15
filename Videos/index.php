<form action="" method="post">
	<p>
		Cole a URL do Youtube
		<input type="text" name="url"/>
	</p>
	<input type="submit" value="Carregar Vídeo"/>
</form>
<?php
	if(isset($_POST["url"])){
		$url = $_POST["url"];
		$youtube = explode("=",$url);
		//print_r($youtube);
		echo "<iframe width='300' height='168' 
		src='https://www.youtube.com/embed/$youtube[1]' frameborder='0' 
		allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' 
		allowfullscreen></iframe>";
	}
?>
