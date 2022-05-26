<?php
require('fpdf.php');
require('../funciones.php');

class PDF extends FPDF
{
// Cargar los datos
function LoadData()
{
    // Leer las líneas del fichero
    $estacion = intval($_POST["estacion"]);
    if ($estacion == 0) {
        $estacion="";
    }
    $agente = intval($_POST["agente"]);
    if ($agente==0) {
        $agente="";
    }
    $fecha_start = $_POST["fecha_start"];
    $fecha_end = $_POST["fecha_end"];
    $hora_start = $_POST["hora_start"];
    $hora_end = $_POST["hora_end"];
    if (($fecha_start) AND ($fecha_end) AND ($hora_end) AND ($hora_start))
    {
        $fecha_start = date_format(date_create($fecha_start." ".$hora_start), "Y-m-d H:i:s");
        $fecha_end = date_format(date_create($fecha_end." ".$hora_end), "Y-m-d H:i:s");
    }
    else
    {
        $fecha_start = $fecha_start." ".$hora_start;
        $fecha_end = $fecha_end." ".$hora_end;
    }
    $resultado3=funciones::consultarFiltro1($estacion,$agente,$fecha_start,$fecha_end);
    return $resultado3;
}

// Una tabla más completa
function ImprovedTable($header, $data)
{
    // Anchuras de las columnas
    $w = array(40, 35, 45, 40);
    // Cabeceras
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],7,$header[$i],1,0,'C');
    $this->Ln();
    // Datos
    foreach($data as $row)
    {
        $this->Cell($w[0],6,$row[0],'LR');
        $this->Cell($w[1],6,$row[1],'LR');
        $this->Cell($w[2],6,number_format($row[2]),'LR',0,'R');
        $this->Cell($w[3],6,number_format($row[3]),'LR',0,'R');
        $this->Ln();
    }
    // Línea de cierre
    $this->Cell(array_sum($w),0,'','T');
}
}

$pdf = new PDF();
// Títulos de las columnas
$header = array('País', 'Capital', 'Superficie (km2)', 'Pobl. (en miles)');
// Carga de datos
$data = $pdf->LoadData();
$pdf->SetFont('Arial','',14);
$pdf->AddPage();
$pdf->ImprovedTable($header,$data);
$pdf->Output();
?>