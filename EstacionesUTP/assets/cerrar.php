<?php
	session_start();
	If($_SESSION["nombre_user"]) {
		session_destroy(); ?>
		<script lenguage=javascript>
		alert("Sesion cerrada correctamente");
		window.location="inicio.php";
		</script>
	<?php }
	else { ?>
		<script language =javascript>
		alert("No ha iniciado sesion");
		window.location="inicio.php";
		</script>
<?php } ?>