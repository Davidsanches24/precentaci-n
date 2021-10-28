<?php
require_once('fpdf.php');

class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {
        // Logo
        $this->Image('../img/senapdf.jpg',10,8,33);
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Movernos a la derecha
        $this->Cell(120);
        // Título
        $this->Cell(30,10,'Informe de prestamo de ambientes',0,1,'C');
        // Salto de línea
        $this->Ln(20);
    }

    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Número de página
        $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
    }
}




$buscar = isset( $_GET['id']) ? $_GET['id'] : ""; 

include("../class/conexion.php");
$conexion = Conex::conectar();
$consulta = "SELECT prestamo.fecha_registro, prestamo.fecha_registro, prestamo.fecha_prestamo, prestamo.fecha_devolucion,
prestamo.hora_ingreso, prestamo.hora_salida, ambientes.cede, ambientes.nom_aula,
instructores.No_documento, instructores.nom_instructor, prestamo.observaciones FROM
ambientes INNER JOIN prestamo_ambientes AS prestamo on ambientes.no=prestamo.no 
INNER JOIN instructores ON instructores.No_documento=prestamo.No_documento
WHERE ambientes.cede like '%".$buscar."%' OR prestamo.fecha_prestamo LIKE'%".$buscar."%'  OR instructores.nom_instructor LIKE'%".$buscar."%'
OR ambientes.nom_aula LIKE'%".$buscar."%' ";

$resultado = $conexion->query($consulta);
//echo $consulta;
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',10);

$pdf->Ln(000);


$pdf->setfont('Arial','B',8);

    $pdf->cell(18,8,'f prestamo',1,0,'c',0);
    $pdf->cell(18,8,'f devolucion',1,0,'c',0);
    $pdf->cell(18,8,'hora ingreso',1,0,'c',0);
    $pdf->cell(18,8,'hora salida',1,0,'c',0);
    $pdf->cell(20,8,'cede',1,0,'c',0);
    $pdf->cell(20,8,'aula',1,0,'c',0);
    $pdf->cell(21,8,'N_documento',1,0,'c',0);
    $pdf->cell(45,8,'instructor',1,0,'c',0);
    $pdf->multicell(100,8,'observaciones',1,'c',0);

while($row = $resultado->fetch_assoc()){
   
    $pdf->cell(18,8,$row['fecha_prestamo'],1,0,'c',0);
    $pdf->cell(18,8,$row['fecha_devolucion'],1,0,'c',0);
    $pdf->cell(18,8,$row['hora_ingreso'],1,0,'c',0);
    $pdf->cell(18,8,$row['hora_salida'],1,0,'c',0);
    $pdf->cell(20,8,utf8_decode($row['cede']),1,0,'c',0);
    $pdf->cell(20,8,utf8_decode($row['nom_aula']),1,0,'c',0);
    $pdf->cell(21,8,$row['No_documento'],1,0,'c',0);
    $pdf->cell(45,8,utf8_decode($row['nom_instructor']),1,0,'c',0);
    $pdf->multicell(100,8,utf8_decode($row['observaciones']),1,'c',0);
}


 $pdf->output()
?>
