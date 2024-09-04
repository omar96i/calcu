<x-filament-panels::page>
    <x-filament::tabs>
        <x-filament::tabs.item wire:click="setPage('bonus-a')" :active="$page === 'bonus-a'" icon="heroicon-m-clipboard">
            Bonus A
        </x-filament::tabs.item>

        <x-filament::tabs.item icon="heroicon-m-arrow-up-tray" wire:click="openModal()">
            Importar datos
        </x-filament::tabs.item>
    </x-filament::tabs>

    @if ($page == 'bonus-a')
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            {{-- <h6 colspan="9">Bonos A</th> --}}
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr class="whitespace-nowrap text-center">
                        <th class="bg-gray-200"></th>
                        <th class="bg-gray-200">ENTIDAD</th>
                        <th class="bg-gray-200">TIPO DOC</th>
                        <th class="bg-gray-200">CEDULA</th>
                        <th class="bg-gray-200">SEXO</th>
                        <th class="bg-gray-200">APELLIDOS Y NOMBRES</th>
                        <th class="bg-gray-200">F. NACIMIENTO</th>
                        <th class="bg-gray-200">SALARIO BASE</th>
                        <th class="bg-gray-200">F. INGRESO</th>
                        <th class="bg-gray-200">F. RETIRO</th>
                        <th class="bg-gray-200">DIAS LIQUIDADOS</th>
                        <th>SB</th>
                        <th>FB</th>
                        <th>FC</th>
                        <th>EDAD FC</th>
                        <th>FR (1)</th>
                        <th>FR (2)</th>
                        <th>FR (3)</th>
                        <th>EDAD REFERENCIA</th>
                        <th>Int.</th>
                        <th>t</th>
                        <th>Tiempo empresa a fc</th>
                        <th>t1</th>
                        <th>n</th>
                        <th>n + t</th>
                        <th>SMN(/)</th>
                        <th>f (1)</th>
                        <th>f (2)</th>
                        <th>f (3)</th>
                        <th>f</th>
                        <th>IPC FB</th>
                        <th>IPC Fc</th>
                        <th>SR</th>
                        <th>SALARIO DE REFERENCIA</th>
                        <th>PESION DE REFERENCIA</th>
                        <th>AUXILIO FUNERARIO</th>
                        <th>FAC1</th>
                        <th>FAC1 - Aj.</th>
                        <th>FAC2</th>
                        <th>FAC2 - Aj.</th>
                        <th>FAC3</th>
                        <th>FECHA REDENCION</th>
                        <th>PARTICIPACION EMPRESA</th>
                        <th>VALOR BONO BASICO A LA FECHA DE CORTE</th>
                        <th>CUOTA PARTE EMPRESA A LA FECHA DE CORTE</th>
                        <th>VALOR BONO A LA FECHA DE CÁLCULO</th>
                        <th>CUOTA PARTE EMPRESA A LA FECHA DE CÁLCULO</th>
                        <th>Año redención</th>
                        <th>Bonos vencidos</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bonus as $item)
                        <tr class="whitespace-nowrap text-center">
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->entity }}</td>
                            <td>{{ $item->id_type }}</td>
                            <td>{{ $item->id_number }}</td>
                            <td>{{ $item->gender }}</td>
                            <td>{{ $item->full_name }}</td>
                            <td>{{ $item->birthdate }}</td>
                            <td>{{ $item->base_salary }}</td>
                            <td>{{ $item->entry_date }}</td>
                            <td>{{ $item->departure_date }}</td>
                            <td>{{ $item->liquidated_days }}</td>
                            <td>{{ $item->base_salary }}</td>
                            @if (!is_null($item->user_id))
                                <td> {{ $item->bonus_a_l }} </td>
                                <td> {{ $item->bonus_a_m }} </td>
                                <td> {{ $item->bonus_a_n }} </td>
                                <td> {{ $item->bonus_a_o }} </td>
                                <td> {{ $item->bonus_a_p }} </td>
                                <td> {{ $item->bonus_a_q }} </td>
                                <td> {{ $item->bonus_a_r }} </td>
                                <td> {{ $item->bonus_a_s }} </td>
                                <td> {{ $item->bonus_a_t }} </td>
                                <td> {{ $item->bonus_a_u }} </td>
                                <td> {{ $item->bonus_a_v }} </td>
                                <td> {{ $item->bonus_a_w }} </td>
                                <td> {{ $item->bonus_a_x }} </td>
                                <td> {{ $item->bonus_a_y }} </td>
                                <td> {{ $item->bonus_a_z }} </td>
                                <td> {{ $item->bonus_a_aa }} </td>
                                <td> {{ $item->bonus_a_ab }} </td>
                                <td> {{ $item->bonus_a_ac }} </td>
                                <td> {{ $item->bonus_a_ad }} </td>
                                <td> {{ $item->bonus_a_ae }} </td>
                                <td> {{ $item->bonus_a_af }} </td>
                                <td> {{ $item->bonus_a_ag }} </td>
                                <td> {{ $item->bonus_a_ah }} </td>
                                <td> {{ $item->bonus_a_ai }} </td>
                                <td> {{ $item->bonus_a_aj }} </td>
                                <td> {{ $item->bonus_a_ak }} </td>
                                <td> {{ $item->bonus_a_al }} </td>
                                <td> {{ $item->bonus_a_am }} </td>
                                <td> {{ $item->bonus_a_an }} </td>
                                <td> {{ $item->bonus_a_ao }} </td>
                                <td> {{ $item->bonus_a_ap }} </td>
                                <td> {{ $item->bonus_a_aq }} </td>
                                <td> {{ $item->bonus_a_ar }} </td>
                                <td> {{ $item->bonus_a_as }} </td>
                                <td> {{ $item->bonus_a_at }} </td>
                                <td> {{ $item->bonus_a_au }} </td>
                                <td> {{ $item->bonus_a_av }} </td>
                            @else
                                @php
                                    $item_fb =
                                        strtotime($item->entry_date) > strtotime($parameters_fb)
                                            ? $item->entry_date
                                            : (strtotime($item->departure_date) <= strtotime($parameters_fb) &&
                                            $item->departure_date != 0
                                                ? $item->departure_date
                                                : $parameters_fb);
                                @endphp
                                <td>{{ $item_fb }}</td>

                                @php
                                    $indice = array_search($item->entity, array_column($this->parameters_tele, 'tele'));
                                    $item_fc = $indice !== false ? $this->parameters_tele[$indice]['fc'] : null;
                                @endphp
                                <td>{{ $item_fc }}</td>

                                @php
                                    $diff = strtotime($item_fc) - strtotime($item->birthdate);
                                    $item_edad_fc = floor($diff / (60 * 60 * 24)) / 365.25;
                                @endphp
                                <td>{{ number_format($item_edad_fc, 2) }}</td>

                                @php
                                    $item_fr1 = $item->gender == 'F' ? 60 : 62;
                                    $item_fr2 =
                                        $item->gender == 'M' && $item_edad_fc > 55
                                            ? $item_edad_fc + 3500 / 365.25
                                            : ($item->gender == 'F' && $item_edad_fc > 50
                                                ? $item_edad_fc + 3500 / 365.25
                                                : $item_fr1);
                                    $item_fr3 =
                                        +$item_edad_fc +
                                        (7000 -
                                            (floor(
                                                (strtotime($item_fc) - strtotime($item->entry_date)) / (60 * 60 * 24),
                                            ) -
                                                $item->liquidated_days)) /
                                            365.25;
                                @endphp
                                <td>{{ number_format($item_fr1, 1) }}</td>
                                <td>{{ number_format($item_fr2, 1) }}</td>
                                <td>{{ number_format($item_fr3, 2) }}</td>

                                @php
                                    $item_edad_referencia = max($item_fr1, $item_fr2, $item_fr3);
                                    $item_int = $item_edad_referencia - intVal($item_edad_referencia);
                                @endphp
                                <td>{{ number_format($item_edad_referencia, 1) }}</td>
                                <td>{{ number_format($item_int, 1) }}</td>

                                @php
                                    $item_t =
                                        +(
                                            floor(
                                                (strtotime($item_fc) - strtotime($item->entry_date)) / (60 * 60 * 24),
                                            ) -
                                            $item->liquidated_days +
                                            1
                                        ) / 365.25;
                                @endphp
                                <td>{{ number_format($item_t, 10) }}</td>

                                @php
                                    $item_tiempo_empresa =
                                        strtotime($item->departure_date) > strtotime($item->entry_date)
                                            ? (floor(
                                                    (strtotime($item_fc) - strtotime($item->entry_date)) /
                                                        (60 * 60 * 24),
                                                ) +
                                                    1 -
                                                    $item->liquidated_days) /
                                                365.25
                                            : (floor(
                                                    (strtotime($item->departure_date) - strtotime($item->entry_date)) /
                                                        (60 * 60 * 24),
                                                ) +
                                                    1 -
                                                    $item->liquidated_days) /
                                                365.25;
                                @endphp
                                <td>{{ number_format($item_tiempo_empresa, 10) }}</td>

                                @php
                                    $item_t1 = $item_t - 3652.5 / 365.25 > 0 ? $item_t - 3652.5 / 365.25 : 0;
                                @endphp
                                <td>{{ number_format($item_t1, 10) }}</td>

                                @php
                                    $item_n = +$item_edad_referencia - $item_edad_fc;
                                @endphp
                                <td>{{ number_format($item_n, 2) }}</td>

                                @php
                                    $item_nt = $item_t + $item_n;
                                @endphp
                                <td>{{ number_format($item_nt, 2) }}</td>

                                @php

                                    $get_smn = $this->getSmn($item_edad_referencia)->smn;
                                    $get_smn_1 = $this->getSmn($item_edad_referencia + 1)->smn;
                                    $get_smn_edad_fc = $this->getSmn($item_edad_fc)->smn;
                                    $get_smn_edad_fc_1 = $this->getSmn($item_edad_fc + 1)->smn;
                                    $item_smn =
                                        ($get_smn * (1 - $item_int) + $get_smn_1 * $item_int) /
                                        ($get_smn_edad_fc * (1 - ($item_edad_fc - intVal($item_edad_fc))) +
                                            $get_smn_edad_fc_1 * ($item_edad_fc - intVal($item_edad_fc)));
                                @endphp
                                <td>{{ number_format($item_smn, 5) }}</td>

                                @php
                                    $item_f1 = 0.45 + 0.03 * $item_t1 + 0.03 * $item_n;
                                    $item_f2 = 0.9;
                                    $item_f3 = 0.75;
                                @endphp
                                <td>{{ number_format($item_f1, 5) }}</td>
                                <td>{{ $item_f2 }}</td>
                                <td>{{ $item_f3 }}</td>

                                @php
                                    $item_f = min($item_f1, $item_f2, $item_f3);
                                @endphp
                                <td>{{ $item_f }}</td>

                                @php
                                    $get_dtfp = $this->getAccumulatedDTFP($item_fb);
                                    $get_dtfp_30 = $this->getAccumulatedDTFP(
                                        (new DateTime($item_fb))->modify('+30 days'),
                                    );
                                    $item_ipc_fb =
                                        (int) date('j', strtotime($item_fb)) >= 30
                                            ? $get_dtfp
                                            : ((30 - (int) date('j', strtotime($item_fb))) * $get_dtfp +
                                                    (int) date('j', strtotime($item_fb)) * $get_dtfp_30) /
                                                30;
                                @endphp
                                <td>{{ number_format($item_ipc_fb, 7) }}</td>

                                @php
                                    $item_ipc_fc = $this->getAccumulatedDTFP($item_fc);
                                @endphp
                                <td>{{ number_format($item_ipc_fc, 6) }}</td>

                                @php
                                    $item_sr = ($item_ipc_fc / $item_ipc_fb) * $item->base_salary * $item_smn;
                                @endphp
                                <td>{{ number_format($item_sr, 0) }}</td>

                                @php
                                    $salario_minimo = $this->getMinimumSalary($item_fc);
                                    $item_salario_referenca =
                                        $item_sr > 20 * $salario_minimo
                                            ? 20 * $salario_minimo
                                            : ($item_sr < $salario_minimo
                                                ? $salario_minimo
                                                : $item_sr);
                                @endphp
                                <td>{{ number_format($item_salario_referenca, 0) }}</td>

                                @php
                                    $item_pesion_referenca =
                                        $item_salario_referenca * $item_f < $salario_minimo
                                            ? $salario_minimo
                                            : ($item_salario_referenca * $item_f > $salario_minimo * 15
                                                ? $salario_minimo * 15
                                                : $item_salario_referenca * $item_f);
                                @endphp
                                <td>{{ number_format($item_pesion_referenca, 0) }}</td>

                                @php
                                    $item_auxilio_funerario =
                                        $item_pesion_referenca > 10 * $salario_minimo
                                            ? 10 * $salario_minimo
                                            : ($item_pesion_referenca < 5 * $salario_minimo
                                                ? 5 * $salario_minimo
                                                : $item_pesion_referenca);
                                @endphp
                                <td>{{ number_format($item_auxilio_funerario, 0) }}</td>

                                @php
                                    $getFac = $this->getFac($item_edad_referencia);
                                    $item_fac1 = $item->gender == 'M' ? $getFac->man_fac_1 : $getFac->woman_fac_1;
                                @endphp
                                <td>{{ number_format($item_fac1, 6) }}</td>

                                @php
                                    $getFac_1 = $this->getFac($item_edad_referencia + 1);
                                    $item_fac1_aj =
                                        $item->gender == 'M'
                                            ? $item_fac1 * (1 - $item_int) + $item_int * $getFac->man_fac_1
                                            : $item_fac1 * (1 - $item_int) + $item_int * $getFac->woman_fac_1;
                                @endphp
                                <td>{{ number_format($item_fac1_aj, 6) }}</td>

                                @php
                                    $item_fac2 = $item->gender == 'M' ? $getFac->man_fac_2 : $getFac->woman_fac_2;
                                @endphp
                                <td>{{ number_format($item_fac2, 6) }}</td>

                                @php
                                    $item_fac2_aj =
                                        $item->gender == 'M'
                                            ? $item_fac2 * (1 - $item_int) + $item_int * $getFac_1->man_fac_2
                                            : $item_fac2 * (1 - $item_int) + $item_int * $getFac_1->woman_fac_2;
                                @endphp
                                <td>{{ number_format($item_fac2_aj, 6) }}</td>

                                @php
                                    $item_fac3 = (1.03 ** $item_t - 1) / (1.03 ** $item_nt - 1);
                                @endphp
                                <td>{{ number_format($item_fac3, 11) }}</td>

                                @php
                                    $item_fecha_redencion = date(
                                        'Y-m-d',
                                        strtotime($item->birthdate . ' + ' . $item_edad_referencia . ' years'),
                                    );
                                @endphp
                                <td>{{ $item_fecha_redencion }}</td>

                                @php
                                    $j2 = new DateTime($item->departure_date);
                                    $n2 = new DateTime($item_fc);
                                    $i2 = new DateTime($item->entry_date);
                                    $k2 = $item->liquidated_days;
                                    $u2 = $item_t;

                                    if ($j2->format('Y-m-d') != '0000-00-00') {
                                        $min_j2_n2 = min($j2, $n2);
                                        $diferencia_dias = $min_j2_n2->diff($i2)->days - $k2 + 1;
                                        $item_participacion_empresa = $diferencia_dias / ($u2 * 365.25);
                                    } else {
                                        $diferencia_dias = $n2->diff($i2)->days - $k2 + 1;
                                        $item_participacion_empresa = $diferencia_dias / ($u2 * 365.25);
                                    }
                                @endphp
                                <td>{{ number_format($item_participacion_empresa * 100, 2) . '%' }}</td>

                                @php
                                    $AL3 = $item_fac1_aj;
                                    $AI3 = $item_pesion_referenca;
                                    $AN3 = $item_fac2_aj;
                                    $AJ3 = $item_auxilio_funerario;
                                    $AO3 = $item_fac3;

                                    if (($AL3 * $AI3 + $AN3 * $AJ3) * $AO3 < 0) {
                                        $item_bono_basico = 0;
                                    } else {
                                        $item_bono_basico = ($AL3 * $AI3 + $AN3 * $AJ3) * $AO3;
                                    }

                                @endphp
                                <td>{{ number_format($item_bono_basico) }}</td>

                                @php
                                    $item_cuota_empresa = +$item_bono_basico * $item_participacion_empresa;
                                @endphp
                                <td>{{ number_format($item_cuota_empresa) }}</td>

                                @php
                                    $AP2 = new DateTime($item_fecha_redencion);
                                    $FCal = new DateTime('2023-12-31');

                                    // Obtener valores de la tabla DTFP
                                    $valor1_FCal = $this->getDTFP($FCal->format('Y-m-d'))->dtfp_4;
                                    $valor1_AP2 = $this->getDTFP($AP2->format('Y-m-d'))->dtfp_4;
                                    $valor2_N2 = $this->getDTFP($item_fc)->dtfp_4;
                                    $valor3_FCal = $this->getDTFP($FCal->format('Y-m-d'))->accumulated;
                                    $valor4_AP2 = $this->getDTFP($AP2->format('Y-m-d'))->accumulated;

                                    // Verificar la condición AP2 > FCal
                                    if ($AP2 > $FCal) {
                                        $item_bono_fecha_calculo = $item_bono_basico * ($valor1_FCal / $valor2_N2);
                                    } else {
                                        $item_bono_fecha_calculo =
                                            $item_bono_basico *
                                            ($valor1_AP2 / $valor2_N2) *
                                            ($valor3_FCal / $valor4_AP2);
                                    }
                                    // =IF(AP2>FCal;+AR2*(VLOOKUP(FCal;DTFP!$A$2:$E$835;5)/VLOOKUP($N2;DTFP!$A$2:$E$835;5)); AR2*(VLOOKUP(AP2;DTFP!$A$2:$E$835;5)/VLOOKUP($N2;DTFP!$A$2:$E$835;5))*(VLOOKUP(FCal;DTFP!$A$2:$E$835;3)/VLOOKUP($AP2;DTFP!$A$2:$E$835;3)) )
                                @endphp
                                <td>{{ number_format($item_bono_fecha_calculo, 0) }}</td>

                                @php
                                    $item_cuota_parte_empresa = $item_participacion_empresa * $item_bono_fecha_calculo;
                                @endphp
                                <td>{{ number_format($item_cuota_parte_empresa, 0) }}</td>

                                <td>{{ (new DateTime($item_fecha_redencion))->format('Y') }}</td>

                                @php
                                    $AV2 = (new DateTime($item_fecha_redencion))->format('Y');
                                    $FCal = new DateTime('2023-12-31');
                                    $AU2 = $item_cuota_parte_empresa;

                                    $year_FCal = $FCal->format('Y');

                                    if ($AV2 <= $year_FCal) {
                                        $item_bonos_vencidos = $item_cuota_parte_empresa;
                                    } else {
                                        $item_bonos_vencidos = 0;
                                    }

                                @endphp
                                <td>{{ number_format($item_bonos_vencidos, 0) }}</td>

                                @php
                                    $this->updateState(
                                        $item->id,
                                        $item_fb,
                                        $item_fc,
                                        number_format($item_edad_fc, 2),
                                        number_format($item_fr1, 1),
                                        number_format($item_fr2, 1),
                                        number_format($item_fr3, 2),
                                        number_format($item_edad_referencia, 1),
                                        number_format($item_int, 1),
                                        number_format($item_t, 10),
                                        number_format($item_tiempo_empresa, 10),
                                        number_format($item_t1, 10),
                                        number_format($item_n, 2),
                                        number_format($item_nt, 2),
                                        number_format($item_smn, 5),
                                        number_format($item_f1, 5),
                                        $item_f2,
                                        $item_f3,
                                        $item_f,
                                        number_format($item_ipc_fb, 7),
                                        number_format($item_ipc_fc, 6),
                                        number_format($item_sr, 0),
                                        number_format($item_salario_referenca, 0),
                                        number_format($item_pesion_referenca, 0),
                                        number_format($item_auxilio_funerario, 0),
                                        number_format($item_fac1, 6),
                                        number_format($item_fac1_aj, 6),
                                        number_format($item_fac2, 6),
                                        number_format($item_fac2_aj, 6),
                                        number_format($item_fac3, 11),
                                        $item_fecha_redencion,
                                        number_format($item_participacion_empresa * 100, 2),
                                        number_format($item_bono_basico),
                                        number_format($item_cuota_empresa),
                                        number_format($item_bono_fecha_calculo, 0),
                                        number_format($item_cuota_parte_empresa, 0),
                                        (new DateTime($item_fecha_redencion))->format('Y'),
                                        number_format($item_bonos_vencidos, 0),
                                    );
                                @endphp
                            @endif



                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    @endif

    <!-- Upload file segment -->
    <x-filament::modal id="upload-file">
        <x-slot name="heading">
            Importar datos
        </x-slot>
        <x-filament::fieldset>
            <x-slot name="label">
                Archivo
            </x-slot>
            <x-filament::input.wrapper>
                <x-filament::input type="file" wire:model="file" />
            </x-filament::input.wrapper>

        </x-filament::fieldset>
        @if ($loading)
            <x-filament::button disabled>
                <x-filament::loading-indicator class="h-5 w-5" />
            </x-filament::button>
        @else
            <x-filament::button wire:click="importData()">
                Importar
            </x-filament::button>
        @endif
    </x-filament::modal>

</x-filament-panels::page>
