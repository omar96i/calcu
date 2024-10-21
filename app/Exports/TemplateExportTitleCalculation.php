<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Style\Color;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;

class TemplateExportTitleCalculation implements FromCollection, WithHeadings, WithStyles
{
    /**
     * Return a collection of data.
     *
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        // Devuelve una colección vacía, ya que es un template
        return collect([]);
    }

    /**
     * Define las cabeceras de la tabla.
     *
     * @return array
     */
    public function headings(): array
    {
        return [
            [
                'Estado',
                'TIPO DOCUM.',
                'No. DOCUMENTO',
                'APELLIDOS Y NOMBRES',
                'FECHA DE NACIMIENTO (DD/MM/AAAA)',
                'SEXO',
                'SALARIO BASE',
                'FECHA DE CORTE (DD/MM/AAAA)',
                'FECHA VINCULACION',
                'TIEMPO COTIZADO (Semanas al 30/06/95)',
                'DESDE (DD/MM/AAAA)',
                'HASTA (DD/MM/AAAA)',
                'DNR'
            ],
        ];
    }

    /**
     * Aplica estilos a la hoja de cálculo.
     *
     * @param Worksheet $sheet
     */
    public function styles(Worksheet $sheet)
    {
        // Estilo para la cabecera
        $sheet->getStyle('A1:N1')->applyFromArray([
            'font' => [
                'bold' => true,
                'color' => ['argb' => Color::COLOR_WHITE],
            ],
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'startColor' => ['argb' => 'FF4B8DFF'], // Color de fondo
            ],
            'alignment' => [
                'horizontal' => Alignment::HORIZONTAL_CENTER,
            ],
            'borders' => [
                'bottom' => [
                    'borderStyle' => Border::BORDER_THICK,
                    'color' => ['argb' => Color::COLOR_BLACK],
                ],
            ],
        ]);

        // Ajustar el ancho de las columnas
        $sheet->getColumnDimension('A')->setWidth(15); // Estado
        $sheet->getColumnDimension('B')->setWidth(15); // TIPO DOCUM.
        $sheet->getColumnDimension('C')->setWidth(20); // No. DOCUMENTO
        $sheet->getColumnDimension('D')->setWidth(25); // APELLIDOS Y NOMBRES
        $sheet->getColumnDimension('E')->setWidth(30); // FECHA DE NACIMIENTO
        $sheet->getColumnDimension('F')->setWidth(10); // SEXO
        $sheet->getColumnDimension('G')->setWidth(15); // SALARIO BASE
        $sheet->getColumnDimension('H')->setWidth(30); // FECHA DE CORTE
        $sheet->getColumnDimension('I')->setWidth(20); // FECHA VINCULACION
        $sheet->getColumnDimension('J')->setWidth(35); // TIEMPO COTIZADO
        $sheet->getColumnDimension('K')->setWidth(20); // DESDE
        $sheet->getColumnDimension('L')->setWidth(20); // HASTA
        $sheet->getColumnDimension('M')->setWidth(10); // DNR
    }
}
