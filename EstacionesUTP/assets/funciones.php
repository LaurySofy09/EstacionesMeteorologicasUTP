<?php
     	include 'BD.php';

    class funciones
    {

	public static function insertarUsuario($a, $b, $c, $d, $e, $f)
        {
                try
                {
                        $pdo = BD::obtenerBD()->obtenerConexion();
                        $comando="INSERT INTO usuario(CEDULA, NOMBRE, APELLIDO, PASSWORD, ROL, ID_INSTIT) values(?,?,?,?,?,?)";
                        $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                        $sentencia->execute(array($a,$b,$c,$d,$e,$f));
                        return $sentencia->rowCount();
                }
                catch(PDOException $e)
                {
                        return $e->getMessage();
                }
        }

	public static function consultarUsuario()
        {
                try
                {
                        $pdo = BD::obtenerBD()->obtenerConexion();
                        $comando="SELECT * FROM usuario";
                        $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                        $sentencia->execute(array());
                        $consulta=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                        return $consulta;
                }
                catch(PDOException $e)
                {
                        return $e;
                }
        }

        public static function buscarUsuario($a)
        {
                try
                {
                        $pdo = BD::obtenerBD()->obtenerConexion();
                        $comando="SELECT * FROM usuario WHERE CEDULA = ?";
                        $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                        $sentencia->execute(array($a));
                        $consulta=$sentencia->fetch(PDO::FETCH_ASSOC);
                        if ($consulta) {
                            return $consulta;
                        }
                        else
                        {
                            return 0;
                        }
                }
                catch(PDOException $e)
                {
                        return $e;
                }
        }

	public static function modificarUsuario($a, $A, $b, $c, $d, $e, $f, $g)
        {
                try
                {
                        $pdo = BD::obtenerBD()->obtenerConexion();
                        $comando="UPDATE usuario SET CEDULA = ?, NOMBRE = ?, APELLIDO = ?, PASSWORD = ?, ROL = ?, ESTADO = ?, ID_INSTIT = ? WHERE CEDULA = ?";
                        $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                        $sentencia->execute(array($a,$b,$c,$d,$e,$f,$g,$A));
                        return $sentencia->rowCount();
                }
                catch(PDOException $e)
                {
                        return $e;
                }
        }


	public static function eliminarUsuario($a)
        {
                try
                {
                        $pdo = BD::obtenerBD()->obtenerConexion();
                        // $comando="DELETE FROM # WHERE # =";
                        $comando="UPDATE usuario SET ESTADO = FALSE WHERE CEDULA = ?";
                        $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                        $sentencia->execute(array($a));
                        return $pdo->lastInsertId();
                }
                catch(PDOException $e)
                {
                        return $e;
                }
        }
    public static function activarUsuario($a)
        {
                try
                {
                        $pdo = BD::obtenerBD()->obtenerConexion();
                        // $comando="DELETE FROM # WHERE # =";
                        $comando="UPDATE usuario SET ESTADO = TRUE WHERE CEDULA = ?";
                        $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                        $sentencia->execute(array($a));
                        return $pdo->lastInsertId();
                }
                catch(PDOException $e)
                {
                        return $e;
                }
        }

        public static function verificarUsuario($a)
        {
                try
                {
                        $pdo = BD::obtenerBD()->obtenerConexion();
                        $comando="SELECT * FROM usuario WHERE CEDULA = ?";
                        $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                        $sentencia->execute(array($a));
                        $consulta=$sentencia->fetchColumn();
                        if ($consulta>0) {
                            return 1;
                        }
                        else
                        {
                            return 0;
                        }
                }
                catch(PDOException $e)
                {
                        return $e;
                }
        }

    public static function verificarRol($a, $b)
        {
                try
                {
                        $pdo = BD::obtenerBD()->obtenerConexion();
                        $comando="SELECT COUNT(*) FROM usuario WHERE CEDULA = ?";
                        $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                        $sentencia->execute(array($a));
                        $resultado=$sentencia->fetchColumn();
                        if($resultado>0)
                        {
                            $comando="SELECT COUNT(*) FROM usuario WHERE CEDULA = ? AND PASSWORD = ?";
                            $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                            $sentencia->execute(array($a,$b));
                            $resultado=$sentencia->fetchColumn();
                            if($resultado>0)
                            {
                                $comando="SELECT * FROM usuario WHERE CEDULA = ? AND PASSWORD = ?";
                                $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                                $sentencia->execute(array($a,$b));
                                $consulta=$sentencia->fetch(PDO::FETCH_ASSOC);
                                return $consulta;
                            }
                            else
                            {
                                return 2;
                            }
                        }
                        else
                        {
                            return 1;
                        }
                }
                catch(PDOException $e)
                {
                        return $e;
                }
        }

    public static function insertarInstitucion($a, $b, $c)
        {
                try
                {
                        $pdo = BD::obtenerBD()->obtenerConexion();
                        $comando="INSERT INTO institucion(NOMBRE, TELEFONO, CORREO) values(?,?,?)";
                        $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                        $sentencia->execute(array($a,$b,$c));
                        return $pdo->lastInsertId();
                }
                catch(PDOException $e)
                {
                        return $e;
                }
        }

    public static function consultarInstitucion()
        {
                try
                {
                        $pdo = BD::obtenerBD()->obtenerConexion();
                        $comando="SELECT * FROM institucion";
                        $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                        $sentencia->execute(array());
                        $consulta=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                        return $consulta;
                }
                catch(PDOException $e)
                {
                        return $e;
                }
        }

        public static function buscarInstitucion($a)
        {
                try
                {
                        $pdo = BD::obtenerBD()->obtenerConexion();
                        $comando="SELECT * FROM institucion WHERE ID = ?";
                        $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                        $sentencia->execute(array($a));
                        $consulta=$sentencia->fetch(PDO::FETCH_ASSOC);
                        return $consulta;
                }
                catch(PDOException $e)
                {
                        return $e;
                }
        }

    public static function modificarInstitucion($a, $A, $b, $c, $d,$e)
        {
                try
                {
                        $pdo = BD::obtenerBD()->obtenerConexion();
                        $comando="UPDATE institucion SET ID = ?, NOMBRE = ?, TELEFONO = ?, CORREO = ?, ESTADO = ? WHERE ID = ?";
                        $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                        $sentencia->execute(array($a,$b,$c,$d,$e,$A));
                        return $sentencia->rowCount();
                }
                catch(PDOException $e)
                {
                        return $e;
                }
        }


    public static function eliminarInstitucion($a)
        {
                try
                {
                        $pdo = BD::obtenerBD()->obtenerConexion();
                        // $comando="DELETE FROM # WHERE # =";
                        $comando="UPDATE institucion SET ESTADO = FALSE WHERE ID = ?";
                        $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                        $sentencia->execute(array($a));
                        return $pdo->lastInsertId();
                }
                catch(PDOException $e)
                {
                        return $e;
                }
        }
    public static function activarInstitucion($a)
        {
                try
                {
                        $pdo = BD::obtenerBD()->obtenerConexion();
                        // $comando="DELETE FROM # WHERE # =";
                        $comando="UPDATE institucion SET ESTADO = TRUE WHERE ID = ?";
                        $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                        $sentencia->execute(array($a));
                        return $pdo->lastInsertId();
                }
                catch(PDOException $e)
                {
                        return $e;
                }
        }

    public static function verificarInstitucion($a, $b, $c)
        {
                try
                {
                        $pdo = BD::obtenerBD()->obtenerConexion();
                        $comando="SELECT * FROM institucion WHERE NOMBRE = ? AND TELEFONO = ? AND CORREO = ?";
                        $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                        $sentencia->execute(array($a, $b, $c));
                        $consulta=$sentencia->fetchColumn();
                        if ($consulta>0) {
                            return 1;
                        }
                        else
                        {
                            return 0;
                        }
                }
                catch(PDOException $e)
                {
                        return $e;
                }
        }


    public static function insertarEstacion($a, $b, $c, $d, $e)
        {
                try
                {
                        $pdo = BD::obtenerBD()->obtenerConexion();
                        $comando="INSERT INTO antena(ID, ID_LUGAR, COORD_X, COORD_Y, DESCRIPCION) values(?,?,?,?,?)";
                        $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                        $sentencia->execute(array($a,$b,$c,$d,$e));
                        return $sentencia->rowCount();
                }
                catch(PDOException $e)
                {
                        return $e;
                }
        }

    public static function consultarEstacion()
        {
                try
                {
                        $pdo = BD::obtenerBD()->obtenerConexion();
                        $comando="SELECT * FROM antena";
                        $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                        $sentencia->execute();
                        $consulta=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                        return $consulta;
                }
                catch(PDOException $e)
                {
                        return $e;
                }
        }

    public static function buscarEstacion($a)
        {
                try
                {
                        $pdo = BD::obtenerBD()->obtenerConexion();
                        $comando="SELECT * FROM antena WHERE ID = ?";
                        $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                        $sentencia->execute(array($a));
                        $consulta=$sentencia->fetch(PDO::FETCH_ASSOC);
                        return $consulta;
                }
                catch(PDOException $e)
                {
                        return $e;
                }
        }

    public static function modificarEstacion($a, $A, $b, $c, $d, $e, $f)
        {
                try
                {
                        $pdo = BD::obtenerBD()->obtenerConexion();
                        $comando="UPDATE antena SET ID = ?, ID_LUGAR = ?, COORD_X = ?, COORD_Y = ?, DESCRIPCION = ?, ESTADO = ?  WHERE ID = ?";
                        $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                        $sentencia->execute(array($a,$b,$c,$d,$e,$f,$A));
                        return $sentencia->rowCount();
                }
                catch(PDOException $e)
                {
                        return $e;
                }
        }


    public static function eliminarEstacion($a)
        {
                try
                {
                        $pdo = BD::obtenerBD()->obtenerConexion();
                        // $comando="DELETE FROM # WHERE # =";
                        $comando="UPDATE antena SET ESTADO = FALSE WHERE ID = ?";
                        $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                        $sentencia->execute(array($a));
                        return $pdo->lastInsertId();
                }
                catch(PDOException $e)
                {
                        return $e;
                }
        }
    public static function activarEstacion($a)
        {
                try
                {
                        $pdo = BD::obtenerBD()->obtenerConexion();
                        // $comando="DELETE FROM # WHERE # =";
                        $comando="UPDATE antena SET ESTADO = TRUE WHERE ID = ?";
                        $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                        $sentencia->execute(array($a));
                        return $pdo->lastInsertId();
                }
                catch(PDOException $e)
                {
                        return $e;
                }
        }

    public static function verificarEstacion($a)
        {
                try
                {
                        $pdo = BD::obtenerBD()->obtenerConexion();
                        $comando="SELECT * FROM antena WHERE ID = ?";
                        $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                        $sentencia->execute(array($a));
                        $consulta=$sentencia->fetchColumn();
                        if ($consulta>0) {
                            return 1;
                        }
                        else
                        {
                            return 0;
                        }
                }
                catch(PDOException $e)
                {
                        return $e;
                }
        }

    public static function listadoEstacion()
        {
                try
                {
                        $pdo = BD::obtenerBD()->obtenerConexion();
                        $comando="SELECT * FROM antena where ESTADO = 1";
                        $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                        $sentencia->execute();
                        $consulta=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                        return $consulta;
                }
                catch(PDOException $e)
                {
                        return $e;
                }
        }

    public static function insertarLugar($a, $b, $c)
        {
                try
                {
                        $pdo = BD::obtenerBD()->obtenerConexion();
                        $comando="INSERT INTO lugar(NOMBRE, TELEFONO, DIRECCION) values(?,?,?)";
                        $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                        $sentencia->execute(array($a,$b,$c));
                        return $pdo->lastInsertId();
                }
                catch(PDOException $e)
                {
                        return $e;
                }
        }

    public static function consultarLugar()
        {
                try
                {
                        $pdo = BD::obtenerBD()->obtenerConexion();
                        $comando="SELECT * FROM lugar";
                        $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                        $sentencia->execute();
                        $consulta=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                        return $consulta;
                }
                catch(PDOException $e)
                {
                        return $e;
                }
        }

    public static function buscarLugar($a)
        {
                try
                {
                        $pdo = BD::obtenerBD()->obtenerConexion();
                        $comando="SELECT * FROM lugar WHERE ID = ?";
                        $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                        $sentencia->execute(array($a));
                        $consulta=$sentencia->fetch(PDO::FETCH_ASSOC);
                        return $consulta;
                }
                catch(PDOException $e)
                {
                        return $e;
                }
        }

    public static function modificarLugar($a, $A, $b, $c, $d, $e)
        {
                try
                {
                        $pdo = BD::obtenerBD()->obtenerConexion();
                        $comando="UPDATE lugar SET ID = ?, NOMBRE = ?, TELEFONO = ?, DIRECCION = ?, ESTADO = ? WHERE ID = ?";
                        $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                        $sentencia->execute(array($a,$b,$c,$d,$e,$A));
                        return $sentencia->rowCount();
                }
                catch(PDOException $e)
                {
                        return $e;
                }
        }


    public static function eliminarLugar($a)
        {
                try
                {
                        $pdo = BD::obtenerBD()->obtenerConexion();
                        // $comando="DELETE FROM # WHERE # =";
                        $comando="UPDATE lugar SET ESTADO = FALSE WHERE ID = ?";
                        $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                        $sentencia->execute(array($a));
                        return $pdo->lastInsertId();
                }
                catch(PDOException $e)
                {
                        return $e;
                }
        }
    public static function activarLugar($a)
        {
                try
                {
                        $pdo = BD::obtenerBD()->obtenerConexion();
                        // $comando="DELETE FROM # WHERE # =";
                        $comando="UPDATE lugar SET ESTADO = TRUE WHERE ID = ?";
                        $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                        $sentencia->execute(array($a));
                        return $pdo->lastInsertId();
                }
                catch(PDOException $e)
                {
                        return $e;
                }
        }

    public static function verificarLugar($a, $b, $c)
        {
                try
                {
                        $pdo = BD::obtenerBD()->obtenerConexion();
                        $comando="SELECT * FROM lugar WHERE NOMBRE = ? AND TELEFONO = ? AND DIRECCION = ?";
                        $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                        $sentencia->execute(array($a, $b, $c));
                        $consulta=$sentencia->fetchColumn();
                        if ($consulta>0) {
                            return 1;
                        }
                        else
                        {
                            return 0;
                        }
                }
                catch(PDOException $e)
                {
                        return $e;
                }
        }

    public static function consultarLectura()
        {
                try
                {
                        $pdo = BD::obtenerBD()->obtenerConexion();
                        $comando="SELECT lectura.ID, lectura.ID_ESTACION, agentes_otros.NOMBRE, lectura.PROMEDIO, lectura.FECHA FROM lectura INNER JOIN agentes_otros ON lectura.ID_AGENTE = agentes_otros.ID ORDER BY lectura.ID";
                        $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                        $sentencia->execute();
                        $consulta=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                        return $consulta;
                }
                catch(PDOException $e)
                {
                        return $e;
                }
        }

    public static function buscarData($a,$b)
        {
                try
                {
                        $pdo = BD::obtenerBD()->obtenerConexion();
                        $comando="SELECT FECHA, VALOR FROM datos WHERE ID_ESTACION = ? AND FECHA = ?";
                        $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                        $sentencia->execute(array($a,$b));
                        $consulta=$sentencia->fetch(PDO::FETCH_ASSOC);
                        return $consulta;
                }
                catch(PDOException $e)
                {
                        return $e;
                }
        }

    public static function modificarLectura($a, $A, $b, $c, $d, $e)
        {
                try
                {
                        $pdo = BD::obtenerBD()->obtenerConexion();
                        $comando="UPDATE lectura SET ID = ?, ID_ESTACION = ?, ID_AGENTE = ?, PROMEDIO = ?, FECHA = ? WHERE ID = ?";
                        $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                        $sentencia->execute(array($a,$b,$c,$d,$e,$A));
                        return $pdo->lastInsertId();
                }
                catch(PDOException $e)
                {
                        return $e;
                }
        }

            public static function consultarDato()
        {
                try
                {
                        $pdo = BD::obtenerBD()->obtenerConexion();
                        $comando="SELECT * from datos";
                        $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                        $sentencia->execute();
                        $consulta=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                        return $consulta;
                }
                catch(PDOException $e)
                {
                        return $e;
                }
        }

    public static function buscarDato($a)
        {
                try
                {
                        $pdo = BD::obtenerBD()->obtenerConexion();
                        $comando="SELECT ID, ID_ESTACION, ID_AGENTE, VALOR, TIME(FECHA), DATE(FECHA) FROM datos WHERE ID = ?";
                        $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                        $sentencia->execute(array($a));
                        $consulta=$sentencia->fetch(PDO::FETCH_ASSOC);
                        if ($consulta) {
                            return $consulta;
                        }
                        else
                        {
                            return 0;
                        }
                        /*$pdo = BD::obtenerBD()->obtenerConexion();
                        $comando="SELECT * FROM datos WHERE ID = ?";
                        $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                        $sentencia->execute(array($a));
                        $resultado=$sentencia->fetchColumn();
                        if($resultado>0){
                            $comando="SELECT ID, ID_ANTENA, ID_AGENTE, VALOR, TIME(FECHA), DATE(FECHA) FROM datos WHERE ID = ?";
                            $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                            $sentencia->execute(array($a));
                            $consulta=$sentencia->fetch(PDO::FETCH_ASSOC);
                            return $consulta;
                        }
                        else
                        {
                            return 0;
                        }
                        return $sentencia;*/
                }
                catch(PDOException $e)
                {
                        return $e;
                }
        }

    public static function modificarDato($a, $A, $b, $c, $d, $e)
        {
                try
                {
                        $pdo = BD::obtenerBD()->obtenerConexion();
                        $comando="UPDATE datos SET ID = ?, ID_ESTACION = ?, ID_AGENTE = ?, VALOR = ?, FECHA = ? WHERE ID = ?";
                        $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                        $sentencia->execute(array($a,$b,$c,$d,$e,$A));
                        return $pdo->lastInsertId();
                }
                catch(PDOException $e)
                {
                        return $e;
                }
        }

    public static function insertarAgente($a, $b)
        {
                try
                {
                        $pdo = BD::obtenerBD()->obtenerConexion();
                        $comando="INSERT INTO agentes_otros(NOMENCLATURA, NOMBRE) values(?,?)";
                        $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                        $sentencia->execute(array($a,$b));
                        return $pdo->lastInsertId();
                }
                catch(PDOException $e)
                {
                        return $e;
                }
        }

    public static function consultarAgente()
        {
                try
                {
                        $pdo = BD::obtenerBD()->obtenerConexion();
                        $comando="SELECT * FROM agentes_otros";
                        $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                        $sentencia->execute();
                        $consulta=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                        return $consulta;
                }
                catch(PDOException $e)
                {
                        return $e;
                }
        }

        public static function buscarAgente($a)
        {
                try
                {
                        $pdo = BD::obtenerBD()->obtenerConexion();
                        $comando="SELECT * FROM agentes_otros WHERE ID = ?";
                        $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                        $sentencia->execute(array($a));
                        $consulta=$sentencia->fetch(PDO::FETCH_ASSOC);
                        return $consulta;
                }
                catch(PDOException $e)
                {
                        return $e;
                }
        }

    public static function modificarAgente($a, $A, $b, $c, $d)
        {
                try
                {
                        $pdo = BD::obtenerBD()->obtenerConexion();
                        $comando="UPDATE agentes_otros SET ID = ?, NOMENCLATURA = ?, NOMBRE = ?, ESTADO = ? WHERE ID = ?";
                        $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                        $sentencia->execute(array($a,$b,$c,$d,$A));
                        return $sentencia->rowCount();
                }
                catch(PDOException $e)
                {
                        return $e;
                }
        }


    public static function eliminarAgente($a)
        {
                try
                {
                        $pdo = BD::obtenerBD()->obtenerConexion();
                        // $comando="DELETE FROM # WHERE # =";
                        $comando="UPDATE agentes_otros SET ESTADO = FALSE WHERE ID = ?";
                        $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                        $sentencia->execute(array($a));
                        return $pdo->lastInsertId();
                }
                catch(PDOException $e)
                {
                        return $e;
                }
        }
    public static function activarAgente($a)
        {
                try
                {
                        $pdo = BD::obtenerBD()->obtenerConexion();
                        // $comando="DELETE FROM # WHERE # =";
                        $comando="UPDATE agentes_otros SET ESTADO = TRUE WHERE ID = ?";
                        $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                        $sentencia->execute(array($a));
                        return $pdo->lastInsertId();
                }
                catch(PDOException $e)
                {
                        return $e;
                }
        }

    public static function verificarAgente($a, $b)
        {
                try
                {
                        $pdo = BD::obtenerBD()->obtenerConexion();
                        $comando="SELECT * FROM agentes_otros WHERE NOMENCLATURA = ? AND NOMBRE = ?";
                        $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                        $sentencia->execute(array($a, $b));
                        $consulta=$sentencia->fetchColumn();
                        if ($consulta>0) {
                            return 1;
                        }
                        else
                        {
                            return 0;
                        }                
                }
                catch(PDOException $e)
                {
                        return $e;
                }
        }

    public static function verificarSesion()
        {
            try
            {
                $duracion = 1800;
                $tiempo_actual = time();
                if(isset($_SESSION["login_time"]) and isset($_SESSION["id_user"]))
                {
                    if ((($tiempo_actual - $_SESSION["login_time"]) > $duracion)) {
                        return true;
                    }
                }
                return false;
            }
            catch(PDOException $e)
            {
                    return $e;
            }
        }

        public static function consultarExtra($a, $b, $c, $d)
        {
                try
                {
                        $pdo = BD::obtenerBD()->obtenerConexion();
                        if ($a)
                        {
                            if($b)
                            {
                                if (($c != " ") and ($d != " "))
                                {
                                    $comando="SELECT antena.DESCRIPCION, agentes_otros.NOMENCLATURA, datos.VALOR, datos.FECHA FROM datos JOIN antena ON datos.ID_ESTACION = antena.ID JOIN agentes_otros ON datos.ID_AGENTE = agentes_otros.ID WHERE datos.ID_ESTACION = ? AND datos.ID_AGENTE = ? AND datos.FECHA BETWEEN ? AND ?";
                                    $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                                    $sentencia->execute(array($a,$b,$c,$d));
                                    $consulta=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                                    if ($consulta) {
                                        return $consulta;
                                    }
                                    else
                                    {
                                        return 0;
                                    }
                                }
                                else
                                {
                                    $comando="SELECT antena.DESCRIPCION, agentes_otros.NOMENCLATURA, datos.VALOR, datos.FECHA FROM datos JOIN antena ON datos.ID_ESTACION = antena.ID JOIN agentes_otros ON datos.ID_AGENTE = agentes_otros.ID WHERE datos.ID_ESTACION = ? AND datos.ID_AGENTE = ?";
                                    $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                                    $sentencia->execute(array($a,$b));
                                    $consulta=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                                    if ($consulta) {
                                        return $consulta;
                                    }
                                    else
                                    {
                                        return 0;
                                    }
                                }
                            }
                            else
                            {
                                if (($c != " ") and ($d != " "))
                                {
                                    $comando="SELECT antena.DESCRIPCION, agentes_otros.NOMENCLATURA, datos.VALOR, datos.FECHA FROM datos JOIN antena ON datos.ID_ESTACION = antena.ID JOIN agentes_otros ON datos.ID_AGENTE = agentes_otros.ID WHERE datos.ID_ESTACION = ? AND datos.FECHA BETWEEN ? AND ?";
                                    $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                                    $sentencia->execute(array($a,$c,$d));
                                    $consulta=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                                    if ($consulta) {
                                        return $consulta;
                                    }
                                    else
                                    {
                                        return 0;
                                    }
                                }
                                else
                                {
                                    $comando="SELECT antena.DESCRIPCION, agentes_otros.NOMENCLATURA, datos.VALOR, datos.FECHA FROM datos JOIN antena ON datos.ID_ESTACION = antena.ID JOIN agentes_otros ON datos.ID_AGENTE = agentes_otros.ID WHERE datos.ID_ESTACION = ?";
                                    $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                                    $sentencia->execute(array($a));
                                    $consulta=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                                    if ($consulta) {
                                        return $consulta;
                                    }
                                    else
                                    {
                                        return 0;
                                    }
                                }
                            }   
                        }
                        else
                        {
                            if ($b)
                            {
                                if (($c != " ") and ($d != " "))
                                {
                                    $comando="SELECT antena.DESCRIPCION, agentes_otros.NOMENCLATURA, datos.VALOR, datos.FECHA FROM datos JOIN antena ON datos.ID_ESTACION = antena.ID JOIN agentes_otros ON datos.ID_AGENTE = agentes_otros.ID WHERE datos.ID_AGENTE = ? AND datos.FECHA BETWEEN ? AND ?";
                                    $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                                    $sentencia->execute(array($b,$c,$d));
                                    $consulta=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                                    if ($consulta) {
                                        return $consulta;
                                    }
                                    else
                                    {
                                        return 0;
                                    }
                                }
                                else
                                {
                                    $comando="SELECT antena.DESCRIPCION, agentes_otros.NOMENCLATURA, datos.VALOR, datos.FECHA FROM datos JOIN antena ON datos.ID_ESTACION = antena.ID JOIN agentes_otros ON datos.ID_AGENTE = agentes_otros.ID WHERE datos.ID_AGENTE = ?";
                                    $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                                    $sentencia->execute(array($b));
                                    $consulta=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                                    if ($consulta) {
                                        return $consulta;
                                    }
                                    else
                                    {
                                        return 0;
                                    }
                                }
                            }
                            else
                            {
                                if (($c != " ") and ($d != " "))
                                {
                                    $comando="SELECT antena.DESCRIPCION, agentes_otros.NOMENCLATURA, datos.VALOR, datos.FECHA FROM datos JOIN antena ON datos.ID_ESTACION = antena.ID JOIN agentes_otros ON datos.ID_AGENTE = agentes_otros.ID WHERE datos.FECHA BETWEEN ? AND ?";
                                    $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                                    $sentencia->execute(array($c,$d));
                                    $consulta=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                                    if ($consulta) {
                                        return $consulta;
                                    }
                                    else
                                    {
                                        return 0;
                                    }
                                }
                                else
                                {
                                    return 0;
                                }
                                
                            }
                        }
                        return $comando;
                }
                catch(PDOException $e)
                {
                        return $e;
                }
        }

        public static function consultarFiltro2($a, $b, $c, $d)
        {
                try
                {
                        $pdo = BD::obtenerBD()->obtenerConexion();
                        $comando="SELECT FECHA, PROMEDIO FROM lectura WHERE ID_ESTACION = ? AND ID_AGENTE = ? AND FECHA BETWEEN ? AND ?";
                        $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                        $sentencia->execute(array($a,$b,$c,$d));
                        $consulta=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                        return $consulta;
                }
                catch(PDOException $e)
                {
                        return $e;
                }
        }

        public static function consultarFiltro1($a, $b, $c, $d)
        {
                try
                {
                        $pdo = BD::obtenerBD()->obtenerConexion();
                        if ($a)
                        {
                            if($b)
                            {
                                if (($c != " ") and ($d != " "))
                                {
                                    $comando="SELECT antena.DESCRIPCION, agentes_otros.NOMENCLATURA, lectura.PROMEDIO, lectura.FECHA FROM lectura JOIN antena ON lectura.ID_ESTACION = antena.ID JOIN agentes_otros ON lectura.ID_AGENTE = agentes_otros.ID WHERE lectura.ID_ESTACION = ? AND lectura.ID_AGENTE = ? AND lectura.FECHA BETWEEN ? AND ?";
                                    $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                                    $sentencia->execute(array($a,$b,$c,$d));
                                    $consulta=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                                    if ($consulta) {
                                        return $consulta;
                                    }
                                    else
                                    {
                                        return 0;
                                    }
                                }
                                else
                                {
                                    $comando="SELECT antena.DESCRIPCION, agentes_otros.NOMENCLATURA, lectura.PROMEDIO, lectura.FECHA FROM lectura JOIN antena ON lectura.ID_ESTACION = antena.ID JOIN agentes_otros ON lectura.ID_AGENTE = agentes_otros.ID WHERE lectura.ID_ESTACION = ? AND lectura.ID_AGENTE = ?";
                                    $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                                    $sentencia->execute(array($a,$b));
                                    $consulta=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                                    if ($consulta) {
                                        return $consulta;
                                    }
                                    else
                                    {
                                        return 0;
                                    }
                                }
                            }
                            else
                            {
                                if (($c != " ") and ($d != " "))
                                {
                                    $comando="SELECT antena.DESCRIPCION, agentes_otros.NOMENCLATURA, lectura.PROMEDIO, lectura.FECHA FROM lectura JOIN antena ON lectura.ID_ESTACION = antena.ID JOIN agentes_otros ON lectura.ID_AGENTE = agentes_otros.ID WHERE lectura.ID_ESTACION = ? AND lectura.FECHA BETWEEN ? AND ?";
                                    $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                                    $sentencia->execute(array($a,$c,$d));
                                    $consulta=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                                    if ($consulta) {
                                        return $consulta;
                                    }
                                    else
                                    {
                                        return 0;
                                    }
                                }
                                else
                                {
                                    $comando="SELECT antena.DESCRIPCION, agentes_otros.NOMENCLATURA, lectura.PROMEDIO, lectura.FECHA FROM lectura JOIN antena ON lectura.ID_ESTACION = antena.ID JOIN agentes_otros ON lectura.ID_AGENTE = agentes_otros.ID WHERE lectura.ID_ESTACION = ?";
                                    $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                                    $sentencia->execute(array($a));
                                    $consulta=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                                    if ($consulta) {
                                        return $consulta;
                                    }
                                    else
                                    {
                                        return 0;
                                    }
                                }
                            }
                            
                        }
                        else
                        {
                            if ($b)
                            {
                                if (($c != " ") and ($d != " "))
                                {
                                    $comando="SELECT antena.DESCRIPCION, agentes_otros.NOMENCLATURA, lectura.PROMEDIO, lectura.FECHA FROM lectura JOIN antena ON lectura.ID_ESTACION = antena.ID JOIN agentes_otros ON lectura.ID_AGENTE = agentes_otros.ID WHERE lectura.ID_AGENTE = ? AND lectura.FECHA BETWEEN ? AND ?";
                                    $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                                    $sentencia->execute(array($b,$c,$d));
                                    $consulta=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                                    if ($consulta) {
                                        return $consulta;
                                    }
                                    else
                                    {
                                        return 0;
                                    }
                                }
                                else
                                {
                                    $comando="SELECT antena.DESCRIPCION, agentes_otros.NOMENCLATURA, lectura.PROMEDIO, lectura.FECHA FROM lectura JOIN antena ON lectura.ID_ESTACION = antena.ID JOIN agentes_otros ON lectura.ID_AGENTE = agentes_otros.ID WHERE lectura.ID_AGENTE = ?";
                                    $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                                    $sentencia->execute(array($b));
                                    $consulta=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                                    if ($consulta) {
                                        return $consulta;
                                    }
                                    else
                                    {
                                        return 0;
                                    }
                                }
                            }
                            else
                            {
                                if (($c != " ") and ($d != " "))
                                {
                                    $comando="SELECT antena.DESCRIPCION, agentes_otros.NOMENCLATURA, lectura.PROMEDIO, lectura.FECHA FROM lectura JOIN antena ON lectura.ID_ESTACION = antena.ID JOIN agentes_otros ON lectura.ID_AGENTE = agentes_otros.ID WHERE lectura.FECHA BETWEEN ? AND ?";
                                    $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                                    $sentencia->execute(array($c,$d));
                                    $consulta=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                                    if ($consulta) {
                                        return $consulta;
                                    }
                                    else
                                    {
                                        return 0;
                                    }
                                }
                                else
                                {
                                    return 0;
                                }
                            }
                        }
                }
                catch(PDOException $e)
                {
                    return $e;
                }
        }
        public static function consultarFiltro3($a, $b, $c, $d)
        {
                try
                {
                        $pdo = BD::obtenerBD()->obtenerConexion();
                        if ($a)
                        {
                            if($b)
                            {
                                if (($c != " ") and ($d != " "))
                                {
                                    $comando="SELECT antena.DESCRIPCION, agentes_otros.NOMENCLATURA, lectura_8h.PROMEDIO, lectura_8h.FECHA FROM lectura_8h JOIN antena ON lectura_8h.ID_ESTACION = antena.ID JOIN agentes_otros ON lectura_8h.ID_AGENTE = agentes_otros.ID WHERE lectura_8h.ID_ESTACION = ? AND lectura_8h.ID_AGENTE = ? AND lectura_8h.FECHA BETWEEN ? AND ?";
                                    $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                                    $sentencia->execute(array($a,$b,$c,$d));
                                    $consulta=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                                    if ($consulta) {
                                        return $consulta;
                                    }
                                    else
                                    {
                                        return 0;
                                    }
                                }
                                else
                                {
                                    $comando="SELECT antena.DESCRIPCION, agentes_otros.NOMENCLATURA, lectura_8h.PROMEDIO, lectura_8h.FECHA FROM lectura_8h JOIN antena ON lectura_8h.ID_ESTACION = antena.ID JOIN agentes_otros ON lectura_8h.ID_AGENTE = agentes_otros.ID WHERE lectura_8h.ID_ESTACION = ? AND lectura_8h.ID_AGENTE = ?";
                                    $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                                    $sentencia->execute(array($a,$b));
                                    $consulta=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                                    if ($consulta) {
                                        return $consulta;
                                    }
                                    else
                                    {
                                        return 0;
                                    }
                                }
                            }
                            else
                            {
                                if (($c != " ") and ($d != " "))
                                {
                                    $comando="SELECT antena.DESCRIPCION, agentes_otros.NOMENCLATURA, lectura_8h.PROMEDIO, lectura_8h.FECHA FROM lectura_8h JOIN antena ON lectura_8h.ID_ESTACION = antena.ID JOIN agentes_otros ON lectura_8h.ID_AGENTE = agentes_otros.ID WHERE lectura_8h.ID_ESTACION = ? AND lectura_8h.FECHA BETWEEN ? AND ?";
                                    $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                                    $sentencia->execute(array($a,$c,$d));
                                    $consulta=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                                    if ($consulta) {
                                        return $consulta;
                                    }
                                    else
                                    {
                                        return 0;
                                    }
                                }
                                else
                                {
                                    $comando="SELECT antena.DESCRIPCION, agentes_otros.NOMENCLATURA, lectura_8h.PROMEDIO, lectura_8h.FECHA FROM lectura_8h JOIN antena ON lectura_8h.ID_ESTACION = antena.ID JOIN agentes_otros ON lectura_8h.ID_AGENTE = agentes_otros.ID WHERE lectura_8h.ID_ESTACION = ?";
                                    $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                                    $sentencia->execute(array($a));
                                    $consulta=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                                    if ($consulta) {
                                        return $consulta;
                                    }
                                    else
                                    {
                                        return 0;
                                    }
                                }
                            }
                            
                        }
                        else
                        {
                            if ($b)
                            {
                                if (($c != " ") and ($d != " "))
                                {
                                    $comando="SELECT antena.DESCRIPCION, agentes_otros.NOMENCLATURA, lectura_8h.PROMEDIO, lectura_8h.FECHA FROM lectura_8h JOIN antena ON lectura_8h.ID_ESTACION = antena.ID JOIN agentes_otros ON lectura_8h.ID_AGENTE = agentes_otros.ID WHERE lectura_8h.ID_AGENTE = ? AND lectura_8h.FECHA BETWEEN ? AND ?";
                                    $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                                    $sentencia->execute(array($b,$c,$d));
                                    $consulta=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                                    if ($consulta) {
                                        return $consulta;
                                    }
                                    else
                                    {
                                        return 0;
                                    }
                                }
                                else
                                {
                                    $comando="SELECT antena.DESCRIPCION, agentes_otros.NOMENCLATURA, lectura_8h.PROMEDIO, lectura_8h.FECHA FROM lectura_8h JOIN antena ON lectura_8h.ID_ESTACION = antena.ID JOIN agentes_otros ON lectura_8h.ID_AGENTE = agentes_otros.ID WHERE lectura_8h.ID_AGENTE = ?";
                                    $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                                    $sentencia->execute(array($b));
                                    $consulta=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                                    if ($consulta) {
                                        return $consulta;
                                    }
                                    else
                                    {
                                        return 0;
                                    }
                                }
                            }
                            else
                            {
                                if (($c != " ") and ($d != " "))
                                {
                                    $comando="SELECT antena.DESCRIPCION, agentes_otros.NOMENCLATURA, lectura_8h.PROMEDIO, lectura_8h.FECHA FROM lectura_8h JOIN antena ON lectura_8h.ID_ESTACION = antena.ID JOIN agentes_otros ON lectura_8h.ID_AGENTE = agentes_otros.ID WHERE lectura_8h.FECHA BETWEEN ? AND ?";
                                    $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                                    $sentencia->execute(array($c,$d));
                                    $consulta=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                                    if ($consulta) {
                                        return $consulta;
                                    }
                                    else
                                    {
                                        return 0;
                                    }
                                }
                                else
                                {
                                    return 0;
                                }
                            }
                        }
                }
                catch(PDOException $e)
                {
                    return $e;
                }
        }
        public static function consultarFiltro4($a, $b, $c, $d)
        {
                try
                {
                        $pdo = BD::obtenerBD()->obtenerConexion();
                        if ($a)
                        {
                            if($b)
                            {
                                if (($c != " ") and ($d != " "))
                                {
                                    $comando="SELECT antena.DESCRIPCION, agentes_otros.NOMENCLATURA, lectura_24h.PROMEDIO, lectura_24h.FECHA FROM lectura_24h JOIN antena ON lectura_24h.ID_ESTACION = antena.ID JOIN agentes_otros ON lectura_24h.ID_AGENTE = agentes_otros.ID WHERE lectura_24h.ID_ESTACION = ? AND lectura_24h.ID_AGENTE = ? AND lectura_24h.FECHA BETWEEN ? AND ?";
                                    $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                                    $sentencia->execute(array($a,$b,$c,$d));
                                    $consulta=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                                    if ($consulta) {
                                        return $consulta;
                                    }
                                    else
                                    {
                                        return 0;
                                    }
                                }
                                else
                                {
                                    $comando="SELECT antena.DESCRIPCION, agentes_otros.NOMENCLATURA, lectura_24h.PROMEDIO, lectura_24h.FECHA FROM lectura_24h JOIN antena ON lectura_24h.ID_ESTACION = antena.ID JOIN agentes_otros ON lectura_24h.ID_AGENTE = agentes_otros.ID WHERE lectura_24h.ID_ESTACION = ? AND lectura_24h.ID_AGENTE = ?";
                                    $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                                    $sentencia->execute(array($a,$b));
                                    $consulta=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                                    if ($consulta) {
                                        return $consulta;
                                    }
                                    else
                                    {
                                        return 0;
                                    }
                                }
                            }
                            else
                            {
                                if (($c != " ") and ($d != " "))
                                {
                                    $comando="SELECT antena.DESCRIPCION, agentes_otros.NOMENCLATURA, lectura_24h.PROMEDIO, lectura_24h.FECHA FROM lectura_24h JOIN antena ON lectura_24h.ID_ESTACION = antena.ID JOIN agentes_otros ON lectura_24h.ID_AGENTE = agentes_otros.ID WHERE lectura_24h.ID_ESTACION = ? AND lectura_24h.FECHA BETWEEN ? AND ?";
                                    $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                                    $sentencia->execute(array($a,$c,$d));
                                    $consulta=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                                    if ($consulta) {
                                        return $consulta;
                                    }
                                    else
                                    {
                                        return 0;
                                    }
                                }
                                else
                                {
                                    $comando="SELECT antena.DESCRIPCION, agentes_otros.NOMENCLATURA, lectura_24h.PROMEDIO, lectura_24h.FECHA FROM lectura_24h JOIN antena ON lectura_24h.ID_ESTACION = antena.ID JOIN agentes_otros ON lectura_24h.ID_AGENTE = agentes_otros.ID WHERE lectura_24h.ID_ESTACION = ?";
                                    $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                                    $sentencia->execute(array($a));
                                    $consulta=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                                    if ($consulta) {
                                        return $consulta;
                                    }
                                    else
                                    {
                                        return 0;
                                    }
                                }
                            }
                            
                        }
                        else
                        {
                            if ($b)
                            {
                                if (($c != " ") and ($d != " "))
                                {
                                    $comando="SELECT antena.DESCRIPCION, agentes_otros.NOMENCLATURA, lectura_24h.PROMEDIO, lectura_24h.FECHA FROM lectura_24h JOIN antena ON lectura_24h.ID_ESTACION = antena.ID JOIN agentes_otros ON lectura_24h.ID_AGENTE = agentes_otros.ID WHERE lectura_24h.ID_AGENTE = ? AND lectura_24h.FECHA BETWEEN ? AND ?";
                                    $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                                    $sentencia->execute(array($b,$c,$d));
                                    $consulta=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                                    if ($consulta) {
                                        return $consulta;
                                    }
                                    else
                                    {
                                        return 0;
                                    }
                                }
                                else
                                {
                                    $comando="SELECT antena.DESCRIPCION, agentes_otros.NOMENCLATURA, lectura_24h.PROMEDIO, lectura_24h.FECHA FROM lectura_24h JOIN antena ON lectura_24h.ID_ESTACION = antena.ID JOIN agentes_otros ON lectura_24h.ID_AGENTE = agentes_otros.ID WHERE lectura_24h.ID_AGENTE = ?";
                                    $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                                    $sentencia->execute(array($b));
                                    $consulta=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                                    if ($consulta) {
                                        return $consulta;
                                    }
                                    else
                                    {
                                        return 0;
                                    }
                                }
                            }
                            else
                            {
                                if (($c != " ") and ($d != " "))
                                {
                                    $comando="SELECT antena.DESCRIPCION, agentes_otros.NOMENCLATURA, lectura_24h.PROMEDIO, lectura_24h.FECHA FROM lectura_24h JOIN antena ON lectura_24h.ID_ESTACION = antena.ID JOIN agentes_otros ON lectura_24h.ID_AGENTE = agentes_otros.ID WHERE lectura_24h.FECHA BETWEEN ? AND ?";
                                    $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                                    $sentencia->execute(array($c,$d));
                                    $consulta=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                                    if ($consulta) {
                                        return $consulta;
                                    }
                                    else
                                    {
                                        return 0;
                                    }
                                }
                                else
                                {
                                    return 0;
                                }
                            }
                        }
                }
                catch(PDOException $e)
                {
                    return $e;
                }
        }
        public static function verificarPaginas($a)
        {
            try
            {
                    $pdo = BD::obtenerBD()->obtenerConexion();
                    $comando="SELECT * FROM privilegios WHERE TIPO_USUARIO = ?";
                    $sentencia=BD::obtenerBD()->obtenerConexion()->prepare($comando);
                    $sentencia->execute(array($a));
                    $consulta=$sentencia->fetch(PDO::FETCH_ASSOC);
                    if ($consulta) {
                        return $consulta;
                    }
                    else
                    {
                        return 0;
                    }               
            }
            catch(PDOException $e)
            {
                    return $e;
            }
        }
    }
?>