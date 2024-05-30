<div>
    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th class="px-4 py-2 border">Cedula</th>
                    <th class="px-4 py-2 border">NOMBRE</th>
                    <th class="px-4 py-2 border">Genero</th>
                    <th class="px-4 py-2 border">Fecha de Nacimiento</th>
                    <th class="px-4 py-2 border">FECHA DE INGRESO</th>
                    <th class="px-4 py-2 border">SUSPENSIONES</th>
                    <th class="px-4 py-2 border">IMPORTE SALARIO</th>
                    <th class="px-4 py-2 border">ANTICIPOS DE CESANTIAS</th>
                    <th class="px-4 py-2 border">DÍAS LABORADOS</th>
                    <th class="px-4 py-2 border">BASE CALCULO</th>
                    <th class="px-4 py-2 border">DÍAS BASE CALCULO</th>
                    <th class="px-4 py-2 border">REGIMEN</th>
                    <th class="px-4 py-2 border">Edad FC</th>
                    <th class="px-4 py-2 border">LIQUIDACIÓN CESANTÍAS</th>
                    <th class="px-4 py-2 border">CESANTIAS ACUMULADAS A 2023</th>
                    <th class="px-4 py-2 border">Fecha Retiro</th>
                    <th class="px-4 py-2 border">días</th>
                    <th class="px-4 py-2 border">año retiro</th>
                    <th class="px-4 py-2 border">Edad FR</th>
                    <th class="px-4 py-2 border">Años por trabajar</th>
                    <th class="px-4 py-2 border">Valor Liquidación</th>
                    <th class="px-4 py-2 border">Valor a cargo</th>
                    <th class="px-4 py-2 border">Liquidación 2023</th>
                    <th class="px-4 py-2 border">Liquidación 2024</th>
                    <th class="px-4 py-2 border">Liquidación 2025</th>
                    <th class="px-4 py-2 border">Liquidación 2026</th>
                    <th class="px-4 py-2 border">Liquidación 2027</th>
                    <th class="px-4 py-2 border">Liquidación 2028</th>
                    <th class="px-4 py-2 border">Liquidación 2029</th>
                    <th class="px-4 py-2 border">Liquidación 2030</th>
                    <th class="px-4 py-2 border">Liquidación 2031</th>
                    <th class="px-4 py-2 border">Liquidación 2032</th>
                    <th class="px-4 py-2 border">Liquidación 2033</th>
                    <th class="px-4 py-2 border">Liquidación 2034</th>
                    <th class="px-4 py-2 border">Liquidación 2035</th>
                    <th class="px-4 py-2 border">Liquidación 2036</th>
                    <th class="px-4 py-2 border">Liquidación 2037</th>
                    <th class="px-4 py-2 border">Liquidación 2038</th>
                    <th class="px-4 py-2 border">Liquidación 2039</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $index => $aux)
                    <tr>
                        <td class="px-4 py-2 border">{{ $aux->cc }}</td>
                        <td class="px-4 py-2 border">{{ $aux->full_name }}</td>
                        <td class="px-4 py-2 border">{{ $aux->sex }}</td>
                        <td class="px-4 py-2 border">{{ $aux->date_birth }}</td>
                        <td class="px-4 py-2 border">{{ $aux->date_entry }}</td>
                        <td class="px-4 py-2 border">{{ $aux->suspension }}</td>
                        <td class="px-4 py-2 border">{{ $aux->import_salary }}</td>
                        <td class="px-4 py-2 border">{{ $aux->advance }}</td>
                        <td class="px-4 py-2 border">{{ $this->getI($aux->date_entry) }}</td>
                        <td class="px-4 py-2 border">{{ $aux->import_salary }}</td>
                        <td class="px-4 py-2 border">{{ $this->getK($aux->date_entry, $aux->suspension) }}</td>
                        <td class="px-4 py-2 border">{{ $L }}</td>
                        <td class="px-4 py-2 border">{{ $this->getM($aux->date_birth) }}</td>
                        <td class="px-4 py-2 border">{{ $this->getN($aux->import_salary) }}</td>
                        <td class="px-4 py-2 border">{{ number_format($table[$index]) }}{{ $this->getO($table[$index]) }}</td>
                        <td class="px-4 py-2 border">{{ $this->getP($aux->sex, $aux->date_birth) }}</td>
                        <td class="px-4 py-2 border">{{ $this->getQ() }}</td>
                        <td class="px-4 py-2 border">{{ $this->getR() }}</td>
                        <td class="px-4 py-2 border">{{ $this->getS($aux->date_birth) }}</td>
                        <td class="px-4 py-2 border">{{ $this->getT() }}</td>
                        <td class="px-4 py-2 border">{{ $this->getU($aux->import_salary) }}</td>
                        <td class="px-4 py-2 border">{{ $this->getV($aux->sex, $aux->advance) }}</td>
                        <td class="px-4 py-2 border">{{ $this->getW() }}</td>
                        <td class="px-4 py-2 border">{{ $this->getX()}}</td>
                        <td class="px-4 py-2 border">{{ $this->getY()}}</td>
                        <td class="px-4 py-2 border">{{ $this->getZ()}}</td>
                        <td class="px-4 py-2 border">{{ $this->getAA()}}</td>
                        <td class="px-4 py-2 border">{{ $this->getAB()}}</td>
                        <td class="px-4 py-2 border">{{ $this->getAC()}}</td>
                        <td class="px-4 py-2 border">{{ $this->getAD()}}</td>
                        <td class="px-4 py-2 border">{{ $this->getAE()}}</td>
                        <td class="px-4 py-2 border">{{ $this->getAF()}}</td>
                        <td class="px-4 py-2 border">{{ $this->getAG()}}</td>
                        <td class="px-4 py-2 border">{{ $this->getAH()}}</td>
                        <td class="px-4 py-2 border">{{ $this->getAI()}}</td>
                        <td class="px-4 py-2 border">{{ $this->getAJ()}}</td>
                        <td class="px-4 py-2 border">{{ $this->getAK()}}</td>
                        <td class="px-4 py-2 border">{{ $this->getAL()}}</td>
                        <td class="px-4 py-2 border">{{ $this->getAM()}}</td>



                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-4 flex justify-center">
        <x-filament::pagination
            :paginator="$data"
            :page-options="['all']"
            :current-page-option-property="'perPage'"
            extreme-links
            class="sm:flex sm:items-between"
        />
    </div>
</div>
