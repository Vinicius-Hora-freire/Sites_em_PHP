<?php
	require_once "funcao.php";
	if(ParImpar($_POST['n1'])){
		echo "Avança, pois você digitou um valor par";
	}else{
		echo "Segura aê, pois você digitou um valor ímpar";
	}
	
?>