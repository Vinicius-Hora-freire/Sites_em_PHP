<?php
	$valor = $_POST["num"];
	$opcao = $_POST["as"];
	
	if($opcao == 'a'){
		echo "Antecessores de: $valor <br/>";
		for($x=1;$x<=20;$x++){
			/*$resultado = $valor - $x;
			echo $resultado . "<br/>";*/
			//echo $valor--;
			$valor = $valor - 1;
			echo "$valor <br/>";
		}
	}else{
		echo "Sucessores de: ".$valor."<br/>";
		$x = 1;
		while($x<=10){
			$resultado = $valor + $x;
			$x++;
			echo $resultado . "<br/>";
		}
	}
	
?>