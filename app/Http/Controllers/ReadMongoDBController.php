<?php

namespace App\Http\Controllers;

use App\Models\mongodb\Pagos;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use MongoDB\Client;
use PhpOffice\PhpSpreadsheet\Style\Alignment;

class ReadMongoDBController extends Controller
{
    public function deudas()
    {
        $client = new Client('mongodb://localhost:27017');
        $db = $client->selectDatabase('bd_app');
        $collection = $db->selectCollection('deudas');
        $documents = $collection->find();
        $resultados = [];
        foreach ($documents as $document) {
            $resultados[] = $document;
        }

        return view('read.deudas_read.principal', compact('resultados'));
    }

    public function pagos()
    {
        $pagos = Pagos::paginate(5);
        return view('read.pagos_read.principal_pagos', compact('pagos'));
    }

    public function exportDeudaToExcel()
    {
        $templatePath = public_path('assets/documents/excel/deudasMongodb.xlsx');
        $spreadsheet = IOFactory::load($templatePath);
        $activeWorksheet = $spreadsheet->getActiveSheet();

        $centerStyle = [
            'alignment' => [
                'horizontal' => Alignment::HORIZONTAL_CENTER,
            ],
        ];

        $activeWorksheet->getStyle('A2:K2')->applyFromArray($centerStyle);

        $client = new Client('mongodb://localhost:27017');
        $db = $client->selectDatabase('bd_app');
        $collection = $db->selectCollection('deudas');
        $documents = $collection->find();

        $row = 3;
        foreach ($documents as $document) {
            $activeWorksheet->setCellValue('A' . $row, $document->id_deuda);
            $activeWorksheet->setCellValue('B' . $row, $document->deu_tipo_deuda);
            $activeWorksheet->setCellValue('C' . $row, $document->deu_tipo_deudor);
            $activeWorksheet->setCellValue('D' . $row, $document->deu_monto_fijo);
            $activeWorksheet->setCellValue('E' . $row, $document->deu_fecha_pagar);
            $activeWorksheet->setCellValue('F' . $row, $document->deu_nombres);
            $activeWorksheet->setCellValue('G' . $row, $document->deu_apellidos);

            if ($document->deu_estado == 0) {
                $activeWorksheet->setCellValue('H' . $row, 'Cancelado');
            } elseif ($document->deu_estado == 1) {
                $activeWorksheet->setCellValue('H' . $row, 'Pendiente');
            } else {
                $activeWorksheet->setCellValue('H' . $row, $document->deu_estado);
            }

            $activeWorksheet->setCellValue('I' . $row, $document->deu_correo);
            $activeWorksheet->setCellValue('J' . $row, $document->deu_numero);
            $activeWorksheet->setCellValue('K' . $row, $document->deu_descripcion);

            $activeWorksheet->getStyle('A' . $row . ':K' . $row)->applyFromArray($centerStyle);

            $row++;
        }

        $fileName = 'deuda_data.xlsx';
        $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save($fileName);

        return response()->download($fileName)->deleteFileAfterSend(true);
    }

}
