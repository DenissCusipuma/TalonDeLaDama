
<?php 
	
	$host = 'localhost';
	$user = 'root';
	$password = '';
	$db = 'cequllqui';
	
	$conex = @mysqli_connect($host,$user,$password,$db);

	if(!$conex){
		echo "Error en la conexión";
	}
	

	/*	
	$conex = new mysqli("den1.mysql2.gear.host", "cequllqui", "Tv222_e_a40g", "cequllqui", 3306);
	if ($conex->connect_errno) {
		echo "Fallo al conectar a MySQL: (" . $conex->connect_errno . ") " . $conex->connect_error;
	}
	*/
?>



