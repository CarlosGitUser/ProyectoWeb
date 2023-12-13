<?php
     require_once 'php/fpdf.php';

     session_start();

    if (isset($_SESSION["texto"])) {
        $text = $_SESSION["texto"];
       
    }else $text = "Datos no obtenidos correctamente";
    
    
    $pdf = new FPDF();
    $pdf->AddPage();

    // Logo
    $pdf->Image('image/logo.png', 10, 10, 40);
    // Configura el encabezado del documento
    $pdf->Ln(10);
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->Cell(0, 10, 'Factura de la compra', 0, 1, 'C');

    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Ln(20);

    $pdf->SetLineWidth(0.8);
    $pdf->Line(10, $pdf->GetY(), 270, $pdf->GetY());
    $pdf->SetLineWidth(0.2);
    // Agregar la imagen al PDF
    //$imagePath = $imagen;
    $x = 10;  // Coordenada X de la imagen
    $y = 70; // Coordenada Y de la imagen
    $width = 50; // Ancho de la imagen en el PDF
    $height = 0; // Altura de la imagen en el PDF (0 para mantener la proporción original)

    // $pdf->Image($imagen, $x, $y, $width, $height);


    $date = date('d/m/Y');

    $pdf->SetXY(70, 70);
    $pdf->SetFont('Arial', '', 12,  'ISO-8859-1');
    $pdf->MultiCell(0, 10, $text);
    
   
    
    $pdf->Ln(10);
    $pdf->Image('image/Ccodigo_barras.png', 80, 200, 40);
    $pdf->SetY(-45);
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(0, 10, '____________________________', 0, 1, 'C');
    $pdf->Cell(0, 10, 'Por void zone', 0, 1, 'C');
    $pdf->Output('D', 'recibo.pdf');
    header("index.php");
    ?>