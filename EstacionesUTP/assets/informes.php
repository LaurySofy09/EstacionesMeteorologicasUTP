<?php
require('funciones.php');
require_once('vendor/autoload.php');
$css = file_get_contents('estiloInforme.css');

$estacion = intval($_POST["estacion"]);
    if ($estacion == 0) {
        $estacion="";
        $resultado=funciones::consultarEstacion();
        foreach ($resultado as $row)
        {
            $lista_estaciones .= $row['DESCRIPCION'].", ";
        }
        $lista_estaciones = trim($lista_estaciones, ', ');
    }
    else
    {
        $resultado2=funciones::buscarEstacion($estacion);
        if ($resultado2) {
            $lista_estaciones = $resultado2['DESCRIPCION'];        }
        else
        {
            $lista_estaciones = "";
        }
    }
    $agente = intval($_POST["agente"]);
    if ($agente == 0) {
        $agente="";
        $resultado3=funciones::consultarAgente();
        foreach ($resultado3 as $row) {
            $lista_agentes .= $row['NOMENCLATURA'].", ";
        }
        $lista_agentes = trim($lista_agentes, ', ');
    }
    else
    {
        $resultado4=funciones::buscarAgente($agente);
        if ($resultado4) {
            $lista_agentes = $resultado4['NOMENCLATURA'];
        }
        else
        {
            $lista_agentes = "";
        }
        
    }
    $fecha_start = $_POST["fecha_start"];
    $fecha_end = $_POST["fecha_end"];
    $hora_start = $_POST["hora_start"];
    $hora_end = $_POST["hora_end"];
    if (($fecha_start) AND ($fecha_end) AND ($hora_end) AND ($hora_start))
    {
        $fecha_start2 = date_format(date_create($fecha_start." ".$hora_start), "Y-m-d H:i:s");
        $fecha_end2 = date_format(date_create($fecha_end." ".$hora_end), "Y-m-d H:i:s");
    }
    else
    {
        $fecha_start2 = " ";
        $fecha_end2 = " ";
    }
    $resultado3=funciones::consultarFiltro1($estacion,$agente,$fecha_start2,$fecha_end2);
    $data="";
    if(@$resultado3)
    {
    $data ='<body>
    <section class="body">
                <!-- start: page -->
                            
                <section class="panel">
                    <header class="panel-heading">
        
                        <h2 class="panel-title">Reporte de Mediciones</h2>
                        <p class="panel-subtitle">Agentes: '.$lista_agentes.'</p>
                        <p class="panel-subtitle">Estaciones: '.$lista_estaciones.'</p>';
                        if(($fecha_start2 != " ")&&($fecha_end2 != " "))
                        {
                            $data.= '<p class="panel-subtitle">Fechas: '.$fecha_start2.' a '.$fecha_end2.'</p>';
                        } 
                    $data.='<p class="border"></p></header>
                    <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover mb-none" align="center" border="1">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Estación</th>
                                <th>Agente</th>
                                <th>Valor</th>
                                <th>Fecha y Hora</th>
                            </tr>
                        </thead>
                        <tbody>';
    @$num;
    foreach ($resultado3 as $row) {
        @$num++;
        $data .= "<tr>
        <td align='center'>".@$num."</td>
        <td align='center'>".$row['DESCRIPCION']."</td>
        <td align='center'>".$row['NOMENCLATURA']."</td>
        <td align='center'>".$row['PROMEDIO']."</td>
        <td align='center'>".$row['FECHA']."</td>
        </tr>";
        
    }
    $data .= '                      </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>
                
 
        </section>
    </body>';
    }

$pdf = new \Mpdf\Mpdf([]);
$pdf->writeHtml($css, \Mpdf\HTMLParserMode::HEADER_CSS);
$pdf->writeHtml($data, \Mpdf\HTMLParserMode::HTML_BODY);


$pdf->Output("reporte.php", "I");
?>