<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class TemplateExport implements FromArray, WithHeadings, WithStyles, ShouldAutoSize
{
    /**
     * Devuelve el array vacío para que solo se exporten los encabezados por ahora.
     */
    public function array(): array
    {
        return [];
    }

    /**
     * Define los encabezados.
     */
    public function headings(): array
    {
        return [
            'C de C',
            'NOMBRE',
            'SITUACION PENSIONADO',
            'Sexo',
            'Clase Pensión',
            'Situación Pensional',
            'Estado Civil',
            'Fecha de Nacimiento',
            'Estado causante',
            'Fech. Nacim. Cónyuge',
            'Genero cónyuge',
            'Estado cónyuge',
            'Fecha de Ingreso empresa',
            'Fecha de Retiro empresa',
            'Ingreso base cotización',
            'Valor Mesada',
            'Valor Mesada adicional pensión',
            'Aporte Salud',
            'Monto de la prima extralegal',
            'No. De mesadas al año',
            'No. mesadas RPM',
            'Meses a cotizar desde dic',
            'Auxilio Funerario',
            'Semanas adic. Min',
            'Mesada ISS',
            'Mesada 14',
            'Auxilio Escolaridad'
        ];
    }

    /**
     * Aplica estilos a las celdas. En este caso, solo estilizamos la primera fila (encabezado).
     */
    public function styles(Worksheet $sheet)
    {
        // Estilo para la primera fila (los encabezados)
        $sheet->getStyle('A1:AA1')->applyFromArray([
            'font' => [
                'bold' => true,
                'color' => ['argb' => 'FFFFFFFF'], // Texto blanco
            ],
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'startColor' => ['argb' => 'FF0070C0'], // Color de fondo azul
            ],
        ]);

        // Alinea el texto vertical y horizontalmente al centro
        $sheet->getStyle('A1:Z1')->getAlignment()->setVertical('center')->setHorizontal('center');

        // Ajusta el tamaño de las columnas a su contenido
        foreach (range('A', 'Z') as $columnID) {
            $sheet->getColumnDimension($columnID)->setAutoSize(true);
        }
    }
}
