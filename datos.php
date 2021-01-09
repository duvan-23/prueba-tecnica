<?php


class operaciones{
	public $numero1;
	public $numero2;
	function suma(){
		$numero1=$_REQUEST["numero1"];
		$numero2=$_REQUEST["numero2"];
		echo $numero1+$numero2;
	}
	function resta(){
		$numero1=$_REQUEST["numero1"];
		$numero2=$_REQUEST["numero2"];
		echo $numero1-$numero2;
	}
	function multiplicacion(){
		$numero1=$_REQUEST["numero1"];
		$numero2=$_REQUEST["numero2"];
		echo $numero1*$numero2;
	}
	function division(){
		$numero1=$_REQUEST["numero1"];
		$numero2=$_REQUEST["numero2"];
		echo $numero1/$numero2;
	}
}
$operar=new operaciones();
$operacion=$_REQUEST["operacion"];
if(	$operacion=="suma"){
	$operar->suma();
}else if(	$operacion=="resta"){
	$operar->resta();
}else if(	$operacion=="multiplicacion"){
	$operar->multiplicacion();
}else if(	$operacion=="division"){
	$operar->division();
}

