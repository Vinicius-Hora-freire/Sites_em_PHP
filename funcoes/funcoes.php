<?php
	function Calculadora($n1,$n2,$op){
		if($op=="a"){
			return $n1+$n2;
		}else if($op=="s"){
			return $n1-$n2;
		}else if($op=="m"){
			return $n1*$n2;
		}else{
			return $n1/$n2;
		}
	}
?>