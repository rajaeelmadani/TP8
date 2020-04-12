<?php
 
function AfficherReponse($vue , array $data=array()) {

extract($data);
$file ="Views/". $vue;
if (file_exists($file)) {
	ob_start();
	require ($file);
	//si on écrit cette ligne les views ne s'affichent pas 
	//$view= ob_get_clean(); 
}	

require ("Config/Config.php");
$template =$config["templates_path"].$config["active_template"];
require($template);

}
?>
