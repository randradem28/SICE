<?php

session_start();

$inc=include("conexion.php");

$boleta = $_SESSION['boleta'];

   if($inc){
      $consulta ="SELECT * FROM registro_alumnos where boleta='$boleta'";
      $resultado = mysqli_query($conexion,$consulta);
      if($resultado){
         while ($row = $resultado->fetch_array()){
            $boleta = $row['Boleta'];
            $nombre = $row['Nombre'];
            $apellidop = $row['Apellido_Paterno'];
            $apellidom = $row['Apellido_Materno'];
            $plantel = $row['Plantel'];
            $carrera = $row['Carrera'];
            $foto = $row['Fotografía'];
            $qr = $row['QR'];
        }
    }
}

require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('img/fondocred.jpg',0,1,210);
    // Arial bold 15
    $this->SetFont('Arial','',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Salto de línea
    $this->Ln(20);
}
}

// Creación del objeto de la clase heredada

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Image($foto,12,53,60);
$pdf->SetFont('Arial','B',14);
$pdf->SetTextColor(220,50,50);
$pdf->Cell(70);
$pdf->Cell(90,52,'Alumno:');
$pdf->Ln();
$pdf->SetFont('Arial','',16);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(70);
$pdf->Cell(90,-38,$apellidop);
$pdf->Ln();
$pdf->Cell(70);
$pdf->Cell(90,51,$apellidom);
$pdf->Ln();
$pdf->Cell(70);
$pdf->Cell(90,-36,$nombre);
$pdf->Ln();

$pdf->SetFont('Arial','B',14);
$pdf->SetTextColor(220,50,50);
$pdf->Cell(70);
$pdf->Cell(90,56,'Programa academico:');
$pdf->Ln();
$pdf->SetFont('Arial','',16);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(70);
$pdf->Cell(90,-40,$carrera);
$pdf->Ln();

$pdf->SetFont('Arial','B',14);
$pdf->SetTextColor(220,50,50);
$pdf->Cell(70);
$pdf->Cell(90,60,'Plantel:');
$pdf->Ln();
$pdf->SetFont('Arial','',16);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(70);
$pdf->Cell(90,-44,$plantel);
$pdf->Ln();

$pdf->SetFont('Arial','B',14);
$pdf->SetTextColor(220,50,50);
$pdf->Cell(17);
$pdf->Cell(90,55,$boleta);
$pdf->Ln();

$pdf->Image('img/fondocred2.jpg',0,140,210);
$pdf->Image($qr,80,200,60);
$pdf->SetFont('Arial','B',12);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(65);
$pdf->Cell(0,89,'Direccion de administracion escolar');
$pdf->Image('img/firma.png',85,170,45);
$pdf->Output();
?>