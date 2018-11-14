<?php 
	session_start();
	require_once "Model.php";
	require_once "helpers/Ext.php";
	$p = isset($_GET['p'])?$_GET['p']:'Usuarios';
	$p = explode('/', $p);
	require_once 'controllers/'.$p[0].'.php';
	$p[1] = isset($p[1])?$p[1]:'index';

	$c = new $p[0];
	$m = $p[1];
	$i = @$p[2];

	$n = count($p);

	switch ($n) {
		case '3':
			$data = $c->$m($i);
			break;
		
		default:
			$data = $c->$m();
			break;
	}

	foreach ($data as $key => $value) {
		$$key = $value;
	}

	function site_url(){

	return "http://localhost/projetoImagine/";
}
 ?>

 