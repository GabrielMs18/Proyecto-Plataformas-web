<?php

if ($_POST["generar_factura"] == "true") {

    $nombre = $_POST["nombre"];
    $cedula = $_POST["cedula"];
    $telefono = $_POST["telefono"];
    $mecanico = $_POST["mecanico"];
    $vehiculo = $_POST["vehiculo"];
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $placa = $_POST["placa"];
    $fallas = $_POST["fallas"];
    $repuesto = $_POST["repuesto"];
    $precio = $_POST["precio"];

    require('fpdf.php');

    $pdf = new FPDF();
    $pdf->AddPage();

    $pdf->Image('logo.jpg', 10, 25, 80, 50, 'JPG');

    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(190, 10, "FACTURA", 0, 2, "C");
    $pdf->Ln(2);

    $pdf->SetY(25);
    $pdf->SetX(100);
    $pdf->Cell(60, 10, "Mecanico:", 0, 2, "J");
    $pdf->Ln(2);
    $pdf->SetY(25);
    $pdf->SetX(127);
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(60, 10, "$mecanico", 0, 2, "");
    $pdf->Ln(2);

    $pdf->SetFont('Arial', 'B', 12);
    $top_datos = 35;
    $pdf->SetXY(100, $top_datos);
    $pdf->Cell(0, 10, "Datos del Vehiculo:", 0, 2, "J");
    $pdf->SetFont('Arial', '', 12);
    $pdf->MultiCell(
        190,
        5,
        "Vehiculo: " . $vehiculo . "\n" .
            "Marca: " . $marca . "\n" .
            "Modelo: " . $modelo . "\n" .
            "Placa: " . $placa . "\n" .
            "Fallas: " . $fallas . "\n",
        0,
        "J",
        false
    );

    $pdf->SetFont('Arial', 'B', 12);
    $pdf->SetXY(155, $top_datos);
    $pdf->Cell(0, 10, "Datos del Cliente:", 0, 2, "J");
    $pdf->SetFont('Arial', '', 12);
    $pdf->MultiCell(
        190,
        5,
        "Nombre: " . $nombre . "\n" .
            "Cedula: " . $cedula . "\n" .
            "Telefono: " . $telefono . "\n",
        0,
        "J",
        false
    );
    $pdf->Ln(2);

    $pdf->SetY(100);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->SetFillColor(122, 170, 194);
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(130, 10, "Repuesto", 0, 0, "J", 1);
    $pdf->Cell(0, 10, "Precio", 0, 0, "J", 1);
    $pdf->Ln(2);

    $pdf->SetFont('Arial', 'B', 15);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(130, 30, "$repuesto", 0, 0, "J");
    $pdf->Cell(0, 30, "$precio", 0, 0, "J");
    $pdf->Ln(2);

    $pdf->SetY(200);
    $pdf->SetX(15);
    $pdf->SetLineWidth(1);
    $pdf->SetTextColor(255, 255, 255);
    $pdf->Cell(185, 10, "TOTAL:", 'T', 0, "D");
    $pdf->Ln(2);

    $pdf->SetY(200);
    $pdf->SetX(125);
    $pdf->SetFont('Arial', 'B', 20);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(19, 10, "IVA:", 0, 0, "J");
    $add_iva = $precio * 12 / 100;
    $pdf->Cell(0, 10, "$add_iva", 0, 0, "J");
    $pdf->Ln(2);

    $pdf->SetY(210);
    $pdf->SetX(105);
    $pdf->SetFont('Arial', 'B', 20);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(39, 10, "Sub Total:", 0, 0, "J");
    $sub = $add_iva + $precio;
    $pdf->Cell(0, 10, "$precio", 0, 0, "J");
    $pdf->Ln(2);

    $pdf->SetY(220);
    $pdf->SetX(120);
    $pdf->SetFont('Arial', 'B', 20);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->Cell(24, 10, "Total:", 0, 0, "J");
    $pdf->Cell(0, 10, "$sub", 0, 0, "J");
  
    $pdf->Output();
}
