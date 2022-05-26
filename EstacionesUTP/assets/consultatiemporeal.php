<?php
    include 'BD.php';  
    /*$a=$_POST['tipo'];
    $b=$_POST['fecha'];*/
    $a=$_POST['id'];
    try
    {
            $pdo = BD::obtenerBD()->obtenerConexion();
            //$comando="SELECT FECHA, VALOR FROM datos WHERE ID_ESTACION = ? AND FECHA = ?";
            $comando="SELECT VALOR FROM datos WHERE ID = ?";
            $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
            //$sentencia->execute(array($a,$b));
            $sentencia->execute(array($a));
            $consulta=$sentencia->fetch(PDO::FETCH_ASSOC);
            echo json_encode($consulta);
            //return $consulta;
    }
    catch(PDOException $e)
    {
            return $e;
    }
?>