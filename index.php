 <?php
 try{ 
 require('Models/EtudiantManager.php');
   require('Controller/EtudiantController.php');
   	require ("Views/Response.php");
    
	$action = isset( $_GET['action']) ? $_GET['action'] : 'index';
 $action= $action."Action";

	if (is_callable($action)) {
		$action($_REQUEST);
	}

	else
			die("Cette action n'est pas autorisée !!!!!!!!!!!!");
 }
   catch(Exception $e) {
  
    require ("Views/vError.php");

  } 
?>