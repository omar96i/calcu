<x-filament-panels::page>
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
                    <th>PENSION DE REFERENCIA</th>
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
                        @php
                            $item_fb = strtotime($item->entry_date) > strtotime($parameters_fb) ? $item->entry_date : (strtotime($item->departure_date) <= strtotime($parameters_fb) ? $item->departure_date : $parameters_fb);
                        @endphp
                        <td>{{ $item_fb }}</td>
                        @php
                            $indice = array_search('TELECOM', array_column($this->parameters_tele, 'tele'));
                            $fc = $indice !== false ? $this->parameters_tele[$indice]['fc'] : null;

                        @endphp
                        <td>{{ $item_fc }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</x-filament-panels::page>
