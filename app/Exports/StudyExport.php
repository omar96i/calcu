<?php

namespace App\Exports;

use App\Models\Study;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class StudyExport implements FromCollection, WithHeadings, WithMapping
{
    protected $year;
    protected $report_type;

    public function __construct($year, $report_type)
    {
        $this->year = $year;
        $this->report_type = $report_type;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Study::with('actuarial_group')
            ->where('year', $this->year)
            ->where('report_type', $this->report_type)
            ->get();
    }

    /**
     * @param Study $study
     * @return array
     */
    public function map($study): array
    {
        return [
            $study->id,
            optional($study->actuarial_group)->name, // Nombre del grupo actuarial
            $study->cc,
            $study->name,
            $study->sex,
            $study->pension_class,
            $study->pension_situation,
            $study->civil_status,
            $study->birth_date,
            $study->causative_state,
            $study->date_of_birth_spouse,
            $study->spouse_gender,
            $study->company_entry_date,
            $study->company_withdrawal_date,
            $study->base_income_contribution,
            $study->allowance_value,
            $study->additional_allowance_value,
            $study->health_contribution,
            $study->extralegal_premium_amount,
            $study->number_months_year,
            $study->counter_rpm,
            $study->months_to_quote,
            $study->funeral_aid,
            $study->additional_weeks,
            $study->allowance_iss,
            $study->allowance_14,
            $study->school_help,
            $study->studies_ad,
            $study->studies_ae,
            $study->studies_af,
            $study->studies_ag,
            $study->studies_ah,
            $study->studies_ai,
            $study->studies_aj,
            $study->studies_ak,
            $study->studies_al,
            $study->studies_am,
            $study->studies_an,
            $study->studies_ao,
            $study->studies_ap,
            $study->studies_aq,
            $study->studies_ar,
            $study->studies_as,
            $study->studies_at,
            $study->studies_au,
            $study->studies_av,
            $study->studies_aw,
            $study->studies_ax,
            $study->studies_ay,
            $study->studies_az,
            $study->studies_ba,
            $study->studies_bb,
            $study->studies_bc,
            $study->studies_bd,
            $study->studies_be,
            $study->studies_bf,
            $study->studies_bg,
            $study->studies_bh,
            $study->studies_bi,
            $study->studies_bj,
            $study->studies_bk,
            $study->studies_bl,
            $study->studies_bm,
            $study->studies_bn,
            $study->studies_bo,
            $study->studies_bp,
            $study->studies_bq,
            $study->studies_br,
            $study->studies_bs,
            $study->studies_bt,
            $study->studies_bu,
            $study->studies_bv,
            $study->studies_bw,
            $study->studies_bx,
            $study->studies_by,
            $study->studies_bz,
            $study->studies_baz,
            $study->studies_cg,
        ];
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'ID',
            'SITUACION PENSIONADO',
            'C de C',
            'NOMBRE',
            'Sexo',
            'Clase Pensión',
            'Situación Pensional',
            'Estado Civil',
            'Fecha de Nacimiento',
            'Estado causante',
            'Fech. Nacim. Cónyuge',
            'Genero cónyuge',
            'Fecha de Ingreso empresa',
            'Fecha de Retiro empresa',
            'Ingreso base cotización',
            'Valor Mesada',
            'Valor Mesada adicional pensión 85',
            'Aporte Salud',
            'Monto de la prima extralegal',
            'No. De mesadas al año',
            'No.mesadas RPM',
            'Meses a cotizar desde dic ' . $this->year,
            'Auxilio Funerario',
            'Semanas adic. Min',
            'Mesada ISS',
            'Mesada 14',
            'Auxilio Escolaridad',
            'Fecha de requisitos Pensión RPM',
            'Edad Hoy x',            // studies_ae
            'Edad pensión empresa x', // studies_af
            'Edad pensión RPM x',     // studies_ag
            'Edad Hoy y',             // studies_ah
            'Dx+n/Dx RPM',            // studies_ai
            'Dx+n y+n/Dxy RPM',       // studies_aj
            'Renta + Prima 13 Mesadas', // studies_ak
            'Mesada 14',              // studies_al
            'Auxilio Funerario',      // studies_am
            'factor x/y',             // studies_an
            'Renta + Prima 13 Mesadas', // studies_ao
            'factor x/y mesada 14',   // studies_ap
            'Mesada 14',              // studies_aq
            'Renta + Primas',         // studies_ar
            'Rentas RPM Mesada 14',   // studies_as
            'Auxilio Funerario',      // studies_at
            'Inició pensión empresa', // studies_au
            'Final pensión empresa',  // studies_av
            'n=15-x',                 // studies_aw
            'S12:jm+S2:js',           // studies_ax
            'an:i',                   // studies_ay
            '25-xEx',                 // studies_az
            'Dx+n/Dx Empresa',        // studies_ba
            'Reserva Renta + Primas', // studies_bb
            'Mesada 14 pago junio',   // studies_bc
            'Reserva Monto de la prima extralegal',  // studies_bd
            'Reserva incremento Salud',              // studies_be
            'Auxilio Funerario',                     // studies_bf
            'Reserva Auxlio Escolaridad',            // studies_bg
            'factor x/y',                            // studies_bh
            'Renta + Primas',                        // studies_bi
            'factor x/y mesada 14',                  // studies_bj
            'mesada 14 pago Junio',                  // studies_bk
            'Sobrevivencia Monto de la prima extralegal', // studies_bl
            'sobrevivencia incremento salud',             // studies_bm
            'Reserva Auxlio Escolaridad',                 // studies_bn
            'Reserva Empresa a 31/dic ' . $this->year,    // studies_bo
            'Renta + Primas',                             // studies_bp
            'Mesada 14',                                  // studies_bq
            'Reserva de la prima extralegal',             // studies_br
            'Auxilio Funerario',                          // studies_bs
            'Reserva Auxlio Escolaridad',                 // studies_bt
            'Reserva Empresa a 31/dic ' . $this->year,    // studies_bu
            'Causante',                                   // studies_bv
            'Sobreviviente',                              // studies_bw
            'Auxilio Funerario',                          // studies_bx
            'Reserva Empresa a 31/dic ' . $this->year,    // studies_by
            'Meses por cotizar',                          // studies_bz
            'Valor de las cotizaciones',                  // studies_baz
            'Reserva + cotizaciones a dic. De ' . $this->year, // studies_cg
        ];
    }
}
