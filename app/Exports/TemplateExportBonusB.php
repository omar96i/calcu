<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class TemplateExportBonusB implements FromCollection, WithHeadings, WithStyles, WithColumnWidths
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // Puedes retornar una colección vacía ya que es un template
        return collect([]);
    }

    /**
     * Definir los encabezados.
     *
     * @return array
     */
    public function headings(): array
    {
        return [
            'ENTIDAD',
            'TIPO DOC',
            'CEDULA',
            'SEXO',
            'APELLIDOS Y NOMBRES',
            'F. NACIMIENTO',
            'SALARIO BASE',
            'F. INGRESO',
            'F. RETIRO',
            'DIAS LICENCIA',
            'INTERINIDADES',
        ];
    }

    /**
     * Definir estilos para las celdas.
     *
     * @param Worksheet $sheet
     * @return array
     */
    public function styles(Worksheet $sheet)
    {
        return [
            // Aplicar negrita a los encabezados
            1    => ['font' => ['bold' => true]],

            // Aplicar color de fondo gris a los encabezados
            'A1:K1' => ['fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'startColor' => ['argb' => 'FFEEEEEE'],
            ]],
        ];
    }

    /**
     * Ajustar el tamaño de las columnas.
     *
     * @return array
     */
    public function columnWidths(): array
    {
        return [
            'A' => 20,  // ENTIDAD
            'B' => 10,  // TIPO DOC
            'C' => 15,  // CEDULA
            'D' => 10,  // SEXO
            'E' => 30,  // APELLIDOS Y NOMBRES
            'F' => 15,  // F. NACIMIENTO
            'G' => 15,  // SALARIO BASE
            'H' => 15,  // F. INGRESO
            'I' => 15,  // F. RETIRO
            'J' => 18,  // DIAS LICENCIA
            'K' => 18,  // INTERINIDADES
        ];
    }
}
