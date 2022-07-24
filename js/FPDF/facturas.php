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

    require('fpdf.php');

    $pdf = new FPDF();
    $pdf->AddPage();

    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(190, 10, "FACTURA", 0, 2, "C");
    $pdf->Ln(2);


    $pdf->SetFont('Arial', 'B', 12);
    $top_datos = 45;
    $pdf->SetXY(40, $top_datos);
    $pdf->Cell(190, 10, "Datos de la tienda:", 0, 2, "J");
    $pdf->SetFont('Arial', '', 9);
    $pdf->MultiCell(
        190,
        5,
        $mecanico . "\n" .
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
    $pdf->SetXY(125, $top_datos);
    $pdf->Cell(190, 10, "Datos del cliente:", 0, 2, "J");
    $pdf->SetFont('Arial', '', 9);
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

    $pdf->Output();
}
