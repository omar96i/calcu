<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Style\Color;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;

class TemplateExportFiveYearCalculation implements FromCollection, WithHeadings, WithStyles
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
            ['Identificación', 'Apellidos y Nombres', 'Fecha de Nacimiento', 'Sexo', 'SALARIO BASICO 2023', 'Fecha Nombramiento', 'Licencias', '5 AÑOS', '10 AÑOS', '15 AÑOS', 'COMENTARIO'],
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
        $sheet->getStyle('A1:K1')->applyFromArray([
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
        $sheet->getColumnDimension('A')->setWidth(15); // Identificación
        $sheet->getColumnDimension('B')->setWidth(25); // Apellidos y Nombres
        $sheet->getColumnDimension('C')->setWidth(20); // Fecha de Nacimiento
        $sheet->getColumnDimension('D')->setWidth(10); // Sexo
        $sheet->getColumnDimension('E')->setWidth(20); // SALARIO BASICO 2023
        $sheet->getColumnDimension('F')->setWidth(20); // Fecha Nombramiento
        $sheet->getColumnDimension('G')->setWidth(15); // Licencias
        $sheet->getColumnDimension('H')->setWidth(15); // 5 AÑOS
        $sheet->getColumnDimension('I')->setWidth(15); // 10 AÑOS
        $sheet->getColumnDimension('J')->setWidth(15); // 15 AÑOS
        $sheet->getColumnDimension('K')->setWidth(30); // COMENTARIO
    }
}
