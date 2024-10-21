<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Style\Color;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;

class TemplateExportCesantias implements FromCollection, WithHeadings, WithStyles
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
            ['Cedula', 'NOMBRE', 'Genero', 'Fecha de Nacimiento', 'FECHA DE INGRESO', 'SUSPENSIONES', 'IMPORTE SALARIO', 'ANTICIPOS DE CESANTIAS'],
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
        $sheet->getStyle('A1:H1')->applyFromArray([
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
        $sheet->getColumnDimension('A')->setWidth(15); // Cedula
        $sheet->getColumnDimension('B')->setWidth(25); // NOMBRE
        $sheet->getColumnDimension('C')->setWidth(15); // Genero
        $sheet->getColumnDimension('D')->setWidth(20); // Fecha de Nacimiento
        $sheet->getColumnDimension('E')->setWidth(20); // FECHA DE INGRESO
        $sheet->getColumnDimension('F')->setWidth(15); // SUSPENSIONES
        $sheet->getColumnDimension('G')->setWidth(20); // IMPORTE SALARIO
        $sheet->getColumnDimension('H')->setWidth(25); // ANTICIPOS DE CESANTIAS
    }
}
