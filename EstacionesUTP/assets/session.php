<?php
	include ("funciones.php");
	session_start();
	if(!$_SESSION) {?>
                <script lenguage=javascript>
                alert("No ha iniciado Sesion");
                window.location="inicio.php";
		</script>
		<?php
        }
    /*if (isset($_SESSION["id_user"])) {
    	if (funciones::verificarSesion()) {
    		session_destroy();
    		?>
    	<script language="javascript">
			alert("Terminó su tiempo de sesión");
			window.location="inicio.php";
		</script>
    	<?php
    	}
    }*/
    $_SESSION["login_time"]=time();
	$nombreuser = $_SESSION["nombre_user"];
	$rol = $_SESSION["rol"];
?>