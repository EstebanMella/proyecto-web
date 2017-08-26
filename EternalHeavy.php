<?php
	require 'templates/diccionarios.php';
	$html=file_get_contents('templates/templates.html');
	$htmlDos=file_get_contents('templates/bodyCabLogMenuLaIz.html');
	$htmlTres=file_get_contents('htmlProductos/EternalHeavy.html');


foreach ($arrayIndex as $key => $value) {
	$html=str_replace('{'.$key.'}',$value,$html);
}
foreach ($arrayIndex as $key => $value) {
	$htmlDos=str_replace('{'.$key.'}',$value, $htmlDos);

}
foreach ($arrayIndex2 as $key => $value) {
	$htmlTres=str_replace('{'.$key.'}',$value, $htmlTres);
}
foreach ($arrayAllProduc as $key => $value) {
	$htmlTres=str_replace('{'.$key.'}',$value, $htmlTres);
}
foreach ($arrayEterHeavy as $key => $value) {
	$htmlTres=str_replace('{'.$key.'}',$value, $htmlTres);
}

	print $html.$htmlDos.$htmlTres
?>