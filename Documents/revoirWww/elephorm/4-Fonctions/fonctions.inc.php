<?php 
	function moyenne($x,$y,$unit="euro")
	{
		$res=($x+$y)/2;
		$res.=$unit;
		return $res;
	}
?>