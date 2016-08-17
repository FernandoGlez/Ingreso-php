<?php
session_start();

if(isset($_SESSION['username'])) {
	echo "Puedes ver esta pagina";
	echo "<br><a href=destruir.php>Cerrar Session</a>";
}else{
	echo "no puedes ver esta pagina, Registrare e inicia sesion";
}
?>
