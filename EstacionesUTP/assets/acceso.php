<?php
	include ("funciones.php");
	@$login = $_POST["user"];
	@$clave = $_POST["pwd"];
	if (!@$_SESSION) {
		session_start();
	}
	$resultado=funciones::verificarRol($login, $clave);
	if (($resultado == 1)||($resultado == 2)) {
		if($resultado == 1)
		{	
		?>
		<script language="javascript">
			alert("Usuario Incorrecto");
		</script>
		<?php
		}
		if($resultado == 2)
		{
		?>
		<script language="javascript">
			alert("Contraseña Incorrecta");
		</script>
		<?php
		}
		?>
		<script language="javascript">
			window.location="inicio.php";
		</script>
	<?php
	}
	else
	{
		$_SESSION["nombre_user"]=$resultado["NOMBRE"]." ".$resultado["APELLIDO"];
		$_SESSION["rol"]=$resultado["ROL"];
		$_SESSION["login_time"]=time();
		$_SESSION["id_user"]=$login;
		header("Location:index.php");
	}

?>