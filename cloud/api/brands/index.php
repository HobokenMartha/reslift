<?php

include_once('/var/www/html/cloud/models/db/dbLib.php');
//include_once('/var/www/html/cloud/models/db/session.php');

include_once('/var/www/html/cloud/models/inventory/index.php');



extract($_REQUEST);
if(!isset($action)){

	echo('send action');
	return;
}


switch($action){

	case "getBrands":
		$res=getBrands();
		echo(json_encode($res));
		return;
	break;



	break;

	default:
		"send action";
		return;
	break;

	
}
?>